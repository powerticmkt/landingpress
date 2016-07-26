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

include_once("custom-fields.php");

?>
