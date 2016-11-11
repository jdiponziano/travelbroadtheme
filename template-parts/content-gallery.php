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
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="wrap">
			<?php
				$args = array (
					'post_type'=>'gallery'
				);

				$query = new WP_Query($args);
			 ?>
			<?php
			if($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="gallery-piece">
					<a href="<?php the_permalink(); ?>">
						<div class="gallery-img">
							<?php the_post_thumbnail('galleryImageCropped'); ?>
						</div>
						<?php the_title( '<h2 class="gallery-title">', '</h2>' ); ?>
					</a>
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
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
</article><!-- #post-## -->
