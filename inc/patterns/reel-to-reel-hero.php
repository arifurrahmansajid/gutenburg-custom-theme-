<?php
/**
 * Reel-to-Reel Hero Section Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Reel-to-Reel Hero Section', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages', 'hero' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-reel-hero-section","style":{"color":{"background":"#16324f"},"spacing":{"padding":{"top":"76px","bottom":"84px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull vhs-reel-hero-section has-background" style="background-color:#16324f;padding-top:76px;padding-right:24px;padding-bottom:84px;padding-left:24px">
	<!-- wp:columns {"verticalAlignment":"center","className":"vhs-reel-hero-grid","style":{"spacing":{"blockGap":"64px"}}} -->
	<div class="wp-block-columns are-vertically-aligned-center vhs-reel-hero-grid">

		<!-- Left Column: Content -->
		<!-- wp:column {"verticalAlignment":"center","width":"52%"} -->
		<div class="wp-block-column are-vertically-aligned-center" style="flex-basis:52%">
			<!-- wp:paragraph {"className":"vhs-reel-hero-eyebrow","style":{"color":{"text":"#39B7EC"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.16em"}},"spacing":{"margin":{"top":"0px","bottom":"20px"}}}} -->
			<p class="vhs-reel-hero-eyebrow has-text-color" style="color:#39B7EC;font-size:13px;font-weight:800;letter-spacing:0.16em;margin-top:0px;margin-bottom:20px">&frac14;-INCH AUDIO REELS &middot; HOLLYWOOD, FL</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"className":"vhs-reel-hero-title","style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"54px","fontWeight":"800","lineHeight":"1.06"},"spacing":{"margin":{"top":"0px","bottom":"22px"}}}} -->
			<h1 class="wp-block-heading vhs-reel-hero-title has-text-color" style="color:#ffffff;font-size:54px;font-weight:800;line-height:1.06;margin-top:0px;margin-bottom:22px">Reel-to-Reel to Digital, <span style="color:#39B7EC">Played Right</span>.</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"vhs-reel-hero-desc","style":{"color":{"text":"#cbd5e1"},"typography":{"fontSize":"17.5px","lineHeight":"1.65"},"spacing":{"margin":{"top":"0px","bottom":"30px"}}}} -->
			<p class="vhs-reel-hero-desc has-text-color" style="color:#cbd5e1;font-size:17.5px;line-height:1.65;margin-top:0px;margin-bottom:30px">Quarter-inch tape holds everything from garage-band masters to family recordings. We play reels on serviced decks at the correct speed and track layout, then digitize them in Hollywood, FL.</p>
			<!-- /wp:paragraph -->

			<!-- Actions Group -->
			<!-- wp:group {"className":"vhs-reel-hero-actions","style":{"spacing":{"margin":{"bottom":"24px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group vhs-reel-hero-actions" style="margin-bottom:24px">
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"style":{"color":{"background":"#436DA5","text":"#ffffff"},"border":{"radius":"12px"}},"fontSize":"medium"} -->
					<div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-text-color has-background" href="#" style="border-radius:12px;background-color:#436DA5;color:#ffffff">Get a Free Quote</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#39B7EC"},"border":{"radius":"12px","color":"#39B7EC","width":"1.5px"}},"fontSize":"medium"} -->
					<div class="wp-block-button is-style-outline has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-text-color" href="#" style="border-radius:12px;border-color:#39B7EC;border-width:1.5px;color:#39B7EC">See Pricing</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

				<!-- wp:paragraph {"className":"vhs-reel-hero-price-tag","style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"15px","fontWeight":"800"}}} -->
				<p class="vhs-reel-hero-price-tag has-text-color" style="color:#ffffff;font-size:15px;font-weight:800;margin:0">Custom quote</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Feature Bullet Line -->
			<!-- wp:paragraph {"className":"vhs-reel-hero-bullets","style":{"color":{"text":"#94a3b8"},"typography":{"fontSize":"13.5px","fontWeight":"600"}}} -->
			<p class="vhs-reel-hero-bullets has-text-color" style="color:#94a3b8;font-size:13.5px;font-weight:600;margin:0">Hand-digitized in Hollywood, FL &nbsp;&middot;&nbsp; Archival-quality output &nbsp;&middot;&nbsp; Insured, tracked shipping &nbsp;&middot;&nbsp; Originals returned free</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- Right Column: Visual Container -->
		<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
		<div class="wp-block-column are-vertically-aligned-center" style="flex-basis:48%">
			<!-- wp:html -->
			<div class="vhs-reel-hero-media-box">
				<span>still image &mdash; a reel-to-reel deck in the studio</span>
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
