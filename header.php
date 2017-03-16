<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> >

	<div class="header-wrapper">

		<?php if (get_theme_mod('pzl_hmenu_show') == 'Yes') : ?>
			<?php if (get_theme_mod('pzl_hmenu_position') == 'Before') : ?>
				<?php echo do_shortcode( get_theme_mod("pzl_hmenu_shortcode") ); ?>
			<?php endif; ?>
		<?php endif; ?>


		<?php if (get_theme_mod('pzl_head_show') == 'Yes') : ?>
			<?php echo do_shortcode( get_theme_mod("pzl_head_shortcode") ); ?>
		<?php endif; ?>


		<?php if (get_theme_mod('pzl_hmenu_show') == 'Yes') : ?>
			<?php if (get_theme_mod('pzl_hmenu_position') == 'After') : ?>
				<?php echo do_shortcode( get_theme_mod("pzl_hmenu_shortcode") ); ?>
			<?php endif; ?>
		<?php endif; ?>

	</div><!-- header-wrapper -->

	<div <?php post_class(); ?> >
