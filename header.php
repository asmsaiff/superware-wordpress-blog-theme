<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Begin Nav ================================================== -->
    <nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
        
        <div class="container navContainer ml-0 ml-sm-auto">
            <button class="navbar-toggler navbar-toggler-right shadow-none border-0" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
                <?php
                    if(current_theme_supports('custom-logo')) {
                        $mediumish_custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $mediumish_custom_logo_id , 'full' );

                        if($logo) {
                ?>
                <img src="<?php echo esc_url($logo[0]); ?>" class="img-fluid" alt="">
                <?php
                        } else {
                ?>
                <h1 class="sitetitle">
                    <?php _e('m', 'mediumish'); ?>
                </h1>
                <?php
                        }
                    }
                ?>
            </a>
            <div class="collapse navbar-collapse w-auto ml-auto" id="navbarsExampleDefault">
                <?php
                    if(has_nav_menu('primary-menu')) {
                        wp_nav_menu(array(
                            'theme_location'            =>  'primary-menu',
                            'menu_class'                =>  '',
                            'menu-container'            =>  'false',
                            'fallback_cb'               => 'mediumish_wp_nav_menu_walker::fallback',
                            'items_wrap'                => '<ul id="%1$s" class="navbar-nav ml-auto %2$s">%3$s</ul>',
                            'depth'                     => 2,
                            'walker'                    => new mediumish_wp_nav_menu_walker(),
                        ));
                    } else {
                        echo '<a class="text-primary text-sm nav-menu-create-notice" href="'.home_url('/wp-admin/nav-menus.php').'">Create nav menu first</a>';
                    }

                    get_template_part( "/template-parts/searchForm" );
                ?>
            </div>
        </div>
    </nav>
    <!-- End Nav -->