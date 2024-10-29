<?php
/**
 * Title: Post Navigation
 * Slug: patterns-store-front/post-navigation
 * Categories: posts
 * Block Types: core/template-part/post-navigation
 * Description: Display post navigation controls, commonly used within a query block in single post templates.
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"align":"wide","style":{"color":{"background":"#f5f5f5"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#f5f5f5;color:#f5f5f5"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-navigation-link {"type":"previous","showTitle":true,"linkLabel":true,"arrow":"arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /-->

<!-- wp:post-navigation-link {"showTitle":true,"linkLabel":true,"arrow":"arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"align":"wide","style":{"color":{"background":"#f5f5f5"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#f5f5f5;color:#f5f5f5"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
