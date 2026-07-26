<?php
/**
 * Heartfelt Mother Testimonial — Emotional Quote Section Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Heartfelt Mother Testimonial — Emotional Quote', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-heartfelt-quote-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"100px","bottom":"100px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group alignfull vhs-heartfelt-quote-section has-background" style="background-color:#ffffff;padding-top:100px;padding-right:24px;padding-bottom:100px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"820px","justifyContent":"center"}} -->
	<div class="wp-block-group" style="text-align:center">

		<!-- 5 Cyan Stars -->
		<!-- wp:paragraph {"align":"center","className":"vhs-quote-stars","style":{"color":{"text":"#39B7EC"},"typography":{"fontSize":"18px","letterSpacing":"4px"},"spacing":{"margin":{"top":"0px","bottom":"28px"}}}} -->
		<p class="has-text-align-center vhs-quote-stars has-text-color" style="color:#39B7EC;font-size:18px;letter-spacing:4px;margin-top:0px;margin-bottom:28px">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
		<!-- /wp:paragraph -->

		<!-- Main Quote Heading -->
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"23px","fontWeight":"700","lineHeight":"1.55"},"spacing":{"margin":{"top":"0px","bottom":"32px"}}}} -->
		<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#16324f;font-size:23px;font-weight:700;line-height:1.55;margin-top:0px;margin-bottom:32px">&ldquo;After my son passed, I couldn&rsquo;t bring myself to touch his home videos &mdash; but I was terrified of losing them. They treated every tape like it was their own family&rsquo;s. Fast, fair, and endlessly kind. Now I can hear his voice whenever I need to.&rdquo;</h2>
		<!-- /wp:heading -->

		<!-- Author Name & Location -->
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"4px"}}}} -->
		<p class="has-text-align-center has-text-color" style="color:#16324f;font-size:15px;font-weight:800;margin-top:0px;margin-bottom:4px">A Hollywood, FL mother</p>
		<!-- /wp:paragraph -->

		<!-- Permission & Rating Subtext -->
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#94a3b8"},"typography":{"fontSize":"13px","lineHeight":"1.4"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
		<p class="has-text-align-center has-text-color" style="color:#94a3b8;font-size:13px;line-height:1.4;margin:0">Shared with permission &middot; 5.0 on Google &amp; Yelp</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
