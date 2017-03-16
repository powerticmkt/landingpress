<?php
/*
Theme Name: Elementor Puzzle
Theme URI: https://luizeof.com.br
Author: luizeof
Author URI: http://luizeof.com.br
Description: Elementor Puzzle Theme for Landing Pages and Websites
Version: 1.1.4
License: GNU General Public License
*/

wp_enqueue_style( 'style', get_stylesheet_uri() );

wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );

function naked_menu_init() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu', 'elementor-naked'),
      'extra-menu' => __( 'Footer Menu', 'elementor-naked' )
    )
  );
}
add_action( 'init', 'naked_menu_init' );

add_theme_support( 'title-tag' );

add_theme_support( "post-thumbnails" );

// Run updater
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/luizeof/elementor-puzzle/',
    __FILE__,
    'elementor-puzzle'
);
$myUpdateChecker->setBranch('master');

require_once "customizer.php";

?>
