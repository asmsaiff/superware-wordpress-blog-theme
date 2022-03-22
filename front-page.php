<?php
    get_header();
?>

    <div class="container">
        <div class="mainheading">
            <h1 class="sitetitle">
                <?php bloginfo( 'name' ); ?>
            </h1>
            <p class="lead">
                <?php bloginfo( 'description' ) ?>
            </p>
        </div>
        
        <?php
            get_template_part( '/template-parts/mediumish-featured', 'post' );
            get_template_part( '/template-parts/mediumish-all', 'post' );
        ?>

<?php
    get_footer();