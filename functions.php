<?php

require_once "customizer.php";

wp_enqueue_style( 'style', get_stylesheet_uri() );

add_theme_support( 'title-tag' );

add_theme_support( "post-thumbnails" );

function register_landingpress_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'side-menu' => __( 'Side Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_landingpress_menus' );

// Run updater
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/powerticmkt/landingpress/',
    __FILE__,
    'landingpress'
);
$myUpdateChecker->setBranch('master');

?>
