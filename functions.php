<?php
if ( ! function_exists( 'wh_block_enqueue_assets' ) ) {
	/**
	 * Enqueues assets like the stylesheet.
	 *
	 * @return void
	 */
	function wh_block_enqueue_assets() {
		wp_enqueue_style(
			'wh-block-style',
			get_stylesheet_uri(),
			[],
			filemtime( get_stylesheet_directory() . '/style.css' )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'wh_block_enqueue_assets' );

if ( ! function_exists( 'wh_block_load_textdomain' ) ) {
	/**
	 * Load text domain.
	 */
	function wh_block_load_textdomain() {
		load_theme_textdomain( 'wh-block', get_template_directory() . '/languages' );
	}
}
add_action( 'after_setup_theme', 'wh_block_load_textdomain' );