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

		<div class="title-bg">
			<div class="wrap">
				<?php the_title( '<h1 class="entry-title alignright">', '</h1>' ); ?>
			</div>
		</div>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="wrap">
			<div class="event-intro">
				<div class="event-featured-video">
					<div class="video">
						<div class="video-wrapper">
							<?php the_field('featured_video'); ?>
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
								'post_type'=>'events_schedule',
								'posts_per_page' => 15,
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
											$date = new DateTime(get_field('date', false, false));
											echo $date->format('M');
										?>
									</div>
									<div class="event-day">
										<?php
											$date = new DateTime(get_field('date', false, false));
											echo $date->format('j');
										?>
									</div>
								</div>
								<div class="event-details">
									<div class="event-name"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
									<div class="location"><?php the_field('location'); ?></div>
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
					<h2><?php the_field('archive_header');?></h2>
					<?php
						$args = array (
							'post_type'=>'event_videos',
							'posts_per_page' => 6,
							'order' => 'ASC',
							'orderby' => 'date',
						);

						$query = new WP_Query($args);
					 ?>
					 <?php
					if($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="video-item">
						<div class="video-wrapper">
							<?php the_field('video'); ?>
						</div>
						<h3><?php the_title(); ?></h3>
					</div>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
			</div>
		</div><!-- .wrap -->
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
