<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css" />
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> >

		<?php if ( ! isset( $content_width ) ) $content_width = 900; ?>

		<div <?php post_class(); ?> >
