<div class="vj_offerings">
	<h1 class="vj_offerings__title">
		<?php the_sub_field('title'); ?>
	</h1>
	<p class="vj_offerings__subheader">
		<?php the_sub_field('subheader'); ?>
	</p>
	<?php if( have_rows('offering') ): ?>
	<ul class="vj_offerings__list">
		<?php while( have_rows('offering') ): the_row(); ?>
		<!-- I don't love my class choices here -->
		<li class="vj_offerings__list--item grid-item">
			<?php $image = get_sub_field('image'); ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			<div class="vj_item--count">
				<?php the_sub_field('offering_number'); ?>
			</div>
			<div class="vj_item--title">
				<?php the_sub_field('title'); ?>
			</div>
			<p class="vj_item--copy">
				<?php the_sub_field('copy'); ?>
			</p>
		</li>
		<?php endwhile; ?>	
	</ul>
	<?php endif; ?>
</div>