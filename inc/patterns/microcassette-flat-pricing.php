<?php
/**
 * Simple, Flat Pricing — Microcassette Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Simple, Flat Pricing — Microcassette', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-microcassette-pricing-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-microcassette-pricing-section has-background" style="background-color:#ffffff;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Section Header -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"36px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group" style="margin-bottom:36px">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"fontSize":"max-38"} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:0px;font-size:38px">Simple, <span style="color:#39B7EC">Flat</span> Pricing.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- Pricing Table Wrapper -->
		<!-- wp:group {"className":"vhs-pricing-table-wrapper"} -->
		<div class="wp-block-group vhs-pricing-table-wrapper">
			<!-- wp:html -->
			<table class="vhs-pricing-table">
				<thead>
					<tr>
						<th>SERVICE</th>
						<th>WHAT&rsquo;S INCLUDED</th>
						<th>PRICE</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="vhs-format-name">Microcassette &rarr; Digital</td>
						<td>Both sides captured at the correct speed, cleaned, delivered as labeled MP3/WAV</td>
						<td class="vhs-format-price">$18 / tape</td>
					</tr>
					<tr class="vhs-row-alt">
						<td class="vhs-format-name">CD Authoring (add-on)</td>
						<td>Your digitized audio burned to a playable CD</td>
						<td class="vhs-format-price">+ $10 / CD</td>
					</tr>
					<tr>
						<td class="vhs-format-name">USB flash drive</td>
						<td>Add a labeled USB flash drive to any order</td>
						<td class="vhs-format-price">$10 / drive</td>
					</tr>
				</tbody>
			</table>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->

		<!-- Footer Note -->
		<!-- wp:paragraph {"style":{"color":{"text":"#475569"},"typography":{"fontSize":"14px","lineHeight":"1.6","fontWeight":"600"},"spacing":{"margin":{"top":"22px","bottom":"0px"}}}} -->
		<p class="has-text-color" style="color:#475569;font-size:14px;line-height:1.6;font-weight:600;margin-top:22px;margin-bottom:0px">Every order includes hand inspection, cleaning, and free return of your originals. Files delivered by secure cloud link, USB drive, or DVD. Most orders finish in 24 hours to one week.</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
