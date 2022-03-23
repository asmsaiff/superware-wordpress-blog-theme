        <div class="footer mt-0 py-3">
            <div class="container">
                <?php
                    if(get_theme_mod("mediumish_footer_left_widget_show_setting", "1")) :
                ?>
                <p class="float-sm-left mb-0">
                    <?php
                        echo esc_html(get_theme_mod('mediumish__copyright_text_settings'));
                    ?>
                </p>
                <?php else: echo "@ Mediumish | All Right Reserved";
                    endif;

                    if(get_theme_mod("mediumish_footer_right_widget_show_setting", "1")) :
                ?>
                <p class="float-sm-right mb-0">
                    <?php
                        echo esc_html(get_theme_mod('mediumish__right_text_settings'));
                    ?>
                </p>
                <?php
                    else: echo 'Developed by <a href="https://saifullah.co/">Saifullah Siddique</a>';
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