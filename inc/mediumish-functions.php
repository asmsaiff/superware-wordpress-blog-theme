<?php
    function superware_skip_link_focus_fix() {
        // The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
    ?>
        <script>
            /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
        </script>
    <?php
    }
    add_action( 'wp_print_footer_scripts', 'superware_skip_link_focus_fix' );

