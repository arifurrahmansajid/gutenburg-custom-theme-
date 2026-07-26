<?php
/**
 * Two Transparent Tables — Photo Scanning & Restoration Pricing Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Two Transparent Tables — Photo Scanning & Restoration', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-photo-pricing-section","style":{"color":{"background":"#f0f4f8"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-photo-pricing-section has-background" style="background-color:#f0f4f8;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Section Heading -->
		<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}},"fontSize":"max-38"} -->
		<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-size:38px;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:12px">Two Transparent <span style="color:#39B7EC">Tables</span>.</h2>
		<!-- /wp:heading -->

		<!-- Subtitle -->
		<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"36px"}}}} -->
		<p class="has-text-color" style="color:#64748b;font-size:16px;line-height:1.6;margin-top:0px;margin-bottom:36px">Priced per reel by size &mdash; cleaning, repair, and standard MP4 output included.</p>
		<!-- /wp:paragraph -->

		<!-- Table 1: SCANNING -->
		<!-- wp:html -->
		<div class="vhs-pricing-table-wrapper" style="margin-top:36px;margin-bottom:32px">
			<table class="vhs-pricing-table">
				<thead>
					<tr>
						<th>SCANNING</th>
						<th>INCLUDED</th>
						<th class="vhs-align-right">PRICE</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="vhs-format-name">Photo prints</td>
						<td>Archival scan, dust-clean, JPEG/TIFF</td>
						<td class="vhs-format-price vhs-align-right">$0.72 / photo</td>
					</tr>
					<tr class="vhs-row-alt">
						<td class="vhs-format-name">35mm slides</td>
						<td>Archival scan, dust-clean, JPEG/TIFF</td>
						<td class="vhs-format-price vhs-align-right">$0.72 / slide</td>
					</tr>
					<tr>
						<td class="vhs-format-name">Negatives</td>
						<td>Archival scan, dust-clean, JPEG/TIFF</td>
						<td class="vhs-format-price vhs-align-right">$0.72 / frame</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- /wp:html -->

		<!-- Table 2: RESTORATION -->
		<!-- wp:html -->
		<div class="vhs-pricing-table-wrapper" style="margin-top:32px;margin-bottom:32px">
			<table class="vhs-pricing-table">
				<thead>
					<tr>
						<th>RESTORATION</th>
						<th>TYPICAL DAMAGE</th>
						<th class="vhs-align-right">PRICE</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="vhs-format-name">Photo Restoration (add-on)</td>
						<td>By hand, after scanning &mdash; any photo, slide, or negative</td>
						<td class="vhs-format-price vhs-align-right">$5 / image</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- /wp:html -->

		<!-- Add-on Options Row (Pills) -->
		<!-- wp:html -->
		<div class="vhs-film-addon-pills" style="margin-top:32px;margin-bottom:28px">
			<span class="vhs-film-pill"><span class="vhs-pill-plus">+</span> TIFF masters</span>
			<span class="vhs-film-pill"><span class="vhs-pill-plus">+</span> Archival reprints</span>
			<span class="vhs-film-pill"><span class="vhs-pill-plus">+</span> Rush turnaround</span>
		</div>
		<!-- /wp:html -->

		<!-- Bottom CTA & Tagline Row -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"20px","margin":{"top":"28px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group vhs-film-pricing-cta-row" style="margin-top:28px">

			<!-- Primary Button -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"#436da5","text":"#ffffff"},"border":{"radius":"10px"},"typography":{"fontWeight":"700","fontSize":"14px"},"spacing":{"padding":{"top":"13px","bottom":"13px","left":"24px","right":"24px"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" href="#" style="border-radius:10px;background-color:#436da5;color:#ffffff;font-size:14px;font-weight:700;padding:13px 24px;text-decoration:none">Get a custom quote</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- Tagline Paragraph -->
			<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
			<p class="has-text-color" style="color:#64748b;font-size:14px;margin:0">No surprises &mdash; you approve the exact price before we start.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
