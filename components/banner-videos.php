<!-- open video banner wrapper -->
<div class="vj_video">
	<!-- for each video that exists, initiate markup -->
	<?php while( have_rows('banner_videos') ): the_row(); ?>

	<!-- define video player variables -->	
	<?php $hd_streaming = get_sub_field('hd_streaming_link'); ?>
	<?php $fallback_1 = get_sub_field('fallback_streaming_link_1'); ?>
	<?php $fallback_2 = get_sub_field('fallback_streaming_link_2'); ?>
	<?php $sd_streaming = get_sub_field('sd_streaming_link'); ?>
	<?php $video_still_image = get_sub_field('video_still_image'); ?>
	<?php $video_text = get_sub_field('video_text'); ?>

	<!-- video slide markup -->
	<div class="vj_video__slide">
		<h1 class="vj_video__slide--text"><?php echo $video_text; ?></h1>
		<video class="vj_video__slide--player" playsinline="" loop="true" muted="" autoplay="true" <?php if( $video_still_image ): ?>poster="<?php echo $video_still_image; ?>"<?php endif; ?>>
			<?php if( $hd_streaming ): ?>
			<source src="<?php echo $hd_streaming; ?>" type="video/mp4">
			<?php endif; ?>

			<?php if( $fallback_1 ): ?>
			<source src="<?php echo $fallback_1; ?>" type="video/mp4">
			<?php endif; ?>

			<?php if( $fallback_2 ): ?>
			<source src="<?php echo $fallback_2; ?>" type="video/mp4">
			<?php endif; ?>

			<?php if( $sd_streaming ): ?>
			<source src="<?php echo $sd_streaming; ?>" type="video/mp4">
			<?php endif; ?>
		</video>
	</div><!-- end video slide markup -->
	
	<?php endwhile; ?>
<!-- we will need video controls -->
</div><!-- close video banner wrapper -->