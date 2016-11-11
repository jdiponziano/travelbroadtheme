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
		<div class="wrap">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php previous_post_link('%', '<i class="fa fa-chevron-left" aria-hidden="true"></i>', 'no'); ?>
		<a href="<?php bloginfo('url');?>/gallery"><i class="fa fa-th" aria-hidden="false"></i></a>
		<?php next_post_link(); ?>
		<hr />
	</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="gallery-photos">
			<?php
				$images = get_field('gallery');

				if( $images ): ?>
				    <ul>
				        <?php foreach( $images as $image ): ?>
				            <li class="photo-single">
				                <a href="<?php echo $image['url']; ?>">
				                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				                <p><?php echo $image['caption']; ?></p>
				            </li>
				        <?php endforeach; ?>
				    </ul>
				<?php endif; ?>
		</div>
		<div class="gallery-details">
			<?php the_field('gallery_description'); ?>
			<ul class="gallery-stats">
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
