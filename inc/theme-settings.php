<?php
/**
 * Check and setup theme's default settings
 *
 * @package themenamepackage
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'themenamefunction_setup_theme_default_settings' ) ) {
	function themenamefunction_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$themenamefunction_posts_index_style = get_theme_mod( 'themenamefunction_posts_index_style' );
		if ( '' == $themenamefunction_posts_index_style ) {
			set_theme_mod( 'themenamefunction_posts_index_style', 'default' );
		}

		// Sidebar position.
		$themenamefunction_sidebar_position = get_theme_mod( 'themenamefunction_sidebar_position' );
		if ( '' == $themenamefunction_sidebar_position ) {
			set_theme_mod( 'themenamefunction_sidebar_position', 'right' );
		}

		// Container width.
		$themenamefunction_container_type = get_theme_mod( 'themenamefunction_container_type' );
		if ( '' == $themenamefunction_container_type ) {
			set_theme_mod( 'themenamefunction_container_type', 'container' );
		}
	}
}
