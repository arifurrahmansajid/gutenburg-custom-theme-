<?php
/**
 * Areas Served — Wall of Stories Reviews Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Areas Served — Wall of Stories Reviews', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-areas-stories-section","style":{"color":{"background":"#f0f4f8"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-areas-stories-section has-background" style="background-color:#f0f4f8;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
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

		<!-- 3-Card Review Grid -->
		<!-- wp:group {"className":"vhs-areas-stories-grid"} -->
		<div class="wp-block-group vhs-areas-stories-grid">

			<!-- Review Card 1 -->
			<!-- wp:group {"className":"vhs-areas-review-card"} -->
			<div class="wp-block-group vhs-areas-review-card">
				<!-- wp:html -->
				<div class="vhs-areas-review-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
				<!-- /wp:html -->
				<!-- wp:paragraph {"style":{"color":{"text":"#334155"},"typography":{"fontSize":"14px","lineHeight":"1.65"}},"className":"vhs-areas-review-text"} -->
				<p class="vhs-areas-review-text has-text-color" style="color:#334155;font-size:14px;line-height:1.65;margin-bottom:20px">&ldquo;Dropped off on a Tuesday, picked up the next week. Watching my mom&rsquo;s tapes again in 4K was surreal.&rdquo;</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"}},"className":"vhs-areas-review-author"} -->
				<p class="vhs-areas-review-author" style="font-size:13px;margin:0"><strong style="color:#16324f">Carlos M.</strong> <span style="color:#39B7EC">&middot; Hollywood</span></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Review Card 2 -->
			<!-- wp:group {"className":"vhs-areas-review-card"} -->
			<div class="wp-block-group vhs-areas-review-card">
				<!-- wp:html -->
				<div class="vhs-areas-review-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
				<!-- /wp:html -->
				<!-- wp:paragraph {"style":{"color":{"text":"#334155"},"typography":{"fontSize":"14px","lineHeight":"1.65"}},"className":"vhs-areas-review-text"} -->
				<p class="vhs-areas-review-text has-text-color" style="color:#334155;font-size:14px;line-height:1.65;margin-bottom:20px">&ldquo;They picked up from our building in Aventura and returned everything in person. White-glove is right.&rdquo;</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"}},"className":"vhs-areas-review-author"} -->
				<p class="vhs-areas-review-author" style="font-size:13px;margin:0"><strong style="color:#16324f">Sylvia F.</strong> <span style="color:#39B7EC">&middot; Aventura</span></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Review Card 3 -->
			<!-- wp:group {"className":"vhs-areas-review-card"} -->
			<div class="wp-block-group vhs-areas-review-card">
				<!-- wp:html -->
				<div class="vhs-areas-review-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
				<!-- /wp:html -->
				<!-- wp:paragraph {"style":{"color":{"text":"#334155"},"typography":{"fontSize":"14px","lineHeight":"1.65"}},"className":"vhs-areas-review-text"} -->
				<p class="vhs-areas-review-text has-text-color" style="color:#334155;font-size:14px;line-height:1.65;margin-bottom:20px">&ldquo;Mailed our reels from Boca before heading north for the summer. Done before we landed.&rdquo;</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"}},"className":"vhs-areas-review-author"} -->
				<p class="vhs-areas-review-author" style="font-size:13px;margin:0"><strong style="color:#16324f">Arthur &amp; Gail P.</strong> <span style="color:#39B7EC">&middot; Boca Raton</span></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
