<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<title><?php wp_title(); ?></title>
		<link rel='stylesheet' id='style-css' href="https://necolas.github.io/normalize.css/latest/normalize.css"/>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
