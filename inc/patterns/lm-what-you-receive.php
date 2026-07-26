<?php
/**
 * What You Receive — Living Memories Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'What You Receive — Living Memories Deliverables', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-lm-what-receive-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-lm-what-receive-section has-background" style="background-color:#ffffff;padding-top:90px;padding-right:24px;padding-bottom:90px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- 2 Columns Layout -->
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"56px"}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">

			<!-- Left Column: Heading, Subtitle & 4 Deliverable Items -->
			<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">

				<!-- Section Heading -->
				<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}},"fontSize":"max-38"} -->
				<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-size:38px;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:12px">What You <span style="color:#39B7EC">Receive</span>.</h2>
				<!-- /wp:heading -->

				<!-- Section Subtitle -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"36px"}}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:16px;line-height:1.6;margin-bottom:36px">Every collection arrives as a keepsake, not a file dump.</p>
				<!-- /wp:paragraph -->

				<!-- 4 Vertical Deliverable Items -->
				<!-- wp:html -->
				<div class="vhs-receive-items-list">

					<!-- Item 1: The Final Film -->
					<div class="vhs-receive-item">
						<div class="vhs-receive-icon">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
						</div>
						<div class="vhs-receive-content">
							<h3 class="vhs-receive-title">The Final Film</h3>
							<p class="vhs-receive-sub">A cinematic viewing gallery with interactive menu &mdash; plus a beautifully packaged USB drive.</p>
						</div>
					</div>

					<!-- Item 2: The Complete Archive -->
					<div class="vhs-receive-item">
						<div class="vhs-receive-icon">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"/><line x1="7" y1="8" x2="17" y2="8"/><line x1="7" y1="12" x2="17" y2="12"/></svg>
						</div>
						<div class="vhs-receive-content">
							<h3 class="vhs-receive-title">The Complete Archive</h3>
							<p class="vhs-receive-sub">Cleanly labeled, cloud-based folders of every digitized photo, slide, and tape.</p>
						</div>
					</div>

					<!-- Item 3: The Transcript -->
					<div class="vhs-receive-item">
						<div class="vhs-receive-icon">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
						</div>
						<div class="vhs-receive-content">
							<h3 class="vhs-receive-title">The Transcript</h3>
							<p class="vhs-receive-sub">Your full interview, professionally transcribed and printed.</p>
						</div>
					</div>

					<!-- Item 4 (Featured Highlight Box Card): Legacy Exclusive -->
					<div class="vhs-receive-item vhs-receive-item-box">
						<div class="vhs-receive-icon">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
						</div>
						<div class="vhs-receive-content">
							<h3 class="vhs-receive-title">Legacy Exclusive &mdash; The Hardcover Video Book</h3>
							<p class="vhs-receive-sub">A custom-bound hardcover that automatically plays your documentary when opened.</p>
						</div>
					</div>

				</div>
				<!-- /wp:html -->

			</div>
			<!-- /wp:column -->

			<!-- Right Column: Product Image Showcase Card -->
			<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
				<!-- wp:html -->
				<div class="vhs-receive-image-card">
					<img class="vhs-get-img" src="" alt="Hardcover video book open screen playing film" onerror="this.style.display=\'none\'" />
					<div class="vhs-get-placeholder-text">product shot &mdash; hardcover video book, open, screen playing film</div>
					<div class="vhs-receive-floating-badge">
						<div class="vhs-rf-title">Legacy exclusive</div>
						<div class="vhs-rf-sub">Plays the moment it opens</div>
					</div>
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
