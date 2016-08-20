<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>


		<!-- Loader -->
		<?php include TEMPLATEPATH . '/modules/loader.php' ?>

		<!-- wrapper -->
		<div class="wrapper">

			<header class="site__header">
			<?php if ( is_page_template('templates/home.php') ) { ?>
				<nav id="navbar-header" class="navbar navbar-fixed-top">
			<?php } elseif ( is_page_template('templates/event.php') ) { ?>
				<nav id="navbar-header" class="navbar navbar-fixed-top">
			<?php } elseif ( is_page_template('templates/title-block.php') ) { ?>
				<nav id="navbar-header" class="navbar navbar-fixed-top">
			<?php } else { ?>
				<nav id="navbar-header" class="navbar navbar-fixed-top navbar--condensed">
					<? } ?>
				  <div class="container">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-primary" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
							<a class="navbar-img" href="<?php echo home_url(); ?>"></a>
				      <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
				    </div>

				    <div class="collapse navbar-collapse" id="nav-primary">

							<?php
							 wp_nav_menu( array(
								 'menu'              => 'nav-header',
								 'menu_id'           => 'nav-header',
								 'theme_location'    => 'nav-header',
								 'depth'             => 2,
								 'container'				 => 'ul',
								 'menu_class'        => 'nav navbar-nav navbar-right',
								 'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								 'walker'            => new wp_bootstrap_navwalker())
							 );
						 ?>

				    </div>
				  </div>
				</nav>
			</header>
