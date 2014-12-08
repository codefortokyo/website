<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

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

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/favicon.ico">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-icon-touch.png">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon-144x144.png" />
		
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
<!-- 		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
 -->
		<!-- font icon -->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap cf">

							<p id="logo" class="h1">
							<a href="<?php echo home_url(); ?>" rel="nofollow">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" alt="Code for Tokyo" title="Code for Tokyo" width="100%" />
							</a>
							</p>
							<?php // bloginfo('description'); ?>

<!-- for localsite -->
<nav role="navigation"><ul id="menu-version1" class="nav top-nav cf">
<li id="menu-item-15" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15"><a href="http://localhost:8888/code_for_tokyo/category/event/"><i class="fa fa-comments-o"></i> イベント</a></li>
<li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18"><a href="http://localhost:8888/code_for_tokyo/about/"><i class="fa fa-smile-o"></i> Code for Tokyoについて</a></li>
<li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27"><a href="http://localhost:8888/code_for_tokyo/members/"><i class="fa fa-rocket"></i> 運営メンバー</a></li>
<li id="menu-item-33" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33"><a href="https://www.facebook.com/groups/codefortokyo/" target="_blank"><i class="fa fa-facebook-square"></i> Facebookグループ <i class="fa fa-external-link"></i></a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://www.meetup.com/Code-for-Tokyo/" target="_blank"><i class="fa fa-beer"></i> Meetup group <i class="fa fa-external-link"></i></a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://vimeo.com/codefortokyo" target="_blank"><i class="fa fa-vimeo-square"></i> Vimeo（映像）<i class="fa fa-external-link"></i></a></li>
</ul></nav>
<!--//for localsite -->





				</div>

			</header>
