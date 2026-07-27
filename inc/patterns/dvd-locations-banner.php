<?php
/**
 * DVD to Digital Locations Banner Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'DVD to Digital Locations Banner', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-dvd-locations-banner-section","style":{"color":{"background":"#f0f4f8"},"spacing":{"padding":{"top":"64px","bottom":"64px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-dvd-locations-banner-section has-background" style="background-color:#f0f4f8;padding-top:64px;padding-right:24px;padding-bottom:64px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- 2-Column Columns -->
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"48px"}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">

			<!-- Left Column: Heading & Subtitle -->
			<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

				<!-- Section Heading -->
				<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.2"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}},"fontSize":"max-32"} -->
				<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-size:32px;font-weight:800;line-height:1.2;margin-top:0px;margin-bottom:12px">DVD to digital in <span style="color:#39B7EC">South Florida</span> &mdash; and nationwide by mail.</h2>
				<!-- /wp:heading -->

				<!-- Section Subtitle with Link -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.5"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.5;margin:0">Local drop-off &amp; pickup &mdash; or a free prepaid, insured mail-in kit. <a href="#" style="color:#16324f;font-weight:700;text-decoration:none">All areas &rarr;</a></p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:column -->

			<!-- Right Column: Location White Pill Badges Grid -->
			<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
				<!-- wp:html -->
				<div class="vhs-location-pills-row">
					<a href="/hollywood-fl/" class="vhs-loc-pill vhs-loc-pill-white">Hollywood</a>
					<span class="vhs-loc-pill vhs-loc-pill-white">Fort Lauderdale</span>
					<span class="vhs-loc-pill vhs-loc-pill-white">Miami</span>
					<span class="vhs-loc-pill vhs-loc-pill-white">Boca Raton</span>
					<span class="vhs-loc-pill vhs-loc-pill-white">Pompano Beach</span>
					<span class="vhs-loc-pill vhs-loc-pill-white">Coral Gables</span>
					<span class="vhs-loc-pill vhs-loc-pill-white">Aventura</span>
					<span class="vhs-loc-pill vhs-loc-pill-white">West Palm Beach</span>
				</div>
				<!-- /wp:html -->
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
