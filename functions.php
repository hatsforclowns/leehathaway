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


// Site favicon
function favicon() {
  $base = get_template_directory_uri();
echo '
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="'.$base.'/'.$base.'/img/icons/apple-touch-icon-57x57.png?v=2" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="'.$base.'/img/icons/apple-touch-icon-114x114.png?v=2" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="'.$base.'/img/icons/apple-touch-icon-72x72.png?v=2" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="'.$base.'/img/icons/apple-touch-icon-144x144.png?v=2" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="'.$base.'/img/icons/apple-touch-icon-60x60.png?v=2" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="'.$base.'/img/icons/apple-touch-icon-120x120.png?v=2" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="'.$base.'/img/icons/apple-touch-icon-76x76.png?v=2" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="'.$base.'/img/icons/apple-touch-icon-152x152.png?v=2" />
<link rel="icon" type="image/x-icon" href="'.$base.'/img/icons/favicon.ico?v=2" />
<link rel="icon" type="image/png" href="'.$base.'/img/icons/favicon-196x196.png?v=2" sizes="196x196" />
<link rel="icon" type="image/png" href="'.$base.'/img/icons/favicon-96x96.png?v=2" sizes="96x96" />
<link rel="icon" type="image/png" href="'.$base.'/img/icons/favicon-32x32.png?v=2" sizes="32x32" />
<link rel="icon" type="image/png" href="'.$base.'/img/icons/favicon-16x16.png?v=2" sizes="16x16" />
<link rel="icon" type="image/png" href="'.$base.'/img/icons/favicon-128.png?v=2" sizes="128x128" />
<meta name="application-name" content="'.$base.'/&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="'.$base.'/img/icons/mstile-144x144.png?v=2" />
<meta name="msapplication-square70x70logo" content="'.$base.'/img/icons/mstile-70x70.png?v=2" />
<meta name="msapplication-square150x150logo" content="'.$base.'/img/icons/mstile-150x150.png?v=2" />
<meta name="msapplication-wide310x150logo" content="'.$base.'/img/icons/mstile-310x150.png?v=2" />
<meta name="msapplication-square310x310logo" content="'.$base.'/img/iconsmstile-310x310.png?v=2" />
';}

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
    'nav-header' => __('Header Navigation', 'bootpress'),
    'nav-footer' => __('Footer Navigation', 'bootpress')
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
add_action('wp_head', 'favicon'); // Add favicon(s)
add_action('wp_enqueue_scripts', 'styles'); // Load stylesheet
add_action('init', 'header_scripts'); // Load custom scripts
add_action('init', 'navigation'); // Load WP navigation
add_action('widgets_init', 'sidebars' ); // Load WP sidebar(s)

// Add Filters
add_filter( 'body_class', 'body_classes' );
