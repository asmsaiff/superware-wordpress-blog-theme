<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
    <title>Mediumish - A Medium style template by WowThemes.net</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/mediumish.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body>
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
                            'fallback_cb'               => '__return_false',
                            'items_wrap'                => '<ul id="%1$s" class="navbar-nav ml-auto %2$s">%3$s</ul>',
                            'depth'                     => 2,
                            'walker'                    => new mediumish_wp_nav_menu_walker(),
                        ));
                    } else {
                        echo '<a class="text-primary text-sm nav-menu-create-notice" href="'.home_url('/wp-admin/nav-menus.php').'">Create nav menu first</a>';
                    }
                ?>

                <form class="form-inline my-2 my-lg-0 d-none d-lg-block position-relative">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                </form>
            </div>
        </div>
    </nav>
    <!-- End Nav -->