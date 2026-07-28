<?php
/**
 * Convert VHS to Digital Hero Banner with Before/After Card
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri  = get_template_directory_uri();
$before_url = esc_url( $theme_uri . '/assets/images/vhs-before.png' );
$after_url  = esc_url( $theme_uri . '/assets/images/vhs-after.png' );

return array(
	'title'      => __( 'Convert VHS to Digital Hero Banner', 'realome' ),
	'categories' => array( 'vhs-sections', 'hero', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-film-hero-box vhs-ba2-hero","style":{"color":{"background":"#132b45","text":"#ffffff"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-film-hero-box vhs-ba2-hero has-text-color has-background" style="background-color:#132b45;color:#ffffff;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"64px"}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">

			<!-- ===== LEFT COLUMN: Content ===== -->
			<!-- wp:column {"verticalAlignment":"center","width":"52%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%">

				<!-- Eyebrow -->
				<!-- wp:paragraph {"style":{"color":{"text":"#39B7EC"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.16em","textTransform":"uppercase"}},"spacing":{"margin":{"top":"0px","bottom":"16px"}}} -->
				<p class="has-text-color" style="color:#39B7EC;font-size:13px;font-weight:800;letter-spacing:0.16em;text-transform:uppercase;margin-top:0px;margin-bottom:16px">SERVICE &middot; FROM $18 PER TAPE</p>
				<!-- /wp:paragraph -->

				<!-- Heading -->
				<!-- wp:heading {"level":1,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"800","lineHeight":"1.1"},"spacing":{"margin":{"top":"0px","bottom":"20px"}}}} -->
				<h1 class="wp-block-heading has-text-color" style="color:#ffffff;font-weight:800;line-height:1.1;margin-top:0px;margin-bottom:20px;font-size:52px">Convert VHS<br />to <span style="color:#39B7EC">Digital.</span></h1>
				<!-- /wp:heading -->

				<!-- Description -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.80)"},"typography":{"fontSize":"17px","lineHeight":"1.65","fontWeight":"500"}},"spacing":{"margin":{"top":"0px","bottom":"36px"}}} -->
				<p class="has-text-color" style="color:rgba(255,255,255,0.80);font-size:17px;line-height:1.65;font-weight:500;max-width:540px;margin-top:0px;margin-bottom:36px">Bring your old VHS memories back to life. Memory Converter digitizes your tapes by hand in our Hollywood, FL studio &mdash; in crisp 4K &mdash; so your family moments last forever.</p>
				<!-- /wp:paragraph -->

				<!-- CTA Buttons Row -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"14px","margin":{"top":"0px","bottom":"32px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group" style="margin-top:0px;margin-bottom:32px">

					<!-- Primary Button -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"style":{"color":{"background":"#1e4f8f","text":"#ffffff"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"22px","right":"22px"}}}} -->
						<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="/get-a-quote" style="border-radius:10px;background-color:#1e4f8f;color:#ffffff;padding:14px 22px">Get a Free Quote</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

					<!-- Secondary Button -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"style":{"color":{"text":"#ffffff"},"border":{"color":"rgba(255,255,255,0.35)","radius":"10px","width":"1px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"22px","right":"22px"}}}} -->
						<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#sample-footage" style="border-radius:10px;border:1px solid rgba(255,255,255,0.35);color:#ffffff;padding:14px 22px">See Sample Before &amp; After</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

					<!-- Price Text -->
					<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"15px","fontWeight":"700"}}} -->
					<p class="has-text-color" style="color:#ffffff;font-size:15px;font-weight:700;margin:0">Starting at <span style="color:#39B7EC">$18 per tape</span></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

				<!-- Trust Strip -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.45)"},"typography":{"fontSize":"13px"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<p class="has-text-color" style="color:rgba(255,255,255,0.45);font-size:13px;margin:0">Family-owned since 2020 &nbsp;&middot;&nbsp; 5-star on Google &amp; Yelp &nbsp;&middot;&nbsp; BBB Accredited &nbsp;&middot;&nbsp; Never outsourced overseas</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:column -->

			<!-- ===== RIGHT COLUMN: Portrait Before/After Card ===== -->
			<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%">

				<!-- wp:group {"className":"vhs-ba2-container","layout":{"type":"constrained"}} -->
				<div class="wp-block-group vhs-ba2-container">

					<!-- BEFORE layer -->
					<!-- wp:group {"className":"vhs-ba2-before-layer","layout":{"type":"constrained"}} -->
					<div class="wp-block-group vhs-ba2-before-layer">

						<!-- wp:paragraph {"className":"vhs-ba2-badge vhs-ba2-badge-before"} -->
						<p class="vhs-ba2-badge vhs-ba2-badge-before">BEFORE</p>
						<!-- /wp:paragraph -->

						<!-- wp:image {"url":"' . $before_url . '","alt":"Before - VHS tape birthday, 1994","sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full"><img src="' . $before_url . '" alt="Before - VHS tape birthday, 1994" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block;margin:0;padding:0"/></figure>
						<!-- /wp:image -->

						<!-- wp:paragraph {"className":"vhs-ba2-caption vhs-ba2-caption-before"} -->
						<p class="vhs-ba2-caption vhs-ba2-caption-before">vhs frame &#8212; birthday, 1994</p>
						<!-- /wp:paragraph -->

					</div>
					<!-- /wp:group -->

					<!-- AFTER layer -->
					<!-- wp:group {"className":"vhs-ba2-after-layer","layout":{"type":"constrained"}} -->
					<div class="wp-block-group vhs-ba2-after-layer">

						<!-- wp:paragraph {"className":"vhs-ba2-badge vhs-ba2-badge-after"} -->
						<p class="vhs-ba2-badge vhs-ba2-badge-after">AFTER</p>
						<!-- /wp:paragraph -->

						<!-- wp:image {"url":"' . $after_url . '","alt":"After - Same frame crisp 4K","sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full"><img src="' . $after_url . '" alt="After - Same frame crisp 4K" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block;margin:0;padding:0"/></figure>
						<!-- /wp:image -->

						<!-- wp:paragraph {"className":"vhs-ba2-caption vhs-ba2-caption-after"} -->
						<p class="vhs-ba2-caption vhs-ba2-caption-after">same frame &#8212; crisp 4k</p>
						<!-- /wp:paragraph -->

					</div>
					<!-- /wp:group -->

					<!-- Slider handle -->
					<!-- wp:html -->
					<input type="range" class="vhs-ba2-range-slider" min="0" max="100" value="50"
						oninput="this.closest(\'.vhs-ba2-container\').style.setProperty(\'--slider-pos\', this.value + \'%\')"
						aria-label="Drag to compare before and after" />
					<div class="vhs-ba2-divider">
						<div class="vhs-ba2-handle-btn">
							<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#0b1a2a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
							<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#0b1a2a" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
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
