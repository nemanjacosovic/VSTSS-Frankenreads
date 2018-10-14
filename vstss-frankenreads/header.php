<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VSTSS_Frankenreads
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lte IE 9]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
		<![endif]-->
		<!-- Frankenreads -->
		<div id="vstss-frankenreads">
			<!-- Header -->
			<header>
				<!-- Masthead -->
				<div id="vstssfr-header-masthead">
					<div class="wrapper">
						<div id="vstssfr-header-masthead-logos">
							<div id="vstssfr-header-masthead-logos-frankenreads">
								<h1>Frankenreads</h1>
							</div>
							<div id="vstssfr-header-masthead-logos-vstss">
								<h1>Visoka škola tehničkih strukovnih studija - Čačak</h1>
							</div>
						</div>
						<div id="vstssfr-header-masthead-quote">
							<p>“Nothing is so painful to the human mind as a great and sudden change.”</p>
							<h5>- Frankenstein</h5>
						</div>
					</div>
				</div>
				<!-- Main menu -->
				<nav id="vstssfr-header-mainmenu">
					<div class="wrapper">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
						<ul>
							<li class="text-left"><a href="#" title="#">Frankenreads</a></li>
							<li class="text-center"><a href="#" title="#">Events</a></li>
							<li class="text-center"><a href="#" title="#">Schedule</a></li>
							<li id="logo">
								<i></i>
								<span></span>
								<h2>Frankenreads</h2>
							</li>
							<li class="text-center"><a href="#" title="#">Updates</a></li>
							<li class="text-center"><a href="#" title="#">Media</a></li>
							<li class="text-right"><a href="#" title="#">Join our team</a></li>
						</ul>
					</div>
				</nav>
			</header>
			<!-- Content -->
			<main>
