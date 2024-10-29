<?php
/**
 * Title: Footer part of query pattern
 * Slug: patterns-store-front/hidden-query-pattern-footer
 * Inserter: no
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>
<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<?php
	// Need to include from PHP since wp:pattern not working
	// <!-- wp:pattern {"slug":"patterns-store-front/pagination"} /-->
	// <!-- wp:pattern {"slug":"patterns-store-front/hidden-query-no-results"} /--> .
	require 'pagination.php';
	require 'hidden-query-no-results.php';
?>
