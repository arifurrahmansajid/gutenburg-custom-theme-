<?php
/**
 * Old Film Fades & Grows Brittle CTA Banner Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Old Film Fades & Grows Brittle CTA Banner', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-film-preserve-banner-section","style":{"color":{"background":"#16324f"},"spacing":{"padding":{"top":"100px","bottom":"100px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-film-preserve-banner-section has-background" style="background-color:#16324f;padding-top:100px;padding-right:24px;padding-bottom:100px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"900px","justifyContent":"center"}} -->
	<div class="wp-block-group" style="text-align:center">

		<!-- Section Heading -->
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"16px"}}},"fontSize":"max-42"} -->
		<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff;font-size:42px;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:16px">Old Film Fades and Grows Brittle Every <span style="color:#39B7EC">Year</span>.</h2>
		<!-- /wp:heading -->

		<!-- Subtitle -->
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#cbd5e1"},"typography":{"fontSize":"17px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"36px"}}}} -->
		<p class="has-text-align-center has-text-color" style="color:#cbd5e1;font-size:17px;line-height:1.6;margin-bottom:36px">Color shifts, sprockets crack, splices fail. Preserve your reels now &mdash; it starts with one free quote.</p>
		<!-- /wp:paragraph -->

		<!-- Buttons Row -->
		<!-- wp:group {"className":"vhs-preserve-btn-group","style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
		<div class="wp-block-group vhs-preserve-btn-group">

			<!-- Primary Solid Button -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"#436da5","text":"#ffffff"},"border":{"radius":"10px"},"typography":{"fontWeight":"700","fontSize":"15px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"28px","right":"28px"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" href="#" style="border-radius:10px;background-color:#436da5;color:#ffffff;font-size:15px;font-weight:700;padding:14px 28px;text-decoration:none">Get a Free Quote</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- Secondary Phone Outline Button -->
			<!-- wp:html -->
			<div class="vhs-phone-btn-wrapper">
				<a href="tel:754-276-1601" class="vhs-btn-phone-outline">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
					<span>Call 754-276-1601</span>
				</a>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
