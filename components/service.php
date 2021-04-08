<?php if( have_rows('service') ): ?>
	<?php while( have_rows('service') ): the_row(); ?>

	<?php $video_embed = get_sub_field('video_embed'); ?>
	<?php $first_image = get_sub_field('first_image'); ?>
	<?php $second_image = get_sub_field('second_image'); ?>
	<?php $full_image = get_sub_field('image'); ?>
		
	<div class="vj_service">
		<h1 class="vj_service__title">
			<?php the_sub_field('title'); ?>
		</h1>
		<div class="vj_service__copy">
			<?php the_sub_field('copy'); ?>
		</div>

		<!-- if video embed exists, display markup -->
		<?php if( $video_embed): ?>
		<div class="vj_service__iframewrap">
			<?php echo $video_embed; ?>
		</div>
		<div class="vj_service__videocaption">
			<?php the_sub_field('video_caption'); ?>
		</div>
		<?php endif; ?>

		<!-- if 'first image' exists, display markup -->
		<?php if( $first_image ): ?>
		<div class="vj_service__images">
			<img src="<?php echo $first_image['url']; ?>" alt="<?php echo $first_image['alt']; ?>">
			<img src="<?php echo $second_image['url']; ?>" alt="<?php echo $second_image['alt']; ?>">
			<div class="clear"></div>
		</div>
		<?php endif; ?>

		<!-- if 'full image' exists, display markup -->
		<?php if( $full_image ): ?>
		<div class="vj_service__fullimage">
			<img src="<?php echo $full_image['url']; ?>" alt="<?php echo $full_image['alt']; ?>">
		</div>
		<?php endif;?>
	</div>
	<?php endwhile; ?> 
<?php endif; ?>