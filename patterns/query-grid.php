<?php
/**
 * Title: Query Grid
 * Slug: patterns-store-front/query-grid
 * Categories: query
 * Block Types: core/query
 * Description: Display a query block in a grid layout.
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>
<!-- wp:query {"query":{"inherit":true},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":2}} -->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:pattern {"slug":"patterns-store-front/post-meta"} /-->

<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"clamp(15vw, 30vh, 400px)","align":"wide","style":{"spacing":{"margin":{"bottom":"20px"}}}} /-->

<!-- wp:post-excerpt {"moreText":""} /-->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template -->

<?php
	// Need to include from PHP since wp:pattern not working
	// <!-- wp:pattern {"slug":"patterns-store-front/pagination"} /-->
	// <!-- wp:pattern {"slug":"patterns-store-front/hidden-query-no-results"} /--> .
	require 'pagination.php';
	require 'hidden-query-no-results.php';
?>

</div>
<!-- /wp:query -->
