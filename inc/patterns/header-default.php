<?php
/**
 * Default header pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri = get_template_directory_uri();

return array(
	'title'      => __( 'Header Default', 'realome' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
<!-- wp:group {"tagName":"header","align":"full","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"24px","right":"24px"}},"border":{"bottom":{"color":"#e2e8f0","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<header class="wp-block-group alignfull has-background" style="background-color:#ffffff;border-bottom-color:#e2e8f0;border-bottom-width:1px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px">

	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide" style="display:flex;flex-wrap:wrap;justify-content:space-between;align-items:center">

		<!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group" style="display:flex;align-items:center;gap:12px">
			<!-- wp:site-logo {"width":42,"shouldSyncIcon":false} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="display:flex;flex-direction:column">
				<!-- wp:site-title {"style":{"typography":{"fontWeight":"800","fontStyle":"normal"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"fontSize":"medium"} /-->
				<!-- wp:paragraph {"style":{"color":{"text":"#94a3b8"},"typography":{"fontSize":"10px","fontWeight":"700","letterSpacing":"0.1em"}},"fontSize":"extra-small"} -->
				<p class="has-text-color has-extra-small-font-size" style="color:#94a3b8;font-size:10px;font-weight:700;letter-spacing:0.1em;margin-top:0px;margin-bottom:0px">HOLLYWOOD, FL</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap","orientation":"horizontal"},"style":{"spacing":{"blockGap":"32px"}}} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group" style="display:flex;align-items:center;gap:20px">
			<!-- wp:group {"className":"vhs-header-phone-wrap","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group vhs-header-phone-wrap" style="display:flex;align-items:center;gap:6px">
				<!-- wp:image {"width":18,"height":18,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( $theme_uri ) . '/assets/icons/phone.svg" alt="Phone" width="18" height="18"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"style":{"color":{"text":"#39B7EC"},"typography":{"fontWeight":"700"}},"fontSize":"small"} -->
				<p class="has-text-color has-small-font-size" style="color:#39B7EC;font-weight:700;margin:0"><a href="tel:7542761601" style="color:#39B7EC;text-decoration:none">754-276-1601</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"#436DA5","text":"#ffffff"},"border":{"radius":"10px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-radius:10px;background-color:#436DA5;color:#ffffff">Get a Free Quote</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</header>
<!-- /wp:group -->
',
);
