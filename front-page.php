<?php
    get_header();
?>

    <div class="container <?php echo esc_attr(get_theme_mod("superware_page_title_area_show_settings") ? "" : "mt-4"); ?>" id="content">
        <?php
            if(get_theme_mod("superware_page_title_area_show_settings", 1)) :
        ?>
        <div class="mainheading">
            <h1 class="sitetitle">
                <?php bloginfo( 'name' ); ?>
            </h1>
            <p class="lead">
                <?php bloginfo( 'description' ) ?>
            </p>
        </div>
        <?php
            endif;

            get_template_part( '/template-parts/superware-featured', 'post' );
            get_template_part( '/template-parts/superware-all', 'post' );
        ?>

<?php
    get_footer();