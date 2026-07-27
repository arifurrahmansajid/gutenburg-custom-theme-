<?php
/**
 * The Deep Dive — 6 Comparison Cards Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'The Deep Dive — 6 Comparison Cards', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-deepdive-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"88px","bottom":"88px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
<div class="wp-block-group alignfull vhs-deepdive-section has-background" style="background-color:#ffffff;padding-top:88px;padding-right:24px;padding-bottom:88px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Section Header -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"52px"}}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
		<div class="wp-block-group" style="max-width:640px;margin-bottom:52px">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"fontSize":"max-40"} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;letter-spacing:-0.01em;margin:0;font-size:40px">The Deep <span style="color:#39B7EC">Dive</span>.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- 6 Cards Grid -->
		<!-- wp:columns {"className":"vhs-deepdive-grid","style":{"spacing":{"blockGap":"20px","margin":{"top":"0px","bottom":"0px"}}}} -->
		<div class="wp-block-columns vhs-deepdive-grid" style="margin-top:0px;margin-bottom:0px">

			<!-- Card 1: How Legacybox works -->
			<!-- wp:column {"className":"vhs-deepdive-card"} -->
			<div class="wp-block-column vhs-deepdive-card">
				<!-- wp:heading {"level":3,"className":"vhs-deepdive-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"10px"}}}} -->
				<h3 class="wp-block-heading vhs-deepdive-title has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0px;margin-bottom:10px">How Legacybox works</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"vhs-deepdive-text","style":{"color":{"text":"#4a5d73"},"typography":{"fontSize":"14.5px","lineHeight":"1.65"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-deepdive-text has-text-color" style="color:#4a5d73;font-size:14.5px;line-height:1.65;margin:0">You buy a kit box, fill it, and mail it to a centralized facility where items are barcoded and processed in bulk. <span class="vhs-yellow-tag">Ship a prepaid kit; digitized in Chattanooga; mailed back</span></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 2: How Memory Converter works -->
			<!-- wp:column {"className":"vhs-deepdive-card"} -->
			<div class="wp-block-column vhs-deepdive-card">
				<!-- wp:heading {"level":3,"className":"vhs-deepdive-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"10px"}}}} -->
				<h3 class="wp-block-heading vhs-deepdive-title has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0px;margin-bottom:10px">How Memory Converter works</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"vhs-deepdive-text","style":{"color":{"text":"#4a5d73"},"typography":{"fontSize":"14.5px","lineHeight":"1.65"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-deepdive-text has-text-color" style="color:#4a5d73;font-size:14.5px;line-height:1.65;margin:0">You get a quote for exactly what you have. Your media arrives insured (or you drop it off), is cleaned and repaired as needed, digitized by hand in 4K/5K, and returned with your files.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 3: Pricing compared -->
			<!-- wp:column {"className":"vhs-deepdive-card"} -->
			<div class="wp-block-column vhs-deepdive-card">
				<!-- wp:heading {"level":3,"className":"vhs-deepdive-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"10px"}}}} -->
				<h3 class="wp-block-heading vhs-deepdive-title has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0px;margin-bottom:10px">Pricing compared</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"vhs-deepdive-text","style":{"color":{"text":"#4a5d73"},"typography":{"fontSize":"14.5px","lineHeight":"1.65"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-deepdive-text has-text-color" style="color:#4a5d73;font-size:14.5px;line-height:1.65;margin:0">We charge $18 per video tape and $0.72 per photo or slide &mdash; you pay for what you actually send. Kit pricing can be economical at high volume; per-item pricing protects small and mixed orders.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 4: Turnaround compared -->
			<!-- wp:column {"className":"vhs-deepdive-card"} -->
			<div class="wp-block-column vhs-deepdive-card">
				<!-- wp:heading {"level":3,"className":"vhs-deepdive-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"10px"}}}} -->
				<h3 class="wp-block-heading vhs-deepdive-title has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0px;margin-bottom:10px">Turnaround compared</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"vhs-deepdive-text","style":{"color":{"text":"#4a5d73"},"typography":{"fontSize":"14.5px","lineHeight":"1.65"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-deepdive-text has-text-color" style="color:#4a5d73;font-size:14.5px;line-height:1.65;margin:0">Our orders run as little as 24 hours (up to about a week for the largest projects) door to door with rush available. <span class="vhs-yellow-tag">4&ndash;6 weeks standard; 10-business-day rush for an added fee</span></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 5: Where the work actually happens -->
			<!-- wp:column {"className":"vhs-deepdive-card"} -->
			<div class="wp-block-column vhs-deepdive-card">
				<!-- wp:heading {"level":3,"className":"vhs-deepdive-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"10px"}}}} -->
				<h3 class="wp-block-heading vhs-deepdive-title has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0px;margin-bottom:10px">Where the work actually happens</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"vhs-deepdive-text","style":{"color":{"text":"#4a5d73"},"typography":{"fontSize":"14.5px","lineHeight":"1.65"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-deepdive-text has-text-color" style="color:#4a5d73;font-size:14.5px;line-height:1.65;margin:0">Every Memory Converter order is digitized in our Hollywood, FL studio by the same small team you can call. It never ships onward, and it never leaves the country.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 6: Quality & fragile media -->
			<!-- wp:column {"className":"vhs-deepdive-card"} -->
			<div class="wp-block-column vhs-deepdive-card">
				<!-- wp:heading {"level":3,"className":"vhs-deepdive-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"10px"}}}} -->
				<h3 class="wp-block-heading vhs-deepdive-title has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0px;margin-bottom:10px">Quality &amp; fragile media</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"vhs-deepdive-text","style":{"color":{"text":"#4a5d73"},"typography":{"fontSize":"14.5px","lineHeight":"1.65"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-deepdive-text has-text-color" style="color:#4a5d73;font-size:14.5px;line-height:1.65;margin:0">Bulk pipelines are built for healthy media. Mold, sticky-shed, snapped tape, and brittle film need hands &mdash; cleaning, splicing, and treatment we do in-house before any transfer.</p>
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
