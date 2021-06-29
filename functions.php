<?php
/**
 * datasoft
 *
 * @package datasoft
 */
/**
 * Required WordPress variable.
 */
if (!isset($content_width)) {
	$content_width = 1170;
}
add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1920, 607, true ); // default Post Thumbnail dimensions (cropped)
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
}
$args = array(
    'name'          => __( 'Main Sidebar', 'DataSoft' ),
    'id'            => 'sidebar-1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
);
register_sidebar( $args );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

add_filter( "single_template", "get_custom_cat_template" ) ;

/* Custom Post Type Start */
function create_posttype()
{
	register_post_type(
		'menu',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('menu'),
				'singular_name' => __('menu')
			),
			'public' => true,
			'has_archive' => false,
			'rewrite' => array('slug' => 'menu'),
		)
	);
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');
		/* Custom Post Type End */