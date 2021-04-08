<?php /* Template name: Contact */ get_header(); ?>

<?php $background_image = get_field('background_image'); ?>

<?php if( have_rows('contact_blocks') ): ?>
<div class="vj_contact" style="background-image:url(<?php echo $background_image['url']; ?>);">
	<div class="vj_contact__section">
		<h1 class="vj_contact__header">Contact Us</h1>
	</div>
	<?php while( have_rows('contact_blocks') ): the_row(); ?>
	<div class="vj_contact__section">
		<h1 class="vj_contact__section--title">
			<?php the_sub_field('title'); ?>
		</h1>
		<p class="vj_contact__section--copy">
			<?php the_sub_field('copy'); ?>
		</p>
	</div>
	<?php endwhile; ?>
</div>
<?php endif; ?>

<?php get_footer(); ?>