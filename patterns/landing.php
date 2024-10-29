<?php
/**
 * Title: Landing
 * Slug: patterns-store-front/landing
 * Template Types: front-page
 * Post Types: page
 * Description: A layout template for displaying the main landing front page.
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>
<!-- wp:template-part {"slug":"header-absolute","tagName":"header"} /-->
<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:pattern {"slug":"patterns-store-front/hero-banner"} /-->
	<!-- wp:pattern {"slug":"patterns-store-front/featured-section-1"} /-->
	<!-- wp:pattern {"slug":"patterns-store-front/featured-section-2"} /-->
	<!-- wp:pattern {"slug":"patterns-store-front/featured-section-3"} /-->
	<!-- wp:pattern {"slug":"patterns-store-front/featured-section-4"} /-->
	<!-- wp:pattern {"slug":"patterns-store-front/featured-section-5"} /-->
	<!-- wp:pattern {"slug":"patterns-store-front/featured-section-6"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
