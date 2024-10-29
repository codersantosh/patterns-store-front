<?php
/**
 * Title: Archive Pattern Full Width
 * Slug: patterns-store-front/list-archive-pattern-full-width
 * Template Types: archive-pattern, archive-download, pattern-category, pattern-tag, pattern-plugin, pattern-block-type, pattern-template-type, pattern-post-type, download_category, download_tag
 * Description: Full-width layout template for displaying archives pattern without sidebars.
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>
<!-- wp:template-part {"slug":"header-default","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">

	<!-- wp:template-part {"slug":"list-archive-header", "align":"full"} /-->

	<!-- wp:spacer {"height":"80px"} -->
	<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"60px"}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:pattern {"slug":"patterns-store-front/query-pattern-grid"} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"80px"} -->
	<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
