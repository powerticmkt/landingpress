<?php
/*
Theme Name: Elementor Puzzle
Theme URI: https://luizeof.com.br
Author: luizeof
Author URI: http://luizeof.com.br
Description: Elementor Puzzle Theme for Landing Pages and Websites
Version: 1.1.5
License: GNU General Public License
*/

require_once "customizer.php";

add_theme_support( 'title-tag' );

add_theme_support( "post-thumbnails" );



add_action( 'after_setup_theme', 'register_landingpress_menus' );
function register_landingpress_menus() {
  register_nav_menu( 'primary_menu', __( 'Principal', 'landingpress' ) );
  register_nav_menu( 'secondary_menu', __( 'Secundário', 'landingpress' ) );
  register_nav_menu( 'footer_menu', __( 'Rodapé', 'landingpress' ) );
  register_nav_menu( 'sidebar_menu', __( 'Barra Lateral', 'landingpress' ) );
}





// Run updater
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/powerticmkt/landingpress/',
    __FILE__,
    'landingpress'
);
$myUpdateChecker->setBranch('master');

?>
