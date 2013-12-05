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

/** Register Widgets into our theme
 *  Footer widget area and sidebar widget area
 */
function footer_widgets_init() {

	register_sidebar( array(
		'name' => __('Home footer left'),
                'description' => __('The widgets in this area will be shown on the left bottom side of the footer'),
		'id' => 'footer-left',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
        
        register_sidebar( array(
		'name' => __('Home footer right'),
                'description' => __('The widgets in this area will be shown on the right bottom side of the footer'),
		'id' => 'footer-right',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'footer_widgets_init' );

?>