<?php
/**
 * Other Comparisons Pills Bar Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Other Comparisons Pills Bar', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-other-comp-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"48px","bottom":"48px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
<div class="wp-block-group alignfull vhs-other-comp-section has-background" style="background-color:#ffffff;padding-top:48px;padding-right:24px;padding-bottom:48px;padding-left:24px">
	<!-- wp:group {"className":"vhs-other-comp-row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group vhs-other-comp-row">

		<!-- Left Label -->
		<!-- wp:paragraph {"className":"vhs-other-comp-label","style":{"color":{"text":"#4a5d73"},"typography":{"fontSize":"15px","fontWeight":"700"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
		<p class="vhs-other-comp-label has-text-color" style="color:#4a5d73;font-size:15px;font-weight:700;margin:0">Other comparisons:</p>
		<!-- /wp:paragraph -->

		<!-- Right Pill Links -->
		<!-- wp:group {"className":"vhs-other-comp-pills","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group vhs-other-comp-pills">

			<!-- Pill 1 -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
			<p style="margin:0"><a class="vhs-comp-pill-link" href="#">iMemories vs. us</a></p>
			<!-- /wp:paragraph -->

			<!-- Pill 2 -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
			<p style="margin:0"><a class="vhs-comp-pill-link" href="#">Capture vs. us</a></p>
			<!-- /wp:paragraph -->

			<!-- Pill 3 -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
			<p style="margin:0"><a class="vhs-comp-pill-link" href="#">EverPresent vs. us</a></p>
			<!-- /wp:paragraph -->

			<!-- Pill 4 -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
			<p style="margin:0"><a class="vhs-comp-pill-link" href="#">Costco Photo Center vs. us</a></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
