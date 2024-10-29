<?php
/**
 * Title: Query Pattern Grid
 * Slug: patterns-store-front/query-pattern-grid
 * Categories: query
 * Block Types: core/query
 * Description: Display a query block showing patterns in a list layout.
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>
<!-- wp:query {"query":{"inherit":true},"align":"wide","layout":{"type":"constrained"}} -->

	<?php
		// Need to include from PHP since wp:pattern not working
		// <!-- wp:pattern {"slug":"patterns-store-front/query-pattern-header"} /--> .
		require 'query-pattern-header.php';
	?>
	
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"align":"full","layout":{"type":"grid","columnCount":4}} -->
			<!-- wp:pattern {"slug":"patterns-store-front/hidden-query-pattern-post-template-content"} /-->
		<!-- /wp:post-template -->

		<?php
			// Need to include from PHP since wp:pattern not working
			// <!-- wp:pattern {"slug":"patterns-store-front/hidden-query-pattern-footer"} /--> .
			require 'hidden-query-pattern-footer.php';
		?>
	</div>
<!-- /wp:query -->
