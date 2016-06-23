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




if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_modelo-fwb',
		'title' => 'Modelo FWB',
		'fields' => array (
			array (
				'key' => 'field_576bbc32792d0',
				'label' => 'Imagem de Fundo da Página',
				'name' => 'fwb_background_image',
				'type' => 'image',
				'instructions' => 'Selecione preferencialmente uma imagem com pelo menos 1920 x 1080px',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'large',
				'library' => 'uploadedTo',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'full-width-with-background.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}



?>
