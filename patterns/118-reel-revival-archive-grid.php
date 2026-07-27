<?php
/**
 * Title: Reel Revival Main Archive Grid with Sidebar
 * Slug: realome/reel-revival-archive-grid
 * Categories: vhs-sections, featured, realome, pages
 * Keywords: reel revival grid, 7 posts, load more, sidebar topics, dynamic categories
 */
?>
<!-- wp:group {"align":"full","className":"vhs-reel-archive-section","style":{"color":{"background":"#f3f7fc"},"spacing":{"padding":{"top":"0px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull vhs-reel-archive-section has-background" style="background-color:#f3f7fc;padding-top:0px;padding-right:24px;padding-bottom:80px;padding-left:24px">

	<!-- wp:columns {"className":"vhs-reel-archive-wrapper"} -->
	<div class="wp-block-columns vhs-reel-archive-wrapper">

		<!-- wp:column {"width":"68%","className":"vhs-reel-posts-main"} -->
		<div class="wp-block-column vhs-reel-posts-main" style="flex-basis:68%">

			<!-- wp:query {"queryId":3,"query":{"perPage":7,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"vhs-reel-posts-query"} -->
			<div class="wp-block-query vhs-reel-posts-query">
				<!-- wp:post-template {"className":"vhs-reel-posts-grid"} -->
					<!-- wp:group {"className":"vhs-reel-post-card"} -->
					<div class="wp-block-group vhs-reel-post-card">
						
						<!-- wp:post-featured-image {"isLink":true,"className":"vhs-reel-card-image"} /-->

						<!-- wp:group {"className":"vhs-reel-card-content"} -->
						<div class="wp-block-group vhs-reel-card-content">
							
							<!-- wp:post-terms {"term":"category","className":"vhs-reel-card-category"} /-->

							<!-- wp:post-title {"isLink":true,"level":3,"className":"vhs-reel-card-title"} /-->

							<!-- wp:post-excerpt {"moreText":"","className":"vhs-reel-card-excerpt"} /-->

							<!-- wp:group {"className":"vhs-reel-card-meta","layout":{"type":"flex","flexWrap":"nowrap"}} -->
							<div class="wp-block-group vhs-reel-card-meta">
								<!-- wp:post-author-name {"isLink":false} /-->
								<!-- wp:post-date {"format":"M j, Y"} /-->
							</div>
							<!-- /wp:group -->

						</div>
						<!-- /wp:group -->

					</div>
					<!-- /wp:group -->
				<!-- /wp:post-template -->

				<!-- wp:query-pagination {"paginationArrow":"arrow","className":"vhs-reel-load-more-pagination","layout":{"type":"flex","justifyContent":"center"}} -->
				<!-- wp:query-pagination-next {"label":"Load more articles","className":"vhs-reel-load-more-btn"} /-->
				<!-- /wp:query-pagination -->

			</div>
			<!-- /wp:query -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"32%","className":"vhs-reel-sidebar"} -->
		<div class="wp-block-column vhs-reel-sidebar" style="flex-basis:32%">

			<!-- wp:group {"className":"vhs-sidebar-card"} -->
			<div class="wp-block-group vhs-sidebar-card">
				<!-- wp:heading {"level":3,"className":"vhs-sidebar-title"} -->
				<h3 class="wp-block-heading vhs-sidebar-title">BROWSE BY TOPIC</h3>
				<!-- /wp:heading -->

				<!-- wp:categories {"showPostCounts":true,"className":"vhs-sidebar-categories-list"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"vhs-sidebar-card"} -->
			<div class="wp-block-group vhs-sidebar-card">
				<!-- wp:heading {"level":3,"className":"vhs-sidebar-title"} -->
				<h3 class="wp-block-heading vhs-sidebar-title">POPULAR POSTS</h3>
				<!-- /wp:heading -->

				<!-- wp:latest-posts {"postsToShow":3,"className":"vhs-sidebar-latest-posts"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:html -->
			<div class="vhs-sidebar-cta-card">
				<div class="vhs-sidebar-cta-title">Ready to preserve yours?</div>
				<div class="vhs-sidebar-cta-desc">By hand, in 4K, from $18 per tape &mdash; in Hollywood, FL.</div>
				<a href="/contact/" class="vhs-sidebar-cta-btn">Get a free quote</a>
				<div class="vhs-sidebar-cta-footer">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round"><rect x="2.5" y="6" width="19" height="12" rx="2"></rect><circle cx="8" cy="12" r="2.3"></circle><circle cx="16" cy="12" r="2.3"></circle><line x1="10.4" y1="12" x2="13.6" y2="12"></line></svg>
					<a href="/contact/">Living Memories &mdash; your story on camera, from $1,800 &rarr;</a>
				</div>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
