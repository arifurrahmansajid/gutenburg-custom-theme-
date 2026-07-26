<?php
/**
 * What You Get — Film Digitizing Section Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'What You Get — Film Digitizing', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-what-you-get-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-what-you-get-section has-background" style="background-color:#ffffff;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- 2-Column Layout -->
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"48px"}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">

			<!-- Left Column: Details & Feature List -->
			<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%">

				<!-- Section Heading -->
				<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}},"fontSize":"max-38"} -->
				<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-size:38px;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:12px">What You <span style="color:#39B7EC">Get</span>.</h2>
				<!-- /wp:heading -->

				<!-- Section Subtitle -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"36px"}}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:16px;line-height:1.6;margin-bottom:36px">Cinema-quality preservation of your family&rsquo;s earliest moving pictures.</p>
				<!-- /wp:paragraph -->

				<!-- Feature Items List -->
				<!-- wp:html -->
				<div class="vhs-get-items-list">

					<!-- Item 1: MP4 up to 5K -->
					<div class="vhs-get-item">
						<div class="vhs-get-icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
						</div>
						<div class="vhs-get-content">
							<h3 class="vhs-get-title">MP4 up to 5K</h3>
							<p class="vhs-get-desc">Every frame, captured at full resolution.</p>
						</div>
					</div>

					<!-- Item 2: Cloud, USB, or DVD -->
					<div class="vhs-get-item">
						<div class="vhs-get-icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
						</div>
						<div class="vhs-get-content">
							<h3 class="vhs-get-title">Cloud, USB, or DVD</h3>
							<p class="vhs-get-desc">Delivered your way.</p>
						</div>
					</div>

					<!-- Item 3: Optional upscaling & stabilization -->
					<div class="vhs-get-item">
						<div class="vhs-get-icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3C12 7.5 7.5 12 2 12C7.5 12 12 16.5 12 22C12 16.5 16.5 12 22 12C16.5 12 12 7.5 12 3Z"/></svg>
						</div>
						<div class="vhs-get-content">
							<h3 class="vhs-get-title">Optional upscaling &amp; stabilization</h3>
							<p class="vhs-get-desc">AI-assisted polish for shaky, faded reels.</p>
						</div>
					</div>

					<!-- Item 4: Sound captured -->
					<div class="vhs-get-item">
						<div class="vhs-get-icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="2" x2="12" y2="22"/><line x1="17" y1="5" x2="17" y2="19"/><line x1="7" y1="5" x2="7" y2="19"/><line x1="22" y1="9" x2="22" y2="15"/><line x1="2" y1="9" x2="2" y2="15"/></svg>
						</div>
						<div class="vhs-get-content">
							<h3 class="vhs-get-title">Sound captured</h3>
							<p class="vhs-get-desc">Where your film carries an audio track.</p>
						</div>
					</div>

					<!-- Item 5: Reels returned -->
					<div class="vhs-get-item">
						<div class="vhs-get-icon">
							<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 14 4 9 9 4"/><path d="M20 20v-7a4 4 0 0 0-4-4H4"/></svg>
						</div>
						<div class="vhs-get-content">
							<h3 class="vhs-get-title">Reels returned</h3>
							<p class="vhs-get-desc">Original film always comes home.</p>
						</div>
					</div>

				</div>
				<!-- /wp:html -->

			</div>
			<!-- /wp:column -->

			<!-- Right Column: Image Card Container -->
			<!-- wp:column {"verticalAlignment":"center","width":"52%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%">
				<!-- wp:html -->
				<div class="vhs-get-image-card">
					<img src="" alt="photo - film scanner, reel threading, studio" class="vhs-get-img" />
					<div class="vhs-get-placeholder-text">photo &mdash; film scanner, reel threading, studio</div>
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
