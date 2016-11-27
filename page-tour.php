<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cojones
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="cojones-section-title">
				<h1>Tour Dates</h1>
			</div>
			<div class="row">
				<?php echo gigpress_shows(); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

