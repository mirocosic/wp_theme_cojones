<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cojones
 */

?>
<?php if ( is_single() ) : ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
<? else: ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4'); ?> >
<?endif;?>
	<div class="entry-meta <?= is_single()?'text-center':''?>">
		<?php the_time('d / m / Y');?>
	</div><!-- .entry-meta -->
	
	<?php
		if ( has_post_thumbnail() ) : ?>
			<a href=" <? the_permalink(); ?>">
				<div class="text-center">
  					<? the_post_thumbnail(); ?>
  				</div>
			</a>
	<? endif; ?>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title text-center">', '</h1>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<? if ( is_single() ) :?>
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'cojones' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cojones' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	<? endif; ?>
	<footer class="entry-footer">
		<?php //cojones_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
