<?php
/**
 * Microcassette Hero Section Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Microcassette Hero Section', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-microcassette-hero-section","style":{"color":{"background":"#16324f"},"spacing":{"padding":{"top":"76px","bottom":"84px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-microcassette-hero-section has-background" style="background-color:#16324f;padding-top:76px;padding-right:24px;padding-bottom:84px;padding-left:24px">
	<!-- wp:columns {"verticalAlignment":"center","className":"vhs-microcassette-hero-grid","style":{"spacing":{"blockGap":"64px"}}} -->
	<div class="wp-block-columns are-vertically-aligned-center vhs-microcassette-hero-grid">

		<!-- Left Column: Content -->
		<!-- wp:column {"verticalAlignment":"center","width":"54%"} -->
		<div class="wp-block-column are-vertically-aligned-center" style="flex-basis:54%">
			<!-- wp:paragraph {"className":"vhs-microcassette-eyebrow","style":{"color":{"text":"#39B7EC"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.16em"}},"spacing":{"margin":{"top":"0px","bottom":"20px"}}}} -->
			<p class="vhs-microcassette-eyebrow has-text-color" style="color:#39B7EC;font-size:13px;font-weight:800;letter-spacing:0.16em;margin-top:0px;margin-bottom:20px">MICROCASSETTE &middot; MINICASSETTE &middot; HOLLYWOOD, FL</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"className":"vhs-microcassette-title","style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"52px","fontWeight":"800","lineHeight":"1.08"},"spacing":{"margin":{"top":"0px","bottom":"22px"}}}} -->
			<h1 class="wp-block-heading vhs-microcassette-title has-text-color" style="color:#ffffff;font-size:52px;font-weight:800;line-height:1.08;margin-top:0px;margin-bottom:22px">Microcassette to Digital, <span style="color:#39B7EC">Every Word Saved</span>.</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"vhs-microcassette-desc","style":{"color":{"text":"#cbd5e1"},"typography":{"fontSize":"17.5px","lineHeight":"1.65"},"spacing":{"margin":{"top":"0px","bottom":"30px"}}}} -->
			<p class="vhs-microcassette-desc has-text-color" style="color:#cbd5e1;font-size:17.5px;line-height:1.65;margin-top:0px;margin-bottom:30px">Dictation, interviews, lectures, answering-machine messages &mdash; the little microcassettes hold voices worth keeping. We digitize both sides to clean audio in Hollywood, FL.</p>
			<!-- /wp:paragraph -->

			<!-- Actions Group -->
			<!-- wp:group {"className":"vhs-microcassette-actions","style":{"spacing":{"margin":{"bottom":"24px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group vhs-microcassette-actions" style="margin-bottom:24px">
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

				<!-- wp:paragraph {"className":"vhs-microcassette-price-tag","style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"15px","fontWeight":"800"}}} -->
				<p class="vhs-microcassette-price-tag has-text-color" style="color:#ffffff;font-size:15px;font-weight:800;margin:0">From $18 / tape</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Feature Bullet Line -->
			<!-- wp:paragraph {"className":"vhs-microcassette-bullets","style":{"color":{"text":"#94a3b8"},"typography":{"fontSize":"13.5px","fontWeight":"600"}}} -->
			<p class="vhs-microcassette-bullets has-text-color" style="color:#94a3b8;font-size:13.5px;font-weight:600;margin:0">Hand-digitized in Hollywood, FL &nbsp;&middot;&nbsp; Archival-quality output &nbsp;&middot;&nbsp; Insured, tracked shipping &nbsp;&middot;&nbsp; Originals returned free</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- Right Column: Visual Container -->
		<!-- wp:column {"verticalAlignment":"center","width":"46%"} -->
		<div class="wp-block-column are-vertically-aligned-center" style="flex-basis:46%">
			<!-- wp:html -->
			<div class="vhs-microcassette-media-box">
				<span>still image &mdash; microcassettes being digitized</span>
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
