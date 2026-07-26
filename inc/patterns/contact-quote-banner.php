<?php
/**
 * Contact / Free Quote Header Banner Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Contact / Free Quote Header Banner', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-contact-banner-section","style":{"color":{"background":"#132b45","text":"#ffffff"},"spacing":{"padding":{"top":"64px","bottom":"64px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-contact-banner-section has-text-color has-background" style="background-color:#132b45;color:#ffffff;padding-top:64px;padding-right:24px;padding-bottom:64px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Eyebrow -->
		<!-- wp:paragraph {"className":"vhs-contact-eyebrow","style":{"color":{"text":"#39B7EC"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.08em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}}} -->
		<p class="vhs-contact-eyebrow has-text-color" style="color:#39B7EC;font-size:13px;font-weight:800;letter-spacing:0.08em;text-transform:uppercase;margin-top:0px;margin-bottom:12px">FREE QUOTE &middot; NO OBLIGATION</p>
		<!-- /wp:paragraph -->

		<!-- Main Heading -->
		<!-- wp:heading {"level":1,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}},"fontSize":"max-48"} -->
		<h1 class="wp-block-heading has-text-color" style="color:#ffffff;font-size:48px;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:14px">Let&rsquo;s Talk About Your <span style="color:#39B7EC">Memories</span>.</h1>
		<!-- /wp:heading -->

		<!-- Subtitle / Tagline -->
		<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.75)"},"typography":{"fontSize":"15px"}},"className":"vhs-contact-tagline"} -->
		<p class="vhs-contact-tagline has-text-color" style="color:rgba(255,255,255,0.75);font-size:15px;margin:0">Tell me what you have &mdash; I reply with your exact quote &nbsp;&middot;&nbsp; Within one business day &nbsp;&middot;&nbsp; Originals always returned</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
