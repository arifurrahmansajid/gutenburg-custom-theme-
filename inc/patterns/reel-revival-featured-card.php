<?php
/**
 * Reel Revival Featured Latest Blog Card Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri = get_template_directory_uri();

return array(
	'title'      => __( 'Reel Revival Featured Latest Blog Card', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-featured-post-section","style":{"color":{"background":"#f3f7fc"},"spacing":{"padding":{"top":"64px","bottom":"64px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull vhs-featured-post-section has-background" style="background-color:#f3f7fc;padding-top:64px;padding-right:24px;padding-bottom:64px;padding-left:24px">

	<!-- Dynamic WordPress Query Loop (1 Latest Post) -->
	<!-- wp:query {"queryId":2,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"vhs-featured-post-query"} -->
	<div class="wp-block-query vhs-featured-post-query">
		<!-- wp:post-template {"className":"vhs-featured-post-template"} -->
			<!-- wp:group {"className":"vhs-featured-post-card"} -->
			<div class="wp-block-group vhs-featured-post-card">
				
				<!-- Left Column: Featured Image -->
				<!-- wp:post-featured-image {"isLink":true,"className":"vhs-featured-card-image"} /-->

				<!-- Right Column: Card Content -->
				<!-- wp:group {"className":"vhs-featured-card-content"} -->
				<div class="wp-block-group vhs-featured-card-content">

					<!-- Badges Row -->
					<!-- wp:html -->
					<div class="vhs-featured-badges-row">
						<span class="vhs-badge-pill vhs-badge-primary">FEATURED</span>
						<span class="vhs-badge-pill vhs-badge-secondary">PRESERVATION TIPS</span>
					</div>
					<!-- /wp:html -->

					<!-- Dynamic Title -->
					<!-- wp:post-title {"isLink":true,"level":2,"className":"vhs-featured-card-title"} /-->

					<!-- Dynamic Excerpt -->
					<!-- wp:post-excerpt {"moreText":"","className":"vhs-featured-card-excerpt"} /-->

					<!-- Footer Row: Author Avatar + Name + Date + Read Article Link -->
					<!-- wp:group {"className":"vhs-featured-card-footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group vhs-featured-card-footer">
						
						<!-- Left Author Info -->
						<!-- wp:group {"className":"vhs-featured-author-box","layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group vhs-featured-author-box">
							<!-- wp:avatar {"size":40,"className":"vhs-featured-author-avatar"} /-->
							<!-- wp:group {"className":"vhs-featured-meta-info","layout":{"type":"flex","flexWrap":"nowrap"}} -->
							<div class="wp-block-group vhs-featured-meta-info">
								<!-- wp:post-author-name {"isLink":false} /-->
								<span class="vhs-featured-meta-sep">&middot;</span>
								<!-- wp:post-date {"format":"M j, Y"} /-->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->

						<!-- Right Read Article Link (Dynamic Post Permalink) -->
						<!-- wp:read-more {"content":"Read article &rarr;","className":"vhs-featured-read-link"} /-->

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
