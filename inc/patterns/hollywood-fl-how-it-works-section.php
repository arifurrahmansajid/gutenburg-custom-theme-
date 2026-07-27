<?php
/**
 * Hollywood, FL How It Works Section Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri = get_template_directory_uri();

return array(
	'title'      => __( 'Hollywood, FL How It Works Section', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-hollywood-how-it-works-section","style":{"color":{"background":"#ffffff","text":"#34495e"},"spacing":{"padding":{"top":"88px","bottom":"88px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-hollywood-how-it-works-section has-text-color has-background" style="background-color:#ffffff;color:#34495e;padding-top:88px;padding-right:24px;padding-bottom:88px;padding-left:24px">
	<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":"72px"}},"className":"vhs-hollywood-works-grid"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center vhs-hollywood-works-grid">
		<!-- Left Column: Content & Checkmarks -->
		<!-- wp:column {"width":"50%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324F"},"typography":{"fontWeight":"800","lineHeight":"1.12","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}},"fontSize":"max-40"} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324F;font-size:40px;font-weight:800;line-height:1.12;letter-spacing:-0.01em;margin-top:0px;margin-bottom:14px">How It Works in <span style="color:#39B7EC">Hollywood</span>.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"#4A5D73"},"typography":{"fontSize":"16.5px","lineHeight":"1.6","fontWeight":"500"}},"spacing":{"margin":{"top":"0px","bottom":"36px"}}} -->
			<p class="has-text-color" style="color:#4A5D73;font-size:16.5px;line-height:1.6;font-weight:500;margin-top:0px;margin-bottom:36px">You’re local &mdash; so this part is easy.</p>
			<!-- /wp:paragraph -->

			<!-- wp:html -->
			<div class="vhs-works-feature-list" style="display:flex;flex-direction:column;gap:18px">
				<div style="display:flex;gap:14px;align-items:flex-start">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:3px"><path d="M4.5 12.5l5 5 10-11"></path></svg>
					<div>
						<span style="font-size:15.5px;font-weight:800;color:#16324F">Same-day drop-off.</span>
						<span style="font-size:15px;color:#4A5D73;font-weight:500">Swing by 6630 Meade Street &mdash; no appointment needed for drop-offs.</span>
					</div>
				</div>

				<div style="display:flex;gap:14px;align-items:flex-start">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:3px"><path d="M4.5 12.5l5 5 10-11"></path></svg>
					<div>
						<span style="font-size:15.5px;font-weight:800;color:#16324F">In-person pickup.</span>
						<span style="font-size:15px;color:#4A5D73;font-weight:500">Collect your originals and files when they’re ready, or we’ll ship them free.</span>
					</div>
				</div>

				<div style="display:flex;gap:14px;align-items:flex-start">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:3px"><path d="M4.5 12.5l5 5 10-11"></path></svg>
					<div>
						<span style="font-size:15.5px;font-weight:800;color:#16324F">Local pickup available.</span>
						<span style="font-size:15px;color:#4A5D73;font-weight:500">Ask about scheduled pickup for larger collections.</span>
					</div>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->

		<!-- Right Column: Interactive Studio Map Card -->
		<!-- wp:column {"width":"50%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:html -->
			<div class="vhs-hollywood-map-card">
				<div class="vhs-map-pin-marker">
					<span class="vhs-map-pin-label">OUR STUDIO</span>
					<span class="vhs-map-pin-dot-outer"><span class="vhs-map-pin-dot-inner"></span></span>
				</div>
				<div class="vhs-map-location-subtext">
					6630 Meade Street &middot; minutes from anywhere in Hollywood
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
	',
);
