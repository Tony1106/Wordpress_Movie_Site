<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">

		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
				if (function_exists('the_custom_logo')) {
					the_custom_logo();
				}
				?>

			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu(array('theme_location' => 'menu-main', 'menu_id' => 'menu-main')); ?>
			</nav><!-- #site-navigation -->
			<div class="search-login">
				<div class="search"><i class="fas fa-search"></i></div>
				<div class="login">
					<a href="/user-login"><button class="btn btn-primary"><span class="icon"><i class="far fa-user"></i></span> Login</button></a>
				</div>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">