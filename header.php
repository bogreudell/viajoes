<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />

	<title>Viajoes | <?php the_title(); ?></title>

	<!-- typefaces from google -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="<?php the_field('favicon','option'); ?>" type="image/x-icon" />

	<!-- fontawesome for icons -->
	<script src="https://kit.fontawesome.com/b108d252b7.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="vj_header" role="navigation">
	<div class="vj_header__wrapper">
		<?php $transparent_background_logo = get_field('transparent_background_logo', 'option'); ?>
		<?php $white_background_logo = get_field('white_background_logo', 'option'); ?>
		<?php //$logo_url = $logo['url']; ?>
		<?php //$logo_alt = $logo['alt']; ?>

		<div class="vj_header__logo">
			<a href="<?php bloginfo('url'); ?>">
				<img class="vj_header__logo--image1" src="<?php echo $transparent_background_logo['url']; ?>" alt="<?php echo $transparent_background_logo['alt']; ?>">
				<img class="vj_header__logo--image2" src="<?php echo $white_background_logo['url']; ?>" alt="<?php echo $white_background_logo['alt']; ?>">
			</a>
		</div>
		<?php wp_nav_menu(
				array(
					'menu' => 'Main Menu', 
					'menu_class' => 'vj_header__menu--navigation', 
					'container_class' => 'vj_header__menu' 
				)
			  ); 

			  wp_nav_menu(
			  	array(
			  		'menu' => 'Main Menu',
			  		'menu_class' => 'vj_header__mobilemenu--navigation',
			  		'container_class' => 'vj_header__mobilemenu'
			  	)
			  ); ?>
			  <!-- <i class="fal fa-times"></i> -->
		<!-- vj_header__menu--actions when user interface is built -->
		<button id="vj_header__menutoggle">
			<i class="far fa-bars"></i>
		</button>
		<?php get_search_form(); ?>
	</div>
</header>