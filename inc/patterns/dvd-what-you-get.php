<?php
/**
 * What You Get — DVD to Digital Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'What You Get — DVD to Digital', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-dvd-what-you-get-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-dvd-what-you-get-section has-background" style="background-color:#ffffff;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- 2 Columns Layout -->
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"56px"}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">

			<!-- Left Column: Heading, Subtitle & 4 Feature Items -->
			<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">

				<!-- Section Heading -->
				<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}},"fontSize":"max-38"} -->
				<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-size:38px;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:12px">What You <span style="color:#39B7EC">Get</span>.</h2>
				<!-- /wp:heading -->

				<!-- Section Subtitle -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"36px"}}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:16px;line-height:1.6;margin-bottom:36px">Your recordings, freed from the disc.</p>
				<!-- /wp:paragraph -->

				<!-- 4 Vertical Feature Items -->
				<!-- wp:html -->
				<div class="vhs-get-items-list">

					<!-- Item 1: Clean MP4 files -->
					<div class="vhs-get-item">
						<div class="vhs-get-icon">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
						</div>
						<div class="vhs-get-content">
							<h3 class="vhs-get-title">Clean MP4 files</h3>
							<p class="vhs-get-sub">Playable on any phone, TV, or laptop.</p>
						</div>
					</div>

					<!-- Item 2: Cloud or USB delivery -->
					<div class="vhs-get-item">
						<div class="vhs-get-icon">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
						</div>
						<div class="vhs-get-content">
							<h3 class="vhs-get-title">Cloud or USB delivery</h3>
							<p class="vhs-get-sub">Or a new organized drive with everything on it.</p>
						</div>
					</div>

					<!-- Item 3: Menus & chapters preserved -->
					<div class="vhs-get-item">
						<div class="vhs-get-icon">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"/><line x1="7" y1="8" x2="17" y2="8"/><line x1="7" y1="12" x2="17" y2="12"/></svg>
						</div>
						<div class="vhs-get-content">
							<h3 class="vhs-get-title">Menus &amp; chapters preserved</h3>
							<p class="vhs-get-sub">Where the disc structure allows.</p>
						</div>
					</div>

					<!-- Item 4: Original discs returned -->
					<div class="vhs-get-item">
						<div class="vhs-get-icon">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 14 4 9 9 4"/><path d="M20 20v-7a4 4 0 0 0-4-4H4"/></svg>
						</div>
						<div class="vhs-get-content">
							<h3 class="vhs-get-title">Original discs returned</h3>
							<p class="vhs-get-sub">Every disc comes home.</p>
						</div>
					</div>

				</div>
				<!-- /wp:html -->

			</div>
			<!-- /wp:column -->

			<!-- Right Column: Image Card -->
			<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
				<!-- wp:html -->
				<div class="vhs-get-image-card">
					<img class="vhs-get-img" src="" alt="Disc inspection light table" onerror="this.style.display=\'none\'" />
					<div class="vhs-get-placeholder-text">photo &mdash; disc inspection light table</div>
				</div>
				<!-- /wp:html -->
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
