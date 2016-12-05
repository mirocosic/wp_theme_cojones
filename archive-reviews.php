<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cojones
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main reviews-archive" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header hidden">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="row">
				<div class="reviews-category-title text-center">Resonate reviews</div>

				<?php
				/* Start the Loop */
				$args = array( 'post_type' => 'reviews', 'category_name' => 'resonate' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4'); ?> >
					<header class="entry-header ">
						<?php
							the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">( ', ' )</a></h3>' );
						?>
					</header><!-- .entry-header -->
					<div class="entry-content">
						<?php the_excerpt(); ?>
					</div>
					<a class="reviews-read-more" href="<?= esc_url( get_permalink() ) ;?>">READ MORE</a>
				</article>
				 
				 <?php
					//get_template_part( 'template-parts/content', get_post_format() );
					wp_reset_postdata();

				endwhile;
				?>
			</div>
			<div class="row">
				<div class="reviews-category-title text-center">Bend to transcend reviews</div>

				<?php
				/* reset the data? */
				wp_reset_postdata();

				$args = array( 'post_type' => 'reviews', 'category_name' => 'bend-to-transcend' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4'); ?> >
					<header class="entry-header">
						<?php
							the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">( ', ' )</a></h3>' );
						?>
					</header><!-- .entry-header -->
					<div class="entry-content">
						<?php
							the_excerpt();
						?>
					</div>
					<a class="reviews-read-more" href="<?= esc_url( get_permalink() ) ;?>">READ MORE</a>
				</article>
				 
				
				 
				 <?php
					//get_template_part( 'template-parts/content', get_post_format() );

					wp_reset_postdata();

				endwhile;
				?>
			</div>
			
			<?

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
