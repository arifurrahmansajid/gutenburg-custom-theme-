<?php
/**
 * Before/After Comparison Card v2 — Portrait with Centered Captions
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri  = get_template_directory_uri();
$before_url = esc_url( $theme_uri . '/assets/images/film-before.png' );
$after_url  = esc_url( $theme_uri . '/assets/images/film-after.png' );

return array(
	'title'      => __( 'Before/After Comparison Card', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"color":{"background":"#132b45"},"spacing":{"padding":{"top":"64px","bottom":"64px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#132b45;padding-top:64px;padding-right:24px;padding-bottom:64px;padding-left:24px">

	<!-- wp:group {"className":"vhs-ba2-container","layout":{"type":"constrained"}} -->
	<div class="wp-block-group vhs-ba2-container">

		<!-- BEFORE layer -->
		<!-- wp:group {"className":"vhs-ba2-before-layer","layout":{"type":"constrained"}} -->
		<div class="wp-block-group vhs-ba2-before-layer">

			<!-- wp:paragraph {"className":"vhs-ba2-badge vhs-ba2-badge-before"} -->
			<p class="vhs-ba2-badge vhs-ba2-badge-before">BEFORE</p>
			<!-- /wp:paragraph -->

			<!-- wp:image {"url":"' . $before_url . '","alt":"Before image","className":"","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . $before_url . '" alt="Before image" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block;margin:0;padding:0"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"className":"vhs-ba2-caption vhs-ba2-caption-before"} -->
			<p class="vhs-ba2-caption vhs-ba2-caption-before">Hi8 tape &#8212; dropouts</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

		<!-- AFTER layer -->
		<!-- wp:group {"className":"vhs-ba2-after-layer","layout":{"type":"constrained"}} -->
		<div class="wp-block-group vhs-ba2-after-layer">

			<!-- wp:paragraph {"className":"vhs-ba2-badge vhs-ba2-badge-after"} -->
			<p class="vhs-ba2-badge vhs-ba2-badge-after">AFTER</p>
			<!-- /wp:paragraph -->

			<!-- wp:image {"url":"' . $after_url . '","alt":"After image","className":"","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . $after_url . '" alt="After image" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block;margin:0;padding:0"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"className":"vhs-ba2-caption vhs-ba2-caption-after"} -->
			<p class="vhs-ba2-caption vhs-ba2-caption-after">digitized &#8212; stabilized</p>
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
<!-- /wp:group -->
	',
);
