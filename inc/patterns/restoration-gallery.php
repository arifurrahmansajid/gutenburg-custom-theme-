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

		<!-- Section Heading & Top Badge Row -->
		<!-- wp:group {"className":"vhs-gallery-header-row","style":{"spacing":{"margin":{"bottom":"44px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"bottom","justifyContent":"space-between"}} -->
		<div class="wp-block-group vhs-gallery-header-row" style="margin-bottom:44px">
			<!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}},"fontSize":"max-38"} -->
				<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:12px;font-size:38px">The Restoration <span style="color:#39B7EC">Gallery</span>.</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.6"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:16px;line-height:1.6;margin:0">Every pair below was restored by hand in our studio. Drag the divider.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Top Right Badge -->
			<!-- wp:html -->
			<div class="vhs-gallery-badge">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linejoin="round"><path d="M12 4l1.8 6.2L20 12l-6.2 1.8L12 20l-1.8-6.2L4 12l6.2-1.8z"/></svg>
				<span>Hand-restored &mdash; never an AI filter</span>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->

		<!-- 2x2 Gallery Grid -->
		<!-- wp:columns {"className":"vhs-gallery-grid","style":{"spacing":{"blockGap":"24px","margin":{"top":"0px","bottom":"0px"}}}} -->
		<div class="wp-block-columns vhs-gallery-grid" style="margin-top:0px">

			<!-- Card 1 -->
			<!-- wp:column {"className":"vhs-gallery-item"} -->
			<div class="wp-block-column vhs-gallery-item">
				<!-- wp:html -->
				<div class="vhs-comparison-box">
					<div class="vhs-comp-split">
						<div class="vhs-comp-before">
							<span class="vhs-comp-text">portrait, severe fading, 1948</span>
							<div class="vhs-comp-tag-before">BEFORE</div>
						</div>
						<div class="vhs-comp-after">
							<span class="vhs-comp-text-after">restored</span>
							<div class="vhs-comp-tag-after">AFTER</div>
						</div>
					</div>
					<div class="vhs-comp-line"></div>
					<div class="vhs-comp-handle"><span>&lsaquo;</span><span>&rsaquo;</span></div>
				</div>
				<!-- /wp:html -->
				<!-- wp:paragraph {"className":"vhs-gallery-caption","style":{"color":{"text":"#475569"},"typography":{"fontSize":"13.5px","fontWeight":"600"}}} -->
				<p class="vhs-gallery-caption has-text-color" style="color:#475569;font-size:13.5px;font-weight:600;margin-top:12px;margin-bottom:0px;text-align:center">Grandmother&rsquo;s portrait &mdash; fading &amp; silvering reversed</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 2 -->
			<!-- wp:column {"className":"vhs-gallery-item"} -->
			<div class="wp-block-column vhs-gallery-item">
				<!-- wp:html -->
				<div class="vhs-comparison-box">
					<div class="vhs-comp-split">
						<div class="vhs-comp-before">
							<span class="vhs-comp-text">torn in four pieces</span>
							<div class="vhs-comp-tag-before">BEFORE</div>
						</div>
						<div class="vhs-comp-after">
							<span class="vhs-comp-text-after">restored</span>
							<div class="vhs-comp-tag-after">AFTER</div>
						</div>
					</div>
					<div class="vhs-comp-line"></div>
					<div class="vhs-comp-handle"><span>&lsaquo;</span><span>&rsaquo;</span></div>
				</div>
				<!-- /wp:html -->
				<!-- wp:paragraph {"className":"vhs-gallery-caption","style":{"color":{"text":"#475569"},"typography":{"fontSize":"13.5px","fontWeight":"600"}}} -->
				<p class="vhs-gallery-caption has-text-color" style="color:#475569;font-size:13.5px;font-weight:600;margin-top:12px;margin-bottom:0px;text-align:center">Torn wedding photo &mdash; rebuilt seamlessly</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

		<!-- Row 2 -->
		<!-- wp:columns {"className":"vhs-gallery-grid","style":{"spacing":{"blockGap":"24px","margin":{"top":"24px","bottom":"0px"}}}} -->
		<div class="wp-block-columns vhs-gallery-grid" style="margin-top:24px">

			<!-- Card 3 -->
			<!-- wp:column {"className":"vhs-gallery-item"} -->
			<div class="wp-block-column vhs-gallery-item">
				<!-- wp:html -->
				<div class="vhs-comparison-box">
					<div class="vhs-comp-split">
						<div class="vhs-comp-before">
							<span class="vhs-comp-text">hurricane water damage</span>
							<div class="vhs-comp-tag-before">BEFORE</div>
						</div>
						<div class="vhs-comp-after">
							<span class="vhs-comp-text-after">restored</span>
							<div class="vhs-comp-tag-after">AFTER</div>
						</div>
					</div>
					<div class="vhs-comp-line"></div>
					<div class="vhs-comp-handle"><span>&lsaquo;</span><span>&rsaquo;</span></div>
				</div>
				<!-- /wp:html -->
				<!-- wp:paragraph {"className":"vhs-gallery-caption","style":{"color":{"text":"#475569"},"typography":{"fontSize":"13.5px","fontWeight":"600"}}} -->
				<p class="vhs-gallery-caption has-text-color" style="color:#475569;font-size:13.5px;font-weight:600;margin-top:12px;margin-bottom:0px;text-align:center">Water &amp; mold staining lifted</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 4 -->
			<!-- wp:column {"className":"vhs-gallery-item"} -->
			<div class="wp-block-column vhs-gallery-item">
				<!-- wp:html -->
				<div class="vhs-comparison-box">
					<div class="vhs-comp-split">
						<div class="vhs-comp-before">
							<span class="vhs-comp-text">b&amp;w, colorized on request</span>
							<div class="vhs-comp-tag-before">BEFORE</div>
						</div>
						<div class="vhs-comp-after">
							<span class="vhs-comp-text-after">restored + color</span>
							<div class="vhs-comp-tag-after">AFTER</div>
						</div>
					</div>
					<div class="vhs-comp-line"></div>
					<div class="vhs-comp-handle"><span>&lsaquo;</span><span>&rsaquo;</span></div>
				</div>
				<!-- /wp:html -->
				<!-- wp:paragraph {"className":"vhs-gallery-caption","style":{"color":{"text":"#475569"},"typography":{"fontSize":"13.5px","fontWeight":"600"}}} -->
				<p class="vhs-gallery-caption has-text-color" style="color:#475569;font-size:13.5px;font-weight:600;margin-top:12px;margin-bottom:0px;text-align:center">Optional colorization &mdash; always your call</p>
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
