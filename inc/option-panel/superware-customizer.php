<?php
    function superware_customizer_settings( $wp_customize ) {
        /**
         * Other Controls
         */
        $wp_customize->add_section( 'superware_footer', array(
            'title'    => __( 'SuperWare Footer', 'superware' ),
            'priority' => '10',
            'capability' => 'edit_theme_options',
        ) );
        
        $wp_customize->add_setting('superware_footer_left_widget_show_setting', array(
            'default'           => 1,
            'capability'        => 'edit_theme_options',
            'transport'         => 'refresh',
            'type'              => 'theme_mod',
            'sanitize_callback' => function( $input ) {
                return ( ( isset( $input ) && true == $input ) ? true : false );
            }
        ));
        $wp_customize->add_control('superware_footer_left_widget_show_ctrl', array(
            'label'             =>  __('Show footer left widget area', 'superware'),
            'section'           =>  'superware_footer',
            'settings'          =>  'superware_footer_left_widget_show_setting',
            'type'              =>  'checkbox'
        ));

        $wp_customize->add_setting('superware_footer_right_widget_show_setting', array(
            'default'           => 1,
            'capability'        => 'edit_theme_options',
            'transport'         => 'refresh',
            'type'              => 'theme_mod',
            'sanitize_callback' => function( $input ) {
                return ( ( isset( $input ) && true == $input ) ? true : false );
            }
        ));
        $wp_customize->add_control('superware_footer_right_widget_show_ctrl', array(
            'label'             =>  __('Show footer left widget area', 'superware'),
            'section'           =>  'superware_footer',
            'settings'          =>  'superware_footer_right_widget_show_setting',
            'type'              =>  'checkbox'
        ));

        /**
         * Copyright Text
         */
        $wp_customize->add_setting('superware__copyright_text_settings', array(
            'capability'        => 'edit_theme_options',
            'transport'         => 'refresh',
            'type'              => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('superware__copyright_text_ctrl', array(
            'label'             =>  __('Copyright Text', 'superware'),
            'section'           =>  'superware_footer',
            'settings'          =>  'superware__copyright_text_settings',
            'type'              =>  'textarea',
        ));

        /**
         * Right Text
         */
        $wp_customize->add_setting('superware__right_text_settings', array(
            'capability'        => 'edit_theme_options',
            'transport'         => 'refresh',
            'type'              => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('superware__right_text_ctrl', array(
            'label'             =>  __('Right Side Text', 'superware'),
            'section'           =>  'superware_footer',
            'settings'          =>  'superware__right_text_settings',
            'type'              =>  'textarea',
        ));




        $wp_customize->add_section( 'superware_general', array(
            'title'    => __( 'SuperWare Theme Options', 'superware' ),
            'priority' => '9',
            'capability' => 'edit_theme_options',
        ) );
        
        $wp_customize->add_setting('superware_page_title_area_show_settings', array(
            'default'           => 1,
            'capability'        => 'edit_theme_options',
            'transport'         => 'refresh',
            'type'              => 'theme_mod',
            'sanitize_callback' => function( $input ) {
                return ( ( isset( $input ) && true == $input ) ? true : false );
            }
        ));
        $wp_customize->add_control('superware_page_title_area_show_ctrl', array(
            'label'             =>  __('Show Page Title', 'superware'),
            'section'           =>  'superware_general',
            'settings'          =>  'superware_page_title_area_show_settings',
            'type'              =>  'checkbox'
        ));
    }
    
    add_action( 'customize_register', 'superware_customizer_settings' );