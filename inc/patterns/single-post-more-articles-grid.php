<?php
/**
 * Single Post More Articles Query Grid Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Single Post More Articles Query Grid', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-blog-more-posts-section","style":{"color":{"background":"#f4f7fb"},"spacing":{"padding":{"top":"64px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1140px"}} -->
<div class="wp-block-group alignfull vhs-blog-more-posts-section has-background" style="background-color:#f4f7fb;padding-top:64px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	
	<!-- Header Row -->
	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"32px"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
	<div class="wp-block-group" style="margin-bottom:32px">
		<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
		<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-size:28px;font-weight:800;margin:0">More from Damage &amp; <span style="color:#39B7EC">Rescue</span>.</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p style="margin:0"><a href="/reel-revival/" class="vhs-blog-all-articles-link">All articles &rarr;</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Dynamic WordPress Query Loop -->
	<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3},"className":"vhs-blog-query-loop"} -->
	<div class="wp-block-query vhs-blog-query-loop">
		<!-- wp:post-template {"className":"vhs-blog-cards-grid"} -->
			<!-- wp:group {"className":"vhs-blog-card-item"} -->
			<div class="wp-block-group vhs-blog-card-item">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","className":"vhs-blog-card-image"} /-->
				<!-- wp:group {"className":"vhs-blog-card-content"} -->
				<div class="wp-block-group vhs-blog-card-content">
					<!-- wp:post-title {"isLink":true,"level":3,"className":"vhs-blog-card-title"} /-->
					<!-- wp:group {"className":"vhs-blog-card-meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group vhs-blog-card-meta">
						<!-- wp:post-author-name {"isLink":false} /-->
						<!-- wp:post-date {"format":"M j, Y"} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
',
);
