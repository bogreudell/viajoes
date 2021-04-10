<?php $featured_products = get_sub_field('featured_products'); ?>
<?php $see_more_link = get_sub_field('see_more_link'); ?>

<div class="vj_collection">
	<h1>Our <strong>Collection</strong></h1>
	<div class="vj_products">
		<?php 
			if( $featured_products ){
				foreach( $featured_products as $post ){
					setup_postdata( $post );

					include( locate_template('components/product-thumbnail.php') );
				}
				wp_reset_postdata();
			}
		?>
	</div>
	<a class="vj_collection__more" href="<?php echo $see_more_link['url']; ?>">See More</a>
</div>