        <div class="footer mt-0 py-3">
            <div class="container">
                <?php
                    if(get_theme_mod("mediumish_footer_left_widget_show_setting", "1")) :
                ?>
                <p class="float-sm-left mb-0">
                    <?php
                        echo get_theme_mod('mediumish__copyright_text_settings', '@ Mediumish | All Right Reserved');
                    ?>
                </p>
                <?php
                    endif;

                    if(get_theme_mod("mediumish_footer_right_widget_show_setting", "1")) :
                ?>
                <p class="float-sm-right mb-0">
                    <?php
                        echo get_theme_mod('mediumish__right_text_settings', 'Developed by <a href="https://saifullah.co/">Saifullah Siddique</a>');
                    ?>
                </p>
                <?php
                    endif;
                ?>
            </div>
            <div class="clearfix">
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>
</body>
</html>