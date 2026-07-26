<?php
/**
 * VHS-C Service Flat Pricing Table Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'VHS-C Service Flat Pricing Table', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-vhsc-pricing-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-vhsc-pricing-section has-background" style="background-color:#ffffff;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Section Heading -->
		<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"36px"}}}} -->
		<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:36px;font-size:38px">Simple, <span style="color:#39B7EC">Flat</span> Pricing.</h2>
		<!-- /wp:heading -->

		<!-- Pricing Table Wrapper -->
		<!-- wp:html -->
		<div class="vhs-pricing-table-wrapper">
			<table class="vhs-pricing-table">
				<thead>
					<tr>
						<th>FORMAT</th>
						<th>WHAT&rsquo;S INCLUDED</th>
						<th class="vhs-align-right">PRICE</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="vhs-format-name">VHS-C &rarr; Digital</td>
						<td>Compact camcorder tapes, cleaned and captured on native VHS-C decks</td>
						<td class="vhs-format-price vhs-align-right">$18 / tape</td>
					</tr>
					<tr class="vhs-row-alt">
						<td class="vhs-format-name">S-VHS-C &rarr; Digital</td>
						<td>Super VHS-C tapes, same careful hand process</td>
						<td class="vhs-format-price vhs-align-right">$18 / tape</td>
					</tr>
					<tr>
						<td class="vhs-format-name">USB flash drive</td>
						<td>Add a labeled USB flash drive to any order</td>
						<td class="vhs-format-price vhs-align-right">$10 / drive</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- /wp:html -->

		<!-- Footer Note -->
		<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.6"},"spacing":{"margin":{"top":"24px","bottom":"0px"}}}} -->
		<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.6;margin-top:24px;margin-bottom:0">Every transfer includes hand inspection, cleaning, and free return of your originals. Files delivered as MP4 by secure cloud link, USB drive, or DVD. Most orders finish in 24 hours to one week.</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
