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
          <h1>Hi I am Kae Lani</h1>
          <p>
            Kick up litter stare at the wall, play with food and get confused by dust. Climb leg sit by the fire or attack dog, run away and pretend to be victim yet climb a tree, wait for a fireman jump to fireman then scratch his face. Sit on the laptop chew foot chase red laser dot lick butt, yet white cat white cat sleeps on a black shirt paw at your fat belly unwrap toilet paper. Run outside as soon as door open you call this cat food?
          </p>
          <a class="alignright" href="/about.html">About Me</a>
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
                    <li class="event">
                      <div class="event-date">
                        <div class="event-month">Dec</div>
                        <div class="event-day">12</div>
                      </div>
                      <div class="event-details">
                        <div class="event-name"><h3>Cool event</h3></div>
                        <div class="location">NY</div>
                        <div class="time">@ 10:30am</div>
                        <div class="event-btn"><a href="#">Event Details</a></div>
                      </div>
                    </li>
                    <li class="event">
                      <div class="event-date">
                        <div class="event-month">Dec</div>
                        <div class="event-day">12</div>
                      </div>
                      <div class="event-details">
                        <div class="event-name"><h3>Cool event</h3></div>
                        <div class="location">NY</div>
                        <div class="time">@ 10:30am</div>
                        <div class="event-btn"><a href="#">Event Details</a></div>
                      </div>
                    </li>
                    <li class="event">
                      <div class="event-date">
                        <div class="event-month">Dec</div>
                        <div class="event-day">12</div>
                      </div>
                      <div class="event-details">
                        <div class="event-name"><h3>Cool event</h3></div>
                        <div class="location">NY</div>
                        <div class="time">@ 10:30am</div>
                        <div class="event-btn"><a href="#">Event Details</a></div>
                      </div>
                    </li>
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
              <div class="card">
                <div class="card-image">
                  <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains.png" alt="">
                </div>
                <div class="card-header">
                  First Card
                </div>
                <div class="card-copy">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, officiis sunt neque facilis culpa molestiae necessitatibus delectus veniam provident.</p>
                </div>
              </div>

              <div class="card">
                <div class="card-image">
                  <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains-3.png" alt="">
                </div>
                <div class="card-header">
                  The Last Card
                </div>
                <div class="card-copy">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>

              <div class="card">
                <div class="card-image">
                  <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/mountains-3.png" alt="">
                </div>
                <div class="card-header">
                  The Last Card
                </div>
                <div class="card-copy">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
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
                  <a class="blue-cta" href="/blog">View Gallery</a>
                </div>
          		</div>
          	</div>
        </section>

			</main><!-- #main -->
		</div><!-- .primary -->

	</div><!-- .wrap -->
</article>
<?php get_footer(); ?>
