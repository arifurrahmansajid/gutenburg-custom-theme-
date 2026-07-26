<?php
/**
 * Contact Form & What Happens Next Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Contact Form & What Happens Next', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-contact-section","style":{"color":{"background":"#f0f4f8"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-contact-section has-background" style="background-color:#f0f4f8;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- 2-Column Grid -->
		<!-- wp:columns {"style":{"spacing":{"blockGap":"32px"}}} -->
		<div class="wp-block-columns">

			<!-- Left Column: White Contact Form Container -->
			<!-- wp:column {"width":"64%"} -->
			<div class="wp-block-column" style="flex-basis:64%">
				<!-- wp:group {"className":"vhs-contact-form-card","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group vhs-contact-form-card has-background" style="background-color:#ffffff;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px">

					<!-- Form Title -->
					<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"28px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-size:28px;font-weight:800;margin-top:0px;margin-bottom:6px">Send a message</h2>
					<!-- /wp:heading -->

					<!-- Form Subtitle -->
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"15px"},"spacing":{"margin":{"bottom":"32px"}}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:15px;margin-bottom:32px">Every message comes straight to Jeremy &mdash; no call centers, no bots.</p>
					<!-- /wp:paragraph -->

					<!-- Shortcode Form -->
					<!-- wp:shortcode -->
					[contact-form-7 id="d3d290d" title="Contact from 1"]
					<!-- /wp:shortcode -->

				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Right Column: Dark Navy Info Card -->
			<!-- wp:column {"width":"36%"} -->
			<div class="wp-block-column" style="flex-basis:36%">
				<!-- wp:group {"className":"vhs-contact-info-card","style":{"color":{"background":"#112a46","text":"#ffffff"},"spacing":{"padding":{"top":"36px","bottom":"36px","left":"32px","right":"32px"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group vhs-contact-info-card has-text-color has-background" style="background-color:#112a46;color:#ffffff;padding-top:36px;padding-right:32px;padding-bottom:36px;padding-left:32px">

					<!-- Eyebrow -->
					<!-- wp:paragraph {"className":"vhs-info-eyebrow","style":{"color":{"text":"#39B7EC"},"typography":{"fontSize":"11px","fontWeight":"800","letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"20px"}}}} -->
					<p class="vhs-info-eyebrow has-text-color" style="color:#39B7EC;font-size:11px;font-weight:800;letter-spacing:0.1em;text-transform:uppercase;margin-top:0px;margin-bottom:20px">WHAT HAPPENS NEXT</p>
					<!-- /wp:paragraph -->

					<!-- Step 1 -->
					<!-- wp:html -->
					<div class="vhs-info-step">
						<div class="vhs-info-step-num">1</div>
						<div class="vhs-info-step-text">I read every message personally &mdash; no call centers, nothing automated.</div>
					</div>
					<!-- /wp:html -->

					<!-- Step 2 -->
					<!-- wp:html -->
					<div class="vhs-info-step">
						<div class="vhs-info-step-num">2</div>
						<div class="vhs-info-step-text">You get a reply within one business day with your exact quote &mdash; flat rates, no per-minute or per-foot fees.</div>
					</div>
					<!-- /wp:html -->

					<!-- Step 3 -->
					<!-- wp:html -->
					<div class="vhs-info-step">
						<div class="vhs-info-step-num">3</div>
						<div class="vhs-info-step-text">Drop off, local pickup, or a free insured mail-in kit &mdash; you choose. No obligation, ever.</div>
					</div>
					<!-- /wp:html -->

					<!-- Turnaround Pill -->
					<!-- wp:html -->
					<div class="vhs-turnaround-pill">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
						<span>Turnaround: 24 hours &ndash; 1 week</span>
					</div>
					<!-- /wp:html -->

					<!-- Divider Line -->
					<!-- wp:html -->
					<div class="vhs-info-divider"></div>
					<!-- /wp:html -->

					<!-- Visit Studio Eyebrow -->
					<!-- wp:paragraph {"className":"vhs-info-eyebrow","style":{"color":{"text":"#39B7EC"},"typography":{"fontSize":"11px","fontWeight":"800","letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}}} -->
					<p class="vhs-info-eyebrow has-text-color" style="color:#39B7EC;font-size:11px;font-weight:800;letter-spacing:0.1em;text-transform:uppercase;margin-top:0px;margin-bottom:12px">VISIT THE STUDIO</p>
					<!-- /wp:paragraph -->

					<!-- Studio Address -->
					<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontSize":"14px","lineHeight":"1.5"},"spacing":{"margin":{"bottom":"16px"}}}} -->
					<p class="has-text-color" style="color:rgba(255,255,255,0.85);font-size:14px;line-height:1.5;margin-bottom:16px">6630 Meade Street<br>Hollywood, FL 33024</p>
					<!-- /wp:paragraph -->

					<!-- Phone Link -->
					<!-- wp:html -->
					<a href="tel:7542761601" class="vhs-info-phone-link">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.7 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.61 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.6a16 16 0 0 0 6 6l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
						<span>754-276-1601</span>
					</a>
					<!-- /wp:html -->

				</div>
				<!-- /wp:group -->
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
