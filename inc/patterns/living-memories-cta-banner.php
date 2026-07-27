<?php
/**
 * More Than a Conversion — Living Memories Banner Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'More Than a Conversion — Living Memories Banner', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-living-memories-section","style":{"color":{"background":"#f3f7fc"},"spacing":{"padding":{"top":"56px","bottom":"56px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-living-memories-section has-background" style="background-color:#f3f7fc;padding-top:56px;padding-right:24px;padding-bottom:56px;padding-left:24px">
	<!-- wp:group {"className":"vhs-living-banner-flex","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
	<div class="wp-block-group vhs-living-banner-flex">

		<!-- Left Stack (Icon + Content) -->
		<!-- wp:group {"className":"vhs-living-left-wrap","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group vhs-living-left-wrap">
			<!-- wp:html -->
			<div class="vhs-living-icon-badge">
				<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="10" width="18" height="9.5" rx="2"/><path d="M3.5 10l1.6-4.6 16 1.8-.9 2.8"/><line x1="9.2" y1="5.8" x2="8.2" y2="9.3"/><line x1="14.4" y1="6.4" x2="13.4" y2="9.7"/></svg>
			</div>
			<!-- /wp:html -->

			<!-- wp:group {"className":"vhs-living-content","layout":{"type":"constrained"}} -->
			<div class="wp-block-group vhs-living-content">
				<!-- wp:paragraph {"className":"vhs-living-eyebrow","style":{"color":{"text":"#436DA5"},"typography":{"fontSize":"12px","fontWeight":"800","letterSpacing":"0.14em"}},"spacing":{"margin":{"top":"0px","bottom":"8px"}}}} -->
				<p class="vhs-living-eyebrow has-text-color" style="color:#436DA5;font-size:12px;font-weight:800;letter-spacing:0.14em;margin-top:0px;margin-bottom:8px">MORE THAN A CONVERSION?</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"vhs-living-desc","style":{"color":{"text":"#34495e"},"typography":{"fontSize":"17.5px","lineHeight":"1.55"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-living-desc has-text-color" style="color:#34495e;font-size:17.5px;line-height:1.55;margin:0">Digitizing a whole family archive? <strong style="color:#16324F">Living Memories</strong> turns it into a filmed documentary of your story &mdash; your voice on camera, your restored memories woven in. From $1,800.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- Right Button -->
		<!-- wp:buttons {"className":"vhs-living-button-wrap"} -->
		<div class="wp-block-buttons vhs-living-button-wrap">
			<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#436DA5"},"border":{"radius":"12px","color":"#39B7EC","width":"1.5px"}},"fontSize":"medium"} -->
			<div class="wp-block-button is-style-outline has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-text-color" href="#" style="border-radius:12px;border-color:#39B7EC;border-width:1.5px;color:#436DA5">Explore Living Memories</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
