<?php


// External modules/files
//
// ------------------------------------


// Register Bootstrap Navigation Walker
include 'navwalker.php';



// Functions
//
// ------------------------------------


// Hide WP Admin bar
show_admin_bar(false);


// Header scripts
function header_scripts() {
  if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
    wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), false);
     wp_enqueue_script('scripts');
  }
}


// Load styles
function styles() {
  wp_register_style('bootpress', get_template_directory_uri() . '/style.css', array(), '1.0');
   wp_enqueue_style('bootpress');
}


// Register navigation
function navigation() {
  register_nav_menus(array(
    'nav-header' => __('Header Navigation', 'bootpress')
  ));
}

// Register sidebar(s)
function sidebars() {
  register_sidebar(array(
    'id' => 'sidebar',
    'name' => __( 'Sidebar', 'bootpress' ),
    'description' => __( 'This is the default sidebar.', 'bootpress' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  ));
}



// Filters
//
// ------------------------------------


function body_classes( $classes ) {

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar' )) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}



// Custom post types
//
// ------------------------------------





// Queue functions
//
// ------------------------------------

// Add Actions
add_action('wp_enqueue_scripts', 'styles'); // Load stylesheet
add_action('init', 'header_scripts'); // Load custom scripts
add_action('init', 'navigation'); // Load WP navigation
add_action('widgets_init', 'sidebars' ); // Load WP sidebar(s)

// Add Filters
add_filter( 'body_class', 'body_classes' );
