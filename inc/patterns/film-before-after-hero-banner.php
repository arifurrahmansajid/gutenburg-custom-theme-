<?php
/**
 * Original Film Before/After Hero Banner Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri  = get_template_directory_uri();
$before_url = esc_url( $theme_uri . '/assets/images/film-before.png' );
$after_url  = esc_url( $theme_uri . '/assets/images/film-after.png' );

return array(
	'title'      => __( 'Original Film Before/After Hero Banner', 'realome' ),
	'categories' => array( 'vhs-sections', 'hero', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-film-hero-box","style":{"color":{"background":"#132b45","text":"#ffffff"},"spacing":{"padding":{"top":"88px","bottom":"88px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-film-hero-box has-text-color has-background" style="background-color:#132b45;color:#ffffff;padding-top:88px;padding-right:24px;padding-bottom:88px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- wp:columns {"verticalAlignment":"center","className":"vhs-film-hero-grid","style":{"spacing":{"blockGap":"56px"}}} -->
		<div class="wp-block-columns are-vertically-aligned-center vhs-film-hero-grid">

			<!-- Left Column: Service Details & CTAs -->
			<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
			<div class="wp-block-column are-vertically-aligned-center" style="flex-basis:50%">

				<!-- wp:paragraph {"className":"vhs-reel-eyebrow","style":{"color":{"text":"#39B7EC"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.16em","textTransform":"uppercase"}},"spacing":{"margin":{"top":"0px","bottom":"16px"}}} -->
				<p class="vhs-reel-eyebrow has-text-color" style="color:#39B7EC;font-size:13px;font-weight:800;letter-spacing:0.16em;text-transform:uppercase;margin-top:0px;margin-bottom:16px">SERVICE &middot; FRAME-BY-FRAME 5K</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":1,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"800","lineHeight":"1.1"},"spacing":{"margin":{"top":"0px","bottom":"20px"}}}} -->
				<h1 class="wp-block-heading has-text-color" style="color:#ffffff;font-weight:800;line-height:1.1;margin-top:0px;margin-bottom:20px;font-size:48px">8mm &amp; Super 8 Film to <span style="color:#39B7EC">Digital.</span></h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.82)"},"typography":{"fontSize":"17.5px","lineHeight":"1.65","fontWeight":"500"}},"spacing":{"margin":{"top":"0px","bottom":"32px"}}} -->
				<p class="has-text-color" style="color:rgba(255,255,255,0.82);font-size:17.5px;line-height:1.65;font-weight:500;max-width:560px;margin-top:0px;margin-bottom:32px">Rediscover the home movies hiding in those old film reels. Memory Converter scans every frame by hand in our Hollywood, FL studio &mdash; in stunning 5K &mdash; so decades-old moments look better than ever.</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"16px","margin":{"top":"0px","bottom":"28px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group" style="margin-top:0px;margin-bottom:28px">

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"style":{"color":{"background":"#436da5","text":"#ffffff"},"border":{"radius":"12px"}},"fontSize":"medium"} -->
						<div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link has-text-color has-background" href="#" style="border-radius:12px;background-color:#436da5;color:#ffffff">Get a Free Quote</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

					<!-- wp:html -->
					<a href="#sample-footage" class="vhs-btn-outline">See Sample Footage</a>
					<!-- /wp:html -->

				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.50)"},"typography":{"fontSize":"13px"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<p class="has-text-color" style="color:rgba(255,255,255,0.50);font-size:13px;margin:0">Family-owned since 2020 &nbsp;&middot;&nbsp; 5-star on Google &amp; Yelp &nbsp;&middot;&nbsp; Frame-by-frame 5K scanning &nbsp;&middot;&nbsp; Never outsourced overseas</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:column -->

			<!-- Right Column: Before/After Comparison Card -->
			<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

				<!-- wp:group {"className":"vhs-ba-container","layout":{"type":"constrained"}} -->
				<div class="wp-block-group vhs-ba-container">

					<!-- BEFORE layer -->
					<!-- wp:group {"className":"vhs-ba-before-layer","layout":{"type":"constrained"}} -->
					<div class="wp-block-group vhs-ba-before-layer">

						<!-- wp:paragraph {"className":"vhs-ba-badge vhs-ba-badge-before"} -->
						<p class="vhs-ba-badge vhs-ba-badge-before">BEFORE</p>
						<!-- /wp:paragraph -->

						<!-- wp:image {"url":"' . $before_url . '","alt":"Before - 8mm frame beach day 1967","className":"vhs-ba-img vhs-ba-img-before","sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full vhs-ba-img vhs-ba-img-before"><img src="' . $before_url . '" alt="Before - 8mm frame beach day 1967"/></figure>
						<!-- /wp:image -->

						<!-- wp:paragraph {"className":"vhs-ba-caption vhs-ba-caption-before"} -->
						<p class="vhs-ba-caption vhs-ba-caption-before">8mm frame &mdash; beach day, 1967</p>
						<!-- /wp:paragraph -->

					</div>
					<!-- /wp:group -->

					<!-- AFTER layer -->
					<!-- wp:group {"className":"vhs-ba-after-layer","layout":{"type":"constrained"}} -->
					<div class="wp-block-group vhs-ba-after-layer">

						<!-- wp:paragraph {"className":"vhs-ba-badge vhs-ba-badge-after"} -->
						<p class="vhs-ba-badge vhs-ba-badge-after">AFTER</p>
						<!-- /wp:paragraph -->

						<!-- wp:image {"url":"' . $after_url . '","alt":"After - Same frame 5K scan","className":"vhs-ba-img vhs-ba-img-after","sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full vhs-ba-img vhs-ba-img-after"><img src="' . $after_url . '" alt="After - Same frame 5K scan"/></figure>
						<!-- /wp:image -->

						<!-- wp:paragraph {"className":"vhs-ba-caption vhs-ba-caption-after"} -->
						<p class="vhs-ba-caption vhs-ba-caption-after">same frame &mdash; 5k scan</p>
						<!-- /wp:paragraph -->

					</div>
					<!-- /wp:group -->

					<!-- Slider handle & divider -->
					<!-- wp:html -->
					<input type="range" class="vhs-ba-range-slider" min="0" max="100" value="50" oninput="this.closest(\'.vhs-ba-container\').style.setProperty(\'--slider-pos\', this.value + \'%\')" aria-label="Before and After comparison slider" />
					<div class="vhs-ba-divider">
						<div class="vhs-ba-handle-btn">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#132b45" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#132b45" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
						</div>
					</div>
					<!-- /wp:html -->

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
