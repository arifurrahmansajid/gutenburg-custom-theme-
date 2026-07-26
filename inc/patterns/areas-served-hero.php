<?php
/**
 * Areas Served Hero Banner Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri = get_template_directory_uri();

return array(
	'title'      => __( 'Areas Served Hero Banner', 'realome' ),
	'categories' => array( 'vhs-sections', 'hero', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-services-breadcrumb-bar","style":{"color":{"background":"#f4f7fb"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-services-breadcrumb-bar has-background" style="background-color:#f4f7fb;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontWeight":"500"}}} -->
		<p style="font-size:14px;font-weight:500;margin:0"><a href="/" style="color:#64748b;text-decoration:none">Home</a> &nbsp;&rsaquo;&nbsp; <span style="color:#0f172a;font-weight:600">Areas Served</span></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"vhs-areas-hero-box","style":{"color":{"background":"#132b45","text":"#ffffff"},"spacing":{"padding":{"top":"88px","bottom":"88px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-areas-hero-box has-text-color has-background" style="background-color:#132b45;color:#ffffff;padding-top:88px;padding-right:24px;padding-bottom:88px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Main Heading -->
		<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"16px"}}},"fontSize":"max-48"} -->
		<h1 class="wp-block-heading" style="color:#ffffff;font-size:52px;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:16px">Serving All of <span style="color:#39B7EC">South Florida</span> &mdash;<br>and Families Nationwide by Mail.</h1>
		<!-- /wp:heading -->

		<!-- Subtitle -->
		<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.80)"},"typography":{"fontSize":"17px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"36px"}}}} -->
		<p class="has-text-color" style="color:rgba(255,255,255,0.80);font-size:17px;line-height:1.6;margin-bottom:36px;max-width:660px">Digitized by hand in our Hollywood, FL studio, with local drop-off, pickup, and free insured mail-in.</p>
		<!-- /wp:paragraph -->

		<!-- Dual CTA Buttons Row -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group vhs-areas-cta-row">

			<!-- Primary Button: Get a Free Quote -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"#436da5","text":"#ffffff"},"border":{"radius":"10px"},"typography":{"fontWeight":"700","fontSize":"15px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"28px","right":"28px"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" href="#" style="border-radius:10px;background-color:#436da5;color:#ffffff;font-size:15px;font-weight:700;padding-top:14px;padding-right:28px;padding-bottom:14px;padding-left:28px;text-decoration:none">Get a Free Quote</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- Phone Button (outlined) -->
			<!-- wp:html -->
			<a href="tel:7542761601" class="vhs-areas-phone-btn">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.7 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.61 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.6a16 16 0 0 0 6 6l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
				754-276-1601
			</a>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->

		<!-- Trust Tagline Strip -->
		<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.50)"},"typography":{"fontSize":"13px"},"spacing":{"margin":{"top":"28px","bottom":"0px"}}}} -->
		<p class="has-text-color" style="color:rgba(255,255,255,0.50);font-size:13px;margin-top:28px;margin-bottom:0">Family-owned since 2020 &nbsp;&middot;&nbsp; 5-star on Google &amp; Yelp &nbsp;&middot;&nbsp; Your media never leaves our hands</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
