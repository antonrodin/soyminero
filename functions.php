<?php
/* SoyMinero Theme
 * Functions file
 */

function soyminero_menu() {
    $menus = array(
        "header-menu"  => __("Header Menu"),
        "sidebar-menu" => __("Sidebar Menu")
    );
    register_nav_menus($menus);
}

add_action("init", "soyminero_menu");

?>