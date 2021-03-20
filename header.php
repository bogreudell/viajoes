<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<script src="https://kit.fontawesome.com/b108d252b7.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<header role="navigation">
	<?php $logo = get_field('logo', 'option'); ?>
	<?php $logo_url = $logo['url']; ?>
	<?php $logo_alt = $logo['alt']; ?>

	<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo_alt; ?>">
	<?php wp_nav_menu(); ?>
</header>