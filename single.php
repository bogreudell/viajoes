<?php get_header(); ?>

<?php if( have_posts() ): ?>
<div class="vj_single">
	<?php while( have_posts() ): the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<div class="vj_single__publishdate">
		<?php the_date(); ?>
	</div>
	<?php the_content(); ?>
	<?php endwhile; ?>
</div>
<?php endif; ?>

<?php get_footer(); ?>