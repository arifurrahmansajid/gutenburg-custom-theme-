<?php
/**
 * Why Trust Us Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri = get_template_directory_uri();

return array(
	'title'      => __( 'Why Trust Us — Feature Cards', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-trust-section","style":{"color":{"background":"#f8fafc"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-trust-section has-background" style="background-color:#f8fafc;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Section Heading -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"52px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group" style="margin-bottom:52px">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}},"fontSize":"max-36"} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;margin-top:0;margin-bottom:12px;font-size:38px">Why Trust Us With Your <span style="color:#39B7EC">Memories</span>?</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.6"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
			<p class="has-text-color" style="color:#64748b;font-size:16px;line-height:1.6;margin:0">Four reasons our customers choose Memory Converter — and come back when they find more tapes.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- 4-Card Grid -->
		<!-- wp:group {"className":"vhs-trust-grid"} -->
		<div class="wp-block-group vhs-trust-grid">

			<!-- Card 1: Guaranteed Quality -->
			<!-- wp:group {"className":"vhs-trust-card"} -->
			<div class="wp-block-group vhs-trust-card">
				<!-- wp:html -->
				<div class="vhs-trust-icon-circle">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"8px"}}}} -->
				<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0;margin-bottom:8px;line-height:1.3">Guaranteed Quality</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.6"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.6;margin:0">We adjust tracking, clean mold and dust off every tape before digitizing. If a tape is blank, you pay nothing for that tape.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Card 2: Pro Studio Equipment -->
			<!-- wp:group {"className":"vhs-trust-card"} -->
			<div class="wp-block-group vhs-trust-card">
				<!-- wp:html -->
				<div class="vhs-trust-icon-circle">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"8px"}}}} -->
				<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0;margin-bottom:8px;line-height:1.3">Pro Studio Equipment</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.6"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.6;margin:0">Captured using professional JVC &amp; Panasonic decks with built-in TBC time-base corrector hardware — not consumer converters.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Card 3: Local In-House Studio -->
			<!-- wp:group {"className":"vhs-trust-card"} -->
			<div class="wp-block-group vhs-trust-card">
				<!-- wp:html -->
				<div class="vhs-trust-icon-circle">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"8px"}}}} -->
				<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0;margin-bottom:8px;line-height:1.3">Local In-House Studio</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.6"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.6;margin:0">Your tapes never leave our secured Hollywood, FL facility. No mail-in risk, no lost packages — drop off or use our white-glove pickup.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Card 4: No-Risk Guarantee -->
			<!-- wp:group {"className":"vhs-trust-card"} -->
			<div class="wp-block-group vhs-trust-card">
				<!-- wp:html -->
				<div class="vhs-trust-icon-circle">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"8px"}}}} -->
				<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0;margin-bottom:8px;line-height:1.3">No-Risk Guarantee</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.6"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.6;margin:0">Blank or completely unreadable tape? You pay $0 for it. No fine print. No processing fees. Just honest, local service.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

		<!-- Bottom CTA Banner -->
		<!-- wp:group {"className":"vhs-trust-cta-banner","style":{"color":{"background":"#112a46"},"border":{"radius":"16px"},"spacing":{"padding":{"top":"36px","bottom":"36px","left":"36px","right":"36px"},"margin":{"top":"52px"}}}} -->
		<div class="wp-block-group vhs-trust-cta-banner has-background" style="background-color:#112a46;border-radius:16px;margin-top:52px;padding:36px">
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"24px"}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%">
					<!-- wp:paragraph {"style":{"color":{"text":"#39B7EC"},"typography":{"fontSize":"11px","fontWeight":"800","letterSpacing":"0.06em"}},"className":"vhs-trust-cta-eyebrow"} -->
					<p class="vhs-trust-cta-eyebrow has-text-color" style="color:#39B7EC;font-size:11px;font-weight:800;letter-spacing:0.06em;text-transform:uppercase;margin:0 0 8px 0">ANOTHER LOCAL OPTION?</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"text":"#f0f9ff"},"typography":{"fontSize":"16px","lineHeight":"1.5"}},"className":"vhs-trust-cta-text"} -->
					<p class="vhs-trust-cta-text has-text-color" style="color:#f0f9ff;font-size:16px;line-height:1.5;margin:0">Digitizing a lifetime of home videos? Your family&#8217;s story deserves local experts &mdash; not a generic mass mailer. We&#8217;re in <strong style="color:#ffffff">Hollywood, FL</strong>.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
					<div class="wp-block-buttons">
						<!-- wp:button {"style":{"color":{"background":"#39B7EC","text":"#0f172a"},"border":{"radius":"10px"},"typography":{"fontWeight":"700","fontSize":"14px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"26px","right":"26px"}}}} -->
						<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" href="#" style="border-radius:10px;background-color:#39B7EC;color:#0f172a;font-size:14px;font-weight:700;padding:13px 26px">Get Free Quote Today</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
