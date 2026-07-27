<?php
/**
 * Hollywood, FL FAQ Accordion Section Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri = get_template_directory_uri();

return array(
	'title'      => __( 'Hollywood, FL FAQ Accordion Section', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-faq-section vhs-hollywood-faq-section","style":{"color":{"background":"#ffffff","text":"#34495e"},"spacing":{"padding":{"top":"88px","bottom":"88px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-faq-section vhs-hollywood-faq-section has-text-color has-background" style="background-color:#ffffff;color:#34495e;padding-top:88px;padding-right:24px;padding-bottom:88px;padding-left:24px">

	<!-- wp:columns {"align":"wide","verticalAlignment":"top","style":{"spacing":{"blockGap":"72px"}},"className":"vhs-faq-grid"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top vhs-faq-grid">

		<!-- Left Column: Title & Subtitle & Phone CTA (40% width) -->
		<!-- wp:column {"width":"40%","verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%">

			<!-- Heading H2 -->
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324F"},"typography":{"fontWeight":"800","lineHeight":"1.12","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}},"fontSize":"max-40"} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324F;font-size:40px;font-weight:800;line-height:1.12;letter-spacing:-0.01em;margin-top:0px;margin-bottom:14px">Questions, <span style="color:#39B7EC">Answered</span>.</h2>
			<!-- /wp:heading -->

			<!-- Subtitle -->
			<!-- wp:paragraph {"style":{"color":{"text":"#4A5D73"},"typography":{"fontSize":"16px","lineHeight":"1.6","fontWeight":"500"}},"spacing":{"margin":{"top":"0px","bottom":"24px"}}} -->
			<p class="has-text-color" style="color:#4A5D73;font-size:16px;line-height:1.6;font-weight:500;margin-top:0px;margin-bottom:24px">Anything else? Call us &mdash; a real person in our Hollywood studio picks up.</p>
			<!-- /wp:paragraph -->

			<!-- Phone Link CTA -->
			<!-- wp:html -->
			<a href="tel:754-276-1601" class="vhs-faq-phone" style="display:inline-flex;align-items:center;gap:8px;font-weight:800;font-size:16px;color:#436DA5;text-decoration:none">
				<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round"><rect x="7" y="2.5" width="10" height="19" rx="2.5"></rect><line x1="10.5" y1="18.2" x2="13.5" y2="18.2"></line></svg>
				754-276-1601
			</a>
			<!-- /wp:html -->

		</div>
		<!-- /wp:column -->

		<!-- Right Column: Editable FAQ Accordions (60% width) -->
		<!-- wp:column {"width":"60%","verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%">

			<!-- FAQ List Wrapper -->
			<!-- wp:group {"className":"vhs-faq-accordion-container","style":{"border":{"top":{"color":"#E3EBF4","width":"1px"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group vhs-faq-accordion-container" style="border-top:1px solid #E3EBF4">

				<!-- FAQ Item 1 (Default Open) -->
				<!-- wp:details {"open":true,"className":"vhs-faq-details-item"} -->
				<details class="wp-block-details vhs-faq-details-item" open>
					<summary style="color:#16324F;font-size:17px;font-weight:800">Can I drop my tapes off in person in Hollywood?</summary>
					<!-- wp:paragraph {"style":{"color":{"text":"#4A5D73"},"typography":{"fontSize":"15px","lineHeight":"1.65","fontWeight":"500"}},"spacing":{"margin":{"top":"12px","bottom":"0px"}}} -->
					<p class="has-text-color" style="color:#4A5D73;font-size:15px;line-height:1.65;font-weight:500;margin-top:12px;margin-bottom:0">Yes &mdash; that’s the best part of being local. Drop off at our studio at 6630 Meade Street during business hours, no appointment needed. You’ll hand your memories to the same people who digitize them.</p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->

				<!-- FAQ Item 2 -->
				<!-- wp:details {"className":"vhs-faq-details-item"} -->
				<details class="wp-block-details vhs-faq-details-item">
					<summary style="color:#16324F;font-size:17px;font-weight:800">Do you handle mold from beachside humidity?</summary>
					<!-- wp:paragraph {"style":{"color":{"text":"#4A5D73"},"typography":{"fontSize":"15px","lineHeight":"1.65","fontWeight":"500"}},"spacing":{"margin":{"top":"12px","bottom":"0px"}}} -->
					<p class="has-text-color" style="color:#4A5D73;font-size:15px;line-height:1.65;font-weight:500;margin-top:12px;margin-bottom:0">Yes, beachside humidity and high Florida moisture are extremely common. We perform professional dry mold cleaning and tape restoration before playback.</p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->

				<!-- FAQ Item 3 -->
				<!-- wp:details {"className":"vhs-faq-details-item"} -->
				<details class="wp-block-details vhs-faq-details-item">
					<summary style="color:#16324F;font-size:17px;font-weight:800">How fast is turnaround for local orders?</summary>
					<!-- wp:paragraph {"style":{"color":{"text":"#4A5D73"},"typography":{"fontSize":"15px","lineHeight":"1.65","fontWeight":"500"}},"spacing":{"margin":{"top":"12px","bottom":"0px"}}} -->
					<p class="has-text-color" style="color:#4A5D73;font-size:15px;line-height:1.65;font-weight:500;margin-top:12px;margin-bottom:0">Simple orders can be done in 24 hours; standard turnaround is 3 to 5 business days, and the largest family archives take about a week.</p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->

				<!-- FAQ Item 4 -->
				<!-- wp:details {"className":"vhs-faq-details-item"} -->
				<details class="wp-block-details vhs-faq-details-item">
					<summary style="color:#16324F;font-size:17px;font-weight:800">Do you offer pickup in Hollywood?</summary>
					<!-- wp:paragraph {"style":{"color":{"text":"#4A5D73"},"typography":{"fontSize":"15px","lineHeight":"1.65","fontWeight":"500"}},"spacing":{"margin":{"top":"12px","bottom":"0px"}}} -->
					<p class="has-text-color" style="color:#4A5D73;font-size:15px;line-height:1.65;font-weight:500;margin-top:12px;margin-bottom:0">Yes, we offer scheduled local pickup throughout Hollywood and surrounding South Florida neighborhoods for larger family tape and photo collections.</p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
	',
);
