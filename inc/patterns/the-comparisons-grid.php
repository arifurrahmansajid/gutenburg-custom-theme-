<?php
/**
 * The Comparisons Competitor Cards Grid Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri = get_template_directory_uri();

return array(
	'title'      => __( 'The Comparisons Competitor Cards Grid', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-services-catalog-section vhs-comparisons-section","style":{"color":{"background":"#f4f7fb"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-services-catalog-section vhs-comparisons-section has-background" style="background-color:#f4f7fb;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Heading -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"44px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group" style="margin-bottom:44px">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"fontSize":"max-36"} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;margin:0px;font-size:38px">The <span style="color:#39B7EC">Comparisons</span>.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- 3-Column Grid -->
		<!-- wp:group {"className":"vhs-catalog-grid vhs-comparisons-grid"} -->
		<div class="wp-block-group vhs-catalog-grid vhs-comparisons-grid">

			<!-- Card 1: Legacybox -->
			<!-- wp:group {"className":"vhs-catalog-card vhs-comparison-item-card"} -->
			<div class="wp-block-group vhs-catalog-card vhs-comparison-item-card">
				<!-- wp:html -->
				<div class="vhs-comp-card-header"><span class="vhs-comp-brand">Legacybox</span><span class="vhs-comp-vs">vs.</span><span class="vhs-comp-target">Memory Converter</span></div>
				<!-- /wp:html -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.5">Best known mail-in box &mdash; strong for bulk volume and prepaid convenience.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
				<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">Read comparison &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Card 2: iMemories -->
			<!-- wp:group {"className":"vhs-catalog-card vhs-comparison-item-card"} -->
			<div class="wp-block-group vhs-catalog-card vhs-comparison-item-card">
				<!-- wp:html -->
				<div class="vhs-comp-card-header"><span class="vhs-comp-brand">iMemories</span><span class="vhs-comp-vs">vs.</span><span class="vhs-comp-target">Memory Converter</span></div>
				<!-- /wp:html -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.5">App-first mail-in service with cloud streaming emphasis.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
				<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">Read comparison &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Card 3: Capture -->
			<!-- wp:group {"className":"vhs-catalog-card vhs-comparison-item-card"} -->
			<div class="wp-block-group vhs-catalog-card vhs-comparison-item-card">
				<!-- wp:html -->
				<div class="vhs-comp-card-header"><span class="vhs-comp-brand">Capture</span><span class="vhs-comp-vs">vs.</span><span class="vhs-comp-target">Memory Converter</span></div>
				<!-- /wp:html -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.5">Mail-in aggregator working with retail partners.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
				<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">Read comparison &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Card 4: EverPresent -->
			<!-- wp:group {"className":"vhs-catalog-card vhs-comparison-item-card"} -->
			<div class="wp-block-group vhs-catalog-card vhs-comparison-item-card">
				<!-- wp:html -->
				<div class="vhs-comp-card-header"><span class="vhs-comp-brand">EverPresent</span><span class="vhs-comp-vs">vs.</span><span class="vhs-comp-target">Memory Converter</span></div>
				<!-- /wp:html -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.5">Higher-touch regional service in the Northeast.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
				<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">Read comparison &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Card 5: Costco Photo Center -->
			<!-- wp:group {"className":"vhs-catalog-card vhs-comparison-item-card"} -->
			<div class="wp-block-group vhs-catalog-card vhs-comparison-item-card">
				<!-- wp:html -->
				<div class="vhs-comp-card-header"><span class="vhs-comp-brand">Costco Photo Center</span><span class="vhs-comp-vs">vs.</span><span class="vhs-comp-target">Memory Converter</span></div>
				<!-- /wp:html -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.5">The big-box option members keep searching for.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
				<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">Read comparison &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Card 6: Upcoming Dashed Card -->
			<!-- wp:group {"className":"vhs-comparison-item-dashed"} -->
			<div class="wp-block-group vhs-comparison-item-dashed">
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","fontWeight":"500"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;font-weight:500">More comparisons publish as we verify data.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
