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
						<svg class="icon-menu navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve">
						<path fill="#FFFFFF" d="M125.5,29c0,2.1-1.7,3.8-3.8,3.8H6.7c-2.1,0-3.8-1.7-3.8-3.8V7.2c0-2.1,1.7-3.8,3.8-3.8h115
							c2.1,0,3.8,1.7,3.8,3.8V29z"/>
						<path fill="#FFFFFF" d="M125.5,74.9c0,2.1-1.7,3.8-3.8,3.8H6.7c-2.1,0-3.8-1.7-3.8-3.8V53.1c0-2.1,1.7-3.8,3.8-3.8h115
							c2.1,0,3.8,1.7,3.8,3.8V74.9z"/>
						<path fill="#FFFFFF" d="M125.3,121.2c0,2.1-1.7,3.8-3.8,3.8H6.5c-2.1,0-3.8-1.7-3.8-3.8V99.3c0-2.1,1.7-3.8,3.8-3.8h115
							c2.1,0,3.8,1.7,3.8,3.8V121.2z"/>
						</svg>
					</div>
					<a class="logo navbar-brand" itemscope itemtype="http://schema.org/Organization" href="<?php echo home_url(); ?>" rel="nofollow"><?php echo file_get_contents("wp-content/themes/Warp/library/images/logo2.svg"); ?></a>
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


