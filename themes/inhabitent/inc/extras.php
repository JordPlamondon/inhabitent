<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function inhabitent_login_logo() {
	echo '<style type="text/css">
		#login h1 a, .login h1 a { background-image: url('.get_stylesheet_directory_uri().'/assets/project-04/images/logos/inhabitent-logo-text-dark.svg) !important; 
	height: 90px;
	width: 320px;
	background-size : 320px 80px;
			}
	</style>';
}
add_action('login_head', 'inhabitent_login_logo');

function inhabitent_login_url() {
	return get_bloginfo('url');
}
add_filter('login_headerurl', 'inhabitent_login_url');

function inhabitent_logo_url_title() {
	return 'inhabitent';
}
add_filter('login_headertitle', 'inhabitent_logo_url_title');