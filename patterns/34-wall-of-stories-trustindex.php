<?php
/**
 * Title: Wall of Stories Reviews (Trustindex Widget)
 * Slug: realome/wall-of-stories-trustindex
 * Categories: vhs-sections, featured, realome, pages
 * Keywords: wall of stories, reviews, trustindex, google reviews, testimonials, shortcode
 */
?>
<!-- wp:group {"align":"full","className":"vhs-areas-stories-section vhs-trustindex-section","style":{"color":{"background":"#f0f4f8"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-areas-stories-section vhs-trustindex-section has-background" style="background-color:#f0f4f8;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Header row: heading left, rating badge right -->
		<!-- wp:group {"className":"vhs-areas-stories-header","style":{"spacing":{"margin":{"bottom":"40px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group vhs-areas-stories-header" style="margin-bottom:40px">

			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;margin:0;font-size:38px">A Wall of <span style="color:#39B7EC">Stories</span>.</h2>
			<!-- /wp:heading -->

			<!-- wp:html -->
			<div class="vhs-areas-rating-badge">
				<span class="vhs-areas-rating-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
				<span class="vhs-areas-rating-text">5.0 on Google &amp; Yelp</span>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->

		<!-- Trustindex Shortcode Widget -->
		<!-- wp:group {"className":"vhs-trustindex-wrapper"} -->
		<div class="wp-block-group vhs-trustindex-wrapper">
			<!-- wp:shortcode -->
			[trustindex no-registration=google]
			<!-- /wp:shortcode -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
