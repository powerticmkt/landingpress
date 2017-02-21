<?php

    /* Header Shortcode
    -------------------------------------------------------- */
    function elementor_puzzle_header_custom($wp_customize){
        $wp_customize->add_section('elementor_pzl_header', array(
            'title'     => __('Cabeçalho do website', 'elementor-puzzle'),
            'priority'  => 140
        ));
        // Exibir Header?
        $wp_customize->add_setting('pzl_head_show', array(
            'default'   => 'No',
            'priority'  => 1
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pzl_head_show', array(
            'label'     => __('Exibir Cabeçalho?', 'elementor-puzzle'),
            'section'   => 'elementor_pzl_header',
            'settings'  => 'pzl_head_show',
            'type'      => 'select',
            'choices'   => array('No' => 'Não', 'Yes' => 'Sim')
        )));
        // Shortcode do Header
        $wp_customize->add_setting('pzl_head_shortcode', array(
            'default'   => 'Shortcode do Cabeçalho',
            'priority'  => 4
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pzl_head_shortcode', array(
            'label'     => __('Shortcode', 'elementor-puzzle'),
            'section'   => 'elementor_pzl_header',
            'settings'  => 'pzl_head_shortcode'
        )));
    }
    add_action( 'customize_register', 'elementor_puzzle_header_custom' );


    /* Menu Shortcode
    -------------------------------------------------------- */
    function elementor_puzzle_menu_custom($wp_customize){
        $wp_customize->add_section('elementor_pzl_menu', array(
            'title'     => __('Menu do website', 'elementor-puzzle'),
            'priority'  => 140
        ));
        // Exibir Header?
        $wp_customize->add_setting('pzl_menu_show', array(
            'default'   => 'No',
            'priority'  => 1
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pzl_menu_show', array(
            'label'     => __('Exibir Menu?', 'elementor-puzzle'),
            'section'   => 'elementor_pzl_menu',
            'settings'  => 'pzl_menu_show',
            'type'      => 'select',
            'choices'   => array('No' => 'Não', 'Yes' => 'Sim')
        )));
        // Shortcode do Header
        $wp_customize->add_setting('pzl_menu_shortcode', array(
            'default'   => 'Shortcode do Menu',
            'priority'  => 4
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pzl_menu_shortcode', array(
            'label'     => __('Shortcode', 'elementor-puzzle'),
            'section'   => 'elementor_pzl_menu',
            'settings'  => 'pzl_menu_shortcode'
        )));
        // Shortcode do Header
        $wp_customize->add_setting('pzl_menu_position', array(
            'default'   => 'After',
            'priority'  => 5
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pzl_menu_position', array(
            'label'     => __('Posição do Menu?', 'elementor-puzzle'),
            'section'   => 'elementor_pzl_menu',
            'settings'  => 'pzl_menu_position',
            'type'      => 'select',
            'choices'   => array('Before' => 'Antes do Cabeçalho', 'After' => 'Após o Cabeçalho')
        )));
    }
    add_action( 'customize_register', 'elementor_puzzle_menu_custom' );
