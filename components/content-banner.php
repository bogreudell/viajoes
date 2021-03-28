<?php $background_image = get_sub_field('background_image'); ?>
<?php $header_text = get_sub_field('header_text'); ?>
<?php $copy_text = get_sub_field('copy_text'); ?>
<?php $link = get_sub_field('link'); ?>
<?php $link_text = get_sub_field('link_text'); ?>

<div <?php if( $background_image): ?>class="vj_banner with-image" style="background:url(<?php echo $background_image; ?>);"<?php else: ?>class="vj_banner"<?php endif; ?>>
	<div class="vj_banner__content">
		<div class="vj_banner__content--copy">
			<?php echo $copy_text; ?>
		</div>
		<a href="<?php echo $link; ?>" class="vj_banner__content--link"><?php echo $link_text; ?></a>
	</div>
</div>