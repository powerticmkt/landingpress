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



function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Widgetized Area',
		'id'   => 'widgetized-area',
		'description'   => 'This is a widgetized area.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

}


?>
