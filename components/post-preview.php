<?php $post_title = get_the_title(); ?>
<?php $post_excerpt = get_field('post_excerpt'); ?>
<?php $image_url = get_the_post_thumbnail_url(); ?>
<?php $image_id = get_post_thumbnail_id( $post->ID ); ?>
<?php $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true); ?>
<?php $post_link = get_the_permalink(); ?>
<?php $video_status = get_field('video_status'); ?>

<div class="vj_blogpreview">
	<a href="<?php echo $post_link; ?>">
		<aside class="vj_blogpreview__image" role="img" aria-label="<?php echo $image_alt; ?>" style="background-image:url(<?php echo $image_url; ?>);">
			<?php if( $video_status == 'Video' ): ?>
				<i class="far fa-play-circle"></i>
			<?php endif; ?>
		</aside>
		<aside class="vj_blogpreview__text">
			<div class="vj_blogpreview__text--copy">
				<h1><?php echo $post_title; ?></h1>
				<p><?php echo $post_excerpt; ?></p>
				<div>
					<span>Continue Reading</span>
					<i class="far fa-long-arrow-alt-right"></i>
				</div>
			</div>
		</aside>
		<div class="clear"></div>
	</a>
</div>