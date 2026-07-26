<?php
/**
 * Living Memories Hero Banner Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Living Memories Hero Banner', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-lm-hero-section","style":{"color":{"background":"#16324f"},"spacing":{"padding":{"top":"100px","bottom":"100px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-lm-hero-section has-background" style="background-color:#16324f;padding-top:100px;padding-right:24px;padding-bottom:100px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"960px","justifyContent":"center"}} -->
	<div class="wp-block-group" style="text-align:center">

		<!-- Eyebrow -->
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#39B7EC"},"typography":{"fontSize":"12px","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"16px"}}}} -->
		<p class="has-text-align-center has-text-color" style="color:#39B7EC;font-size:12px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;margin-top:0px;margin-bottom:16px">INTRODUCING LIVING MEMORIES</p>
		<!-- /wp:paragraph -->

		<!-- Section Heading -->
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"16px"}}},"fontSize":"max-48"} -->
		<h1 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff;font-size:48px;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:16px">Your Legacy Deserves to Be <span style="color:#39B7EC">Preserved</span>.</h1>
		<!-- /wp:heading -->

		<!-- Subtitle -->
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#cbd5e1"},"typography":{"fontSize":"17px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"36px"}}}} -->
		<p class="has-text-align-center has-text-color" style="color:#cbd5e1;font-size:17px;line-height:1.6;margin-bottom:36px">Give your family the ultimate gift &mdash; a documentary of your life, told directly from your heart, and preserved forever.</p>
		<!-- /wp:paragraph -->

		<!-- Buttons Row -->
		<!-- wp:group {"className":"vhs-lm-hero-btn-group","style":{"spacing":{"blockGap":"16px","margin":{"bottom":"48px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"center"}} -->
		<div class="wp-block-group vhs-lm-hero-btn-group" style="margin-bottom:48px">

			<!-- Primary Solid Button -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"#436da5","text":"#ffffff"},"border":{"radius":"10px"},"typography":{"fontWeight":"700","fontSize":"15px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"28px","right":"28px"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" href="#" style="border-radius:10px;background-color:#436da5;color:#ffffff;font-size:15px;font-weight:700;padding:14px 28px;text-decoration:none">Book a Discovery Call</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- Secondary Outline Button -->
			<!-- wp:html -->
			<div class="vhs-lm-sample-btn-wrapper">
				<a href="#" class="vhs-btn-outline vhs-btn-lm-sample">Watch a Sample</a>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->

		<!-- Large Video Showcase Card -->
		<!-- wp:html -->
		<div class="vhs-lm-video-card">
			<img class="vhs-get-img" src="" alt="Cinematic still in-home interview with grandmother" onerror="this.style.display=\'none\'" />
			<div class="vhs-lm-video-play-overlay">
				<div class="vhs-lm-large-play-btn">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="#ffffff"><polygon points="5 3 19 12 5 21 5 3"/></svg>
				</div>
			</div>
			<div class="vhs-get-placeholder-text">cinematic still &mdash; in-home interview with grandmother telling her story</div>
		</div>
		<!-- /wp:html -->

		<!-- Trust Footer Line -->
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#94a3b8"},"typography":{"fontSize":"13px","lineHeight":"1.5"}},"spacing":{"margin":{"top":"36px","bottom":"0px"}}} -->
		<p class="has-text-align-center has-text-color" style="color:#94a3b8;font-size:13px;line-height:1.5;margin-top:36px;margin-bottom:0">Family-owned since 2020 &middot; 5-star on Google &amp; Yelp &middot; Filmed in-home across South Florida</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
