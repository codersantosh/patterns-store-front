<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Patterns Store Front functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Patterns Store Front
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'PATTERNS_STORE_THEME_PATH', trailingslashit( get_template_directory() ) );
define( 'PATTERNS_STORE_THEME_URL', trailingslashit( get_template_directory_uri() ) );
define( 'PATTERNS_STORE_THEME_VERSION', '1.0.1' );
define( 'PATTERNS_STORE_THEME_THEME_NAME', 'patterns-store-front' );
define( 'PATTERNS_STORE_THEME_OPTION_NAME', 'patterns-store-front' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PATTERNS_STORE_THEME_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function patterns_store_front_run() {
	new Patterns_Store_Front();
}
patterns_store_front_run();
