<?php

    /* Header Shortcode
    -------------------------------------------------------- */
    function elementor_puzzle_header_custom($wp_customize){
        $wp_customize->add_section('elementor_pzl_header', array(
            'title'     => __('Puzzle Header', 'elementor-puzzle'),
            'priority'  => 140
        ));
        // Exibir Header?
        $wp_customize->add_setting('pzl_head_show', array(
            'default'   => 'No',
            'priority'  => 1
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pzl_head_show', array(
            'label'     => __('Show Header', 'elementor-puzzle'),
            'section'   => 'elementor_pzl_header',
            'settings'  => 'pzl_head_show',
            'type'      => 'select',
            'choices'   => array('No' => __('No', 'elementor-puzzle'), 'Yes' => __('Yes', 'elementor-puzzle'))
        )));
        // Shortcode do Header
        $wp_customize->add_setting('pzl_head_shortcode', array(
            'default'   => '',
            'priority'  => 4
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pzl_head_shortcode', array(
            'label'     => __('Header Shortcode', 'elementor-puzzle'),
            'section'   => 'elementor_pzl_header',
            'settings'  => 'pzl_head_shortcode'
        )));
    }
    add_action( 'customize_register', 'elementor_puzzle_header_custom' );


    /* Header Menu Shortcode
    -------------------------------------------------------- */
    function elementor_puzzle_header_menu_custom($wp_customize){
        $wp_customize->add_section('elementor_pzl_hmenu', array(
            'title'     => __('Puzzle Header Menu', 'elementor-puzzle'),
            'priority'  => 140
        ));
        // Exibir Header Menu?
        $wp_customize->add_setting('pzl_hmenu_show', array(
            'default'   => 'No',
            'priority'  => 1
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pzl_hmenu_show', array(
            'label'     => __('Show Menu', 'elementor-puzzle'),
            'section'   => 'elementor_pzl_hmenu',
            'settings'  => 'pzl_hmenu_show',
            'type'      => 'select',
            'choices'   => array('No' => 'No','Yes' => 'Yes')
        )));
        // Shortcode do Header Menu
        $wp_customize->add_setting('pzl_hmenu_shortcode', array(
            'default'   => '',
            'priority'  => 4
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pzl_hmenu_shortcode', array(
            'label'     => __('Shortcode', 'elementor-puzzle'),
            'section'   => 'elementor_pzl_hmenu',
            'settings'  => 'pzl_hmenu_shortcode'
        )));
        // Posição do Header Menu
        $wp_customize->add_setting('pzl_hmenu_position', array(
            'default'   => 'After',
            'priority'  => 5
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pzl_hmenu_position', array(
            'label'     => __('Posição do Menu?', 'elementor-puzzle'),
            'section'   => 'elementor_pzl_hmenu',
            'settings'  => 'pzl_hmenu_position',
            'type'      => 'select',
            'choices'   => array( 'Before' => 'Before Header', 'After' => 'After Header')
        )));
    }
    add_action( 'customize_register', 'elementor_puzzle_header_menu_custom' );



    /* Footer Shortcode
    -------------------------------------------------------- */
    function elementor_puzzle_footer_custom($wp_customize){
        $wp_customize->add_section('elementor_pzl_footer', array(
            'title'     => __('Puzzle Footer', 'elementor-puzzle'),
            'priority'  => 140
        ));
        // Exibir Footer?
        $wp_customize->add_setting('pzl_footer_show', array(
            'default'   => 'No',
            'priority'  => 1
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pzl_footer_show', array(
            'label'     => __('Show Footer', 'elementor-puzzle'),
            'section'   => 'elementor_pzl_footer',
            'settings'  => 'pzl_footer_show',
            'type'      => 'select',
            'choices'   => array('No' => 'No', 'Yes' => 'Yes')
        )));
        // Shortcode do Footer
        $wp_customize->add_setting('pzl_footer_shortcode', array(
            'default'   => '',
            'priority'  => 4
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pzl_footer_shortcode', array(
            'label'     => __('Footer Shortcode', 'elementor-puzzle'),
            'section'   => 'elementor_pzl_footer',
            'settings'  => 'pzl_footer_shortcode'
        )));
    }
    add_action( 'customize_register', 'elementor_puzzle_footer_custom' );


    /* Footer Menu Shortcode
    -------------------------------------------------------- */
    function elementor_puzzle_footer_menu_custom($wp_customize){
        $wp_customize->add_section('elementor_pzl_fmenu', array(
            'title'     => __('Puzzle Footer Menu', 'elementor-puzzle'),
            'priority'  => 140
        ));
        // Exibir Footer Menu?
        $wp_customize->add_setting('pzl_fmenu_show', array(
            'default'   => 'No',
            'priority'  => 1
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pzl_fmenu_show', array(
            'label'     => __('Show Footer Menu?', 'elementor-puzzle'),
            'section'   => 'elementor_pzl_fmenu',
            'settings'  => 'pzl_fmenu_show',
            'type'      => 'select',
            'choices'   => array( 'No' => 'No', 'Yes' => 'Yes' )
        )));
        // Shortcode do Footer Menu
        $wp_customize->add_setting('pzl_fmenu_shortcode', array(
            'default'   => '',
            'priority'  => 4
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pzl_fmenu_shortcode', array(
            'label'     => __('Shortcode', 'elementor-puzzle'),
            'section'   => 'elementor_pzl_fmenu',
            'settings'  => 'pzl_fmenu_shortcode'
        )));
        // Posição do Footer Menu
        $wp_customize->add_setting('pzl_fmenu_position', array(
            'default'   => 'After',
            'priority'  => 5
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'pzl_fmenu_position', array(
            'label'     => __('Menu Position', 'elementor-puzzle'),
            'section'   => 'elementor_pzl_fmenu',
            'settings'  => 'pzl_fmenu_position',
            'type'      => 'select',
            'choices'   => array('Before' => 'Before Footer', 'After' => 'After Footer')
        )));
    }
    add_action( 'customize_register', 'elementor_puzzle_footer_menu_custom' );
