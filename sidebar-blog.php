<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package atravelbroad
 */

if ( ! is_active_sidebar( 'sidebar-blog' ) ) {
	return;
}
?>

<aside class="secondary widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-blog' ); ?>
</aside><!-- .secondary -->
