<?php
/**
 * Single Post Bottom Dark CTA Banner Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Single Post Bottom Dark CTA Banner', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-blog-cta-banner alignfull","style":{"color":{"background":"#16324f"},"spacing":{"padding":{"top":"64px","bottom":"64px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group alignfull vhs-blog-cta-banner has-background" style="background-color:#16324f;padding-top:64px;padding-right:24px;padding-bottom:64px;padding-left:24px">
	<!-- wp:heading {"level":2,"textAlign":"center","style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"16px"}}},"fontSize":"max-36"} -->
	<h2 class="wp-block-heading has-text-color" style="color:#ffffff;font-weight:800;font-size:38px;margin-top:0px;margin-bottom:16px;text-align:center">Musty Tapes in Your <span style="color:#39B7EC">Closet</span>?</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#cbd5e1"},"typography":{"fontSize":"16px"}},"spacing":{"margin":{"bottom":"32px"}}} -->
	<p class="has-text-color" style="color:#cbd5e1;font-size:16px;text-align:center;margin-bottom:32px">Bag them, don’t play them, and send them to the bench. De-molding is included in every quote.</p>
	<!-- /wp:paragraph -->

	<!-- wp:html -->
	<div class="vhs-blog-cta-buttons">
		<a href="/our-services/" class="vhs-cta-btn-primary">See Our VHS Service</a>
		<a href="/contact/" class="vhs-cta-btn-outline">Get a Free Quote</a>
	</div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
',
);
