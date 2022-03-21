<?php
    require_once(get_theme_file_path("lib/mediumish-nav.php"));
    get_template_part("inc/mediumish-plugins");

    if(!function_exists("mediumish_theme_setup")) {
        function mediumish_theme_setup() {
            // Load Theme TextDomain
            load_theme_textdomain("mediumish");
    
            // Theme Supports
            add_theme_support("title-tag");
            add_theme_support("description");
            add_theme_support("widgets");
            add_theme_support("post-thumbnails");
            add_theme_support("custom-header");
            add_theme_support("custom-logo");
            add_theme_support("custom-background");
            add_theme_support( "automatic-feed-links" );
    
            add_theme_support(
                "html5",
                array(
                    "comment-form",
                    "comment-list",
                    "gallery",
                    "caption",
                    "style",
                    "script",
                    "navigation-widgets",
                )
            );
    
            register_nav_menus(array(
                "primary-menu"              =>  __("Primary Menu", "mediumish"),
            ));
        }
        add_action("after_setup_theme", "mediumish_theme_setup");
    }

    function mediumish_assets() {
        // Stylesheet Enqueue
        wp_enqueue_style("mediumish-google-font", "//fonts.googleapis.com/css?family=Righteous");
        wp_enqueue_style("mediumish-font-awesome-css", get_template_directory_uri() . "/assets/css/font-awesome.css");
        wp_enqueue_style("mediumish-bootstrap-old-css", get_template_directory_uri() . "/assets/css/bootstrap.css");
        wp_enqueue_style("mediumish-main-css", get_template_directory_uri() . "/assets/css/mediumish.css");
        wp_enqueue_style("mediumish-theme-css", get_stylesheet_uri());

        // Scripts Enqueue
        wp_enqueue_script( "tether-js", get_template_directory_uri() . "/assets/js/tether.js", null, true );
        wp_enqueue_script( "bootstrap-old-js", get_template_directory_uri() . "/assets/js/bootstrap.js", array("jquery"), true );
        wp_enqueue_script( "mediumish-js", get_template_directory_uri() . "/assets/js/mediumish.js", array("jquery"), true );
        wp_enqueue_script( "viewport-js", get_template_directory_uri() . "/assets/js/ie10-viewport-bug-workaround.js", null, true );
    }
    add_action( "wp_enqueue_scripts", "mediumish_assets" );