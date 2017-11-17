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

wp_enqueue_style( 'style', get_stylesheet_uri() );

add_theme_support( 'title-tag' );

add_theme_support( "post-thumbnails" );

// Run updater
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/powertic/landingpress/',
    __FILE__,
    'landingpress'
);
$myUpdateChecker->setBranch('master');

?>
