<?php if( have_rows('service') ): ?>
<div class="vj_services">
	<?php while( have_rows('service') ): the_row(); ?>
	<div class="vj_service">
		<h1 class="vj_service__title">
			<?php the_sub_field('title'); ?>
		</h1>
		<p class="vj_service__copy">
			<?php the_sub_field('copy'); ?>
		</p>
		<?php the_sub_field('video_embed'); ?>
		<div class="vj_service__videocaption">
			<?php the_sub_field('video_caption'); ?>
		</div>
	</div>
	<?php endwhile; ?> 
</div>
<?php endif; ?>