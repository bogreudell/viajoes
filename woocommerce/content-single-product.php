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
		<div class="vj_product__images <?php if ( !$featured_image_url ): ?>no-image<?php endif; ?>">
			<?php if ( $gallery_images ): ?>
			<div class="vj_product__images--navigation">
				<img src="<?php echo $featured_image_url; ?>" alt="<?php echo $featured_image_alt; ?>">
				<?php foreach( $gallery_images as $image ): ?>
					<?php $image_url = wp_get_attachment_url( $image ); ?>
					<?php $image_alt = get_post_meta( $image, '_wp_attachment_image_alt', TRUE ); ?>
					<img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
				<?php endforeach; ?>
			</div>
			<?php endif; ?>
			<?php if ( $featured_image_url ): ?>
			<img class="vj_product__images--main <?php if( !$gallery_images ): ?>no-gallery<?php endif; ?>" src="<?php echo $featured_image_url; ?>" alt="<?php echo $featured_image_alt; ?>">
			<?php endif; ?>
			<div class="clear"></div>
		</div>

		<div class="vj_product__summary summary entry-summary">
			<?php
			woocommerce_template_single_title();
			woocommerce_template_single_price();
			woocommerce_template_single_excerpt();
			woocommerce_template_single_add_to_cart();
			woocommerce_template_single_meta();	
			?>
		</div>

		<div class="clear"></div>
	</div>

	<ul class="vj_products">
		<h3>Related <strong>Products<strong></h3>
		<?php if( $related_products ){
			foreach( $related_products as $post ){
				setup_postdata( $post );

				include( locate_template('components/product-thumbnail.php') );
			}
			wp_reset_postdata();
		} else {
			global $post;

			  // get categories
			  $terms = wp_get_post_terms( $post->ID, 'product_cat' );
			  foreach ( $terms as $term ) $cats_array[] = $term->term_id;

			  $query_args = array( 'post__not_in' => array( $post->ID ), 'posts_per_page' => 8, 'no_found_rows' => 1, 'post_status' => 'publish', 'post_type' => 'product', 'tax_query' => array( 
			    array(
			      'taxonomy' => 'product_cat',
			      'field' => 'id',
			      'terms' => $cats_array
			    )));

			  $r = new WP_Query($query_args);
					
			  if ($r->have_posts()) {
			    while ($r->have_posts()) { $r->the_post(); global $product;

			    	include( locate_template('components/product-thumbnail.php') );
			      }
			    wp_reset_query();

			  }	  
			}
		?>
	</ul>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
