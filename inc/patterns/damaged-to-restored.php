<?php
/**
 * From Damaged to Restored — Living Memories Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'From Damaged to Restored — Before & After Grid', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-damaged-restored-section","style":{"color":{"background":"#f0f4f8"},"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-damaged-restored-section has-background" style="background-color:#f0f4f8;padding-top:90px;padding-right:24px;padding-bottom:90px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Section Heading -->
		<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}},"fontSize":"max-38"} -->
		<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-size:38px;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:12px">From Damaged to <span style="color:#39B7EC">Restored</span>.</h2>
		<!-- /wp:heading -->

		<!-- Section Subtitle -->
		<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"48px"}}}} -->
		<p class="has-text-color" style="color:#64748b;font-size:16px;line-height:1.6;margin-bottom:48px">Real restorations from our Hollywood studio &mdash; drag the divider on any pair.</p>
		<!-- /wp:paragraph -->

		<!-- 3 Columns Before/After Grid -->
		<!-- wp:columns {"style":{"spacing":{"blockGap":"28px"}}} -->
		<div class="wp-block-columns">

			<!-- Column 1: Fading & color-shift reversed -->
			<!-- wp:column {"className":"vhs-ba-card-col"} -->
			<div class="wp-block-column vhs-ba-card-col">

				<!-- Comparison Visual Box -->
				<!-- wp:html -->
				<div class="vhs-ba-card-box">
					<!-- Before Half -->
					<div class="vhs-ba-half vhs-ba-before">
						<div class="vhs-ba-badge vhs-badge-before">BEFORE</div>
						<img class="vhs-get-img" src="" alt="Faded portrait, 1962" onerror="this.style.display=\'none\'" />
						<div class="vhs-ba-placeholder-text">faded portrait, 1962</div>
					</div>
					<!-- After Half -->
					<div class="vhs-ba-half vhs-ba-after">
						<div class="vhs-ba-badge vhs-badge-after">AFTER</div>
						<img class="vhs-get-img" src="" alt="Restored" onerror="this.style.display=\'none\'" />
						<div class="vhs-ba-placeholder-text">restored</div>
					</div>
					<!-- Divider & Handle -->
					<div class="vhs-ba-divider" style="left: 50%;">
						<div class="vhs-ba-handle">
							<span>&lt;&nbsp;&gt;</span>
						</div>
					</div>
				</div>
				<!-- /wp:html -->

				<!-- Caption Paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"14px","fontWeight":"700"}},"spacing":{"margin":{"top":"16px","bottom":"0px"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#16324f;font-size:14px;font-weight:700;margin-top:16px;margin-bottom:0">Fading &amp; color-shift reversed</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:column -->

			<!-- Column 2: Tears & creases rebuilt -->
			<!-- wp:column {"className":"vhs-ba-card-col"} -->
			<div class="wp-block-column vhs-ba-card-col">

				<!-- Comparison Visual Box -->
				<!-- wp:html -->
				<div class="vhs-ba-card-box">
					<!-- Before Half -->
					<div class="vhs-ba-half vhs-ba-before">
						<div class="vhs-ba-badge vhs-badge-before">BEFORE</div>
						<img class="vhs-get-img" src="" alt="Torn print, taped" onerror="this.style.display=\'none\'" />
						<div class="vhs-ba-placeholder-text">torn print, taped</div>
					</div>
					<!-- After Half -->
					<div class="vhs-ba-half vhs-ba-after">
						<div class="vhs-ba-badge vhs-badge-after">AFTER</div>
						<img class="vhs-get-img" src="" alt="Restored" onerror="this.style.display=\'none\'" />
						<div class="vhs-ba-placeholder-text">restored</div>
					</div>
					<!-- Divider & Handle -->
					<div class="vhs-ba-divider" style="left: 50%;">
						<div class="vhs-ba-handle">
							<span>&lt;&nbsp;&gt;</span>
						</div>
					</div>
				</div>
				<!-- /wp:html -->

				<!-- Caption Paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"14px","fontWeight":"700"}},"spacing":{"margin":{"top":"16px","bottom":"0px"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#16324f;font-size:14px;font-weight:700;margin-top:16px;margin-bottom:0">Tears &amp; creases rebuilt</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:column -->

			<!-- Column 3: Water & mold damage lifted -->
			<!-- wp:column {"className":"vhs-ba-card-col"} -->
			<div class="wp-block-column vhs-ba-card-col">

				<!-- Comparison Visual Box -->
				<!-- wp:html -->
				<div class="vhs-ba-card-box">
					<!-- Before Half -->
					<div class="vhs-ba-half vhs-ba-before">
						<div class="vhs-ba-badge vhs-badge-before">BEFORE</div>
						<img class="vhs-get-img" src="" alt="Water-damaged, 1978" onerror="this.style.display=\'none\'" />
						<div class="vhs-ba-placeholder-text">water-damaged, 1978</div>
					</div>
					<!-- After Half -->
					<div class="vhs-ba-half vhs-ba-after">
						<div class="vhs-ba-badge vhs-badge-after">AFTER</div>
						<img class="vhs-get-img" src="" alt="Restored" onerror="this.style.display=\'none\'" />
						<div class="vhs-ba-placeholder-text">restored</div>
					</div>
					<!-- Divider & Handle -->
					<div class="vhs-ba-divider" style="left: 50%;">
						<div class="vhs-ba-handle">
							<span>&lt;&nbsp;&gt;</span>
						</div>
					</div>
				</div>
				<!-- /wp:html -->

				<!-- Caption Paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"14px","fontWeight":"700"}},"spacing":{"margin":{"top":"16px","bottom":"0px"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#16324f;font-size:14px;font-weight:700;margin-top:16px;margin-bottom:0">Water &amp; mold damage lifted</p>
				<!-- /wp:paragraph -->

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
