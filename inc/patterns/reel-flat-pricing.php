<?php
/**
 * Reel Flat Pricing Section Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Reel Flat Pricing Section', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-reel-pricing-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"96px","bottom":"96px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull vhs-reel-pricing-section has-background" style="background-color:#ffffff;padding-top:96px;padding-right:24px;padding-bottom:96px;padding-left:24px">
	<!-- wp:group {"className":"vhs-reel-pricing-title-box","style":{"spacing":{"margin":{"bottom":"52px"}}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
	<div class="wp-block-group vhs-reel-pricing-title-box" style="margin-bottom:52px">
		<!-- wp:heading {"level":2,"className":"vhs-reel-pricing-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"40px","fontWeight":"800","lineHeight":"1.14"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
		<h2 class="wp-block-heading vhs-reel-pricing-title has-text-color" style="color:#16324f;font-size:40px;font-weight:800;line-height:1.14;margin:0">Simple, <span style="color:#39B7EC">Flat</span> Pricing.</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"vhs-reel-pricing-table"} -->
	<div class="wp-block-group vhs-reel-pricing-table">

		<!-- Table Header Row -->
		<!-- wp:columns {"className":"vhs-reel-pricing-header-row","style":{"spacing":{"margin":{"bottom":"0px"},"blockGap":"20px"}}} -->
		<div class="wp-block-columns vhs-reel-pricing-header-row" style="margin-bottom:0px">
			<!-- wp:column {"width":"30%"} -->
			<div class="wp-block-column" style="flex-basis:30%">
				<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.08em"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="has-text-color" style="color:#ffffff;font-size:13px;font-weight:800;letter-spacing:0.08em;margin:0">SERVICE</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.08em"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="has-text-color" style="color:#ffffff;font-size:13px;font-weight:800;letter-spacing:0.08em;margin:0">WHAT&rsquo;S INCLUDED</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%">
				<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.08em"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="has-text-color" style="color:#ffffff;font-size:13px;font-weight:800;letter-spacing:0.08em;margin:0">PRICE</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- Row 1: White -->
		<!-- wp:columns {"className":"vhs-reel-pricing-row is-row-white","style":{"spacing":{"margin":{"bottom":"0px"},"blockGap":"20px"}}} -->
		<div class="wp-block-columns vhs-reel-pricing-row is-row-white" style="margin-bottom:0px">
			<!-- wp:column {"width":"30%"} -->
			<div class="wp-block-column" style="flex-basis:30%">
				<!-- wp:paragraph {"className":"vhs-reel-td-service","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"14.5px","fontWeight":"800"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-reel-td-service has-text-color" style="color:#16324f;font-size:14.5px;font-weight:800;margin:0">Reel-to-Reel &rarr; Digital</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:paragraph {"className":"vhs-reel-td-included","style":{"color":{"text":"#4A5D73"},"typography":{"fontSize":"14.5px","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-reel-td-included has-text-color" style="color:#4A5D73;font-size:14.5px;font-weight:600;margin:0">&frac14;-inch reels played at the correct speed and track layout, cleaned, and digitized</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%">
				<!-- wp:paragraph {"className":"vhs-reel-td-price","style":{"color":{"text":"#4A5D73"},"typography":{"fontSize":"14.5px","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-reel-td-price has-text-color" style="color:#4A5D73;font-size:14.5px;font-weight:600;margin:0">$18 / reel <span class="vhs-reel-rate-tag">[CONFIRM RATE]</span></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- Row 2: Light Blue -->
		<!-- wp:columns {"className":"vhs-reel-pricing-row is-row-blue","style":{"spacing":{"margin":{"bottom":"0px"},"blockGap":"20px"}}} -->
		<div class="wp-block-columns vhs-reel-pricing-row is-row-blue" style="margin-bottom:0px">
			<!-- wp:column {"width":"30%"} -->
			<div class="wp-block-column" style="flex-basis:30%">
				<!-- wp:paragraph {"className":"vhs-reel-td-service","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"14.5px","fontWeight":"800"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-reel-td-service has-text-color" style="color:#16324f;font-size:14.5px;font-weight:800;margin:0">CD Authoring (add-on)</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:paragraph {"className":"vhs-reel-td-included","style":{"color":{"text":"#4A5D73"},"typography":{"fontSize":"14.5px","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-reel-td-included has-text-color" style="color:#4A5D73;font-size:14.5px;font-weight:600;margin:0">Your digitized audio burned to a playable CD</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%">
				<!-- wp:paragraph {"className":"vhs-reel-td-price","style":{"color":{"text":"#4A5D73"},"typography":{"fontSize":"14.5px","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-reel-td-price has-text-color" style="color:#4A5D73;font-size:14.5px;font-weight:600;margin:0">+ $10 / CD</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- Row 3: White -->
		<!-- wp:columns {"className":"vhs-reel-pricing-row is-row-white","style":{"spacing":{"margin":{"bottom":"0px"},"blockGap":"20px"}}} -->
		<div class="wp-block-columns vhs-reel-pricing-row is-row-white" style="margin-bottom:0px">
			<!-- wp:column {"width":"30%"} -->
			<div class="wp-block-column" style="flex-basis:30%">
				<!-- wp:paragraph {"className":"vhs-reel-td-service","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"14.5px","fontWeight":"800"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-reel-td-service has-text-color" style="color:#16324f;font-size:14.5px;font-weight:800;margin:0">USB flash drive</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:paragraph {"className":"vhs-reel-td-included","style":{"color":{"text":"#4A5D73"},"typography":{"fontSize":"14.5px","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-reel-td-included has-text-color" style="color:#4A5D73;font-size:14.5px;font-weight:600;margin:0">Add a labeled USB flash drive to any order</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%">
				<!-- wp:paragraph {"className":"vhs-reel-td-price","style":{"color":{"text":"#4A5D73"},"typography":{"fontSize":"14.5px","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
				<p class="vhs-reel-td-price has-text-color" style="color:#4A5D73;font-size:14.5px;font-weight:600;margin:0">$10 / drive</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->

	<!-- Footer Note -->
	<!-- wp:paragraph {"className":"vhs-reel-pricing-footer-note","style":{"color":{"text":"#4A5D73"},"typography":{"fontSize":"14px","fontWeight":"600"}},"spacing":{"margin":{"top":"22px","bottom":"0px"}}}} -->
	<p class="vhs-reel-pricing-footer-note has-text-color" style="color:#4A5D73;font-size:14px;font-weight:600;margin-top:22px;margin-bottom:0px">Every order includes hand inspection, cleaning, and free return of your originals. Files delivered by secure cloud link, USB drive, or DVD. Most orders finish in 24 hours to one week.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
',
);
