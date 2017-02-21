<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> >

		<?php if (get_theme_mod('pzl_menu_position') == 'Before') : ?>
			<?php echo do_shortcode( get_theme_mod("pzl_menu_shortcode") ); ?>
		<?php endif; ?>

		<?php if (get_theme_mod('pzl_head_show') == 'Yes') : ?>
			<?php echo do_shortcode( get_theme_mod("pzl_head_shortcode") ); ?>
		<?php endif; ?>

		<?php if (get_theme_mod('pzl_menu_position') == 'After') : ?>
			<?php echo do_shortcode( get_theme_mod("pzl_menu_shortcode") ); ?>
		<?php endif; ?>

		<div <?php post_class(); ?> >
