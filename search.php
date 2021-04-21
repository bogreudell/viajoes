<?php get_header(); ?>
<main id="content" class="vj_search">
<?php if ( have_posts() ) : ?>
<header class="header">
<h1 class="entry-title">Search results for: "<?php the_search_query(); ?>"</h1>
</header>
<?php while ( have_posts() ) : the_post(); ?>
<div class="vj_search__result">
	<a href="<?php the_permalink(); ?>">
		<?php the_title(); ?>
	</a>
</div>
<?php endwhile; ?>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
<header class="header">
<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'blankslate' ); ?></h1>
</header>
<div class="entry-content">
<p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
</div>
</article>
<?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>