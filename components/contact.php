<?php $background_image = get_sub_field('background_image'); ?>
<?php if( have_rows('section') ): ?>
<div class="vj_contact" style="background-image:url(<?php echo $background_image['url']; ?>">
	<?php while( have_rows('section') ): the_row(); ?>
		<h1 class="vj_contact__section--title">
			<?php the_sub_field('title'); ?>
		</h1>
		<p class="vj_contact__section--copy">
			<?php the_sub_field('copy'); ?>
		</p>
	<?php endwhile; ?>
</div>
<?php endif; ?>