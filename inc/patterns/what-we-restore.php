<?php
/**
 * What We Restore — Photo Restoration Grid Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'What We Restore — Photo Restoration Grid', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-what-we-restore-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-what-we-restore-section has-background" style="background-color:#ffffff;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Section Heading -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"36px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group" style="margin-bottom:36px">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}},"fontSize":"max-38"} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:12px;font-size:38px">What We <span style="color:#39B7EC">Restore</span>.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.6"}}} -->
			<p class="has-text-color" style="color:#64748b;font-size:16px;line-height:1.6;margin:0">If it happened to a photograph, we&rsquo;ve probably repaired it.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- Row 1 (4 Cards) -->
		<!-- wp:columns {"className":"vhs-restore-grid","style":{"spacing":{"blockGap":"20px","margin":{"top":"0px","bottom":"20px"}}}} -->
		<div class="wp-block-columns vhs-restore-grid" style="margin-top:0px;margin-bottom:20px">
			<!-- Card 1: Tears & creases -->
			<!-- wp:column {"className":"vhs-restore-card"} -->
			<div class="wp-block-column vhs-restore-card">
				<!-- wp:html -->
				<div class="vhs-restore-icon">
					<svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linejoin="round"><path d="M12 4l1.8 6.2L20 12l-6.2 1.8L12 20l-1.8-6.2L4 12l6.2-1.8z"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:group {"className":"vhs-restore-info","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group vhs-restore-info">
					<!-- wp:heading {"level":3,"className":"vhs-restore-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15.5px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}}} -->
					<h3 class="wp-block-heading vhs-restore-title has-text-color" style="color:#16324f;font-size:15.5px;font-weight:800;margin-top:0px;margin-bottom:2px">Tears &amp; creases</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"vhs-restore-sub","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"12.5px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
					<p class="vhs-restore-sub has-text-color" style="color:#64748b;font-size:12.5px;margin:0">Rebuilt seamlessly</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Card 2: Fading & discoloration -->
			<!-- wp:column {"className":"vhs-restore-card"} -->
			<div class="wp-block-column vhs-restore-card">
				<!-- wp:html -->
				<div class="vhs-restore-icon">
					<svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4.5" width="18" height="15" rx="2"/><circle cx="9" cy="10" r="1.7"/><path d="M3 16.5l5-4 4 3 4-3.5 5 4.5"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:group {"className":"vhs-restore-info","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group vhs-restore-info">
					<!-- wp:heading {"level":3,"className":"vhs-restore-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15.5px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}}} -->
					<h3 class="wp-block-heading vhs-restore-title has-text-color" style="color:#16324f;font-size:15.5px;font-weight:800;margin-top:0px;margin-bottom:2px">Fading &amp; discoloration</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"vhs-restore-sub","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"12.5px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
					<p class="vhs-restore-sub has-text-color" style="color:#64748b;font-size:12.5px;margin:0">Density &amp; tone recovered</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Card 3: Water, mold & hurricane damage -->
			<!-- wp:column {"className":"vhs-restore-card"} -->
			<div class="wp-block-column vhs-restore-card">
				<!-- wp:html -->
				<div class="vhs-restore-icon">
					<svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.9" stroke-linecap="round"><line x1="4" y1="9" x2="4" y2="15"/><line x1="8" y1="6" x2="8" y2="18"/><line x1="12" y1="10" x2="12" y2="14"/><line x1="16" y1="4.5" x2="16" y2="19.5"/><line x1="20" y1="8" x2="20" y2="16"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:group {"className":"vhs-restore-info","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group vhs-restore-info">
					<!-- wp:heading {"level":3,"className":"vhs-restore-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15.5px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}}} -->
					<h3 class="wp-block-heading vhs-restore-title has-text-color" style="color:#16324f;font-size:15.5px;font-weight:800;margin-top:0px;margin-bottom:2px">Water, mold &amp; hurricane damage</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"vhs-restore-sub","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"12.5px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
					<p class="vhs-restore-sub has-text-color" style="color:#64748b;font-size:12.5px;margin:0">A South Florida specialty</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Card 4: Missing pieces & holes -->
			<!-- wp:column {"className":"vhs-restore-card"} -->
			<div class="wp-block-column vhs-restore-card">
				<!-- wp:html -->
				<div class="vhs-restore-icon">
					<svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round"><circle cx="10.5" cy="10.5" r="6.5"/><line x1="15.5" y1="15.5" x2="21" y2="21"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:group {"className":"vhs-restore-info","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group vhs-restore-info">
					<!-- wp:heading {"level":3,"className":"vhs-restore-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15.5px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}}} -->
					<h3 class="wp-block-heading vhs-restore-title has-text-color" style="color:#16324f;font-size:15.5px;font-weight:800;margin-top:0px;margin-bottom:2px">Missing pieces &amp; holes</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"vhs-restore-sub","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"12.5px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
					<p class="vhs-restore-sub has-text-color" style="color:#64748b;font-size:12.5px;margin:0">Reconstructed by hand</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- Row 2 (4 Cards) -->
		<!-- wp:columns {"className":"vhs-restore-grid","style":{"spacing":{"blockGap":"20px","margin":{"top":"0px","bottom":"0px"}}}} -->
		<div class="wp-block-columns vhs-restore-grid" style="margin-top:0px">
			<!-- Card 5: Scratches & spots -->
			<!-- wp:column {"className":"vhs-restore-card"} -->
			<div class="wp-block-column vhs-restore-card">
				<!-- wp:html -->
				<div class="vhs-restore-icon">
					<svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linejoin="round"><path d="M12 4l1.8 6.2L20 12l-6.2 1.8L12 20l-1.8-6.2L4 12l6.2-1.8z"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:group {"className":"vhs-restore-info","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group vhs-restore-info">
					<!-- wp:heading {"level":3,"className":"vhs-restore-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15.5px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}}} -->
					<h3 class="wp-block-heading vhs-restore-title has-text-color" style="color:#16324f;font-size:15.5px;font-weight:800;margin-top:0px;margin-bottom:2px">Scratches &amp; spots</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"vhs-restore-sub","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"12.5px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
					<p class="vhs-restore-sub has-text-color" style="color:#64748b;font-size:12.5px;margin:0">Cleaned without blurring</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Card 6: Color-shift correction -->
			<!-- wp:column {"className":"vhs-restore-card"} -->
			<div class="wp-block-column vhs-restore-card">
				<!-- wp:html -->
				<div class="vhs-restore-icon">
					<svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4.5" width="18" height="15" rx="2"/><circle cx="9" cy="10" r="1.7"/><path d="M3 16.5l5-4 4 3 4-3.5 5 4.5"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:group {"className":"vhs-restore-info","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group vhs-restore-info">
					<!-- wp:heading {"level":3,"className":"vhs-restore-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15.5px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}}} -->
					<h3 class="wp-block-heading vhs-restore-title has-text-color" style="color:#16324f;font-size:15.5px;font-weight:800;margin-top:0px;margin-bottom:2px">Color-shift correction</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"vhs-restore-sub","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"12.5px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
					<p class="vhs-restore-sub has-text-color" style="color:#64748b;font-size:12.5px;margin:0">Casts neutralized</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Card 7: B&W colorization -->
			<!-- wp:column {"className":"vhs-restore-card"} -->
			<div class="wp-block-column vhs-restore-card">
				<!-- wp:html -->
				<div class="vhs-restore-icon">
					<svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linejoin="round"><path d="M12 4l1.8 6.2L20 12l-6.2 1.8L12 20l-1.8-6.2L4 12l6.2-1.8z"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:group {"className":"vhs-restore-info","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group vhs-restore-info">
					<!-- wp:heading {"level":3,"className":"vhs-restore-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15.5px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}}} -->
					<h3 class="wp-block-heading vhs-restore-title has-text-color" style="color:#16324f;font-size:15.5px;font-weight:800;margin-top:0px;margin-bottom:2px">B&amp;W colorization</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"vhs-restore-sub","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"12.5px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
					<p class="vhs-restore-sub has-text-color" style="color:#64748b;font-size:12.5px;margin:0">Optional, always your call</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Card 8: Stuck-to-glass prints -->
			<!-- wp:column {"className":"vhs-restore-card"} -->
			<div class="wp-block-column vhs-restore-card">
				<!-- wp:html -->
				<div class="vhs-restore-icon">
					<svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4.5h6.5a2.5 2.5 0 012.5 2.5v13a2 2 0 00-2-2H4z"/><path d="M20 4.5h-6.5A2.5 2.5 0 0011 7v13a2 2 0 012-2h7z"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:group {"className":"vhs-restore-info","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group vhs-restore-info">
					<!-- wp:heading {"level":3,"className":"vhs-restore-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15.5px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}}} -->
					<h3 class="wp-block-heading vhs-restore-title has-text-color" style="color:#16324f;font-size:15.5px;font-weight:800;margin-top:0px;margin-bottom:2px">Stuck-to-glass prints</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"vhs-restore-sub","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"12.5px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
					<p class="vhs-restore-sub has-text-color" style="color:#64748b;font-size:12.5px;margin:0">Carefully recovered</p>
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
