<?php
/**
 * Custom hooks.
 *
 * @package themenamepackage
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'themenamefunction_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function themenamefunction_site_info() {
		do_action( 'themenamefunction_site_info' );
	}
}

if ( ! function_exists( 'themenamefunction_add_site_info' ) ) {
	add_action( 'themenamefunction_site_info', 'themenamefunction_add_site_info' );

	/**
	 * Add site info content.
	 */
	function themenamefunction_add_site_info() {

		$site_info = sprintf('© %s - %d | Todos os direitos reservados.', get_bloginfo('name'), date('Y'));

		echo apply_filters( 'themenamefunction_site_info_content', $site_info ); // WPCS: XSS ok.
	}
}
