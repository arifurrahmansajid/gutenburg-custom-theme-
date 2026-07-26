<?php
/**
 * DVD to Digital Service Hero Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'DVD to Digital Hero — Service Hero', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-dvd-hero-section","style":{"color":{"background":"#16324f"},"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-dvd-hero-section has-background" style="background-color:#16324f;padding-top:90px;padding-right:24px;padding-bottom:90px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- 2 Columns Layout -->
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"48px"}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">

			<!-- Left Column: Text & Buttons -->
			<!-- wp:column {"verticalAlignment":"center","width":"52%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%">

				<!-- Category Eyebrow -->
				<!-- wp:paragraph {"style":{"color":{"text":"#39B7EC"},"typography":{"fontSize":"12px","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}}} -->
				<p class="has-text-color" style="color:#39B7EC;font-size:12px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;margin-top:0px;margin-bottom:12px">SERVICE &middot; HOME-RECORDED DISCS</p>
				<!-- /wp:paragraph -->

				<!-- Section Heading -->
				<!-- wp:heading {"level":1,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"16px"}}},"fontSize":"max-44"} -->
				<h1 class="wp-block-heading has-text-color" style="color:#ffffff;font-size:44px;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:16px">DVD to <span style="color:#39B7EC">Digital</span>.</h1>
				<!-- /wp:heading -->

				<!-- Description Paragraph -->
				<!-- wp:paragraph {"style":{"color":{"text":"#cbd5e1"},"typography":{"fontSize":"16px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"32px"}}}} -->
				<p class="has-text-color" style="color:#cbd5e1;font-size:16px;line-height:1.6;margin-bottom:32px">DVDs scratch, rot, and become unplayable &mdash; and disc players are disappearing. Memory Converter converts your home-recorded DVDs to clean digital files you can stream, share, and back up, digitized by hand in Hollywood, FL.</p>
				<!-- /wp:paragraph -->

				<!-- Buttons Row -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"14px","margin":{"bottom":"28px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group" style="margin-bottom:28px">

					<!-- Primary Button -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"style":{"color":{"background":"#436da5","text":"#ffffff"},"border":{"radius":"10px"},"typography":{"fontWeight":"700","fontSize":"14px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"24px","right":"24px"}}}} -->
						<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" href="#" style="border-radius:10px;background-color:#436da5;color:#ffffff;font-size:14px;font-weight:700;padding:13px 24px;text-decoration:none">Get a Free Quote</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

					<!-- Secondary Outline Button -->
					<!-- wp:html -->
					<div class="vhs-dvd-outline-btn-wrapper">
						<a href="#" class="vhs-btn-outline vhs-btn-dvd-outline">How It Works</a>
					</div>
					<!-- /wp:html -->

				</div>
				<!-- /wp:group -->

				<!-- Trust Footer Line -->
				<!-- wp:paragraph {"style":{"color":{"text":"#94a3b8"},"typography":{"fontSize":"13px","lineHeight":"1.5"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<p class="has-text-color" style="color:#94a3b8;font-size:13px;line-height:1.5;margin:0">Family-owned since 2020 &middot; 5-star on Google &amp; Yelp &middot; In-house &middot; Never outsourced overseas</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:column -->

			<!-- Right Column: DVD vs Digital Graphic Card -->
			<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%">

				<!-- Graphic Card -->
				<!-- wp:html -->
				<div class="vhs-dvd-graphic-card">
					<div class="vhs-dvd-diagram-row">

						<!-- Left: DVD Disc Graphic -->
						<div class="vhs-dvd-disc-box">
							<div class="vhs-dvd-disc-graphic">
								<div class="vhs-dvd-disc-inner"></div>
								<div class="vhs-dvd-disc-center-hole"></div>
							</div>
							<span class="vhs-dvd-label">home dvds &mdash; scratched, aging</span>
						</div>

						<!-- Center: Arrow -->
						<div class="vhs-dvd-arrow">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</div>

						<!-- Right: Phone MP4 Graphic -->
						<div class="vhs-dvd-phone-box">
							<div class="vhs-dvd-phone-graphic">
								<div class="vhs-dvd-play-btn">
									<svg width="14" height="14" viewBox="0 0 24 24" fill="#ffffff"><polygon points="5 3 19 12 5 21 5 3"/></svg>
								</div>
							</div>
							<span class="vhs-dvd-label">mp4 &mdash; phone &amp; cloud playback</span>
						</div>

					</div>
				</div>
				<!-- /wp:html -->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
