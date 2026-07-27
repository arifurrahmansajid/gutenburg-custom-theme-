<?php
/**
 * Costco Guide TL;DR Callout Box Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Costco Guide TL;DR Callout Box', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-tldr-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"72px","bottom":"72px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
<div class="wp-block-group alignfull vhs-tldr-section has-background" style="background-color:#ffffff;padding-top:72px;padding-right:24px;padding-bottom:72px;padding-left:24px">
	<!-- wp:group {"className":"vhs-tldr-box","style":{"color":{"background":"#f3f7fc"}},"layout":{"type":"constrained","contentSize":"900px","justifyContent":"left"}} -->
	<div class="wp-block-group vhs-tldr-box has-background" style="background-color:#f3f7fc">

		<!-- TL;DR Label -->
		<!-- wp:paragraph {"className":"vhs-tldr-label","style":{"color":{"text":"#436DA5"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.12em"}},"spacing":{"margin":{"top":"0px","bottom":"12px"}}} -->
		<p class="vhs-tldr-label has-text-color" style="color:#436DA5;font-size:13px;font-weight:800;letter-spacing:0.12em;margin-top:0px;margin-bottom:12px">TL;DR</p>
		<!-- /wp:paragraph -->

		<!-- Content Text -->
		<!-- wp:paragraph {"className":"vhs-tldr-content","style":{"color":{"text":"#34495e"},"typography":{"fontSize":"16px","lineHeight":"1.7","fontWeight":"600"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
		<p class="vhs-tldr-content has-text-color" style="color:#34495e;font-size:16px;line-height:1.7;font-weight:600;margin:0">Costco shut down its in-house Photo Center (in-store centers Feb 2021; online service Jan 28, 2023) &mdash; members who relied on it now need a new home for photo scanning and tape or film conversion. Memory Converter is the studio-grade alternative: digitized by hand in Hollywood, FL, never sent overseas, with restoration and fragile-media rescue no retail counter offered.</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
