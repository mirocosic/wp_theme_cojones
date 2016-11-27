<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cojones
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part( 'template-parts/mobile-menu');?>

<div id="page" class="site container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cojones' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding row">
			<div class="col-md-3">
				<h4>Follow us</h4>
				<ul class="social-links">
					<li><a href="">FACEBOOK</a> /</li>
					<li><a href="">BANDCAMP</a> /</li> 
					<li><a href="">TWITTER</a> /</li>
					<li><a href="">YOUTUBE</a> /</li>
					<li><a href="">INSTAGRAM</a></li>
				</ul>
				

			</div>
			<div class="col-md-6 text-center">
				<h1>COJONES</h1>
			</div>
			<div class="col-md-3">
				<h4>Newsletter signup</h4>
				INSERT MAILCHIMP HERE!
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation hidden" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cojones' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<?php get_template_part( 'template-parts/menu');?>
	
	<?php get_template_part( 'template-parts/title-banner' );?>
	<div id="content" class="site-content">
