<?php
/**
 * The Restoration Gallery Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'The Restoration Gallery', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-restoration-gallery-section","style":{"color":{"background":"#f3f7fc"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-restoration-gallery-section has-background" style="background-color:#f3f7fc;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Header Row -->
		<!-- wp:group {"className":"vhs-restoration-gallery-header-row","style":{"spacing":{"margin":{"bottom":"40px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
		<div class="wp-block-group vhs-restoration-gallery-header-row" style="margin-bottom:40px">
			<!-- wp:group {"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}},"fontSize":"max-38"} -->
				<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-size:38px;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:12px">The Restoration <span style="color:#39B7EC">Gallery</span>.</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.6"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:16px;line-height:1.6;margin:0">Every pair below was restored by hand in our studio. Drag the divider.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:html -->
			<div class="vhs-restoration-gallery-badge">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linejoin="round"><path d="M12 4l1.8 6.2L20 12l-6.2 1.8L12 20l-1.8-6.2L4 12l6.2-1.8z"/></svg>
				<span>Hand-restored &mdash; never an AI filter</span>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->

		<!-- 2x2 Grid -->
		<!-- wp:columns {"className":"vhs-restoration-gallery-grid","style":{"spacing":{"blockGap":"24px","margin":{"top":"0px"}}}} -->
		<div class="wp-block-columns vhs-restoration-gallery-grid" style="margin-top:0px">

			<!-- Card 1: Grandmother’s portrait -->
			<!-- wp:column {"className":"vhs-gallery-card"} -->
			<div class="wp-block-column vhs-gallery-card">
				<!-- wp:html -->
				<div class="vhs-gallery-preview-box">
					<div class="vhs-gallery-split-container">
						<div class="vhs-gallery-before-side">
							<span class="vhs-gallery-tag-text">portrait, severe fading, 1948</span>
							<div class="vhs-gallery-badge-before">BEFORE</div>
						</div>
						<div class="vhs-gallery-after-side">
							<span class="vhs-gallery-tag-text">restored</span>
							<div class="vhs-gallery-badge-after">AFTER</div>
						</div>
					</div>
					<div class="vhs-gallery-slider-bar"></div>
					<div class="vhs-gallery-slider-handle"><span>&lsaquo;</span><span>&rsaquo;</span></div>
				</div>
				<!-- /wp:html -->
				<!-- wp:paragraph {"align":"center","className":"vhs-gallery-caption","style":{"color":{"text":"#475569"},"typography":{"fontSize":"13.5px","fontWeight":"600"}}} -->
				<p class="has-text-align-center vhs-gallery-caption has-text-color" style="color:#475569;font-size:13.5px;font-weight:600;margin-top:12px;margin-bottom:0">Grandmother&rsquo;s portrait &mdash; fading &amp; silvering reversed</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 2: Torn wedding photo -->
			<!-- wp:column {"className":"vhs-gallery-card"} -->
			<div class="wp-block-column vhs-gallery-card">
				<!-- wp:html -->
				<div class="vhs-gallery-preview-box">
					<div class="vhs-gallery-split-container">
						<div class="vhs-gallery-before-side">
							<span class="vhs-gallery-tag-text">torn in four pieces</span>
							<div class="vhs-gallery-badge-before">BEFORE</div>
						</div>
						<div class="vhs-gallery-after-side">
							<span class="vhs-gallery-tag-text">restored</span>
							<div class="vhs-gallery-badge-after">AFTER</div>
						</div>
					</div>
					<div class="vhs-gallery-slider-bar"></div>
					<div class="vhs-gallery-slider-handle"><span>&lsaquo;</span><span>&rsaquo;</span></div>
				</div>
				<!-- /wp:html -->
				<!-- wp:paragraph {"align":"center","className":"vhs-gallery-caption","style":{"color":{"text":"#475569"},"typography":{"fontSize":"13.5px","fontWeight":"600"}}} -->
				<p class="has-text-align-center vhs-gallery-caption has-text-color" style="color:#475569;font-size:13.5px;font-weight:600;margin-top:12px;margin-bottom:0">Torn wedding photo &mdash; rebuilt seamlessly</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

		<!-- Row 2 -->
		<!-- wp:columns {"className":"vhs-restoration-gallery-grid","style":{"spacing":{"blockGap":"24px","margin":{"top":"24px"}}}} -->
		<div class="wp-block-columns vhs-restoration-gallery-grid" style="margin-top:24px">

			<!-- Card 3: Water & mold -->
			<!-- wp:column {"className":"vhs-gallery-card"} -->
			<div class="wp-block-column vhs-gallery-card">
				<!-- wp:html -->
				<div class="vhs-gallery-preview-box">
					<div class="vhs-gallery-split-container">
						<div class="vhs-gallery-before-side">
							<span class="vhs-gallery-tag-text">hurricane water damage</span>
							<div class="vhs-gallery-badge-before">BEFORE</div>
						</div>
						<div class="vhs-gallery-after-side">
							<span class="vhs-gallery-tag-text">restored</span>
							<div class="vhs-gallery-badge-after">AFTER</div>
						</div>
					</div>
					<div class="vhs-gallery-slider-bar"></div>
					<div class="vhs-gallery-slider-handle"><span>&lsaquo;</span><span>&rsaquo;</span></div>
				</div>
				<!-- /wp:html -->
				<!-- wp:paragraph {"align":"center","className":"vhs-gallery-caption","style":{"color":{"text":"#475569"},"typography":{"fontSize":"13.5px","fontWeight":"600"}}} -->
				<p class="has-text-align-center vhs-gallery-caption has-text-color" style="color:#475569;font-size:13.5px;font-weight:600;margin-top:12px;margin-bottom:0">Water &amp; mold staining lifted</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 4: Colorization -->
			<!-- wp:column {"className":"vhs-gallery-card"} -->
			<div class="wp-block-column vhs-gallery-card">
				<!-- wp:html -->
				<div class="vhs-gallery-preview-box">
					<div class="vhs-gallery-split-container">
						<div class="vhs-gallery-before-side">
							<span class="vhs-gallery-tag-text">b&amp;w, colorized on request</span>
							<div class="vhs-gallery-badge-before">BEFORE</div>
						</div>
						<div class="vhs-gallery-after-side">
							<span class="vhs-gallery-tag-text">restored + color</span>
							<div class="vhs-gallery-badge-after">AFTER</div>
						</div>
					</div>
					<div class="vhs-gallery-slider-bar"></div>
					<div class="vhs-gallery-slider-handle"><span>&lsaquo;</span><span>&rsaquo;</span></div>
				</div>
				<!-- /wp:html -->
				<!-- wp:paragraph {"align":"center","className":"vhs-gallery-caption","style":{"color":{"text":"#475569"},"typography":{"fontSize":"13.5px","fontWeight":"600"}}} -->
				<p class="has-text-align-center vhs-gallery-caption has-text-color" style="color:#475569;font-size:13.5px;font-weight:600;margin-top:12px;margin-bottom:0">Optional colorization &mdash; always your call</p>
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
