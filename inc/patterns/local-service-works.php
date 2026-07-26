<?php
/**
 * How Local Service Works Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'How Local Service Works — 3-Card + Callout', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-local-works-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"80px","bottom":"0px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-local-works-section has-background" style="background-color:#ffffff;padding-top:80px;padding-right:24px;padding-bottom:0;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Section Heading -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"40px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group" style="margin-bottom:40px">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;margin:0;font-size:40px">How Local Service <span style="color:#39B7EC">Works</span>.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- 3-Card Grid -->
		<!-- wp:group {"className":"vhs-local-works-grid"} -->
		<div class="wp-block-group vhs-local-works-grid">

			<!-- Card 1: Drop off in person -->
			<!-- wp:group {"className":"vhs-local-works-card"} -->
			<div class="wp-block-group vhs-local-works-card">
				<!-- wp:html -->
				<div class="vhs-local-works-icon">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"18px","bottom":"8px"}}}} -->
				<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:18px;margin-bottom:8px;line-height:1.3">Drop off in person</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.6"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.6;margin:0">Bring your media to 6630 Meade Street, Hollywood &mdash; meet the people doing the work.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Card 2: Scheduled local pickup -->
			<!-- wp:group {"className":"vhs-local-works-card"} -->
			<div class="wp-block-group vhs-local-works-card">
				<!-- wp:html -->
				<div class="vhs-local-works-icon">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"18px","bottom":"8px"}}}} -->
				<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:18px;margin-bottom:8px;line-height:1.3">Scheduled local pickup</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.6"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.6;margin:0">Available for select areas, including 55+ and gated communities.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Card 3: Free insured mail-in -->
			<!-- wp:group {"className":"vhs-local-works-card"} -->
			<div class="wp-block-group vhs-local-works-card">
				<!-- wp:html -->
				<div class="vhs-local-works-icon">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 1 0 .49-3.5"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"18px","bottom":"8px"}}}} -->
				<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:18px;margin-bottom:8px;line-height:1.3">Free insured mail-in</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.6"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.6;margin:0">Prepaid, tracked both ways, from anywhere in the U.S.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"vhs-local-mailin-callout","style":{"color":{"background":"#132b45"},"spacing":{"padding":{"top":"28px","bottom":"28px","left":"24px","right":"24px"},"margin":{"top":"40px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-local-mailin-callout has-background" style="background-color:#132b45;margin-top:40px;padding-top:28px;padding-right:24px;padding-bottom:28px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px"}} -->
	<div class="wp-block-group vhs-local-mailin-inner">

		<div class="vhs-local-mailin-left">
			<!-- wp:html -->
			<div class="vhs-local-mailin-icon-circle">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
			</div>
			<!-- /wp:html -->
			<div class="vhs-local-mailin-text">
				<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"15px","fontWeight":"700"}},"className":"vhs-local-mailin-title"} -->
				<p class="vhs-local-mailin-title has-text-color" style="color:#ffffff;font-size:15px;font-weight:700;margin:0 0 4px 0">Not in South Florida? Nationwide by mail.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.65)"},"typography":{"fontSize":"13px","lineHeight":"1.5"}},"className":"vhs-local-mailin-sub"} -->
				<p class="vhs-local-mailin-sub has-text-color" style="color:rgba(255,255,255,0.65);font-size:13px;line-height:1.5;margin:0">Same in-house handling, insured both ways, originals always returned.</p>
				<!-- /wp:paragraph -->
			</div>
		</div>

		<!-- wp:buttons {"className":"vhs-local-mailin-btn-wrap"} -->
		<div class="wp-block-buttons vhs-local-mailin-btn-wrap">
			<!-- wp:button {"style":{"color":{"background":"#436da5","text":"#ffffff"},"border":{"radius":"10px"},"typography":{"fontWeight":"700","fontSize":"14px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"24px","right":"24px"}}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" href="#" style="border-radius:10px;background-color:#436da5;color:#ffffff;font-size:14px;font-weight:700;padding:13px 24px;text-decoration:none">Start a mail-in order</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
