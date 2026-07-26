<?php
/**
 * Nothing Else Like It — Living Memories Feature Grid Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Nothing Else Like It — Feature Cards Grid', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-lm-nothing-like-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-lm-nothing-like-section has-background" style="background-color:#ffffff;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"center"}} -->
	<div class="wp-block-group" style="text-align:center">

		<!-- Section Heading -->
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}},"fontSize":"max-38"} -->
		<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#16324f;font-size:38px;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:12px">Nothing Else <span style="color:#39B7EC">Like It</span>.</h2>
		<!-- /wp:heading -->

		<!-- Subtitle -->
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"48px"}}}} -->
		<p class="has-text-align-center has-text-color" style="color:#64748b;font-size:16px;line-height:1.6;margin-bottom:48px">No studio in the country combines documentary filmmaking with in-house digitization.</p>
		<!-- /wp:paragraph -->

		<!-- 3-Card Feature Grid -->
		<!-- wp:html -->
		<div class="vhs-lm-nothing-grid">

			<!-- Card 1: Documentary + digitization in one -->
			<div class="vhs-lm-nothing-card">
				<div class="vhs-lm-nothing-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="11" width="16" height="8" rx="2"/><path d="M4 11L5 6.5A1 1 0 0 1 6 5.5L18 7A1 1 0 0 1 19 8L20 11H4Z"/><line x1="9" y1="10.8" x2="9.8" y2="7.2"/><line x1="14" y1="10.8" x2="14.8" y2="7.6"/></svg>
				</div>
				<h3 class="vhs-lm-nothing-title">Documentary + digitization in one</h3>
				<p class="vhs-lm-nothing-desc">No other studio combines professional storytelling with archival conversion of your actual media.</p>
			</div>

			<!-- Card 2: Filmed by real filmmakers -->
			<div class="vhs-lm-nothing-card">
				<div class="vhs-lm-nothing-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><line x1="8" y1="9" x2="16" y2="9"/><line x1="8" y1="13" x2="14" y2="13"/></svg>
				</div>
				<h3 class="vhs-lm-nothing-title">Filmed by real filmmakers</h3>
				<p class="vhs-lm-nothing-desc">In partnership with Bahava Media &mdash; cinematic interviews, warm and unscripted.</p>
			</div>

			<!-- Card 3: Your artifacts never leave our hands -->
			<div class="vhs-lm-nothing-card">
				<div class="vhs-lm-nothing-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" y1="19" x2="12" y2="23"/><line x1="8" y1="23" x2="16" y2="23"/></svg>
				</div>
				<h3 class="vhs-lm-nothing-title">Your artifacts never leave our hands</h3>
				<p class="vhs-lm-nothing-desc">Every photo, slide, and tape is digitized in-house in Hollywood, FL. Never shipped, never outsourced.</p>
			</div>

		</div>
		<!-- /wp:html -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
