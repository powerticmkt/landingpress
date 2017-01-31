<?php
/*
Theme Name: Elementor Naked
Theme URI: https://luizeof.com.br/elementor/utilizando-o-template-elementor-naked-para-landing-pages/
Author: Luiz Eduardo
Author URI: http://luizeof.com.br
Description: Elementor Naked Theme
Version: 0.8.1
License: GNU General Public License
*/

wp_enqueue_style( 'style', get_stylesheet_uri() );

function naked_menu_init() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'naked_menu_init' );



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




?>
