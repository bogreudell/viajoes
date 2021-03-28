<?php
// enqueue stylesheets
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'blankslate-style';
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version')
    );
}

// enqueue custom js
add_action('wp_enqueue_scripts', 'my_theme_enqueue_js');
function my_theme_enqueue_js() {
    wp_enqueue_script( 'my_theme_enqueue_js', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), null, true );
}

// remove header bump from core css output
add_action('get_header', 'my_filter_head');
function my_filter_head() {
   remove_action('wp_head', '_admin_bar_bump_cb');
} 

// initiate options page
if( function_exists('acf_add_options_page') ) {   
    acf_add_options_page();
}

// add secondary menu
function vj_secondary_menu() {
  register_nav_menu('secondary-menu',__( 'Secondary Menu' ));
}
add_action( 'init', 'vj_secondary_menu' );

// add footer menu
function vj_footer_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'vj_footer_menu' );