<?php

/**
 * 
 *
 * @package 
 */
/**
 * Required WordPress variable.
 */
if (!isset($content_width)) {
    $content_width = 1170;
}
add_theme_support('post-thumbnails');
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1920, 607, true); // default Post Thumbnail dimensions (cropped)
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size('category-thumb', 300, 9999); //300 pixels wide (and unlimited height)
}


@ini_set('upload_max_size', '64M');
@ini_set('post_max_size', '64M');
@ini_set('max_execution_time', '300');
add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);
function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}

add_filter("single_template", "get_custom_cat_template");







// Our custom post type function
function create_posttype() {
 
    register_post_type( 'movies',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Movies' ),
                'singular_name' => __( 'Movie' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'movies'),
            'show_in_rest' => true,
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );



/*
* Creating a function to create our CPT
*/

function custom_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('Movies', 'Post Type General Name', 'twentytwenty'),
        'singular_name'       => _x('Movie', 'Post Type Singular Name', 'twentytwenty'),
        'menu_name'           => __('Movies', 'twentytwenty'),
        'parent_item_colon'   => __('Parent Movie', 'twentytwenty'),
        'all_items'           => __('All Movies', 'twentytwenty'),
        'view_item'           => __('View Movie', 'twentytwenty'),
        'add_new_item'        => __('Add New Movie', 'twentytwenty'),
        'add_new'             => __('Add New', 'twentytwenty'),
        'edit_item'           => __('Edit Movie', 'twentytwenty'),
        'update_item'         => __('Update Movie', 'twentytwenty'),
        'search_items'        => __('Search Movie', 'twentytwenty'),
        'not_found'           => __('Not Found', 'twentytwenty'),
        'not_found_in_trash'  => __('Not found in Trash', 'twentytwenty'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('movies', 'twentytwenty'),
        'description'         => __('Movie news and reviews', 'twentytwenty'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('genres'),
        /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('movies', $args);
}

/* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */

add_action('init', 'custom_post_type', 0);

function filter_secondary_title_change_default_setting($original_default_settings) {
    /** Naming variables to keep things clear */
    $default_settings = $original_default_settings;

    /** Defining the new title format */
    $default_settings["secondary_title_title_format"] = "%title% (%secondary_title%)";

    /** Return modified array back to the main function */
    return (array)$default_settings;
 }

 add_filter("secondary_title_get_default_settings", "filter_secondary_title_change_default_setting");
