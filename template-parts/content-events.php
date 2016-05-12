<?php
/**
 * Template part for displaying page content in page-events.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package atravelbroad
 */

?>

<article <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="event-intro">
			<div class="event-featured-video">
				<div class="video">
					<div class="video-wrapper">
							<iframe src="https://www.youtube.com/embed/PU5QCoYbw-A" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="event-featured-content">
				<?php the_content();?>
				<a class="blue-cta" href="#">Book me</a>
			</div>
		</div>
		<div class="event-content">
			<div class="event-listing">
				<ul>
					<?php
						$args = array (
							'post_type'=>'upcoming-events',
							'posts_per_page' => 20,
							'order' => 'ASC',
							'orderby' => 'meta_value',
							'meta_key' => 'date'
						);

						$query = new WP_Query($args);
					 ?>

					<?php
					if($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<li class="event">
							<div class="event-date">
								<div class="event-month">
									<?php
									$date_str = get_field('date');
									echo date('M', $date_str);
									?>
								</div>
								<div class="event-day">
									<?php
									$date_str = get_field('date');
									echo date('j', $date_str);
									?>
								</div>
							</div>
							<div class="event-details">
								<div class="event-name"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
								<div class="location"><?php the_field('state'); ?></div>
								<div class="time">@ <?php the_field('time'); ?></div>
								<a href="<?php the_permalink(); ?>">
									<div class="event-btn">Event Details</div>
								</a>
							</div>
						</li>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</ul>
			</div>
			<div class="video-archive">
				<?php the_content();?>
			</div>
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
