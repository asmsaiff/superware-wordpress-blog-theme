<?php
    require_once(get_theme_file_path("lib/superware-nav.php"));
    get_template_part("inc/superware-plugins");
    get_template_part("inc/superware-functions");
    get_template_part("inc/option-panel/superware-customizer");
    get_template_part("inc/superware-featured-post-meta");

    if ( site_url() == "http://localhost/superware" ) {
        define( "VERSION", time() );
    } else {
        define( "VERSION", wp_get_theme()->get( "Version" ) );
    }

    if(!function_exists("superware_theme_setup")) {
        function superware_theme_setup() {
            // Load Theme TextDomain
            load_theme_textdomain("superware");
    
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
                "primary-menu"              =>  __("Primary Menu", "superware"),
            ));
        }
        add_action("after_setup_theme", "superware_theme_setup");
    }

    function superware_assets() {
        // Stylesheet Enqueue
        wp_enqueue_style("superware-google-font", "//fonts.googleapis.com/css?family=Righteous");
        wp_enqueue_style("superware-font-awesome-css", get_template_directory_uri() . "/assets/css/font-awesome.css");
        wp_enqueue_style("superware-bootstrap-old-css", get_template_directory_uri() . "/assets/css/bootstrap.css");
        wp_enqueue_style("superware-main-css", get_template_directory_uri() . "/assets/css/superware.css");
        wp_enqueue_style("superware-theme-css", get_stylesheet_uri());

        // Scripts Enqueue
        wp_enqueue_script( 'comment-reply' );
        wp_enqueue_script( "superware-tether-js", get_template_directory_uri() . "/assets/js/tether.js", null, VERSION, true );
        wp_enqueue_script( "superware-bootstrap-old-js", get_template_directory_uri() . "/assets/js/bootstrap.js", array("jquery"), VERSION, true );
        wp_enqueue_script( "superware-viewport-js", get_template_directory_uri() . "/assets/js/ie10-viewport-bug-workaround.js", null, VERSION, true );
        wp_enqueue_script( "superware-js", get_template_directory_uri() . "/assets/js/superware.js", array("jquery"), VERSION, true );
    }
    add_action( "wp_enqueue_scripts", "superware_assets" );

    function superware_sidebar() {
        register_sidebar( array(
            'name'          => __( 'Page Sidebar', 'superware' ),
            'id'            => 'page_sidebar',
            'description'   => __( 'Default page sidebar what will display in page if not select full width layout', 'superware' ),
            'before_widget' => '<div id="%1$s" class="sidebar-area rounded-3 p-4">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="mb-1">',
            'after_title'   => '</h4>',
        ));
    }
    add_action('widgets_init', 'superware_sidebar');