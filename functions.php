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

/** Last Videos
 *  Register a Custom Video Post's
 */
function video_custom_post_init()   {  
  $labels = array(  
    'name' => _x('Videos', 'post type general name'),  
    'singular_name' => _x('Video', 'post type singular name'),  
    'add_new' => _x('Add New', 'video'),  
    'add_new_item' => __('Add New Video'),  
    'edit_item' => __('Edit Video'),  
    'new_item' => __('New Video'),  
    'view_item' => __('View Video'),  
    'search_items' => __('Search Videos'),  
    'not_found' =>  __('No videos found'),  
    'not_found_in_trash' => __('No videos found in Trash'),  
    'parent_item_colon' => '',  
    'menu_name' => 'Videos'  
  );
  
  $args = array(  
    'labels' => $labels,  
    'public' => true,  
    'publicly_queryable' => true,  
    'show_ui' => true,  
    'show_in_menu' => true,  
    'query_var' => true,  
    'rewrite' => true,  
    'capability_type' => 'post',  
    'has_archive' => true,  
    'hierarchical' => false,  
    'menu_position' => null,  
    'supports' => array('title','editor','author','thumbnail','excerpt','comments')  
  );  
   
  register_post_type('video',$args); 
}
add_action('init', 'video_custom_post_init');

/**
 * Update messages for custom video post
 */ 
function videos_updated_messages( $messages ) {  
  global $post, $post_ID;  
  
  $messages['video'] = array(  
    0 => '', // Unused. Messages start at index 1.  
    1 => sprintf( __('Video updated. <a href="%s">View video</a>'), esc_url( get_permalink($post_ID) ) ),  
    2 => __('Custom field updated.'),  
    3 => __('Custom field deleted.'),  
    4 => __('Video updated.'),  
    /* translators: %s: date and time of the revision */  
    5 => isset($_GET['revision']) ? sprintf( __('Video restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,  
    6 => sprintf( __('Video published. <a href="%s">View video</a>'), esc_url( get_permalink($post_ID) ) ),  
    7 => __('Video saved.'),  
    8 => sprintf( __('Video submitted. <a target="_blank" href="%s">Preview video</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),  
    9 => sprintf( __('Project scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview project</a>'),  
      // translators: Publish box date format, see http://php.net/date  
      date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),  
    10 => sprintf( __('Video draft updated. <a target="_blank" href="%s">Video project</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),  
  );  
  
  return $messages;  
}
add_filter('post_updated_messages', 'videos_updated_messages'); 

// Initialize New Taxonomy Labels  
$labels = array(  
    'name' => _x( 'Tags', 'taxonomy general name' ),  
    'singular_name' => _x( 'Tag', 'taxonomy singular name' ),  
    'search_items' =>  __( 'Search Types' ),  
    'all_items' => __( 'All Tags' ),  
    'parent_item' => __( 'Parent Tag' ),  
    'parent_item_colon' => __( 'Parent Tag:' ),  
    'edit_item' => __( 'Edit Tags' ),  
    'update_item' => __( 'Update Tag' ),  
    'add_new_item' => __( 'Add New Tag' ),  
    'new_item_name' => __( 'New Tag Name' ),  
);  
  
register_taxonomy('tag', array('video'), array(  
    'hierarchical' => false,  
    'labels' => $labels,  
    'show_ui' => true,  
    'query_var' => true,  
    'rewrite' => array( 'slug' => 'tag' ),  
));

/**
 * Add support for post thumbnails
 */
if (function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}

?>