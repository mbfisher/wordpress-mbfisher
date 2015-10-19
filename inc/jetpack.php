<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package mbfisher
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function mbfisher_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'mbfisher_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function mbfisher_jetpack_setup
add_action( 'after_setup_theme', 'mbfisher_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function mbfisher_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function mbfisher_infinite_scroll_render
