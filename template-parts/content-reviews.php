<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cojones
 */

?>

<div class="row">

<?php if ( is_single() ) : ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
<? else: ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4'); ?> >
<?endif;?>


	<div class="back-link col-xs-6 col-sm-2">
		<span class="dashicons dashicons-arrow-left-alt2"></span><a href="<?= wp_get_referer(); ?>">BACK</a>
	</div><!-- .entry-meta -->


	<div class="entry-meta col-xs-6 col-sm-2">
		<?php the_time('d / m / Y');?>
		<br/>
		<?php $review_link = get_post_meta( get_the_ID(), 'external_link', true); ?>
		<a href="<?= $review_link; ?>">LINK</a>
	</div><!-- .entry-meta -->
	
	<?php
		if ( has_post_thumbnail() ) : ?>
			<a href=" <? the_permalink(); ?>">
				<div class="text-center">
  					<? the_post_thumbnail(); ?>
  				</div>
			</a>
	<? endif; ?>
	<div class="col-xs-12 col-sm-12 col-md-6">
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">(', ')</h1>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		
		<?php
		endif; ?>
	</header><!-- .entry-header -->

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

	<footer class="entry-footer">
		<?php //cojones_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	</div>
	<div class="col-xs-12 col-sm-2 hidden-md"></div>
</article><!-- #post-## -->
</div>