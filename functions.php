<?php


// External modules/files
//
// ------------------------------------





// Functions
//
// ------------------------------------


// Header scripts
function header_scripts() {
  if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-1.12.4.min.js', array(), false);
     wp_enqueue_script('jquery');

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
    'primary' => __('Primary Menu', 'bootpress')
  ));
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
