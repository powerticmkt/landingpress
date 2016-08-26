<?php
/*
Theme Name: Elementor Naked
Theme URI: https://github.com/orangeweb/elementor-naked-wp-theme
Author: Agencia Orangeweb
Author URI: http://www.orangeweb.com.br
Description: Elementor Naked Starter Theme
Version: 0.1.0
License: GNU General Public License
*/


function elementornaked_customize_register( $wp_customize ) {
  // Do stuff with $wp_customize, the WP_Customize_Manager object.
}
add_action( 'customize_register', 'elementornaked_customize_register' );


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


?>
