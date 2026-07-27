<?php
/**
 * Nationwide Mail-In Banner Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Nationwide Mail-In Banner', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-mailin-banner-wrapper","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-mailin-banner-wrapper" style="padding-top:40px;padding-right:24px;padding-bottom:40px;padding-left:24px">

	<!-- Dark Banner Box -->
	<!-- wp:group {"className":"vhs-mailin-banner","style":{"color":{"background":"#16324f"},"border":{"radius":"16px"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
	<div class="wp-block-group vhs-mailin-banner has-background" style="background-color:#16324f;border-radius:16px">

		<!-- Left Column: Icon + Info -->
		<!-- wp:group {"className":"vhs-mailin-left","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group vhs-mailin-left">
			<!-- wp:html -->
			<div class="vhs-mailin-icon">
				<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l9 4.5-9 4.5-9-4.5z"/><path d="M3 7.5v9l9 4.5 9-4.5v-9"/><line x1="12" y1="12" x2="12" y2="21"/></svg>
			</div>
			<!-- /wp:html -->

			<!-- wp:group {"className":"vhs-mailin-info","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group vhs-mailin-info">
				<!-- wp:heading {"level":3,"className":"vhs-mailin-title","style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"16.5px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"4px"}}}} -->
				<h3 class="wp-block-heading vhs-mailin-title has-text-color" style="color:#ffffff;font-size:16.5px;font-weight:800;margin-top:0px;margin-bottom:4px">Not in South Florida? Nationwide by mail.</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"vhs-mailin-sub","style":{"color":{"text":"rgba(255,255,255,0.72)"},"typography":{"fontSize":"14px","lineHeight":"1.55","fontWeight":"500"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<p class="vhs-mailin-sub has-text-color" style="color:rgba(255,255,255,0.72);font-size:14px;line-height:1.55;font-weight:500;margin:0">Same in-house handling, insured both ways, originals always returned.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- Right Column: Button -->
		<!-- wp:group {"className":"vhs-mailin-btn-wrap","layout":{"type":"flex","verticalAlignment":"center"}} -->
		<div class="wp-block-group vhs-mailin-btn-wrap">
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"#436DA5","text":"#ffffff"},"border":{"radius":"12px"}},"fontSize":"medium"} -->
				<div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-text-color has-background" href="#" style="border-radius:12px;background-color:#436DA5;color:#ffffff">Start a mail-in order</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
',
);
