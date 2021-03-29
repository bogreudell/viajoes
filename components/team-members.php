<?php if( have_rows('team_member') ): ?>
<div class="vj_team">
	<h1 class="vj_team__title">The <strong>Team</strong></h1>

	<?php while( have_rows('team_member') ): the_row(); ?>
	<div class="vj_team__member">
		<div class="vj_team__member--title">
			<?php the_sub_field('title'); ?>
		</div>
		<div class="vj_team__member--name">
			<?php the_sub_field('name'); ?>
		</div>
		<p class="vj_team__member--bio">
			<?php the_sub_field('bio'); ?>
		</p>
	</div>
	<?php endwhile; ?>
</div>
<?php endif; ?>