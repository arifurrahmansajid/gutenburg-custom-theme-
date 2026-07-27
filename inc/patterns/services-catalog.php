<?php
/**
 * Services Catalog Category Grid Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Services Catalog Directory Grid', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-services-catalog-section","style":{"color":{"background":"#f4f7fb"},"spacing":{"padding":{"top":"60px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-services-catalog-section has-background" style="background-color:#f4f7fb;padding-top:60px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- ==================== 1. VIDEO TAPES ==================== -->
		<!-- wp:group {"className":"vhs-catalog-category","style":{"spacing":{"margin":{"bottom":"48px"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group vhs-catalog-category" style="margin-bottom:48px">
			<!-- wp:group {"className":"vhs-category-title-row","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group vhs-category-title-row">
				<!-- wp:heading {"level":2,"className":"vhs-category-title","style":{"color":{"text":"#436DA5"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.12em"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<h2 class="wp-block-heading vhs-category-title has-text-color" style="color:#436DA5;font-size:13px;font-weight:800;letter-spacing:0.12em;margin:0">VIDEO TAPES</h2>
				<!-- /wp:heading -->
				<!-- wp:html -->
				<div class="vhs-category-line"></div>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->

			<!-- Row 1 (3 Cards) -->
			<!-- wp:columns {"className":"vhs-catalog-grid","style":{"spacing":{"blockGap":"20px","margin":{"top":"20px","bottom":"20px"}}}} -->
			<div class="wp-block-columns vhs-catalog-grid" style="margin-top:20px;margin-bottom:20px">
				<!-- Card 1 (VHS - Most Popular) -->
				<!-- wp:column {"className":"vhs-catalog-card vhs-card-popular"} -->
				<div class="wp-block-column vhs-catalog-card vhs-card-popular">
					<!-- wp:html -->
					<div class="vhs-card-popular-badge">MOST POPULAR</div>
					<div class="vhs-card-icon-badge">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="6" width="20" height="12" rx="2"/><circle cx="8" cy="12" r="2.5"/><circle cx="16" cy="12" r="2.5"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">Convert VHS to Digital</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:14px">Every tape digitized by hand in crisp 4K &mdash; from $18 per tape.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
					<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">View service &rarr;</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- Card 2 (VHS-C) -->
				<!-- wp:column {"className":"vhs-catalog-card"} -->
				<div class="wp-block-column vhs-catalog-card">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/><circle cx="6" cy="12" r="2"/><circle cx="11" cy="12" r="2"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">VHS-C to Digital</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:14px">The little camcorder tapes &mdash; no adapter required.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
					<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">View service &rarr;</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- Card 3 (Hi8 & Digital8) -->
				<!-- wp:column {"className":"vhs-catalog-card"} -->
				<div class="wp-block-column vhs-catalog-card">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/><circle cx="8" cy="12" r="2"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">Hi8 &amp; Digital8 to Digital</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:14px">8mm video cassettes captured from pristine decks.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
					<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">View service &rarr;</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Row 2 (3 Cards) -->
			<!-- wp:columns {"className":"vhs-catalog-grid","style":{"spacing":{"blockGap":"20px","margin":{"top":"0px","bottom":"20px"}}}} -->
			<div class="wp-block-columns vhs-catalog-grid" style="margin-top:0px;margin-bottom:20px">
				<!-- Card 4 (MiniDV) -->
				<!-- wp:column {"className":"vhs-catalog-card"} -->
				<div class="wp-block-column vhs-catalog-card">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/><line x1="5" y1="12" x2="12" y2="12"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">MiniDV to Digital</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:14px">MiniDV, DVCAM &amp; HDV &mdash; true digital transfers, no quality loss.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
					<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">View service &rarr;</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- Card 5 (Betamax) -->
				<!-- wp:column {"className":"vhs-catalog-card"} -->
				<div class="wp-block-column vhs-catalog-card">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="6" width="20" height="12" rx="2"/><circle cx="8" cy="12" r="2.5"/><circle cx="16" cy="12" r="2.5"/><path d="M8 9.5h8"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">Betamax to Digital</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:14px">Yes &mdash; we still transfer Beta, by hand.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
					<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">View service &rarr;</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- Card 6 (U-matic) -->
				<!-- wp:column {"className":"vhs-catalog-card"} -->
				<div class="wp-block-column vhs-catalog-card">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2"/><circle cx="8" cy="12" r="3"/><circle cx="16" cy="12" r="3"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">U-matic, Betacam SP &amp; DigiBeta</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:14px">Professional &amp; broadcast tapes &mdash; $28 per tape.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
					<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">View service &rarr;</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- Row 3 (Card 7) -->
			<!-- wp:columns {"className":"vhs-catalog-grid","style":{"spacing":{"blockGap":"20px","margin":{"top":"0px","bottom":"0px"}}}} -->
			<div class="wp-block-columns vhs-catalog-grid" style="margin-top:0px">
				<!-- Card 7 (Camcorder Tapes) -->
				<!-- wp:column {"width":"33.33%","className":"vhs-catalog-card"} -->
				<div class="wp-block-column vhs-catalog-card" style="flex-basis:33.33%">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/><circle cx="8.5" cy="12" r="2.5"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">Camcorder Tapes to Digital</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:14px">Every camcorder format, one careful process.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
					<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">View service &rarr;</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->

		<!-- ==================== 2. FILM REELS ==================== -->
		<!-- wp:group {"className":"vhs-catalog-category","style":{"spacing":{"margin":{"bottom":"48px"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group vhs-catalog-category" style="margin-bottom:48px">
			<!-- wp:group {"className":"vhs-category-title-row","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group vhs-category-title-row">
				<!-- wp:heading {"level":2,"className":"vhs-category-title","style":{"color":{"text":"#436DA5"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.12em"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<h2 class="wp-block-heading vhs-category-title has-text-color" style="color:#436DA5;font-size:13px;font-weight:800;letter-spacing:0.12em;margin:0">FILM REELS</h2>
				<!-- /wp:heading -->
				<!-- wp:html -->
				<div class="vhs-category-line"></div>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->

			<!-- wp:columns {"className":"vhs-catalog-grid","style":{"spacing":{"blockGap":"20px","margin":{"top":"20px"}}}} -->
			<div class="wp-block-columns vhs-catalog-grid" style="margin-top:20px">
				<!-- Card 8 (8mm & Super 8) -->
				<!-- wp:column {"width":"33.33%","className":"vhs-catalog-card"} -->
				<div class="wp-block-column vhs-catalog-card" style="flex-basis:33.33%">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/><circle cx="12" cy="6" r="1.5"/><circle cx="12" cy="18" r="1.5"/><circle cx="6" cy="12" r="1.5"/><circle cx="18" cy="12" r="1.5"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">8mm &amp; Super 8 to Digital</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:14px">Frame-by-frame 5K scans that make old reels look new.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
					<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">View service &rarr;</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->

		<!-- ==================== 3. PHOTOS & SLIDES ==================== -->
		<!-- wp:group {"className":"vhs-catalog-category","style":{"spacing":{"margin":{"bottom":"48px"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group vhs-catalog-category" style="margin-bottom:48px">
			<!-- wp:group {"className":"vhs-category-title-row","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group vhs-category-title-row">
				<!-- wp:heading {"level":2,"className":"vhs-category-title","style":{"color":{"text":"#436DA5"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.12em"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<h2 class="wp-block-heading vhs-category-title has-text-color" style="color:#436DA5;font-size:13px;font-weight:800;letter-spacing:0.12em;margin:0">PHOTOS &amp; SLIDES</h2>
				<!-- /wp:heading -->
				<!-- wp:html -->
				<div class="vhs-category-line"></div>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->

			<!-- wp:columns {"className":"vhs-catalog-grid","style":{"spacing":{"blockGap":"20px","margin":{"top":"20px"}}}} -->
			<div class="wp-block-columns vhs-catalog-grid" style="margin-top:20px">
				<!-- Card 9 (Photo Scanning) -->
				<!-- wp:column {"className":"vhs-catalog-card"} -->
				<div class="wp-block-column vhs-catalog-card">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">Photo Scanning</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:14px">Archival-quality scans from $0.72 per photo.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
					<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">View service &rarr;</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- Card 10 (Slide Scanning) -->
				<!-- wp:column {"className":"vhs-catalog-card"} -->
				<div class="wp-block-column vhs-catalog-card">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="2.5"/><rect x="6" y="6" width="12" height="12" rx="1"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">Slide &amp; Negative Scanning</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:14px">35mm slides and negatives &mdash; $0.72 per slide.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
					<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">View service &rarr;</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- Card 11 (Photo Restoration) -->
				<!-- wp:column {"className":"vhs-catalog-card"} -->
				<div class="wp-block-column vhs-catalog-card">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.5 7.5L22 12l-7.5 2.5L12 22l-2.5-7.5L2 12l7.5-2.5z"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">Photo Restoration</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:14px">Torn, faded, water-damaged photos restored by hand.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
					<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">View service &rarr;</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->

		<!-- ==================== 4. AUDIO ==================== -->
		<!-- wp:group {"className":"vhs-catalog-category","style":{"spacing":{"margin":{"bottom":"48px"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group vhs-catalog-category" style="margin-bottom:48px">
			<!-- wp:group {"className":"vhs-category-title-row","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group vhs-category-title-row">
				<!-- wp:heading {"level":2,"className":"vhs-category-title","style":{"color":{"text":"#436DA5"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.12em"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<h2 class="wp-block-heading vhs-category-title has-text-color" style="color:#436DA5;font-size:13px;font-weight:800;letter-spacing:0.12em;margin:0">AUDIO</h2>
				<!-- /wp:heading -->
				<!-- wp:html -->
				<div class="vhs-category-line"></div>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->

			<!-- wp:columns {"className":"vhs-catalog-grid","style":{"spacing":{"blockGap":"20px","margin":{"top":"20px"}}}} -->
			<div class="wp-block-columns vhs-catalog-grid" style="margin-top:20px">
				<!-- Card 12 -->
				<!-- wp:column {"className":"vhs-catalog-card"} -->
				<div class="wp-block-column vhs-catalog-card">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="6" width="20" height="12" rx="2"/><circle cx="8" cy="12" r="2.5"/><circle cx="16" cy="12" r="2.5"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">Cassette to CD &amp; Digital</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:14px">Voices and mixtapes rescued, mastered, and preserved.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
					<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">View service &rarr;</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- Card 13 -->
				<!-- wp:column {"className":"vhs-catalog-card"} -->
				<div class="wp-block-column vhs-catalog-card">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" y1="19" x2="12" y2="23"/><line x1="8" y1="23" x2="16" y2="23"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">Microcassette to Digital</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:14px">Dictation and answering-machine tapes, recovered.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
					<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">View service &rarr;</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- Card 14 -->
				<!-- wp:column {"className":"vhs-catalog-card"} -->
				<div class="wp-block-column vhs-catalog-card">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">Reel-to-Reel to Digital</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:14px">Quarter-inch audio reels transferred with care.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
					<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">View service &rarr;</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->

		<!-- ==================== 5. DVDS & CDS ==================== -->
		<!-- wp:group {"className":"vhs-catalog-category","style":{"spacing":{"margin":{"bottom":"48px"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group vhs-catalog-category" style="margin-bottom:48px">
			<!-- wp:group {"className":"vhs-category-title-row","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group vhs-category-title-row">
				<!-- wp:heading {"level":2,"className":"vhs-category-title","style":{"color":{"text":"#436DA5"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.12em"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<h2 class="wp-block-heading vhs-category-title has-text-color" style="color:#436DA5;font-size:13px;font-weight:800;letter-spacing:0.12em;margin:0">DVDS &amp; CDS</h2>
				<!-- /wp:heading -->
				<!-- wp:html -->
				<div class="vhs-category-line"></div>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->

			<!-- wp:columns {"className":"vhs-catalog-grid","style":{"spacing":{"blockGap":"20px","margin":{"top":"20px"}}}} -->
			<div class="wp-block-columns vhs-catalog-grid" style="margin-top:20px">
				<!-- Card 15 -->
				<!-- wp:column {"className":"vhs-catalog-card"} -->
				<div class="wp-block-column vhs-catalog-card">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">DVD to Digital</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:14px">Home-recorded &amp; mini camcorder DVDs &mdash; $10 per disc ($18 mini DVD).</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
					<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">View service &rarr;</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- Card 16 -->
				<!-- wp:column {"className":"vhs-catalog-card"} -->
				<div class="wp-block-column vhs-catalog-card">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">CD to Digital</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:14px">Audio &amp; home-burned CDs to labeled files &mdash; $10 per disc.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
					<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">View service &rarr;</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->

		<!-- ==================== 6. PREMIUM SERVICES ==================== -->
		<!-- wp:group {"className":"vhs-catalog-category","style":{"spacing":{"margin":{"bottom":"48px"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group vhs-catalog-category" style="margin-bottom:48px">
			<!-- wp:group {"className":"vhs-category-title-row","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group vhs-category-title-row">
				<!-- wp:heading {"level":2,"className":"vhs-category-title","style":{"color":{"text":"#436DA5"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.12em"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<h2 class="wp-block-heading vhs-category-title has-text-color" style="color:#436DA5;font-size:13px;font-weight:800;letter-spacing:0.12em;margin:0">PREMIUM SERVICES</h2>
				<!-- /wp:heading -->
				<!-- wp:html -->
				<div class="vhs-category-line"></div>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->

			<!-- wp:columns {"className":"vhs-catalog-grid","style":{"spacing":{"blockGap":"20px","margin":{"top":"20px"}}}} -->
			<div class="wp-block-columns vhs-catalog-grid" style="margin-top:20px">
				<!-- Card 17: Living Memories (Dark Navy 2-Col) -->
				<!-- wp:column {"width":"66.66%","className":"vhs-catalog-card vhs-card-featured-dark"} -->
				<div class="wp-block-column vhs-catalog-card vhs-card-featured-dark" style="flex-basis:66.66%">
					<!-- wp:html -->
					<div class="vhs-featured-exclusive-badge">&bull; EXCLUSIVE TO MEMORY CONVERTER &mdash; NO ONE ELSE OFFERS THIS</div>
					<div class="vhs-featured-card-body">
						<div class="vhs-card-icon-badge vhs-badge-dark">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="10" width="18" height="9.5" rx="2"/><path d="M3.5 10l1.6-4.6 16 1.8-.9 2.8"/><line x1="9.2" y1="5.8" x2="8.2" y2="9.3"/><line x1="14.4" y1="6.4" x2="13.4" y2="9.7"/></svg>
						</div>
						<div class="vhs-featured-card-text">
							<h3 style="color:#ffffff;font-size:18px;font-weight:800;margin-top:0;margin-bottom:6px">Living Memories <span class="vhs-price-tag" style="color:rgba(255,255,255,0.6);font-size:15px;font-weight:600">&middot; from $1,800</span></h3>
							<p style="color:rgba(255,255,255,0.8);font-size:14px;line-height:1.55;margin-top:0;margin-bottom:12px">An in-home documentary of your life, with your digitized memories woven in.</p>
							<a href="#" class="vhs-card-link vhs-link-cyan" style="color:#39B7EC;font-weight:800;font-size:14px;text-decoration:none">Explore Living Memories &rarr;</a>
						</div>
					</div>
					<!-- /wp:html -->
				</div>
				<!-- /wp:column -->

				<!-- Card 18: White-Glove Archiving -->
				<!-- wp:column {"width":"33.33%","className":"vhs-catalog-card"} -->
				<div class="wp-block-column vhs-catalog-card" style="flex-basis:33.33%">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">White-Glove Archiving</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"14px"}}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:14px">Your whole family archive &mdash; collected, digitized, organized end to end.</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
					<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">View service &rarr;</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->

		<!-- ==================== 7. RESTORATION & UPGRADES ==================== -->
		<!-- wp:group {"className":"vhs-catalog-category","style":{"spacing":{"margin":{"bottom":"0px"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group vhs-catalog-category" style="margin-bottom:0px">
			<!-- wp:group {"className":"vhs-category-title-row","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group vhs-category-title-row">
				<!-- wp:heading {"level":2,"className":"vhs-category-title","style":{"color":{"text":"#436DA5"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.12em"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<h2 class="wp-block-heading vhs-category-title has-text-color" style="color:#436DA5;font-size:13px;font-weight:800;letter-spacing:0.12em;margin:0">RESTORATION &amp; UPGRADES</h2>
				<!-- /wp:heading -->
				<!-- wp:html -->
				<div class="vhs-category-line"></div>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->

			<!-- wp:columns {"className":"vhs-catalog-grid vhs-restoration-grid","style":{"spacing":{"blockGap":"20px","margin":{"top":"20px"}}}} -->
			<div class="wp-block-columns vhs-catalog-grid vhs-restoration-grid" style="margin-top:20px">
				<!-- Card 19: De-Molding & Cleaning -->
				<!-- wp:column {"className":"vhs-catalog-card vhs-restoration-card"} -->
				<div class="wp-block-column vhs-catalog-card vhs-restoration-card">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge vhs-restoration-badge">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.5 7.5L22 12l-7.5 2.5L12 22l-2.5-7.5L2 12l7.5-2.5z"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:group {"className":"vhs-restoration-info","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group vhs-restoration-info">
						<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"3px"}}}} -->
						<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:15px;font-weight:800;margin-top:0px;margin-bottom:3px">De-Molding &amp; Cleaning</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
						<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin:0">Florida humidity is no match &mdash; we rescue moldy media</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- Card 20: Tape Splicing & Repair -->
				<!-- wp:column {"className":"vhs-catalog-card vhs-restoration-card"} -->
				<div class="wp-block-column vhs-catalog-card vhs-restoration-card">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge vhs-restoration-badge">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/><circle cx="12" cy="6" r="1.5"/><circle cx="12" cy="18" r="1.5"/><circle cx="6" cy="12" r="1.5"/><circle cx="18" cy="12" r="1.5"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:group {"className":"vhs-restoration-info","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group vhs-restoration-info">
						<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"3px"}}}} -->
						<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:15px;font-weight:800;margin-top:0px;margin-bottom:3px">Tape Splicing &amp; Repair</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
						<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin:0">Snapped and chewed tapes carefully rebuilt</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- Card 21: 4K/5K AI Upscaling -->
				<!-- wp:column {"className":"vhs-catalog-card vhs-restoration-card"} -->
				<div class="wp-block-column vhs-catalog-card vhs-restoration-card">
					<!-- wp:html -->
					<div class="vhs-card-icon-badge vhs-restoration-badge">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
					</div>
					<!-- /wp:html -->
					<!-- wp:group {"className":"vhs-restoration-info","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group vhs-restoration-info">
						<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"3px"}}}} -->
						<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:15px;font-weight:800;margin-top:0px;margin-bottom:3px">4K/5K AI Upscaling</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
						<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin:0">Optional enhancement for extra clarity</p>
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
</div>
<!-- /wp:group -->
',
);
