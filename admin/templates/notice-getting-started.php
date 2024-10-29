<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for getting started notice.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/Patterns_Store_Front_Intro
 */

?>
<div id="patternswp-psf-gsn" class="updated notice-info patternswp-psf-gsn at-pos">
	<button class="patternswp-psf-gsn-close notice-dismiss at-flx at-al-itm-ctr">
		<?php esc_html_e( 'Dismiss', 'patterns-store-front' ); ?>
	</button>
	<div class="patternswp-psf-gsn-container at-flx at-gap at-p">
		<img class="patternswp-psf-gsn-screenshot at-w" src="<?php echo esc_url( PATTERNS_STORE_THEME_URL . 'screenshot.png' ); ?>" alt="<?php esc_attr_e( 'Patterns Store Front', 'patterns-store-front' ); ?>" />
		<div class="patternswp-psf-gsn-notice">
			<h2>
				<?php
				printf(
					/* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
					esc_html__( 'Welcome! Thank you for choosing %1$s! To fully take advantage of the best our theme can offer, please make sure you visit our %2$swelcome page%3$s.', 'patterns-store-front' ),
					'<strong>' . esc_html( wp_get_theme()->get( 'Name' ) ) . '</strong>',
					'<a href="' . esc_url( menu_page_url( PATTERNS_STORE_THEME_THEME_NAME, false ) ) . '">',
					'</a>'
				);
				?>
			</h2>
			<?php
			$plugin_names = patterns_store_front_get_plugin_names();
			if ( $plugin_names ) {
				?>
				<p>
					<?php
					$plugin_count = count( explode( ', ', $plugin_names ) );
					printf(
						/* translators: %s: singular/plular . */
						esc_html__( 'Clicking the button below will install and activate the following %s:', 'patterns-store-front' ),
						$plugin_count > 1 ? esc_html__( 'plugins', 'patterns-store-front' ) : esc_html__( 'plugin', 'patterns-store-front' )
					);
					echo ' ';
					echo esc_html( $plugin_names );
					?>
				</p>
				<?php
			}
			?>
			<button class="patternswp-psf-btn-primary button button-primary button-hero patternswp-psf-install-plugins">
				<?php esc_html_e( 'Get started with Patterns Store Front', 'patterns-store-front' ); ?>
			</button>
		</div>
	</div>
</div>
