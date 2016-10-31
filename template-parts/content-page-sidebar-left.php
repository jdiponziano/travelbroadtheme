<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package atravelbroad
 */

?>

<article <?php post_class(); ?>>
	<header class="entry-header">
		<div class="title-bg">
			<div class="wrap">
				<?php the_title( '<h1 class="entry-title alignright">', '</h1>' ); ?>
			</div>
		</div>
	</header><!-- .entry-header -->
	<div class="wrap">
		<?php get_sidebar('page'); ?>
		<div class="primary">
				<div class="entry-content">
					<?php
						the_content();

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'atravelbroad' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php
					edit_post_link(
						sprintf(
							/* translators: %s: Name of current post */
							esc_html__( 'Edit %s', 'atravelbroad' ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						),
						'<span class="edit-link">',
						'</span>'
					);
				?>
			</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->
