<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
$featured_image_id = get_post_thumbnail_id();
$featured_image_url = get_the_post_thumbnail_url();
$featured_image_alt = get_post_meta($featured_image_id,'_wp_attachment_image_alt', true);
$gallery_images = $product->get_gallery_image_ids();
$related_products = get_field('related_products');

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<div class="vj_product">
		<div class="vj_product__images">
			<div class="vj_product__images--navigation">
				<img src="<?php echo $featured_image_url; ?>" alt="<?php echo $featured_image_alt; ?>">
				<?php foreach( $gallery_images as $image ): ?>
					<?php $image_url = wp_get_attachment_url( $image ); ?>
					<?php $image_alt = get_post_meta( $image, '_wp_attachment_image_alt', TRUE ); ?>
					<img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
				<?php endforeach; ?>
			</div>
			<img class="vj_product__images--main" src="<?php echo $featured_image_url; ?>" alt="<?php echo $featured_image_alt; ?>">
			<div class="clear"></div>
		</div>

		<div class="vj_product__summary summary entry-summary">
			<?php
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
			?>
		</div>

		<div class="clear"></div>
	</div>

	<?php if( $related_products ){

		echo '<ul class="vj_products">'.
			 '<h3>Related <strong>Products<strong></h3>';

		foreach( $related_products as $post ){
			setup_postdata( $post );

			include( locate_template('components/product-thumbnail.php') );
		}
		wp_reset_postdata();

		echo '</ul>';
	}
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>