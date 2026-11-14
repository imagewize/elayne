<?php
/**
 * Colour contract check for Elayne patterns and style variations.
 *
 * Patterns must work under every style variation, so they may only use the palette
 * slugs every variation defines (the contract), no gradient slugs (no variation
 * shares one) and no hard-coded colours. Variation-specific looks belong in the
 * variation's own CSS, scoped to `.style-variation-<name>`.
 *
 * Fails (exit 1) when:
 * - theme.json or a style variation lacks a contract slug;
 * - a pattern uses a colour slug outside the contract or any gradient slug;
 * - a pattern hard-codes a colour (hex, rgb(), hsl()) in block attributes or inline styles.
 *   Exception: iconColorValue / iconBackgroundColorValue, which core stores next to a
 *   contract slug (iconColor / iconBackgroundColor), and product colour swatches
 *   (className elayne-colour-swatch*), which show product colours, not theme colours.
 *
 * Also prints a contrast report per variation (informational, never fails):
 * the role pairs patterns rely on, with WCAG contrast ratios.
 *
 *     php bin/check-colors.php [theme-dir] [--report]
 *
 * theme-dir defaults to this theme; pass a child theme's directory to check that one.
 * A development script for the command line, never loaded by WordPress.
 *
 * @package Elayne
 */

// phpcs:disable WordPress.Security.EscapeOutput, WordPress.WP.GlobalVariablesOverride, WordPress.WP.AlternativeFunctions, Universal.Operators.DisallowShortTernary -- CLI script outside WordPress.

const CONTRACT = array( 'primary', 'primary-accent', 'primary-alt', 'primary-alt-accent', 'on-primary', 'accent', 'accent-light', 'main', 'main-accent', 'base', 'secondary', 'tertiary', 'border-light', 'border-dark' );

// Core helper classes that look like palette classes but are not.
const CORE_CLASSES = array( 'text', 'background', 'link', 'border', 'icon', 'inline', 'custom', 'fixed' );

$args    = array_values( array_filter( array_slice( $argv, 1 ), fn( $a ) => '--' !== substr( $a, 0, 2 ) ) );
$root    = rtrim( $args[0] ?? dirname( __DIR__ ), '/' );
$errors  = array();
$report  = in_array( '--report', $argv, true );
$palette = array();

// --- Variations define the contract ---

$files = array_merge( is_file( "$root/theme.json" ) ? array( "$root/theme.json" ) : array(), glob( "$root/styles/*.json" ) );

foreach ( $files as $file ) {
	$json  = json_decode( (string) file_get_contents( $file ), true );
	$color = $json['settings']['color'] ?? array();
	$name  = basename( $file );

	if ( ! isset( $color['palette'] ) ) {
		continue; // Typography-only or block-style variation.
	}

	$slugs = array();
	foreach ( (array) $color['palette'] as $entry ) {
		$slugs[ $entry['slug'] ] = $entry['color'];
	}
	$palette[ $name ] = array(
		'colors' => $slugs,
		'styles' => $json['styles'] ?? array(),
	);

	foreach ( array_diff( CONTRACT, array_keys( $slugs ) ) as $missing ) {
		$errors[] = "$name: palette lacks contract slug \"$missing\"";
	}
}

// --- Patterns use only the contract ---

$patterns = array_merge( glob( "$root/patterns/*.php" ), glob( "$root/patterns/*/*.php" ), glob( "$root/parts/*.html" ), glob( "$root/templates/*.html" ) );

foreach ( $patterns as $file ) {
	$rel = substr( $file, strlen( $root ) + 1 );

	foreach ( file( $file ) as $n => $line ) {
		$at   = $rel . ':' . ( $n + 1 );
		$used = array();

		foreach ( array( 'textColor', 'backgroundColor', 'borderColor', 'overlayColor', 'iconColor', 'iconBackgroundColor' ) as $key ) {
			if ( preg_match_all( '/"' . $key . '":"([a-z0-9-]+)"/', $line, $m ) ) {
				$used = array_merge( $used, $m[1] );
			}
		}
		if ( preg_match_all( '/var:preset\|color\|([a-z0-9-]+)/', $line, $m ) ) {
			$used = array_merge( $used, $m[1] );
		}
		if ( preg_match_all( '/var\(--wp--preset--color--([a-z0-9-]+)\)/', $line, $m ) ) {
			$used = array_merge( $used, $m[1] );
		}
		if ( preg_match_all( '/\bhas-([a-z0-9-]+?)-(?:background-color|border-color|color)\b/', $line, $m ) ) {
			$used = array_merge( $used, array_diff( $m[1], CORE_CLASSES ) );
		}

		foreach ( array_unique( array_diff( $used, CONTRACT ) ) as $slug ) {
			$errors[] = "$at: colour slug \"$slug\" is not in the contract";
		}

		if ( preg_match_all( '/"gradient":"([a-z0-9-]+)"|has-([a-z0-9-]+)-gradient-background|var:preset\|gradient\|([a-z0-9-]+)/', $line, $m ) ) {
			foreach ( array_unique( array_filter( array_merge( $m[1], $m[2], $m[3] ) ) ) as $slug ) {
				$errors[] = "$at: gradient \"$slug\" (no gradient is shared by every variation; put it in the variation's CSS)";
			}
		}

		// Product colour swatches show the product's colours, not the theme's.
		if ( str_contains( $line, 'elayne-colour-swatch' ) ) {
			continue;
		}

		// Hard-coded colours in block attribute values.
		if ( preg_match_all( '/"([A-Za-z]+)":"([^"]*)"/', $line, $m, PREG_SET_ORDER ) ) {
			foreach ( $m as $attr ) {
				if ( in_array( $attr[1], array( 'iconColorValue', 'iconBackgroundColorValue' ), true ) ) {
					continue;
				}
				if ( preg_match( '/#[0-9a-fA-F]{3,8}\b|\b(?:rgba?|hsla?)\(/', $attr[2] ) ) {
					$errors[] = "$at: hard-coded colour in \"{$attr[1]}\": {$attr[2]}";
				}
			}
		}

		// Hard-coded colours in inline styles.
		if ( preg_match_all( '/style="([^"]*)"/', $line, $m ) ) {
			foreach ( $m[1] as $style ) {
				foreach ( explode( ';', $style ) as $decl ) {
					if ( preg_match( '/#[0-9a-fA-F]{3,8}\b|\b(?:rgba?|hsla?)\(/', $decl ) ) {
						$errors[] = "$at: hard-coded colour in inline style: " . trim( $decl );
					}
				}
			}
		}
	}
}

// --- Contrast report ---

/**
 * Relative luminance of a hex colour, or null when it is not a plain hex.
 *
 * @param string $hex Colour.
 * @return float|null
 */
function luminance( string $hex ): ?float {
	$hex = ltrim( trim( $hex ), '#' );
	if ( 3 === strlen( $hex ) ) {
		$hex = $hex[0] . $hex[0] . $hex[1] . $hex[1] . $hex[2] . $hex[2];
	}
	if ( ! preg_match( '/^[0-9a-fA-F]{6}$/', $hex ) ) {
		return null;
	}
	$c = array_map(
		static function ( $v ) {
			$v /= 255;
			return $v <= 0.03928 ? $v / 12.92 : ( ( $v + 0.055 ) / 1.055 ) ** 2.4;
		},
		array_map( 'hexdec', str_split( $hex, 2 ) )
	);
	return 0.2126 * $c[0] + 0.7152 * $c[1] + 0.0722 * $c[2];
}

/**
 * Resolve a theme.json colour value (slug reference or hex) against a palette.
 *
 * @param string|null $value  Value from styles.
 * @param array       $colors Slug => hex.
 * @return string|null
 */
function resolve( ?string $value, array $colors ): ?string {
	if ( null === $value ) {
		return null;
	}
	if ( preg_match( '/var:preset\|color\|([a-z0-9-]+)|var\(--wp--preset--color--([a-z0-9-]+)\)/', $value, $m ) ) {
		return $colors[ $m[1] ?: $m[2] ] ?? null;
	}
	return $value;
}

if ( $report ) {
	$base_styles = $palette['theme.json']['styles'] ?? array();
	echo "Contrast report (WCAG ratio; 4.5 = AA body text, 3 = AA large text)\n\n";

	foreach ( $palette as $name => $p ) {
		$c      = $p['colors'];
		$styles = array_replace_recursive( $base_styles, $p['styles'] );
		$page   = resolve( $styles['color']['background'] ?? 'var:preset|color|base', $c );
		$text   = resolve( $styles['color']['text'] ?? 'var:preset|color|main', $c );
		$btn_bg = resolve( $styles['elements']['button']['color']['background'] ?? null, $c );
		$btn_tx = resolve( $styles['elements']['button']['color']['text'] ?? null, $c );

		$pairs = array(
			'page text on page'        => array( $text, $page ),
			'main-accent on page'      => array( $c['main-accent'] ?? null, $page ),
			'page text on secondary'   => array( $text, $c['secondary'] ?? null ),
			'page text on tertiary'    => array( $text, $c['tertiary'] ?? null ),
			'base on main (dark band)' => array( $c['base'] ?? null, $c['main'] ?? null ),
			'primary on page'          => array( $c['primary'] ?? null, $page ),
			'accent on page'           => array( $c['accent'] ?? null, $page ),
			'accent-light on main'     => array( $c['accent-light'] ?? null, $c['main'] ?? null ),
			'button text on button'    => array( $btn_tx, $btn_bg ),
		);

		echo "$name\n";
		foreach ( $pairs as $label => $pair ) {
			$a = $pair[0] ? luminance( $pair[0] ) : null;
			$b = $pair[1] ? luminance( $pair[1] ) : null;
			if ( null === $a || null === $b ) {
				printf( "  %-26s n/a\n", $label );
				continue;
			}
			$ratio = ( max( $a, $b ) + 0.05 ) / ( min( $a, $b ) + 0.05 );
			printf( "  %-26s %5.2f %s  (%s on %s)\n", $label, $ratio, $ratio < 3 ? 'LOW' : ( $ratio < 4.5 ? 'large only' : '' ), $pair[0], $pair[1] );
		}
		echo "\n";
	}
}

if ( $errors ) {
	fwrite( STDERR, implode( "\n", $errors ) . "\n\n" . count( $errors ) . " colour contract violation(s).\n" );
	exit( 1 );
}

echo "Colour contract: OK\n";
