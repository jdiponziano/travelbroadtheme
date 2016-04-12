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
	<header class="entry-header gallery-name">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php previous_post_link('%', '<i class="fa fa-chevron-left" aria-hidden="true"></i>', 'no'); ?>
		<a href="<?php bloginfo('url');?>/gallery"><i class="fa fa-th" aria-hidden="false"></i></a>
		<?php next_post_link(); ?>
		<hr />
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="gallery-photos">
			<?php the_field('photos'); ?>
		</div>
		<div class="gallery-details">
			<p><?php the_field('gallery_description'); ?></p>
			<ul>
				<li>Place: <?php the_field('place'); ?></li>
				<li>Camera: <?php the_field('camera'); ?></li>
				<li>Year: <?php the_field('year'); ?></li>
			</ul>
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
