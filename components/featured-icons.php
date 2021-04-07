<!-- define variable for icons header -->
<?php $icons_header = get_sub_field('icons_header'); ?>

<!-- if markup exists, open icons wrapper -->
<?php if( have_rows('icon') ): ?>
<div class="vj_icons">
	<!-- if there's a header, print it -->
	<?php if( $icons_header ): ?>
	<div class="vj_icons__header">
		<?php echo $icons_header; ?>
	</div>
	<?php endif; ?>

	<!-- for each icon, instantiate markup -->
	<?php while( have_rows('icon') ): the_row(); ?>

	<!-- define variables -->
	<?php $icon_image = get_sub_field('icon_image'); ?>
	<?php $icon_image_url = $icon_image['url']; ?>
	<?php $icon_image_alt = $icon_image['alt']; ?>
	<?php $icon_text = get_sub_field('icon_text'); ?>

	<div class="vj_icon">
		<img src="<?php echo $icon_image_url; ?>" alt="<?php echo $icon_image_alt; ?>">
		<?php if( $icon_text ): ?>
		<p><?php echo $icon_text; ?></p>
		<?php endif; ?>
	</div>
	<?php endwhile; ?>
</div><!-- close icons wrapper -->
<?php endif; ?>
<!-- endif -->