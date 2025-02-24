<?php
function bma_theme_setup() {
    add_theme_support("menus");

    register_nav_menus([
        "primary" => __("Primary Menu", "block-music-academy"),
    ]);
}
add_action("after_setup_theme", "bma_theme_setup");
?>
