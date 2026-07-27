<?php
/**
 * Hollywood, FL Home Base Hero Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri = get_template_directory_uri();

return array(
	'title'      => __( 'Hollywood, FL Home Base Hero', 'realome' ),
	'categories' => array( 'vhs-sections', 'hero', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-hollywood-homebase-hero","style":{"color":{"background":"#16324F","text":"#ffffff"},"spacing":{"padding":{"top":"76px","bottom":"76px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-hollywood-homebase-hero has-text-color has-background" style="background-color:#16324F;color:#ffffff;padding-top:76px;padding-right:24px;padding-bottom:76px;padding-left:24px">

	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":"64px"}},"className":"vhs-homebase-columns"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center vhs-homebase-columns">

		<!-- Left Column: Text Content & CTAs -->
		<!-- wp:column {"width":"52.5%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52.5%">

			<!-- Subtitle / Eyebrow -->
			<!-- wp:paragraph {"style":{"color":{"text":"#39B7EC"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.16em"}},"spacing":{"margin":{"top":"0px","bottom":"18px"}}} -->
			<p class="has-text-color" style="color:#39B7EC;font-size:13px;font-weight:800;letter-spacing:0.16em;margin-top:0px;margin-bottom:18px">HOME BASE &middot; BROWARD COUNTY</p>
			<!-- /wp:paragraph -->

			<!-- Heading H1 -->
			<!-- wp:heading {"level":1,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"800","lineHeight":"1.08","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0px","bottom":"20px"}}},"fontSize":"max-48"} -->
			<h1 class="wp-block-heading has-text-color" style="color:#ffffff;font-size:48px;font-weight:800;line-height:1.08;letter-spacing:-0.01em;margin-top:0px;margin-bottom:20px">VHS, Film &amp; Photo to Digital in <span style="color:#39B7EC">Hollywood, FL</span>.</h1>
			<!-- /wp:heading -->

			<!-- Description Paragraph -->
			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.82)"},"typography":{"fontSize":"17.5px","lineHeight":"1.65","fontWeight":"500"}},"spacing":{"margin":{"top":"0px","bottom":"26px"}}} -->
			<p class="has-text-color" style="color:rgba(255,255,255,0.82);font-size:17.5px;line-height:1.65;font-weight:500;max-width:540px;margin-top:0px;margin-bottom:26px">This is our home. Our studio is right here at 6630 Meade Street &mdash; drop your memories off in person, meet the people doing the work, and pick everything up the same way.</p>
			<!-- /wp:paragraph -->

			<!-- Buttons Row -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"14px","margin":{"top":"0px","bottom":"22px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-top:0px;margin-bottom:22px">

				<!-- Primary CTA Button -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"style":{"color":{"background":"#436DA5","text":"#ffffff"},"border":{"radius":"12px"},"typography":{"fontWeight":"700","fontSize":"16px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"30px","right":"30px"}}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#" style="border-radius:12px;background-color:#436DA5;color:#ffffff;font-size:16px;font-weight:700;padding-top:16px;padding-right:30px;padding-bottom:16px;padding-left:30px;text-decoration:none">Get a Free Quote</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

				<!-- Phone CTA Button -->
				<!-- wp:html -->
				<a href="tel:754-276-1601" class="vhs-homebase-phone-btn">
					<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round"><rect x="7" y="2.5" width="10" height="19" rx="2.5"></rect><line x1="10.5" y1="18.2" x2="13.5" y2="18.2"></line></svg>
					754-276-1601
				</a>
				<!-- /wp:html -->

			</div>
			<!-- /wp:group -->

			<!-- Subtext Highlights Strip -->
			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.66)"},"typography":{"fontSize":"13.5px","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
			<p class="has-text-color" style="color:rgba(255,255,255,0.66);font-size:13.5px;font-weight:600;margin:0">Family-owned since 2020 &nbsp;<span style="color:#39B7EC">&middot;</span>&nbsp; 5-star on Google &amp; Yelp &nbsp;<span style="color:#39B7EC">&middot;</span>&nbsp; Digitized by hand right here</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- Right Column: Media Card -->
		<!-- wp:column {"width":"47.5%","verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:47.5%">
			<!-- wp:group {"className":"vhs-homebase-photo-card","style":{"color":{"background":"#1E3A5C"},"border":{"radius":"16px"},"spacing":{"padding":{"top":"180px","bottom":"180px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
			<div class="wp-block-group vhs-homebase-photo-card has-background" style="background-color:#1E3A5C;border-radius:16px;box-shadow:0 30px 60px rgba(0,0,0,0.35);padding-top:180px;padding-right:24px;padding-bottom:180px;padding-left:24px">
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"rgba(255,255,255,0.60)"},"typography":{"fontSize":"12px"}}} -->
				<p class="has-text-align-center has-text-color vhs-homebase-photo-text" style="color:rgba(255,255,255,0.60);font-size:12px;font-family:ui-monospace,SFMono-Regular,Consolas,monospace;letter-spacing:0.05em;margin:0">photo &mdash; hollywood beach broadwalk, family</p>
				<!-- /wp:paragraph -->
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
