<?php
/**
 * Costco Guide Hero Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Costco Guide Hero', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-costco-hero","style":{"color":{"background":"#16324f"},"spacing":{"padding":{"top":"72px","bottom":"64px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group alignfull vhs-costco-hero has-background" style="background-color:#16324f;padding-top:72px;padding-right:24px;padding-bottom:64px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1100px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Eyebrow Pill Badge -->
		<!-- wp:group {"className":"vhs-costco-pill","layout":{"type":"flex","verticalAlignment":"center"}} -->
		<div class="wp-block-group vhs-costco-pill">
			<!-- wp:html -->
			<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 12.5l5 5 10-11"/></svg>
			<!-- /wp:html -->

			<!-- wp:paragraph {"className":"vhs-costco-pill-text","style":{"color":{"text":"#39B7EC"},"typography":{"fontSize":"12.5px","fontWeight":"800","letterSpacing":"0.06em"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
			<p class="vhs-costco-pill-text has-text-color" style="color:#39B7EC;font-size:12.5px;font-weight:800;letter-spacing:0.06em;margin:0">HONEST GUIDE &mdash; RETAILER FACTS VERIFIED BEFORE PUBLISHING</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- H1 Title -->
		<!-- wp:heading {"level":1,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"800","lineHeight":"1.12"},"spacing":{"margin":{"top":"0px","bottom":"18px"}}},"fontSize":"max-44"} -->
		<h1 class="wp-block-heading has-text-color" style="color:#ffffff;font-weight:800;line-height:1.12;margin-top:0px;margin-bottom:18px;font-size:44px">Costco Photo Center Alternative: Photo Scanning &amp; VHS to <span style="color:#39B7EC">Digital</span>.</h1>
		<!-- /wp:heading -->

		<!-- Subtitle Paragraph -->
		<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.82)"},"typography":{"fontSize":"17.5px","lineHeight":"1.65","fontWeight":"500"}},"spacing":{"margin":{"top":"0px","bottom":"26px"}}} -->
		<p class="has-text-color" style="color:rgba(255,255,255,0.82);font-size:17.5px;line-height:1.65;font-weight:500;max-width:720px;margin-top:0px;margin-bottom:26px">Thinking about Costco for your old photos, tapes, or film? Here&rsquo;s an honest look at what&rsquo;s changed, the trade-offs, and a studio-grade alternative for memories you can&rsquo;t replace.</p>
		<!-- /wp:paragraph -->

		<!-- Buttons & Links Row -->
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"#436DA5","text":"#ffffff"},"border":{"radius":"12px"}},"fontSize":"medium"} -->
				<div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-text-color has-background" href="#" style="border-radius:12px;background-color:#436DA5;color:#ffffff">Get a Free Quote</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
			<p style="margin:0"><a class="vhs-costco-link" href="#table">Jump to the comparison &darr;</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
