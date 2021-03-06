<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package atravelbroad
 */

?>

	</div><!-- #content -->
	<section class="footer-widgets">
		<div class="wrap">
			<div class="footer-widget-left">
				<?php get_sidebar('footer-1'); ?>
			</div>
			<div class="footer-widget-center">
				<?php get_sidebar('footer-2'); ?>
			</div>
			<div class="footer-widget-right">
				<?php get_sidebar('footer-3'); ?>
			</div>
		</div>
	</section>
	<footer class="site-footer">
		<div class="wrap">
			<div class="site-info">
				<?php atravelbroad_do_copyright_text(); ?>
			</div>
			<div class="footer-menu">
				<ul>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'footer',
						) );
					?>
				</ul>
			</div>
		</div><!-- .wrap -->
		<div class="site-made">
			<p>
				<a href="http://www.jessicadiponziano.com">Website made by: Jessica DiPonziano</a>
			</p>
		</div>
	</footer><!-- .site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
