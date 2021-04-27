<?php $background_image = get_sub_field('background_image'); ?>
<?php $header_text = get_sub_field('header_text'); ?>
<?php $copy_text = get_sub_field('copy_text'); ?>
<?php $link = get_sub_field('link'); ?>
<?php $link_text = get_sub_field('link_text'); ?>

<div <?php if( $banner_id ): ?>id="<?php echo $banner_id; ?>" <?php endif;?><?php if( $background_image): ?>class="vj_banner with-image" style="background-image:url(<?php echo $background_image; ?>);"<?php else: ?>class="vj_banner"<?php endif; ?>>
	<?php if( $header_text || $copy_text || $link ): ?>
	<div class="vj_banner__content">
		<?php if( $header_text ): ?>
		<div class="vj_banner__content--header">
			<?php echo $header_text; ?>		
		</div>
		<?php endif; ?>

		<?php if( $copy_text ): ?>
		<div class="vj_banner__content--copy">
			<?php echo $copy_text; ?>
		</div>
		<?php endif; ?>

		<?php if( $link ): ?>
		<a href="<?php echo $link; ?>" class="vj_banner__content--link"><?php echo $link_text; ?></a>
		<?php endif; ?>
	</div>
	<?php endif; ?>
</div>