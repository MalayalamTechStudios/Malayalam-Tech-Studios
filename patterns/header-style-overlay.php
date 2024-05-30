<?php

/**
 * Title: Header Style Overlay
 * Slug: millipede/header-style-overlay
 * Categories: millipede
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"20px","bottom":"20px"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"backgroundColor":"transparent","className":"millipede-overlay-header","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group millipede-overlay-header has-transparent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:var(--wp--preset--spacing--50);padding-bottom:20px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:site-logo {"shouldSyncIcon":false,"className":"is-style-default"} /-->

            <!-- wp:site-title {"style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}}} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"0"}},"className":"millipede-navigation-row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
        <div class="wp-block-group millipede-navigation-row" style="padding-right:0;padding-left:0"><!-- wp:navigation {"textColor":"background","overlayBackgroundColor":"background-alt","overlayTextColor":"dark-color","className":"millipede-navigation","layout":{"type":"flex","justifyContent":"center"}} -->
            <!-- wp:page-list /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->