<?php
/**
 * Title: No Search Result
 * Slug: patterns-store-front/hidden-no-search-results
 * Inserter: no
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>
<!-- wp:paragraph -->
<p>
<?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'patterns-store-front' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'patterns-store-front' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'patterns-store-front' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'patterns-store-front' ); ?>","buttonUseIcon":true} /-->
