<?php
/**
 * Hello WPBun: a bare block theme. Templates, parts and styles are files (templates/, parts/, theme.json);
 * this file only loads the theme's small stylesheet.
 *
 * @package Hello_WPBun
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'hello_wpbun_setup' ) ) {
	/**
	 * Show the theme's stylesheet in the editor too.
	 */
	function hello_wpbun_setup() {
		add_editor_style( 'style.css' );
	}
}
add_action( 'after_setup_theme', 'hello_wpbun_setup' );

if ( ! function_exists( 'hello_wpbun_styles' ) ) {
	/**
	 * Load the theme's stylesheet on the site.
	 */
	function hello_wpbun_styles() {
		wp_enqueue_style( 'hello-wpbun', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'hello_wpbun_styles' );
