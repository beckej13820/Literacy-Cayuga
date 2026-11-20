<?php
/**
 * Literacy Volunteers theme functions.
 *
 * @package literacy-volunteers
 */

defined( 'ABSPATH' ) || exit;

/**
 * Remove core's bundled patterns and the remote Pattern Directory patterns,
 * so the inserter shows this theme's patterns plus a short list from the parent.
 */
add_action(
	'after_setup_theme',
	function () {
		remove_theme_support( 'core-block-patterns' );
	}
);
add_filter( 'should_load_remote_block_patterns', '__return_false' );

/**
 * Editor: when a section style is applied to a Cover block, default its overlay
 * to that style's background color so text stays readable over the photo.
 */
add_action(
	'enqueue_block_editor_assets',
	function () {
		$path = '/assets/js/cover-style-overlay.js';
		wp_enqueue_script(
			'literacy-volunteers-cover-style-overlay',
			get_stylesheet_directory_uri() . $path,
			array( 'wp-compose', 'wp-element', 'wp-hooks' ),
			(string) filemtime( get_stylesheet_directory() . $path ),
			true
		);
	}
);

/**
 * Hide Twenty Twenty-Five patterns from the inserter, except the ones listed.
 *
 * The patterns stay registered because parent templates and parts reference
 * some of them (header, footer, query loops). Runs on rest_api_init because
 * the editors load patterns through the REST API.
 */
add_action(
	'rest_api_init',
	function () {
		$keep = array(
			'twentytwentyfive/text-faqs',
			'twentytwentyfive/cta-centered-heading',
			'twentytwentyfive/banner-intro-image',
			'twentytwentyfive/services-3-col',
		);

		$registry = WP_Block_Patterns_Registry::get_instance();

		foreach ( $registry->get_all_registered() as $pattern ) {
			$name = $pattern['name'];

			if ( ! str_starts_with( $name, 'twentytwentyfive/' ) || in_array( $name, $keep, true ) ) {
				continue;
			}
			if ( isset( $pattern['inserter'] ) && false === $pattern['inserter'] ) {
				continue;
			}

			unset( $pattern['name'] );
			$pattern['inserter'] = false;

			$registry->unregister( $name );
			$registry->register( $name, $pattern );
		}
	}
);

/**
 * The arrow for the "Arrow link" paragraph style. Loaded only on pages that
 * use a Paragraph block.
 */
add_action(
	'init',
	function () {
		$path = '/assets/css/arrow-link.css';
		wp_enqueue_block_style(
			'core/paragraph',
			array(
				'handle' => 'literacy-volunteers-arrow-link',
				'src'    => get_stylesheet_directory_uri() . $path,
				'path'   => get_stylesheet_directory() . $path,
				'ver'    => (string) filemtime( get_stylesheet_directory() . $path ),
			)
		);
	}
);
