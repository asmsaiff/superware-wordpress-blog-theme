<?php
    require_once(get_theme_file_path("lib/mediumish-nav.php"));
    get_template_part("inc/mediumish-plugins");
    get_template_part("inc/mediumish-functions");

    if ( site_url() == "http://localhost/mediumish" ) {
        define( "VERSION", time() );
    } else {
        define( "VERSION", wp_get_theme()->get( "Version" ) );
    }

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
        wp_enqueue_script( 'comment-reply' );
        wp_enqueue_script( "tether-js", get_template_directory_uri() . "/assets/js/tether.js", null, VERSION, true );
        wp_enqueue_script( "bootstrap-old-js", get_template_directory_uri() . "/assets/js/bootstrap.js", array("jquery"), VERSION, true );
        wp_enqueue_script( "viewport-js", get_template_directory_uri() . "/assets/js/ie10-viewport-bug-workaround.js", null, VERSION, true );
        wp_enqueue_script( "mediumish-js", get_template_directory_uri() . "/assets/js/mediumish.js", array("jquery"), VERSION, true );
    }
    add_action( "wp_enqueue_scripts", "mediumish_assets" );

    function mediumish_skip_link_focus_fix() {
        // The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
    ?>
        <script>
            /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
        </script>
    <?php
    }
    add_action( 'wp_print_footer_scripts', 'mediumish_skip_link_focus_fix' );

    function mediumish_search_form( $form ) {
        $homedir      = home_url( "/" );
        $placeholder = __( "Search", "mediumish" );
        $post_type    = <<<PT
    <input type="hidden" name="post_type" value="post">
    PT;
    
        if ( is_post_type_archive( 'book' ) ) {
            $post_type = <<<PT
    <input type="hidden" name="post_type" value="book">
    PT;
        }
    
    
        $newform = <<<FORM
            <form class="form-inline my-2 my-lg-0 d-none d-lg-block position-relative" role="search" method="get" action="{$homedir}">
                <input class="form-control mr-sm-2" type="search" name="s" placeholder="{$placeholder}">
                {$post_type}
            </form>
    FORM;
    
        return $newform;
    }
    
    
    add_filter( "get_search_form", "mediumish_search_form" );