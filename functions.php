<?php
/*
Theme Name: Elementor Puzzle
Theme URI: https://luizeof.com.br
Author: luizeof
Author URI: http://luizeof.com.br
Description: Elementor Puzzle Theme for Landing Pages and Websites
Version: 1.0.1
License: GNU General Public License
*/

wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );

function naked_menu_init() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu', 'elementor-naked'),
      'extra-menu' => __( 'Extra Menu', 'elementor-naked' )
    )
  );
}
add_action( 'init', 'naked_menu_init' );

add_theme_support( 'automatic-feed-links' );

//add_theme_support( 'title-tag' );

add_theme_support( "post-thumbnails" );

//add_theme_support( "custom-header");

//add_theme_support( "custom-background");

function naked_setup() {
  if ( ! isset( $content_width ) ) $content_width = 900;
}
add_action( 'after_setup_theme', 'naked_setup' );


add_editor_style();

add_action( 'widgets_init', 'naked_widgets_init' );
function naked_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'elementor-naked' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'elementor-naked' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
  	    'after_widget'  => '</li>',
  	    'before_title'  => '<h2 class="widgettitle">',
  	    'after_title'   => '</h2>',
    ) );

}



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
