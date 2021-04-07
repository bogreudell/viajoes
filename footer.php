		<footer class="vj_footer" role="contentinfo">
			<?php wp_nav_menu(
					array(
						'menu_class' => 'vj_footer__menu--navigation', 
						'container_class' => 'vj_footer__menu' 
					)
				  ); ?>
			<ul class="vj_footer__paymenticons">
				<li><i class="fab fa-cc-visa"></i></li>
				<li><i class="fab fa-cc-paypal"></i></li>
				<li><i class="fab fa-cc-mastercard"></i></li>
				<li><i class="fab fa-cc-discover"></i></li>
				<li><i class="fab fa-cc-amazon-pay"></i></li>
			</ul>
			<div class="vj_footer__credits">
				Designed by Shehzil Malik<br>
				Built by Daniel Bögre Udell (@bogreudell)<br><br>
				© 2021 - Present Viajoes, Inc., All Rights Reserved.
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>