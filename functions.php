<?php
/* SoyMinero Theme
 * Functions file
 */

/* Register Custom Navigation Walker
 * Fix for Bootstrap 3.0.0 Wordpress Theme custom menus
 */
require_once('lib/wp_bootstrap_navwalker.php');
require_once('lib/wp_adsense_publicidad.php');

/* Custom widgets for wordpress theme
 */
require_once('widgets/exchange.php');

function soyminero_menu() {
    $menus = array(
        "header-menu"  => __("Header Menu", 'soyminero'),
        "sidebar-menu" => __("Sidebar Menu", 'soyminero')
    );
    register_nav_menus($menus);
}
add_action("init", "soyminero_menu");

/** Register Widgets into our theme
 *  Left Widget Area
 *  Footer widget area and sidebar widget area
 */
function soyminero_widgets_init() {

        register_sidebar( array(
        'name' => __('Sidebar right', 'soyminero'),
                'description' => __('The widgets in this area will be shown on the right side', 'soyminero'),
        'id' => 'sidebar-right',
        'before_widget' => '<div class="sm-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
    
    register_sidebar( array(
        'name' => __('Home footer left', 'soyminero'),
                'description' => __('The widgets in this area will be shown on the left bottom side of the footer', 'soyminero'),
        'id' => 'footer-left',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
        
        register_sidebar( array(
        'name' => __('Home footer right', 'soyminero'),
                'description' => __('The widgets in this area will be shown on the right bottom side of the footer', 'soyminero'),
        'id' => 'footer-right',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'soyminero_widgets_init' );

/** Last Videos
 *  Register a Custom Video Post's
 */
function video_custom_post_init()   {  
  $labels = array(  
    'name' => _x('Videos', 'post type general name', 'soyminero'),  
    'singular_name' => _x('Video', 'post type singular name', 'soyminero'),  
    'add_new' => _x('Add New', 'video', 'soyminero'),  
    'add_new_item' => __('Add New Video', 'soyminero'),  
    'edit_item' => __('Edit Video', 'soyminero'),  
    'new_item' => __('New Video', 'soyminero'),  
    'view_item' => __('View Video', 'soyminero'),  
    'search_items' => __('Search Videos', 'soyminero'),  
    'not_found' =>  __('No videos found', 'soyminero'),  
    'not_found_in_trash' => __('No videos found in Trash', 'soyminero'),  
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
    2 => __('Custom field updated.', 'soyminero'),  
    3 => __('Custom field deleted.', 'soyminero'),  
    4 => __('Video updated.', 'soyminero'),  
    /* translators: %s: date and time of the revision */  
    5 => isset($_GET['revision']) ? sprintf( __('Video restored to revision from %s', 'soyminero'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,  
    6 => sprintf( __('Video published. <a href="%s">View video</a>', 'soyminero'), esc_url( get_permalink($post_ID) ) ),  
    7 => __('Video saved.', 'soyminero'),  
    8 => sprintf( __('Video submitted. <a target="_blank" href="%s">Preview video</a>', 'soyminero'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),  
    9 => sprintf( __('Video scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview project</a>', 'soyminero'),  
      // translators: Publish box date format, see http://php.net/date  
      date_i18n( __( 'M j, Y @ G:i' , 'soyminero'), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),  
    10 => sprintf( __('Video draft updated. <a target="_blank" href="%s">Video project</a>', 'soyminero'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),  
  );  
  
  return $messages;  
}
add_filter('post_updated_messages', 'videos_updated_messages'); 

/**
 * Add theme support:
 */
if (function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'custom-header' );
        add_theme_support( 'custom-background' );
}

/**
 * Register custom widgets
 */
function soyminero_register_widgets() {
    register_widget( 'ExchangeSoyminero' );
}
add_action( 'widgets_init', 'soyminero_register_widgets' );

/**
 * Max content width of images, videos... 
 */
if (!isset($content_width)) { $content_width = 1024; }


/**
 * Apply theme's stylesheet to the visual editor.
 *
 * @uses add_editor_style() Links a stylesheet to visual editor
 * @uses get_stylesheet_uri() Returns URI of theme stylesheet
 */
function soyminero_add_editor_styles() {
    add_editor_style(get_stylesheet_uri());
}
add_action( 'init', 'soyminero_add_editor_styles' );

?>