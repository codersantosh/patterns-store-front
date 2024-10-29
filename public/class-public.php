<?php // phpcs:ignore Class file names should be based on the class name with "class-" prepended.
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * The public-facing functionality of the theme.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/public
 */

/**
 * The public-facing functionality of the theme.
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/public
 * @author     codersantosh <codersantosh@gmail.com>
 */
class Patterns_Store_Front_Public {

	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @return object
	 * @since 1.0.0
	 */
	public static function get_instance() {
		// Store the instance locally to avoid private static replication.
		static $instance = null;

		// Only run these methods if they haven't been ran previously.
		if ( null === $instance ) {
			$instance = new self();
		}

		// Always return the instance.
		return $instance;
	}

	/**
	 * Initialize the class.
	 *
	 * @access public
	 * @return void
	 */
	public function run() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_resources' ) );
	}

	/**
	 * Register the JavaScript and stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_resources() {
		/* Atomic CSS */
		wp_enqueue_style( 'atomic' );
		wp_style_add_data( 'atomic', 'rtl', 'replace' );

		$version = PATTERNS_STORE_THEME_VERSION;

		wp_enqueue_style( PATTERNS_STORE_THEME_THEME_NAME, PATTERNS_STORE_THEME_URL . 'build/public/public.css', array(), $version );
		wp_style_add_data( PATTERNS_STORE_THEME_THEME_NAME, 'rtl', 'replace' );

		/*Scripts dependency files*/
		$deps_file = PATTERNS_STORE_THEME_PATH . 'build/public/public.asset.php';

		/*Fallback dependency array*/
		$dependency = array();

		/*Set dependency and version*/
		if ( file_exists( $deps_file ) ) {
			$deps_file  = require $deps_file;
			$dependency = $deps_file['dependencies'];
			$version    = $deps_file['version'];
		}

		wp_enqueue_script( PATTERNS_STORE_THEME_THEME_NAME, PATTERNS_STORE_THEME_URL . 'build/public/public.js', $dependency, $version, true );
		wp_set_script_translations( PATTERNS_STORE_THEME_THEME_NAME, PATTERNS_STORE_THEME_THEME_NAME );

		$localize = apply_filters(
			'patterns_store_front_public_localize',
			array(
				'PATTERNS_STORE_THEME_URL' => PATTERNS_STORE_THEME_URL,
				'home_url'                 => esc_url( home_url() ),
				'rest_url'                 => get_rest_url(),
				'nonce'                    => wp_create_nonce( 'wp_rest' ),
			)
		);

		wp_add_inline_script(
			PATTERNS_STORE_THEME_THEME_NAME,
			sprintf(
				"var PatternsStoreFrontLocalize = JSON.parse( decodeURIComponent( '%s' ) );",
				rawurlencode(
					wp_json_encode(
						$localize
					)
				),
			),
			'before'
		);
	}
}

/**
 * Return instance of  Patterns_Store_Front_Public class
 *
 * @since 1.0.0
 *
 * @return Patterns_Store_Front_Public
 */
function patterns_store_front_public() {//phpcs:ignore
	return Patterns_Store_Front_Public::get_instance();
}
patterns_store_front_public()->run();
