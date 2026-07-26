<?php
/**
 * Studio-Grade vs. Mail-In Boxes Comparison Table Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri = get_template_directory_uri();

return array(
	'title'      => __( 'Studio-Grade vs. Mail-In Boxes Comparison Table', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"color":{"background":"#f4f7fb"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f4f7fb;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"36px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group" style="margin-bottom:36px">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}},"fontSize":"max-36"} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:12px;font-size:38px">Studio-Grade vs. <span style="color:#39B7EC">Mail-In Boxes</span>.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.5"}}} -->
			<p class="has-text-color" style="color:#64748b;font-size:16px;line-height:1.5;max-width:750px">An honest look at what you get when a studio — not a warehouse — handles your memories.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"vhs-comparison-card"} -->
		<div class="wp-block-group vhs-comparison-card">
			<!-- wp:group {"className":"vhs-comparison-header"} -->
			<div class="wp-block-group vhs-comparison-header">
				<div class="vhs-col-1"></div>
				<div class="vhs-col-2">
					<p class="vhs-header-title-cyan">MEMORY CONVERTER</p>
				</div>
				<div class="vhs-col-3">
					<p class="vhs-header-title-white">MAIL-IN BOXES</p>
				</div>
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"vhs-comparison-row"} -->
			<div class="wp-block-group vhs-comparison-row">
				<div class="vhs-col-1">
					<!-- wp:paragraph -->
					<p>Where your media is handled</p>
					<!-- /wp:paragraph -->
				</div>
				<div class="vhs-col-2">
					<div class="vhs-cell-item">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
						<!-- wp:paragraph -->
						<p>In-house, Hollywood, FL</p>
						<!-- /wp:paragraph -->
					</div>
				</div>
				<div class="vhs-col-3">
					<div class="vhs-cell-item">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6L6 18M6 6l12 12"/></svg>
						<!-- wp:paragraph -->
						<p>Shipped to bulk facilities</p>
						<!-- /wp:paragraph -->
					</div>
				</div>
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"vhs-comparison-row vhs-row-alt"} -->
			<div class="wp-block-group vhs-comparison-row vhs-row-alt">
				<div class="vhs-col-1">
					<!-- wp:paragraph -->
					<p>How it’s handled</p>
					<!-- /wp:paragraph -->
				</div>
				<div class="vhs-col-2">
					<div class="vhs-cell-item">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
						<!-- wp:paragraph -->
						<p>By hand, one item at a time</p>
						<!-- /wp:paragraph -->
					</div>
				</div>
				<div class="vhs-col-3">
					<div class="vhs-cell-item">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6L6 18M6 6l12 12"/></svg>
						<!-- wp:paragraph -->
						<p>Barcode batches</p>
						<!-- /wp:paragraph -->
					</div>
				</div>
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"vhs-comparison-row"} -->
			<div class="wp-block-group vhs-comparison-row">
				<div class="vhs-col-1">
					<!-- wp:paragraph -->
					<p>Output quality</p>
					<!-- /wp:paragraph -->
				</div>
				<div class="vhs-col-2">
					<div class="vhs-cell-item">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
						<!-- wp:paragraph -->
						<p>Studio-grade 4K/5K</p>
						<!-- /wp:paragraph -->
					</div>
				</div>
				<div class="vhs-col-3">
					<div class="vhs-cell-item">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6L6 18M6 6l12 12"/></svg>
						<!-- wp:paragraph -->
						<p>Standard-res defaults</p>
						<!-- /wp:paragraph -->
					</div>
				</div>
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"vhs-comparison-row vhs-row-alt"} -->
			<div class="wp-block-group vhs-comparison-row vhs-row-alt">
				<div class="vhs-col-1">
					<!-- wp:paragraph -->
					<p>Damaged or moldy media</p>
					<!-- /wp:paragraph -->
				</div>
				<div class="vhs-col-2">
					<div class="vhs-cell-item">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
						<!-- wp:paragraph -->
						<p>Cleaned, repaired, rescued</p>
						<!-- /wp:paragraph -->
					</div>
				</div>
				<div class="vhs-col-3">
					<div class="vhs-cell-item">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6L6 18M6 6l12 12"/></svg>
						<!-- wp:paragraph -->
						<p>Often rejected</p>
						<!-- /wp:paragraph -->
					</div>
				</div>
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"vhs-comparison-row"} -->
			<div class="wp-block-group vhs-comparison-row">
				<div class="vhs-col-1">
					<!-- wp:paragraph -->
					<p>In-home documentary storytelling</p>
					<!-- /wp:paragraph -->
				</div>
				<div class="vhs-col-2">
					<div class="vhs-cell-item">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
						<!-- wp:paragraph -->
						<p>Living Memories, from $1,800</p>
						<!-- /wp:paragraph -->
					</div>
				</div>
				<div class="vhs-col-3">
					<div class="vhs-cell-item">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6L6 18M6 6l12 12"/></svg>
						<!-- wp:paragraph -->
						<p>Not offered</p>
						<!-- /wp:paragraph -->
					</div>
				</div>
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
