<?php
/**
 * The 30-Second Verdict Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'The 30-Second Verdict', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-verdict-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
<div class="wp-block-group alignfull vhs-verdict-section has-background" style="background-color:#ffffff;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Section Header -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"52px"}}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
		<div class="wp-block-group" style="max-width:640px;margin-bottom:52px">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"fontSize":"max-40"} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;letter-spacing:-0.01em;margin:0;font-size:40px">The 30-Second <span style="color:#39B7EC">Verdict</span>.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- 2 Cards Grid -->
		<!-- wp:columns {"className":"vhs-verdict-grid","style":{"spacing":{"blockGap":"24px","margin":{"top":"0px","bottom":"24px"}}}} -->
		<div class="wp-block-columns vhs-verdict-grid" style="margin-top:0px;margin-bottom:24px">

			<!-- Card 1: Choose Legacybox if... -->
			<!-- wp:column {"className":"vhs-verdict-card-gray"} -->
			<div class="wp-block-column vhs-verdict-card-gray">
				<!-- wp:paragraph {"className":"vhs-verdict-card-title","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","fontWeight":"800"}},"spacing":{"margin":{"top":"0px","bottom":"18px"}}} -->
				<p class="vhs-verdict-card-title has-text-color" style="color:#64748b;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:18px">Choose <span style="color:#16324f">Legacybox</span> if&hellip;</p>
				<!-- /wp:paragraph -->

				<!-- Item 1 -->
				<!-- wp:group {"className":"vhs-verdict-list-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group vhs-verdict-list-item">
					<!-- wp:paragraph {"className":"vhs-verdict-bullet","style":{"color":{"text":"#64748b"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-verdict-bullet has-text-color" style="color:#64748b;margin:0">&bull;</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-verdict-item-text","style":{"color":{"text":"#4a5d73"},"typography":{"fontSize":"14.5px","lineHeight":"1.55","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-verdict-item-text has-text-color" style="color:#4a5d73;font-size:14.5px;line-height:1.55;font-weight:600;margin:0">You have a very large volume of standard, healthy media</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- Item 2 -->
				<!-- wp:group {"className":"vhs-verdict-list-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group vhs-verdict-list-item">
					<!-- wp:paragraph {"className":"vhs-verdict-bullet","style":{"color":{"text":"#64748b"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-verdict-bullet has-text-color" style="color:#64748b;margin:0">&bull;</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-verdict-item-text","style":{"color":{"text":"#4a5d73"},"typography":{"fontSize":"14.5px","lineHeight":"1.55","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-verdict-item-text has-text-color" style="color:#4a5d73;font-size:14.5px;line-height:1.55;font-weight:600;margin:0">You want a prepaid box on your doorstep and one flat kit price</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- Item 3 -->
				<!-- wp:group {"className":"vhs-verdict-list-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group vhs-verdict-list-item">
					<!-- wp:paragraph {"className":"vhs-verdict-bullet","style":{"color":{"text":"#64748b"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-verdict-bullet has-text-color" style="color:#64748b;margin:0">&bull;</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-verdict-item-text","style":{"color":{"text":"#4a5d73"},"typography":{"fontSize":"14.5px","lineHeight":"1.55","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-verdict-item-text has-text-color" style="color:#4a5d73;font-size:14.5px;line-height:1.55;font-weight:600;margin:0">Convenience matters more than resolution or restoration</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:column -->

			<!-- Card 2: Choose Memory Converter if... -->
			<!-- wp:column {"className":"vhs-verdict-card-cyan"} -->
			<div class="wp-block-column vhs-verdict-card-cyan">
				<!-- wp:paragraph {"className":"vhs-verdict-card-title","style":{"color":{"text":"#436da5"},"typography":{"fontSize":"16px","fontWeight":"800"}},"spacing":{"margin":{"top":"0px","bottom":"18px"}}} -->
				<p class="vhs-verdict-card-title has-text-color" style="color:#436da5;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:18px">Choose <span style="color:#16324f">Memory Converter</span> if&hellip;</p>
				<!-- /wp:paragraph -->

				<!-- Item 1 -->
				<!-- wp:group {"className":"vhs-verdict-list-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group vhs-verdict-list-item">
					<!-- wp:html -->
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:3px"><path d="M4.5 12.5l5 5 10-11"/></svg>
					<!-- /wp:html -->
					<!-- wp:paragraph {"className":"vhs-verdict-item-text-dark","style":{"color":{"text":"#34495e"},"typography":{"fontSize":"14.5px","lineHeight":"1.55","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-verdict-item-text-dark has-text-color" style="color:#34495e;font-size:14.5px;line-height:1.55;font-weight:600;margin:0">Your media is irreplaceable, fragile, moldy, or damaged</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- Item 2 -->
				<!-- wp:group {"className":"vhs-verdict-list-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group vhs-verdict-list-item">
					<!-- wp:html -->
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:3px"><path d="M4.5 12.5l5 5 10-11"/></svg>
					<!-- /wp:html -->
					<!-- wp:paragraph {"className":"vhs-verdict-item-text-dark","style":{"color":{"text":"#34495e"},"typography":{"fontSize":"14.5px","lineHeight":"1.55","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-verdict-item-text-dark has-text-color" style="color:#34495e;font-size:14.5px;line-height:1.55;font-weight:600;margin:0">You want studio-grade 4K/5K and hand restoration</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- Item 3 -->
				<!-- wp:group {"className":"vhs-verdict-list-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group vhs-verdict-list-item">
					<!-- wp:html -->
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:3px"><path d="M4.5 12.5l5 5 10-11"/></svg>
					<!-- /wp:html -->
					<!-- wp:paragraph {"className":"vhs-verdict-item-text-dark","style":{"color":{"text":"#34495e"},"typography":{"fontSize":"14.5px","lineHeight":"1.55","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-verdict-item-text-dark has-text-color" style="color:#34495e;font-size:14.5px;line-height:1.55;font-weight:600;margin:0">You want your originals handled by people you can call &mdash; in the US, never overseas</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- Item 4 -->
				<!-- wp:group {"className":"vhs-verdict-list-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group vhs-verdict-list-item">
					<!-- wp:html -->
					<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;margin-top:3px"><path d="M4.5 12.5l5 5 10-11"/></svg>
					<!-- /wp:html -->
					<!-- wp:paragraph {"className":"vhs-verdict-item-text-dark","style":{"color":{"text":"#34495e"},"typography":{"fontSize":"14.5px","lineHeight":"1.55","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-verdict-item-text-dark has-text-color" style="color:#34495e;font-size:14.5px;line-height:1.55;font-weight:600;margin:0">You&rsquo;re in South Florida and want drop-off, pickup, or an in-home documentary</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

		<!-- Overall Banner Callout -->
		<!-- wp:group {"className":"vhs-verdict-overall-banner","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group vhs-verdict-overall-banner">
			<!-- wp:html -->
			<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 12.5l5 5 10-11"/></svg>
			<!-- /wp:html -->
			<!-- wp:paragraph {"className":"vhs-verdict-overall-text","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15px","lineHeight":"1.55","fontWeight":"700"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
			<p class="vhs-verdict-overall-text has-text-color" style="color:#16324f;font-size:15px;line-height:1.55;font-weight:700;margin:0">Overall: for bulk convenience, Legacybox earns its reputation. For memories you can&rsquo;t replace, a studio that handles them by hand is the safer choice.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
