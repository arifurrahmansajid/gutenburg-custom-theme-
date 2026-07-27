<?php
/**
 * A Better Option — Costco 4 Cards Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'A Better Option — Costco 4 Cards', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-better-option-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"88px","bottom":"88px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-better-option-section has-background" style="background-color:#ffffff;padding-top:88px;padding-right:24px;padding-bottom:88px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Section Header -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"52px"}}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
		<div class="wp-block-group" style="max-width:640px;margin-bottom:52px">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}},"fontSize":"max-40"} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;letter-spacing:-0.01em;margin-top:0px;margin-bottom:14px;font-size:40px">A Better Option for Irreplaceable <span style="color:#39B7EC">Memories</span>.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"#4a5d73"},"typography":{"fontSize":"16.5px","lineHeight":"1.6","fontWeight":"500"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
			<p class="has-text-color" style="color:#4a5d73;font-size:16.5px;line-height:1.6;font-weight:500;margin:0">What a dedicated studio does that a warehouse counter never could.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- 4 Cards Grid -->
		<!-- wp:columns {"className":"vhs-better-option-grid","style":{"spacing":{"blockGap":"20px","margin":{"top":"0px","bottom":"0px"}}}} -->
		<div class="wp-block-columns vhs-better-option-grid" style="margin-top:0px;margin-bottom:0px">

			<!-- Card 1: Hand-digitized in Hollywood, FL -->
			<!-- wp:column {"className":"vhs-better-option-card"} -->
			<div class="wp-block-column vhs-better-option-card">
				<!-- wp:html -->
				<div class="vhs-better-option-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21.5s-7-6.5-7-11.5a7 7 0 0114 0c0 5-7 11.5-7 11.5z"/><circle cx="12" cy="9.5" r="2.5"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"vhs-better-option-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"7px"}}}} -->
				<h3 class="wp-block-heading vhs-better-option-title has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:7px">Hand-digitized in Hollywood, FL</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"vhs-better-option-sub","style":{"color":{"text":"#4a5d73"},"typography":{"fontSize":"13.5px","lineHeight":"1.55"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-better-option-sub has-text-color" style="color:#4a5d73;font-size:13.5px;line-height:1.55;margin:0">In-house, never overseas &mdash; you can call and visit.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 2: Studio-grade 4K/5K -->
			<!-- wp:column {"className":"vhs-better-option-card"} -->
			<div class="wp-block-column vhs-better-option-card">
				<!-- wp:html -->
				<div class="vhs-better-option-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round"><rect x="3" y="4.5" width="18" height="12.5" rx="2"/><line x1="9" y1="20.5" x2="15" y2="20.5"/><line x1="12" y1="17" x2="12" y2="20.5"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"vhs-better-option-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"7px"}}}} -->
				<h3 class="wp-block-heading vhs-better-option-title has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:7px">Studio-grade 4K/5K</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"vhs-better-option-sub","style":{"color":{"text":"#4a5d73"},"typography":{"fontSize":"13.5px","lineHeight":"1.55"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-better-option-sub has-text-color" style="color:#4a5d73;font-size:13.5px;line-height:1.55;margin:0">Plus restoration and fragile-media rescue.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 3: Transparent pricing -->
			<!-- wp:column {"className":"vhs-better-option-card"} -->
			<div class="wp-block-column vhs-better-option-card">
				<!-- wp:html -->
				<div class="vhs-better-option-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2.5h8l4 4V21.5H6z"/><path d="M14 2.5v4h4"/><line x1="9" y1="12" x2="15" y2="12"/><line x1="9" y1="16" x2="15" y2="16"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"vhs-better-option-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"7px"}}}} -->
				<h3 class="wp-block-heading vhs-better-option-title has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:7px">Transparent pricing</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"vhs-better-option-sub","style":{"color":{"text":"#4a5d73"},"typography":{"fontSize":"13.5px","lineHeight":"1.55"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-better-option-sub has-text-color" style="color:#4a5d73;font-size:13.5px;line-height:1.55;margin:0">VHS from $18/tape. Photos from $0.72. Insured both ways.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 4: Living Memories -->
			<!-- wp:column {"className":"vhs-better-option-card"} -->
			<div class="wp-block-column vhs-better-option-card">
				<!-- wp:html -->
				<div class="vhs-better-option-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="10" width="18" height="9.5" rx="2"/><path d="M3.5 10l1.6-4.6 16 1.8-.9 2.8"/><line x1="9.2" y1="5.8" x2="8.2" y2="9.3"/><line x1="14.4" y1="6.4" x2="13.4" y2="9.7"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"className":"vhs-better-option-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"7px"}}}} -->
				<h3 class="wp-block-heading vhs-better-option-title has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:7px">Living Memories</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"vhs-better-option-sub","style":{"color":{"text":"#4a5d73"},"typography":{"fontSize":"13.5px","lineHeight":"1.55"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-better-option-sub has-text-color" style="color:#4a5d73;font-size:13.5px;line-height:1.55;margin:0">An in-home documentary &mdash; something no store offers. From $1,800.</p>
				<!-- /wp:paragraph -->
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
