<?php
/**
 * Made for the Storytellers — Living Memories Use Cases Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Made for the Storytellers — Use Cases Grid', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-lm-storytellers-section","style":{"color":{"background":"#f0f4f8"},"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-lm-storytellers-section has-background" style="background-color:#f0f4f8;padding-top:90px;padding-right:24px;padding-bottom:90px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Section Heading -->
		<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}},"fontSize":"max-38"} -->
		<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-size:38px;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:12px">Made for the <span style="color:#39B7EC">Storytellers</span>.</h2>
		<!-- /wp:heading -->

		<!-- Subtitle -->
		<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"48px"}}}} -->
		<p class="has-text-color" style="color:#64748b;font-size:16px;line-height:1.6;margin-bottom:48px">And for the families who can&rsquo;t bear to lose the stories.</p>
		<!-- /wp:paragraph -->

		<!-- 4 Columns Grid -->
		<!-- wp:columns {"style":{"spacing":{"blockGap":"24px"}}} -->
		<div class="wp-block-columns">

			<!-- Column 1 -->
			<!-- wp:column {"className":"vhs-lm-storyteller-card"} -->
			<div class="wp-block-column vhs-lm-storyteller-card">
				<!-- wp:group {"className":"vhs-lm-card-img-wrap","layout":{"type":"constrained"}} -->
				<div class="wp-block-group vhs-lm-card-img-wrap">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover"} -->
					<figure class="wp-block-figure wp-block-image"><img src="" alt="Grandmother laughing" onerror="this.style.display=\'none\'"/><figcaption class="vhs-get-placeholder-text">photo &mdash; grandmother laughing</figcaption></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"vhs-lm-card-body","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group vhs-lm-card-body" style="padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px">
					<!-- wp:heading {"level":3,"className":"vhs-lm-card-title","style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","fontSize":"16px","lineHeight":"1.3"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading vhs-lm-card-title has-text-color" style="color:#16324f;font-size:16px;font-weight:800;line-height:1.3;margin-top:0px;margin-bottom:6px">Grandparents &amp; elders</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"className":"vhs-lm-card-desc","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px","lineHeight":"1.5"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-lm-card-desc has-text-color" style="color:#64748b;font-size:13.5px;line-height:1.5;margin:0">The voice everyone gathers around at dinner &mdash; preserved.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Column 2 -->
			<!-- wp:column {"className":"vhs-lm-storyteller-card"} -->
			<div class="wp-block-column vhs-lm-storyteller-card">
				<!-- wp:group {"className":"vhs-lm-card-img-wrap","layout":{"type":"constrained"}} -->
				<div class="wp-block-group vhs-lm-card-img-wrap">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover"} -->
					<figure class="wp-block-figure wp-block-image"><img src="" alt="Father &amp; daughter" onerror="this.style.display=\'none\'"/><figcaption class="vhs-get-placeholder-text">photo &mdash; father &amp; daughter</figcaption></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"vhs-lm-card-body","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group vhs-lm-card-body" style="padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px">
					<!-- wp:heading {"level":3,"className":"vhs-lm-card-title","style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","fontSize":"16px","lineHeight":"1.3"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading vhs-lm-card-title has-text-color" style="color:#16324f;font-size:16px;font-weight:800;line-height:1.3;margin-top:0px;margin-bottom:6px">A parent&rsquo;s story, in time</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"className":"vhs-lm-card-desc","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px","lineHeight":"1.5"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-lm-card-desc has-text-color" style="color:#64748b;font-size:13.5px;line-height:1.5;margin:0">Capture the matriarch&rsquo;s or patriarch&rsquo;s story while you still can.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Column 3 -->
			<!-- wp:column {"className":"vhs-lm-storyteller-card"} -->
			<div class="wp-block-column vhs-lm-storyteller-card">
				<!-- wp:group {"className":"vhs-lm-card-img-wrap","layout":{"type":"constrained"}} -->
				<div class="wp-block-group vhs-lm-card-img-wrap">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover"} -->
					<figure class="wp-block-figure wp-block-image"><img src="" alt="Birthday toast" onerror="this.style.display=\'none\'"/><figcaption class="vhs-get-placeholder-text">photo &mdash; birthday toast</figcaption></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"vhs-lm-card-body","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group vhs-lm-card-body" style="padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px">
					<!-- wp:heading {"level":3,"className":"vhs-lm-card-title","style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","fontSize":"16px","lineHeight":"1.3"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading vhs-lm-card-title has-text-color" style="color:#16324f;font-size:16px;font-weight:800;line-height:1.3;margin-top:0px;margin-bottom:6px">Milestone gifts</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"className":"vhs-lm-card-desc","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px","lineHeight":"1.5"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-lm-card-desc has-text-color" style="color:#64748b;font-size:13.5px;line-height:1.5;margin:0">Major birthdays, anniversaries, retirements &mdash; a gift no one forgets.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Column 4 -->
			<!-- wp:column {"className":"vhs-lm-storyteller-card"} -->
			<div class="wp-block-column vhs-lm-storyteller-card">
				<!-- wp:group {"className":"vhs-lm-card-img-wrap","layout":{"type":"constrained"}} -->
				<div class="wp-block-group vhs-lm-card-img-wrap">
					<!-- wp:image {"aspectRatio":"4/3","scale":"cover"} -->
					<figure class="wp-block-figure wp-block-image"><img src="" alt="Three generations" onerror="this.style.display=\'none\'"/><figcaption class="vhs-get-placeholder-text">photo &mdash; three generations</figcaption></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"vhs-lm-card-body","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group vhs-lm-card-body" style="padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px">
					<!-- wp:heading {"level":3,"className":"vhs-lm-card-title","style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","fontSize":"16px","lineHeight":"1.3"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading vhs-lm-card-title has-text-color" style="color:#16324f;font-size:16px;font-weight:800;line-height:1.3;margin-top:0px;margin-bottom:6px">Faith &amp; cultural communities</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"className":"vhs-lm-card-desc","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px","lineHeight":"1.5"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="vhs-lm-card-desc has-text-color" style="color:#64748b;font-size:13.5px;line-height:1.5;margin:0">For families who treasure passing history down the generations.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
