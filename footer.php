		<?php $footer_statement = get_field('footer_statement', 'option'); ?>
		<footer class="vj_footer" role="contentinfo">
			<?php if ( $footer_statement ): ?>
			<div class="vj_footer__statement">
				<?php echo $footer_statement; ?>
			</div>
			<?php endif; ?>
			<?php wp_nav_menu(
					array(
						'menu_class' => 'vj_footer__menu--navigation', 
						'container_class' => 'vj_footer__menu' 
					)
				  ); ?>

			<div class="vj_footer__credits">
				Designed by Shehzil Malik<br>
				Built by Daniel Bögre Udell (@bogreudell)<br><br>
				© 2021 - Present Viajoes, Inc., All Rights Reserved.
			</div>
		</footer>
			<!-- masonry for services page -->
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>