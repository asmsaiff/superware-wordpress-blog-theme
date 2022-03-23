<?php
    function mediumish_customizer_settings( $wp_customize ) {
        /**
         * Other Controls
         */
        $wp_customize->add_section( 'mediumish_footer', array(
            'title'    => __( 'Mediumish Footer', 'mediumish' ),
            'priority' => '10',
            'capability' => 'edit_theme_options',
        ) );
        
        $wp_customize->add_setting('mediumish_footer_left_widget_show_setting', array(
            'default'           => 1,
            'capability'        => 'edit_theme_options',
            'transport'         => 'refresh',
            'type'              => 'theme_mod',
            'sanitize_callback' => function( $input ) {
                return ( ( isset( $input ) && true == $input ) ? true : false );
            }
        ));
        $wp_customize->add_control('mediumish_footer_left_widget_show_ctrl', array(
            'label'             =>  __('Show footer left widget area', 'mediumish'),
            'section'           =>  'mediumish_footer',
            'settings'          =>  'mediumish_footer_left_widget_show_setting',
            'type'              =>  'checkbox'
        ));

        $wp_customize->add_setting('mediumish_footer_right_widget_show_setting', array(
            'default'           => 1,
            'capability'        => 'edit_theme_options',
            'transport'         => 'refresh',
            'type'              => 'theme_mod',
            'sanitize_callback' => function( $input ) {
                return ( ( isset( $input ) && true == $input ) ? true : false );
            }
        ));
        $wp_customize->add_control('mediumish_footer_right_widget_show_ctrl', array(
            'label'             =>  __('Show footer left widget area', 'mediumish'),
            'section'           =>  'mediumish_footer',
            'settings'          =>  'mediumish_footer_right_widget_show_setting',
            'type'              =>  'checkbox'
        ));

        /**
         * Copyright Text
         */
        $wp_customize->add_setting('mediumish__copyright_text_settings', array(
            'capability'        => 'edit_theme_options',
            'transport'         => 'refresh',
            'type'              => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('mediumish__copyright_text_ctrl', array(
            'label'             =>  __('Copyright Text', 'mediumish'),
            'section'           =>  'mediumish_footer',
            'settings'          =>  'mediumish__copyright_text_settings',
            'type'              =>  'textarea',
        ));

        /**
         * Right Text
         */
        $wp_customize->add_setting('mediumish__right_text_settings', array(
            'capability'        => 'edit_theme_options',
            'transport'         => 'refresh',
            'type'              => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('mediumish__right_text_ctrl', array(
            'label'             =>  __('Right Side Text', 'mediumish'),
            'section'           =>  'mediumish_footer',
            'settings'          =>  'mediumish__right_text_settings',
            'type'              =>  'textarea',
        ));
    }
    
    add_action( 'customize_register', 'mediumish_customizer_settings' );