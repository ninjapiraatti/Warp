<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<!--[if lte IE 9]><script src="library/js/masonry.pkgd.min.js"></script><![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<script type='text/javascript' src="//wurfl.io/wurfl.js"></script>
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>
		<?php include_once(ABSPATH . 'wp-content/themes/Warp/library/icons/svg-defs.svg');?>


			<!-- Fixed navbar by bootstrap -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="wrap">
				<div class="navbar-header">
	        		<div class="menu-btn">
						<svg viewBox="0 0 128 128" class="icon-menu navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						  	<use xlink:href="#icon-menu"></use>
						</svg>
					</div>
					<a class="logo navbar-brand" itemscope itemtype="http://schema.org/Organization" href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/icons/logo.svg"></a>
				</div>
			<?php
		           wp_nav_menu( array(
		               'menu' => __( 'The Main Menu', 'bonestheme' ),
		               'theme_location'    => 'main-nav',
		               'depth'             => 2,
		               'container'         => 'div',
		               'container_class'   => 'collapse navbar-collapse',
		       'container_id'      => 'navbar',
		               'menu_class'        => 'nav navbar-nav',
		               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		               'walker'            => new wp_bootstrap_navwalker())
		           );
		       ?>
			</div><!--/.nav-collapse -->
		</nav>


