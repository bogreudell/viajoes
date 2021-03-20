<!-- if services exist, open services wrapper -->
<?php if( have_rows('service') ): ?>
<div class="vj_services">
	<!-- for each service block, initiate markup -->
	<?php while( have_rows('service' ) ): the_row(); ?>

	<!-- define service block variables -->
	<?php $header_text = get_sub_field('header_text'); ?>
	<?php $copy_text = get_sub_field('copy_text'); ?>
	<?php $link = get_sub_field('link'); ?>
	<?php $link_text = get_sub_field('link_text'); ?>
	<?php $image = get_sub_field('image'); ?>
	<?php $image_url = $image['url']; ?>
	<?php $image_alt = $image['alt']; ?>

	<div class="vj_service">
		<aside class="vj_service__content">
			<h3><?php echo $header_text; ?></h3>
			<p><?php echo $copy_text; ?></p>
			<a href="<?php echo $link; ?>">
				<?php echo $link_text; ?>
			</a>
		</aside>
		<aside class="vj_service__image" role="img" aria-label="<?php echo $image_alt; ?>" style="background:url(<?php echo $image_url; ?>) center center no-repeat; ">
		</aside>
	</div><!-- end service block markup -->
	<?php endwhile; ?>
</div><!-- close services wrapper -->
<?php endif; ?>