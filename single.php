<?php get_header(); ?>

<?php if( have_posts() ): ?>
<div class="vj_single">
	<?php while( have_posts() ): the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<div class="vj_single__publishdate">
		<?php the_date(); ?>
	</div>
	<div class="vj_single__sharethis">
		<span>Share:</span>
		<span>
			<a target="_blank" href="https://facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
				<i class="fab fa-facebook"></i>
			</a>
		</span>
		<span>
			<a target="_blank" href="https://twitter.com/share?url=<?php the_permalink(); ?>">
				<i class="fab fa-twitter"></i>
			</a>
		</span>
	</div>
	<?php the_content(); ?>
	<?php endwhile; ?>
</div>
<?php endif; ?>

<?php get_footer(); ?>