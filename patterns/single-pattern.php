<?php
/**
 * Title: Single Pattern
 * Slug: patterns-store-front/single-pattern
 * Template Types: single-download
 * Description: A template layout for displaying an single pattern page.
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>
<!-- wp:template-part {"slug":"header-default","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:template-part {"slug":"single-header", "align":"full"} /-->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-top:80px;padding-bottom:80px">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
		<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"70%"} -->
		<div class="wp-block-column" style="flex-basis:70%">
			<!-- wp:pattern {"slug":"patterns-store-front/pattern-content-header"} /-->
			<!-- wp:pattern {"slug":"patterns-store-front/featured-image-with-border"} /-->
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:pattern {"slug":"patterns-store-front/pattern-related-title"} /-->
				<!-- wp:query {"query":{"postType":"pattern","inherit":false,"patternsStoreRelation":true},"align":"wide","layout":{"type":"constrained"}} -->
				<div class="wp-block-query alignwide">
					<!-- wp:post-template {"align":"full","layout":{"type":"grid","columnCount":3}} -->
					<!-- wp:pattern {"slug":"patterns-store-front/hidden-query-pattern-post-template-content"} /-->
					<!-- /wp:post-template -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:pattern {"slug":"patterns-store-front/hidden-single-pattern-sidebar"} /-->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
