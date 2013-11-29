<?php
/* SoyMinero Theme
 * Functions file
 */

/* Register Custom Navigation Walker
 * Fix for Bootstrap 3.0.0 Wordpress Theme custom menus
 */
require_once('lib/wp_bootstrap_navwalker.php');

function soyminero_menu() {
    $menus = array(
        "header-menu"  => __("Header Menu"),
        "sidebar-menu" => __("Sidebar Menu")
    );
    register_nav_menus($menus);
}

add_action("init", "soyminero_menu");

?>