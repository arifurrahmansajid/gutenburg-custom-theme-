<?php
/**
 * Pick Your Camcorder Format Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Pick Your Camcorder Format', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-camcorder-format-section","style":{"color":{"background":"#f4f7fb"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-camcorder-format-section has-background" style="background-color:#f4f7fb;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Section Heading -->
		<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}},"fontSize":"max-38"} -->
		<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-size:38px;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:12px">Pick Your <span style="color:#39B7EC">Camcorder Format</span>.</h2>
		<!-- /wp:heading -->

		<!-- Section Subtitle -->
		<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"40px"}}}} -->
		<p class="has-text-color" style="color:#64748b;font-size:16px;line-height:1.6;margin-top:0px;margin-bottom:40px">Know what you have? Jump straight to the dedicated page &mdash; each one covers pricing, process, and FAQs for that format.</p>
		<!-- /wp:paragraph -->

		<!-- 3 Cards Row -->
		<!-- wp:columns {"className":"vhs-camcorder-format-grid","style":{"spacing":{"blockGap":"20px","margin":{"top":"40px"}}}} -->
		<div class="wp-block-columns vhs-camcorder-format-grid" style="margin-top:40px">

			<!-- Card 1: VHS-C -->
			<!-- wp:column {"className":"vhs-camcorder-format-card"} -->
			<div class="wp-block-column vhs-camcorder-format-card">
				<!-- wp:html -->
				<div class="vhs-camcorder-icon-badge">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/><circle cx="8.5" cy="12" r="2.5"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
				<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">VHS-C to Digital</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"16px"}}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:16px">Compact VHS camcorder tapes &mdash; no adapter, no risk.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
				<p class="vhs-card-link-wrapper"><a href="#" class="vhs-camcorder-card-link">View service &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 2: Hi8 & Digital8 -->
			<!-- wp:column {"className":"vhs-camcorder-format-card"} -->
			<div class="wp-block-column vhs-camcorder-format-card">
				<!-- wp:html -->
				<div class="vhs-camcorder-icon-badge">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/><circle cx="8.5" cy="12" r="2.5"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
				<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">Hi8 &amp; Digital8 to Digital</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"16px"}}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:16px">Video8, Hi8, and Digital8 on serviced 8mm decks.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
				<p class="vhs-card-link-wrapper"><a href="#" class="vhs-camcorder-card-link">View service &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- Card 3: MiniDV -->
			<!-- wp:column {"className":"vhs-camcorder-format-card"} -->
			<div class="wp-block-column vhs-camcorder-format-card">
				<!-- wp:html -->
				<div class="vhs-camcorder-icon-badge">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/><circle cx="8.5" cy="12" r="2.5"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"6px"}}}} -->
				<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:16px;font-weight:800;margin-top:0px;margin-bottom:6px">MiniDV to Digital</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"13.5px"},"spacing":{"margin":{"top":"0px","bottom":"16px"}}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:13.5px;margin-top:0px;margin-bottom:16px">MiniDV, HDV, and DVCAM &mdash; true lossless capture.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
				<p class="vhs-card-link-wrapper"><a href="#" class="vhs-camcorder-card-link">View service &rarr;</a></p>
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
