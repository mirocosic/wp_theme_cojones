<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Cojones
 */

get_header(); ?>

	<div id="primary" class="content-area ">
		<main id="main" class="site-main review-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-reviews', get_post_format() );

		?>
		<div class="row">
			<div class="hidden-xs col-sm-2"></div>
			<div class="col-xs-12 col-sm-8">
		<?
			the_post_navigation([
				'prev_text' => __( 'Previous review' ),
            	'next_text' => __( 'Next review' ),
				]);
		?>
		</div>
		<div class="hidden-xs col-sm-2"></div>
		<?
			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) :
			//	comments_template();
			//endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
//get_footer();
