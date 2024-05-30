<?php

/**
 * Title: Header with banner
 * Slug: millipede/header-with-banner
 * Categories: millipede
 */
$millipede_agency_url = trailingslashit(get_template_directory_uri());
$millipede_images = array(
    $millipede_agency_url . 'assets/images/banner_bg.jpg',
);
?>
<!-- wp:cover {"url":"<?php echo esc_url($millipede_images[0]) ?>","id":3360,"dimRatio":60,"customOverlayColor":"#02061f","isUserOverlayColor":true,"style":{"spacing":{"padding":{"bottom":"0px","right":"0px","top":"0px","left":"0px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim" style="background-color:#02061f"></span><img class="wp-block-cover__image-background wp-image-3360" alt="" src="<?php echo esc_url($millipede_images[0]) ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"15px","bottom":"15px"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"backgroundColor":"transparent","className":"is-style-default","layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group is-style-default has-transparent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:15px;padding-right:var(--wp--preset--spacing--50);padding-bottom:15px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:site-logo {"shouldSyncIcon":false,"className":"is-style-default"} /-->

                    <!-- wp:site-title {"style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"500"}}} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"0"}},"className":"millipede-navigation-row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
                <div class="wp-block-group millipede-navigation-row" style="padding-right:0;padding-left:0"><!-- wp:navigation {"textColor":"background","className":"millipede-navigation","layout":{"type":"flex","justifyContent":"center"}} -->
                    <!-- wp:page-list /-->
                    <!-- /wp:navigation -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:cover {"overlayColor":"transparent","isUserOverlayColor":true,"minHeight":600,"isDark":false,"layout":{"type":"constrained"}} -->
        <div class="wp-block-cover is-light" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-transparent-background-color has-background-dim-100 has-background-dim"></span>
            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xxx-large"} -->
                    <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:500;line-height:1.4"><?php esc_html_e('Your Vision, Our Expertise,', 'millipede') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xxx-large"} -->
                    <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:500;line-height:1.4"><?php esc_html_e('Elevate Your Brands.', 'millipede') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:group {"layout":{"type":"constrained","contentSize":"540px"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <p class="has-text-align-center has-light-color-color has-text-color has-link-color" style="margin-top:24px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'millipede') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"32px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:32px"><!-- wp:button {"backgroundColor":"background","textColor":"heading-color","style":{"border":{"width":"0px","style":"none","radius":"60px"},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"20px","bottom":"20px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"medium"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:60px;padding-top:20px;padding-right:var(--wp--preset--spacing--70);padding-bottom:20px;padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('Download', 'millipede') ?></a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"border":{"radius":"70px","width":"2px"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"18px","bottom":"18px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"medium"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:2px;border-radius:70px;padding-top:18px;padding-right:var(--wp--preset--spacing--60);padding-bottom:18px;padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('Explore More', 'millipede') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
</div>
<!-- /wp:cover -->