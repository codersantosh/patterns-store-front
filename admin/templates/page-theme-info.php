<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for theme info page.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/Patterns_Store_Front_Intro
 */

?>
	<div id="welcome-panel" class="welcome-panel patternswp-psf-hero at-bg-img">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2>
					<?php esc_html_e( 'Welcome to Patterns Store Front', 'patterns-store-front' ); ?>
				</h2>
				<p>
					<?php
					esc_html_e( 'The Patterns Store Front is now active and ready for use. Unleash your creativity with its extensive library of one-click demo Starter Packages, Patterns, and Pattern Kits.', 'patterns-store-front' );
					?>
				</p>
				<a href="https://github.com/patternswp/patterns-store-front" target="_blank" rel="noopener noreferrer nofollow" class="patternswp-psf-gsn-btn patternswp-psf-btn-outline button button-primary button-hero patternswp-psf-install-plugins">
					<?php esc_html_e( 'Documentation', 'patterns-store-front' ); ?>
				</a>
				<a href="https://github.com/patternswp/patterns-store-front" target="_blank" rel="noopener noreferrer nofollow" class="patternswp-psf-btn patternswp-psf-btn-default button button-secodary button-hero" target="_blank">
					<?php esc_html_e( 'Visit Starter Templates', 'patterns-store-front' ); ?>
				</a>
			</div>

			<div class="welcome-panel-column-container">
				<div class="welcome-panel-column">
					<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
						<rect width="48" height="48" rx="4" fill="#2e312f"></rect>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M18 16h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H18a2 2 0 0 1-2-2V18a2 2 0 0 1 2-2zm12 1.5H18a.5.5 0 0 0-.5.5v3h13v-3a.5.5 0 0 0-.5-.5zm.5 5H22v8h8a.5.5 0 0 0 .5-.5v-7.5zm-10 0h-3V30a.5.5 0 0 0 .5.5h2.5v-8z" fill="#fff"></path>
					</svg>
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Utilize Ready-Made Designs', 'patterns-store-front' ); ?></h3>
						<p>
							<?php esc_html_e( 'Quickly implement ready-made designs, patterns, templates, and template parts to streamline your site customization and enhance its design effortlessly.', 'patterns-store-front' ); ?>
						</p>
					</div>
				</div>
				<div class="welcome-panel-column">
					<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
						<rect width="48" height="48" rx="4" fill="#2e312f"></rect>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M32.0668 17.0854L28.8221 13.9454L18.2008 24.671L16.8983 29.0827L21.4257 27.8309L32.0668 17.0854ZM16 32.75H24V31.25H16V32.75Z" fill="white"></path>
					</svg>
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Pattern Copy, Preview, and Kit Link', 'patterns-store-front' ); ?></h3>
						<p>
							<?php esc_html_e( 'Add options for copying patterns, previewing them, and linking to pattern kits on the single pattern page, so users can easily manage and explore related pattern kits.', 'patterns-store-front' ); ?>
						</p>
					</div>
				</div>
				<div class="welcome-panel-column">
					<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
						<rect width="48" height="48" rx="4" fill="#2e312f"></rect>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M31 24a7 7 0 0 1-7 7V17a7 7 0 0 1 7 7zm-7-8a8 8 0 1 1 0 16 8 8 0 0 1 0-16z" fill="#fff"></path>
					</svg>
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Filter Patterns and Pattern Kits', 'patterns-store-front' ); ?></h3>
						<p>
							<?php esc_html_e( 'Display all patterns by default and enable users to filter patterns and pattern kits with the Filter Patterns buttons for better navigation and selection.', 'patterns-store-front' ); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="patternswp-psf-main at-p">
		<div class="at-row at-m patternswp-psf-main-wrp">
			<div class="at-col-sm-3 at-col-md-5 at-col-lg-4 at-col-xl-3">
				<div class="patternswp-psf-main-sidebar at-flx at-flx-col at-gap">
					<div class="patternswp-psf-card at-bg-cl at-bdr">
						<div class="patternswp-psf-card-body at-p">
							<div class="patternswp-psf-intro-auth at-p">
								<div class="patternswp-psf-intro-profile at-h at-w at-bdr at-bdr-rad at-m at-flx at-al-itm-ctr at-jfy-cont-ctr">
									<span class="at-w at-h at-bdr-rad">
										<img class="patternswp-psf-gsm-screenshot" src="<?php echo esc_url( PATTERNS_STORE_THEME_URL . 'assets/img/patternswp-logo.png' ); ?>" alt="<?php esc_attr_e( 'Patterns Store Front', 'patterns-store-front' ); ?>" />
									</span>
								</div>
								<div class="patternswp-psf-intro-profile-info at-m at-txt-al">
									<h3 class="txt">
										<?php esc_html_e( 'Patterns Store Front', 'patterns-store-front' ); ?>
									</h3>
									<a href="https://github.com/patternswp/patterns-store-front" target="_blank" rel="noopener noreferrer nofollow" class="button-primary patternswp-psf-btn-primary">
										<?php esc_html_e( 'Visit Site', 'patterns-store-front' ); ?>
									</a>
									<a href="https://github.com/patternswp/patterns-store-front" target="_blank" rel="noopener noreferrer nofollow" class="button-secondary patternswp-psf-btn-secondary">
										<?php esc_html_e( 'Support', 'patterns-store-front' ); ?>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="patternswp-psf-card at-bg-cl at-bdr">
						<div class="patternswp-psf-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
							<h4 class="patternswp-psf-card-header-ttl at-txt at-m">
								<?php esc_html_e( 'Contact Information', 'patterns-store-front' ); ?>
							</h4>
						</div>
						<div class="patternswp-psf-card-body at-p at-p">
							<div class="patternswp-psf-intro-auth--info">								
								<ul class="patternswp-psf-personal-detail at-flx at-flx-col at-gap">
									<li class="">
										<dl class="at-flx at-al-itm-ctr at-gap">
											<dt class="at-w">
												<span class="dashicons dashicons-smartphone"></span>
												<b>
													<?php esc_html_e( 'Support:', 'patterns-store-front' ); ?>
												</b>
											</dt>
											<dd class="at-m">
												<a href="https://github.com/patternswp/patterns-store-front" target="_blank" rel="noopener noreferrer nofollow">
													<?php esc_html_e( 'Create A Ticket', 'patterns-store-front' ); ?>
												</a>
											</dd>                                                        
										</dl>
									</li>
									<li class="mt-2">
										<dl class="at-flx at-al-itm-ctr at-gap">
											<dt  class="at-w">
												<span class="dashicons dashicons-location"></span>
												<b>
													<?php esc_html_e( 'Location:', 'patterns-store-front' ); ?>
												</b>
											</dt>
											<dd class="at-m">
												<?php esc_html_e( 'Kathmandu, Nepal', 'patterns-store-front' ); ?>
											</dd>                                                        
										</dl>
									</li>
								</ul>
								<ul class="patternswp-psf-social at-flx at-jfy-cont-ctr at-al-itm-ctr at-gap at-m">
									<li>
										<a class="at-p at-bdr at-bdr-rad" href="https://profiles.wordpress.org/patternswp/" target="_blank" rel="noopener noreferrer nofollow">
											<span class="dashicons dashicons-wordpress"></span>
										</a>
									</li>
									<li>
										<a class="at-p at-bdr at-bdr-rad" href="https://twitter.com/patternswp" target="_blank" rel="noopener noreferrer nofollow">
											<span class="dashicons dashicons-twitter"></span>
										</a>
									</li>
								</ul>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="at-col-sm-9 at-col-md-7 at-col-lg-8 at-col-xl-9">
				<div class="patternswp-psf-main-cont at-flx at-flx-col at-gap">
					<div class="at-row at-gap">
						<div class="at-col-md-6 at-col-xl-3">
							<div class="patternswp-psf-card at-bg-cl at-bdr">
								<div class="patternswp-psf-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-media-document"></span>
									<h4 class="patternswp-psf-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Knowledge Base', 'patterns-store-front' ); ?>
									</h4>
								</div>
								<div class="patternswp-psf-card-body at-p">
									<p class="at-m">
										<?php esc_html_e( 'In-depth and well documented articles will help you to use the Patterns Store Front Themes in easiest way.', 'patterns-store-front' ); ?>
									</p>
									<a href="https://github.com/patternswp/patterns-store-front" target="_blank" rel="noopener noreferrer nofollow" class="patternswp-psf-btn">
										<?php esc_html_e( 'Visit Knowledge Base', 'patterns-store-front' ); ?>
									</a>
								</div>
							</div>
						</div>
						<div class="at-col-md-6 at-col-xl-3">
							<div class="patternswp-psf-card at-bg-cl at-bdr">
								<div class="patternswp-psf-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-groups"></span>
										<h4 class="patternswp-psf-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Community', 'patterns-store-front' ); ?>
									</h4>
								</div>
								<div class="patternswp-psf-card-body at-p">
									<p class="at-m">
										<?php esc_html_e( 'We want to make customer experience even better. So, join our Facebook community for instant support from experts.', 'patterns-store-front' ); ?>
									</p>
									<a href="https://github.com/patternswp/patterns-store-front" target="_blank" rel="noopener noreferrer nofollow" class="patternswp-psf-btn">
										<?php esc_html_e( 'Join Facebook Group', 'patterns-store-front' ); ?>
									</a>
								</div>
							</div>
						</div>
						<div class="at-col-md-6 at-col-xl-3">
							<div class="patternswp-psf-card at-bg-cl at-bdr">
								<div class="patternswp-psf-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-backup"></span>
										<h4 class="patternswp-psf-card-header-ttl at-txt at-m">
										<?php esc_html_e( '24x7 Support', 'patterns-store-front' ); ?>
									</h4>
								</div>
								<div class="patternswp-psf-card-body at-p">
									<p class="at-m">
										<?php esc_html_e( 'We have dedicated support team 24*7 to help you in case you encounter any issue during and after the use of Patterns Store Front.', 'patterns-store-front' ); ?>
									</p>
									<a href="https://github.com/patternswp/patterns-store-front" target="_blank" rel="noopener noreferrer nofollow" class="patternswp-psf-btn">
										<?php esc_html_e( 'Create A Ticket', 'patterns-store-front' ); ?>
									</a>
								</div>
							</div>
						</div>
						<div class="at-col-md-6 at-col-xl-3">
							<div class="patternswp-psf-card at-bg-cl at-bdr">
								<div class="patternswp-psf-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-video-alt3"></span>
										<h4 class="patternswp-psf-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Video Guide', 'patterns-store-front' ); ?>
									</h4>
								</div>
								<div class="patternswp-psf-card-body at-p">
									<p class="at-m">
										<?php esc_html_e( 'Patterns Store Front Theme comes with detailed video tutorials of each and every customization with practical demonstration.', 'patterns-store-front' ); ?>
									</p>
									<a href="https://github.com/patternswp/patterns-store-front" target="_blank" rel="noopener noreferrer nofollow" class="patternswp-psf-btn">
										<?php esc_html_e( 'View Video Guide', 'patterns-store-front' ); ?>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="at-row at-gap">
						<?php
						$recommended_plugins = function_exists( 'patterns_store_front_get_recommended_plugins' ) ? patterns_store_front_get_recommended_plugins() : null;
						$quick_links_col     = 'at-col-12';

						if ( $recommended_plugins ) {
							$quick_links_col = 'at-col-sm-8 at-col-md-12 at-col-lg-6 at-col-xl-8';
							?>
						<div class="at-col-sm-4 at-col-md-12 at-col-lg-6 at-col-xl-4">
							<div class="patternswp-psf-card at-bg-cl at-bdr">
								<div class="patternswp-psf-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-admin-plugins"></span>
									<h4 class="patternswp-psf-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Recommended Plugins', 'patterns-store-front' ); ?>
									</h4>
								</div>
								<div class="patternswp-psf-card-body at-p at-flx at-flx-col at-gap">
									<?php
									foreach ( $recommended_plugins as $key => $plugin_info ) {
										?>
										<div class="at-flx at-jfy-cont-btw at-al-itm-ctr patternswp-psf-plugin-recommend">
											<h4 class="patternswp-psf-plugin-title">
												<?php
												if ( isset( $plugin_info['url'] ) ) {
													?>
												<a href='<?php echo esc_url( $plugin_info['url'] ); ?>' target="_blank" rel="noopener noreferrer nofollow">
													<?php echo esc_html( $plugin_info['name'] ); ?>
												</a>
													<?php
												} else {
													echo esc_html( $plugin_info['name'] );
												}
												?>
											</h4>
											<?php
											if ( patterns_store_front_is_plugin_active( $plugin_info['plugin'] ) ) {
												?>
												<button class="patternswp-psf-btn-primary  button-primary" disabled>
													<?php esc_html_e( 'Installed and Activated', 'patterns-store-front' ); ?>
												</button>
												<?php
											} else {
												?>
												<button class="patternswp-psf-btn-primary button-primary patternswp-psf-install-plugin" data-plugin="<?php echo esc_attr( wp_json_encode( $plugin_info ) ); ?>" data-success-text="<?php esc_attr_e( 'Installed and Activated', 'patterns-store-front' ); ?>" data-fail-text="<?php esc_attr_e( 'Failed to install', 'patterns-store-front' ); ?>">
													<?php
													if ( file_exists( WP_PLUGIN_DIR . '/' . $plugin_info['plugin'] ) ) {
														esc_html_e( 'Activate', 'patterns-store-front' );
													} else {
														esc_html_e( 'Install and Activate', 'patterns-store-front' );
													}
													?>
												</button>
												<?php
											}
											?>
										</div>
										<?php
									}
									?>
								</div>				
							</div>
						</div>
							<?php
						}
						?>
						<div class="<?php echo esc_attr( $quick_links_col ); ?>">
							<div class="patternswp-psf-card at-bg-cl at-bdr">
								<div class="patternswp-psf-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-admin-links"></span>
									<h4 class="patternswp-psf-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Quick Links', 'patterns-store-front' ); ?>
									</h4>
								</div>
								<div class="patternswp-psf-card-body at-p">
									<div class="patternswp-psf-card-btn-grp at-flx at-flx-wrp at-gap">
										<a class="patternswp-psf-btn patternswp-psf-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?categoryId=header&postType=wp_template_part' ) ); ?>">
											<?php esc_html_e( 'Edit Header', 'patterns-store-front' ); ?>
										</a>
										<a class="patternswp-psf-btn patternswp-psf-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . PATTERNS_STORE_THEME_THEME_NAME . '%2F%2Ffooter&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Footer', 'patterns-store-front' ); ?>
										</a>
										<a class="patternswp-psf-btn patternswp-psf-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . PATTERNS_STORE_THEME_THEME_NAME . '%2F%2Fprimary-sidebar&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Primary Sidebar', 'patterns-store-front' ); ?>
										</a>
										<a class="patternswp-psf-btn patternswp-psf-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . PATTERNS_STORE_THEME_THEME_NAME . '%2F%2Fsecondary-sidebar&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Secondary Sidebar', 'patterns-store-front' ); ?>
										</a>
										<a class="patternswp-psf-btn patternswp-psf-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part' ) ); ?>">
											<?php esc_html_e( 'All template parts', 'patterns-store-front' ); ?>
										</a>
										<a class="patternswp-psf-btn patternswp-psf-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . PATTERNS_STORE_THEME_THEME_NAME . '%2F%2Ffront-page&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Frontpage', 'patterns-store-front' ); ?>
										</a>
										<a class="patternswp-psf-btn patternswp-psf-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . PATTERNS_STORE_THEME_THEME_NAME . '%2F%2Farchive&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Atchive Page', 'patterns-store-front' ); ?>
										</a>
										<a class="patternswp-psf-btn patternswp-psf-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template' ) ); ?>">
											<?php esc_html_e( 'All Templates', 'patterns-store-front' ); ?>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
					$faqs = function_exists( 'patterns_store_front_get_theme_faq' ) ? patterns_store_front_get_theme_faq() : null;
					if ( $faqs ) {
						?>
							<div class="at-row">
								<div class="at-col-12">
									<div class="patternswp-psf-card at-bg-cl at-bdr">
										<div class="patternswp-psf-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
											<span class="dashicons dashicons-format-chat"></span>
											<h4 class="patternswp-psf-card-header-ttl at-txt at-m">
												<?php esc_html_e( 'Frequently Asked Questions', 'patterns-store-front' ); ?>
											</h4>
										</div>
										<div class="patternswp-psf-card-body at-p ">
											<div class="patternswp-psf-accordion at-flx at-flx-col at-gap">
												<?php
												foreach ( $faqs as $key => $faq ) {
													echo "<details class='patternswp-psf-accordion-section at-bdr'>";
													echo "<summary class='patternswp-psf-accordion-section-title at-p at-pos at-bdr'>";
													echo "<h4 class='patternswp-psf-accordion-heading at-m'>";
													echo esc_html( $faq['q'] );
													echo '</h4>';
													echo '</summary>';/*patternswp-psf-card-header*/
													echo "<div id='patternswp-psf-info-faq-" . esc_attr( $key ) . "' class='patternswp-psf-accordion-section-content at-p'>";
													echo wp_kses_post( $faq['a'] );
													echo '</div>';/*id*/
													echo '</details>';/*patternswp-psf-card*/
												}
												?>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
