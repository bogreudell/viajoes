<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />

	<!-- typefaces from google -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">

	<!-- fontawesome for icons -->
	<script src="https://kit.fontawesome.com/b108d252b7.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="vj_header" role="navigation">
	<?php $logo = get_field('logo', 'option'); ?>
	<?php $logo_url = $logo['url']; ?>
	<?php $logo_alt = $logo['alt']; ?>

	<div class="vj_header__logo">
		<a href="<?php bloginfo('url'); ?>">
			<img class="vj_header__logo--image" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo_alt; ?>">
		</a>
	</div>
	<?php wp_nav_menu(
			array(
				'menu' => 'Main Menu', 
				'menu_class' => 'vj_header__menu--navigation', 
				'container_class' => 'vj_header__menu' 
			)
		  ); ?>
	<!-- vj_header__menu--actions when user interface is built -->
</header>