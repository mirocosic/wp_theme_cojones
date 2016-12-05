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
			<div class=" col-sm-6 col-md-3 hidden-xs hidden-sm">
				<h4 class="header-subtitle">Follow us</h4>
				<ul class="social-links">
					<li><a href="https://www.facebook.com/cojonesband/" target="_blank">FACEBOOK</a> /</li>
					<li><a href="http://music.cojonesband.com" target="_blank">BANDCAMP</a> /</li> 
					<li><a href="https://twitter.com/cojonesband" target="_blank">TWITTER</a> /</li>
					<li><a href="https://www.youtube.com/user/cojonesband" target="_blank">YOUTUBE</a> /</li>
					<li><a href="https://www.instagram.com/cojonesband" target="_blank">INSTAGRAM</a></li>
				</ul>
			</div>
			<div class="header-logo col-sm-12 col-md-6 text-center" style="display:block;">
				<a href="/"><img src="<? echo get_template_directory_uri() . '/cojones-logo.svg'?>" style="margin: auto;"/></a>
			</div>
			<div class="col-md-3 hidden-xs hidden-sm">
				<h4 class="header-subtitle">Newsletter signup</h4>
				<? get_template_part( 'template-parts/mailchimp'); ?>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation hidden" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cojones' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<?php get_template_part( 'template-parts/menu');?>
	
	<?php if (is_front_page()) {
		get_template_part( 'template-parts/title-banner');
	}
	?>

	<div id="content" class="site-content">
