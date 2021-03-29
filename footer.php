		<footer class="vj_footer" role="contentinfo">
			<div class="vj_footer__row">
				<ul class="vj_footer__designcredit">
					<li>Victoria Spicer</li>
					<li>Set Designer</li>
					<li>London / New Zealand</li>
				</ul>
				<?php wp_nav_menu(
						array(
							'menu_class' => 'vj_footer__menu--navigation', 
							'container_class' => 'vj_footer__menu' 
						)
					  ); ?>
			</div>
			
			<div class="vj_footer__row">
				<ul class="vj_footer__paymenticons">
					<li><i class="fab fa-cc-visa"></i></li>
					<li><i class="fab fa-cc-paypal"></i></li>
					<li><i class="fab fa-cc-mastercard"></i></li>
					<li><i class="fab fa-cc-discover"></i></li>
					<li><i class="fab fa-cc-amazon-pay"></i></li>
				</ul>
				<div class="vj_footer__devcredit">
					Built by Daniel Bögre Udell (@bogreudell)
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>