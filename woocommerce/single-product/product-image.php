<?php
/**
 * Single Product Image
 *
 * Elayne theme override: renders the product gallery with a dynamic vertical
 * thumbnail sidebar (desktop) and horizontal scroll thumbnails (mobile).
 * Images are sourced directly from the product in WooCommerce — no hardcoded
 * placeholder slots.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package Elayne
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

if ( ! $product instanceof WC_Product ) {
	return;
}

$post_thumbnail_id = $product->get_image_id();
$gallery_ids       = $product->get_gallery_image_ids();

$all_ids = array();
if ( $post_thumbnail_id ) {
	$all_ids[] = (int) $post_thumbnail_id;
}
foreach ( $gallery_ids as $id ) {
	$all_ids[] = (int) $id;
}

if ( empty( $all_ids ) ) {
	printf(
		'<div class="elayne-gallery-desktop"><div class="elayne-main-image-wrapper"><div class="woocommerce-product-gallery__wrapper"><div class="woocommerce-product-gallery__image--placeholder"><img src="%s" alt="%s" class="wp-post-image"/></div></div></div></div>',
		esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ),
		esc_html__( 'Awaiting product image', 'woocommerce' )
	);
	return;
}
?>
<div class="elayne-gallery-desktop">

	<div class="elayne-thumbnails">
		<?php foreach ( $all_ids as $i => $attachment_id ) :
			$thumb_url = wp_get_attachment_image_url( $attachment_id, 'woocommerce_thumbnail' );
			$alt       = trim( wp_strip_all_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) );
			$class     = 'elayne-thumb' . ( 0 === $i ? ' active' : '' );
		?>
		<div class="<?php echo esc_attr( $class ); ?>" data-gallery-index="<?php echo esc_attr( $i ); ?>">
			<img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( $alt ); ?>"/>
		</div>
		<?php endforeach; ?>
	</div>

	<div class="elayne-main-image-wrapper">
		<div class="woocommerce-product-gallery__wrapper">
			<?php foreach ( $all_ids as $i => $attachment_id ) :
				echo wc_get_gallery_image_html( $attachment_id, 0 === $i ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			endforeach; ?>
		</div>

		<div class="elayne-badge has-primary-background-color has-base-color has-text-color has-background">
			<p class="has-x-small-font-size"><?php esc_html_e( 'Best Seller', 'elayne' ); ?></p>
		</div>

		<p class="elayne-zoom-hint has-main-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Click to zoom', 'elayne' ); ?></p>
	</div>

</div>

<div class="elayne-gallery-mobile">

	<div class="woocommerce-product-gallery__wrapper">
		<?php foreach ( $all_ids as $i => $attachment_id ) :
			echo wc_get_gallery_image_html( $attachment_id, 0 === $i ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		endforeach; ?>
	</div>

	<div class="elayne-mobile-thumbs">
		<?php foreach ( $all_ids as $i => $attachment_id ) :
			$thumb_url = wp_get_attachment_image_url( $attachment_id, 'woocommerce_thumbnail' );
			$alt       = trim( wp_strip_all_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) );
			$class     = 'elayne-mobile-thumb' . ( 0 === $i ? ' active' : '' );
		?>
		<div class="<?php echo esc_attr( $class ); ?>" data-gallery-index="<?php echo esc_attr( $i ); ?>">
			<img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( $alt ); ?>"/>
		</div>
		<?php endforeach; ?>
	</div>

</div>
