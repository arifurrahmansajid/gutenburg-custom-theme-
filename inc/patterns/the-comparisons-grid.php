<?php
/**
 * The Comparisons Competitor Cards Grid Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'The Comparisons Competitor Cards Grid', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-services-catalog-section vhs-comparisons-section","style":{"color":{"background":"#f4f7fb"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
<div class="wp-block-group alignfull vhs-services-catalog-section vhs-comparisons-section has-background" style="background-color:#f4f7fb;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Section Heading -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"44px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group" style="margin-bottom:44px">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"fontSize":"max-36"} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;margin:0px;font-size:38px">The <span style="color:#39B7EC">Comparisons</span>.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- 3-Column Grid -->
		<!-- wp:columns {"className":"vhs-comparisons-grid","style":{"spacing":{"blockGap":"20px","margin":{"top":"0px","bottom":"0px"}}}} -->
		<div class="wp-block-columns vhs-comparisons-grid" style="margin-top:0px;margin-bottom:0px">

			<!-- Card 1: Legacybox -->
			<!-- wp:column {"className":"vhs-comparison-item-card"} -->
			<div class="wp-block-column vhs-comparison-item-card">
				<!-- wp:heading {"level":3,"className":"vhs-comp-card-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}}} -->
				<h3 class="wp-block-heading vhs-comp-card-title has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0px;margin-bottom:12px">Legacybox <span style="color:#8ba0b5;font-weight:500;font-size:13.5px">vs.</span> <span style="color:#436da5;font-weight:700;font-size:15px">Memory Converter</span></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.5"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.5;margin:0">Best known mail-in box &mdash; strong for bulk volume and prepaid convenience.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"vhs-card-link-wrapper","style":{"spacing":{"margin":{"top":"18px","bottom":"0px"}}}} -->
				<p class="vhs-card-link-wrapper" style="margin-top:18px;margin-bottom:0px"><a href="#" class="vhs-card-link">Read comparison &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 2: iMemories -->
			<!-- wp:column {"className":"vhs-comparison-item-card"} -->
			<div class="wp-block-column vhs-comparison-item-card">
				<!-- wp:heading {"level":3,"className":"vhs-comp-card-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}}} -->
				<h3 class="wp-block-heading vhs-comp-card-title has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0px;margin-bottom:12px">iMemories <span style="color:#8ba0b5;font-weight:500;font-size:13.5px">vs.</span> <span style="color:#436da5;font-weight:700;font-size:15px">Memory Converter</span></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.5"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.5;margin:0">App-first mail-in service with cloud streaming emphasis.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"vhs-card-link-wrapper","style":{"spacing":{"margin":{"top":"18px","bottom":"0px"}}}} -->
				<p class="vhs-card-link-wrapper" style="margin-top:18px;margin-bottom:0px"><a href="#" class="vhs-card-link">Read comparison &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 3: Capture -->
			<!-- wp:column {"className":"vhs-comparison-item-card"} -->
			<div class="wp-block-column vhs-comparison-item-card">
				<!-- wp:heading {"level":3,"className":"vhs-comp-card-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}}} -->
				<h3 class="wp-block-heading vhs-comp-card-title has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0px;margin-bottom:12px">Capture <span style="color:#8ba0b5;font-weight:500;font-size:13.5px">vs.</span> <span style="color:#436da5;font-weight:700;font-size:15px">Memory Converter</span></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.5"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.5;margin:0">Mail-in aggregator working with retail partners.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"vhs-card-link-wrapper","style":{"spacing":{"margin":{"top":"18px","bottom":"0px"}}}} -->
				<p class="vhs-card-link-wrapper" style="margin-top:18px;margin-bottom:0px"><a href="#" class="vhs-card-link">Read comparison &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 4: EverPresent -->
			<!-- wp:column {"className":"vhs-comparison-item-card"} -->
			<div class="wp-block-column vhs-comparison-item-card">
				<!-- wp:heading {"level":3,"className":"vhs-comp-card-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}}} -->
				<h3 class="wp-block-heading vhs-comp-card-title has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0px;margin-bottom:12px">EverPresent <span style="color:#8ba0b5;font-weight:500;font-size:13.5px">vs.</span> <span style="color:#436da5;font-weight:700;font-size:15px">Memory Converter</span></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.5"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.5;margin:0">Higher-touch regional service in the Northeast.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"vhs-card-link-wrapper","style":{"spacing":{"margin":{"top":"18px","bottom":"0px"}}}} -->
				<p class="vhs-card-link-wrapper" style="margin-top:18px;margin-bottom:0px"><a href="#" class="vhs-card-link">Read comparison &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 5: Costco Photo Center -->
			<!-- wp:column {"className":"vhs-comparison-item-card"} -->
			<div class="wp-block-column vhs-comparison-item-card">
				<!-- wp:heading {"level":3,"className":"vhs-comp-card-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}}} -->
				<h3 class="wp-block-heading vhs-comp-card-title has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0px;margin-bottom:12px">Costco Photo Center <span style="color:#8ba0b5;font-weight:500;font-size:13.5px">vs.</span> <span style="color:#436da5;font-weight:700;font-size:15px">Memory Converter</span></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.5"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.5;margin:0">The big-box option members keep searching for.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"vhs-card-link-wrapper","style":{"spacing":{"margin":{"top":"18px","bottom":"0px"}}}} -->
				<p class="vhs-card-link-wrapper" style="margin-top:18px;margin-bottom:0px"><a href="#" class="vhs-card-link">Read comparison &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 6: Dashed Info Card -->
			<!-- wp:column {"className":"vhs-comparison-item-dashed"} -->
			<div class="wp-block-column vhs-comparison-item-dashed">
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","fontWeight":"500"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;font-weight:500;margin:0">More comparisons publish as we verify data.</p>
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
