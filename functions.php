<?php
    get_template_part('lib/mediumish-nav');

    if(!function_exists('mediumish_theme_setup')) {
        function mediumish_theme_setup() {
            // Load Theme TextDomain
            load_theme_textdomain('mediumish');
    
            // Theme Supports
            add_theme_support('title-tag');
            add_theme_support('description');
            add_theme_support('widgets');
            add_theme_support('post-thumbnails');
            add_theme_support('custom-header');
            add_theme_support('custom-logo');
            add_theme_support('custom-background');
            add_theme_support( 'automatic-feed-links' );
    
            add_theme_support(
                'html5',
                array(
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                    'style',
                    'script',
                    'navigation-widgets',
                )
            );
    
            register_nav_menus(array(
                'primary-menu'              =>  __('Primary Menu', 'mediumish'),
            ));
        }
        add_action('after_setup_theme', 'mediumish_theme_setup');
    }