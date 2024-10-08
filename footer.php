        <div class="footer mt-0 py-3">
            <div class="container px-0">
                <?php
                    if(get_theme_mod("superware_footer_left_widget_show_setting", 1)) :
                ?>
                <p class="float-sm-left mb-0">
                    <?php
                        echo esc_html(get_theme_mod('superware__copyright_text_settings', '&copy; SuperWare&trade; | All Right Reserved'));
                    ?>
                </p>
                <?php
                    endif;

                    if(get_theme_mod("superware_footer_right_widget_show_setting", 1)) :
                ?>
                <p class="float-sm-right mb-0">
                    <?php
                        if(get_theme_mod('superware__right_text_settings')) {
                            echo esc_html(get_theme_mod('superware__right_text_settings'));
                        } else {
                            echo 'Developed by <a href="https://saif.im" target="_blank" >S. Saif</a>';
                        }
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
