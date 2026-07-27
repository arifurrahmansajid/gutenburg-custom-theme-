<?php
/**
 * Costco Offered vs Trade-offs Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Costco Offered vs Trade-offs', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-costco-compare-section","style":{"color":{"background":"#f3f7fc"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-costco-compare-section has-background" style="background-color:#f3f7fc;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- 2 Cards Grid -->
		<!-- wp:columns {"className":"vhs-costco-compare-grid","style":{"spacing":{"blockGap":"24px","margin":{"top":"0px","bottom":"0px"}}}} -->
		<div class="wp-block-columns vhs-costco-compare-grid" style="margin-top:0px;margin-bottom:0px">

			<!-- Card 1: What Costco Offered -->
			<!-- wp:column {"className":"vhs-costco-compare-card"} -->
			<div class="wp-block-column vhs-costco-compare-card">
				<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"24px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"20px"}}}} -->
				<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-size:24px;font-weight:800;margin-top:0px;margin-bottom:20px">What Costco <span style="color:#39B7EC">Offered</span>.</h2>
				<!-- /wp:heading -->

				<!-- List Item 1 -->
				<!-- wp:group {"className":"vhs-costco-list-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group vhs-costco-list-item">
					<!-- wp:html -->
					<div class="vhs-costco-icon-check">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 12.5l5 5 10-11"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:paragraph {"className":"vhs-costco-item-text","style":{"color":{"text":"#4a5d73"},"typography":{"fontSize":"14.5px","lineHeight":"1.55","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-costco-item-text has-text-color" style="color:#4a5d73;font-size:14.5px;line-height:1.55;font-weight:600;margin:0">Genuinely convenient for members &mdash; drop off with the groceries</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- List Item 2 -->
				<!-- wp:group {"className":"vhs-costco-list-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group vhs-costco-list-item">
					<!-- wp:html -->
					<div class="vhs-costco-icon-check">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 12.5l5 5 10-11"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:paragraph {"className":"vhs-costco-item-text","style":{"color":{"text":"#4a5d73"},"typography":{"fontSize":"14.5px","lineHeight":"1.55","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-costco-item-text has-text-color" style="color:#4a5d73;font-size:14.5px;line-height:1.55;font-weight:600;margin:0">Fair pricing on simple bulk prints and enlargements</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- List Item 3 -->
				<!-- wp:group {"className":"vhs-costco-list-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group vhs-costco-list-item">
					<!-- wp:html -->
					<div class="vhs-costco-icon-check">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 12.5l5 5 10-11"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:paragraph {"className":"vhs-costco-item-text","style":{"color":{"text":"#4a5d73"},"typography":{"fontSize":"14.5px","lineHeight":"1.55","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-costco-item-text has-text-color" style="color:#4a5d73;font-size:14.5px;line-height:1.55;font-weight:600;margin:0">A trusted brand handling the logistics</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:column -->

			<!-- Card 2: The Trade-offs to Know -->
			<!-- wp:column {"className":"vhs-costco-compare-card"} -->
			<div class="wp-block-column vhs-costco-compare-card">
				<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"24px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"20px"}}}} -->
				<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-size:24px;font-weight:800;margin-top:0px;margin-bottom:20px">The Trade-offs to <span style="color:#39B7EC">Know</span>.</h2>
				<!-- /wp:heading -->

				<!-- Cross Item 1 -->
				<!-- wp:group {"className":"vhs-costco-list-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group vhs-costco-list-item">
					<!-- wp:html -->
					<div class="vhs-costco-icon-cross">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#A8B7C7" stroke-width="2.2" stroke-linecap="round"><line x1="6" y1="6" x2="18" y2="18"/><line x1="18" y1="6" x2="6" y2="18"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:paragraph {"className":"vhs-costco-item-text-muted","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14.5px","lineHeight":"1.55","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-costco-item-text-muted has-text-color" style="color:#64748b;font-size:14.5px;line-height:1.55;font-weight:600;margin:0">The in-house Photo Center is closed (in-store Feb 2021; online Jan 28, 2023)</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- Cross Item 2 -->
				<!-- wp:group {"className":"vhs-costco-list-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group vhs-costco-list-item">
					<!-- wp:html -->
					<div class="vhs-costco-icon-cross">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#A8B7C7" stroke-width="2.2" stroke-linecap="round"><line x1="6" y1="6" x2="18" y2="18"/><line x1="18" y1="6" x2="6" y2="18"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:paragraph {"className":"vhs-costco-item-text-muted","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14.5px","lineHeight":"1.55","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-costco-item-text-muted has-text-color" style="color:#64748b;font-size:14.5px;line-height:1.55;font-weight:600;margin:0">Transfers were mailed to a third-party processor (fulfilled by YesVideo, now Capture)</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- Cross Item 3 -->
				<!-- wp:group {"className":"vhs-costco-list-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group vhs-costco-list-item">
					<!-- wp:html -->
					<div class="vhs-costco-icon-cross">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#A8B7C7" stroke-width="2.2" stroke-linecap="round"><line x1="6" y1="6" x2="18" y2="18"/><line x1="18" y1="6" x2="6" y2="18"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:paragraph {"className":"vhs-costco-item-text-muted","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14.5px","lineHeight":"1.55","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-costco-item-text-muted has-text-color" style="color:#64748b;font-size:14.5px;line-height:1.55;font-weight:600;margin:0">Basic/DVD-only output, limited formats, no restoration</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- Cross Item 4 -->
				<!-- wp:group {"className":"vhs-costco-list-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group vhs-costco-list-item">
					<!-- wp:html -->
					<div class="vhs-costco-icon-cross">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#A8B7C7" stroke-width="2.2" stroke-linecap="round"><line x1="6" y1="6" x2="18" y2="18"/><line x1="18" y1="6" x2="6" y2="18"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:paragraph {"className":"vhs-costco-item-text-muted","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14.5px","lineHeight":"1.55","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-costco-item-text-muted has-text-color" style="color:#64748b;font-size:14.5px;line-height:1.55;font-weight:600;margin:0">No handling for moldy, fragile, or damaged media</p>
					<!-- /wp:paragraph -->
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
