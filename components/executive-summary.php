<?php $background_image = get_sub_field('background_image'); ?>
<?php $copy_text = get_sub_field('copy_text'); ?>
<?php $link = get_sub_field('link'); ?>
<?php $link_text = get_sub_field('link_text'); ?>

<div <?php if( $background_image): ?>class="vj_summary with-image" style="background:url(<?php echo $background_image; ?>);"<?php else: ?>class="vj_summary"<?php endif; ?>>
	<div class="vj_summary__content">
		<div class="vj_summary__content--copy">
			<?php echo $copy_text; ?>
		</div>
		<?php if( $link ): ?>
		<a href="<?php echo $link; ?>" class="vj_summary__content--link"><?php echo $link_text; ?></a>
		<?php endif; ?>
	</div>
</div>