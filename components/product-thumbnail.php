<?php $rollover_image = get_field('rollover_image'); ?>

<div class="vj_product__thumbnail">
	<a href="<?php the_permalink(); ?>">
		<div class="vj_product__images">
			<!-- post thumbnail -->
			<?php the_post_thumbnail(); ?>

			<!-- if the rollover image exists, show it -->
			<?php if( $rollover_image ): ?>
			<img src="<?php echo $rollover_image['url']; ?>" alt="<?php echo $rollover_image['alt']; ?>">
			<?php endif; ?>
		</div>
		<?php the_title(); ?>
		<!-- do we want an "add to cart"? -->
	</a>
</div>