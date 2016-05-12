<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package atravelbroad
 */

get_header(); ?>
<article>
  <section class="home-hero">
    <div class="wrap">
      <div class="intro-block">
        <img class="profile-pic" src="/wp-content/uploads/2016/04/kae-lani.jpg" alt="Kae Lani" />
        <div class="intro-post">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          <p>
            <?php
      				while ( have_posts() ) : the_post();
                the_excerpt();
              endwhile; // End of the loop.
    				?>
          </p>
          <a class="alignright" href="/about">About Me</a>
        </div>
      </div>
    </div>
  </section>
		<div class="content-area">
			<main id="main" class="site-main" role="main">
        <section class="home-events">
          <div class="wrap">
              <h2><i class="fa fa-plane"></i>Upcoming Events<i class="fa fa-plane"></i></h2>
              <div>
                <div class="event-listing">
          				<ul>
          					<?php
          						$args = array (
          							'post_type'=>'upcoming-events',
          							'posts_per_page' => 3,
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
              <div class="event-video">
                <div class="video">
                  <div class="video-wrapper">
                      <iframe src="https://www.youtube.com/embed/PU5QCoYbw-A" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
            <div class="home-cta">
              <a class="blue-cta" href="/events">View All Upcoming and Past Events</a>
            </div>
          </div>
        </section>
        <section class="home-blog">
          <div class="wrap">
            <h2>Latest on the Blog</h2>
            <div class="cards">

              <?php
              $args = array (
                'post_type'=>'post',
                'posts_per_page' => 3,
                'order' => 'ASC',
              );

              $query = new WP_Query($args);
             ?>

            <?php
            if($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="card">
                <div class="card-image">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
                <div class="card-header">
                  <?php the_title(); ?>
                </div>
                <div class="card-copy">
                  <p><?php the_excerpt(); ?></p>
                </div>
              </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>

            </div>
            <div class="home-cta">
              <a class="blue-cta" href="/blog">Read the Blog</a>
            </div>
          </div>
        </section>
        <section class="home-photos">
          	<div class="wrap">
          		<div class="photos-copy">
          			<h2>Photography</h2>
                <p>
                  Check out the latest photography
                </p>
                <div class="home-cta">
                  <a class="blue-cta" href="/gallery">View Gallery</a>
                </div>
          		</div>
          	</div>
        </section>
			</main><!-- #main -->
		</div><!-- .primary -->
	</div><!-- .wrap -->
</article>
<?php get_footer(); ?>
