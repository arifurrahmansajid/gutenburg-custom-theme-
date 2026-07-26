<?php
/**
 * Services Hero Pattern with Breadcrumbs
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Services Hero Section with Breadcrumbs', 'realome' ),
	'categories' => array( 'vhs-sections', 'hero', 'featured', 'pages', 'realome' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"color":{"background":"#F4F7FB","text":"#4A5568"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull has-text-color has-background" style="background-color:#F4F7FB;color:#4A5568;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px">
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontWeight":"500"}}} -->
	<p style="font-size:14px;font-weight:500"><a href="/" style="color:#64748B;text-decoration:none">Home</a> &nbsp;&rsaquo;&nbsp; <span style="color:#0F172A;font-weight:600">Services</span></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"color":{"background":"#132B45","text":"#ffffff"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull has-text-color has-background" style="background-color:#132B45;color:#ffffff;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.1","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"20px"}}},"fontSize":"max-48"} -->
		<h1 class="wp-block-heading" style="font-weight:800;line-height:1.1;margin-top:0px;margin-bottom:20px;font-size:52px">Our <span style="color:#39B7EC">Services</span>.</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.85)"},"spacing":{"margin":{"bottom":"36px"}},"typography":{"lineHeight":"1.6"}},"fontSize":"medium"} -->
		<p class="has-text-color has-medium-font-size" style="color:rgba(255,255,255,0.85);margin-bottom:36px;line-height:1.6;max-width:760px">Every format, digitized by hand in our Hollywood, FL studio — in 4K/5K, never outsourced overseas. Choose what you want to preserve.</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"#436DA5","text":"#ffffff"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"28px","right":"28px"}},"typography":{"fontWeight":"700"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" style="border-radius:10px;background-color:#436DA5;color:#ffffff;padding-top:14px;padding-right:28px;padding-bottom:14px;padding-left:28px;font-weight:700">Get a Free Quote</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.75)"},"typography":{"fontSize":"14px","fontWeight":"500"}}} -->
			<p class="has-text-color" style="color:rgba(255,255,255,0.75);font-size:14px;font-weight:500">Family-owned since 2020 &nbsp;&middot;&nbsp; 5-star on Google &amp; Yelp &nbsp;&middot;&nbsp; BBB Accredited</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
