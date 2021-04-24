<?php $product_thumbnail_id = get_post_thumbnail_id(); ?>
<?php $product_thumbnail_alt = get_post_meta( $product_thumbnail_id, '_wp_attachment_image_alt', true ); ?>
<?php $product_thumbnail_url = get_the_post_thumbnail_url(); ?>
<?php $rollover_image = get_field('rollover_image'); ?>

<li class="vj_products__thumbnail">
	<a href="<?php the_permalink(); ?>">
		<div class="vj_products__images<?php if( $rollover_image ): ?> with-rollover<?php endif; ?>">
			<!-- post thumbnail -->
			<?php if( $product_thumbnail_url ): ?>
			<div class="vj_products__images--thumbnail" role="img" aria-label="<?php echo $rollover_image['alt']; ?>" style="background-image:url(<?php echo $product_thumbnail_url; ?>); ?>"></div>
			<?php endif; ?>

			<!-- if the rollover image exists, show it -->
			<?php if( $rollover_image ): ?>
			<div class="vj_products__images--rollover" role="img" aria-label="<?php echo $rollover_image['alt']; ?>" style="background-image:url(<?php echo $rollover_image['url']; ?>);"></div>
			<?php endif; ?>

			<!-- if no image, add padding -->
			<?php if( !$product_thumbnail_url && !$rollover_image): ?>
			<div class="vj_products__noimages"></div>
			<?php endif; ?>
		</div>
		<div class="vj_products__title">
			<?php the_title(); ?><br>
			<span>
			<?php echo $product->get_attribute('content'); ?><br>
			<?php echo $product->get_attribute('product-gsm'); ?> GSM
			</span>
		</div>
		<!-- do we want an "add to cart"? -->
	</a>
</li>