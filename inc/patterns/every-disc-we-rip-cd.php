<?php
/**
 * Every Disc We Rip — CD to Digital Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Every Disc We Rip — CD to Digital', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-cd-discs-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-cd-discs-section has-background" style="background-color:#ffffff;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Section Header -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"44px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group" style="margin-bottom:44px">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}},"fontSize":"max-38"} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:12px;font-size:38px">Every Disc We <span style="color:#39B7EC">Rip</span>.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"#475569"},"typography":{"fontSize":"16.5px","lineHeight":"1.6","fontWeight":"500"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
			<p class="has-text-color" style="color:#475569;font-size:16.5px;line-height:1.6;font-weight:500;margin:0">Store-bought, home-burned, audio or data &mdash; copied to clean digital files before the disc degrades.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- 3 Cards Horizontal Grid -->
		<!-- wp:columns {"className":"vhs-cd-discs-grid","style":{"spacing":{"blockGap":"16px","margin":{"top":"0px","bottom":"0px"}}}} -->
		<div class="wp-block-columns vhs-cd-discs-grid" style="margin-top:0px;margin-bottom:0px">

			<!-- Card 1: Audio CDs -->
			<!-- wp:column {"className":"vhs-cd-disc-card"} -->
			<div class="wp-block-column vhs-cd-disc-card">
				<!-- wp:html -->
				<div class="vhs-cd-disc-icon">
					<svg width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="2.6"/><path d="M12 3a9 9 0 019 9" stroke-opacity=".45"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:group {"className":"vhs-cd-disc-info","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group vhs-cd-disc-info">
					<!-- wp:heading {"level":3,"className":"vhs-cd-disc-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15.5px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}}} -->
					<h3 class="wp-block-heading vhs-cd-disc-title has-text-color" style="color:#16324f;font-size:15.5px;font-weight:800;margin-top:0px;margin-bottom:2px">Audio CDs</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"vhs-cd-disc-sub","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"12.5px","fontWeight":"600"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
					<p class="vhs-cd-disc-sub has-text-color" style="color:#64748b;font-size:12.5px;font-weight:600;margin:0">Music &amp; home recordings</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Card 2: Home-burned CDs -->
			<!-- wp:column {"className":"vhs-cd-disc-card"} -->
			<div class="wp-block-column vhs-cd-disc-card">
				<!-- wp:html -->
				<div class="vhs-cd-disc-icon">
					<svg width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="2.6"/><path d="M12 3a9 9 0 019 9" stroke-opacity=".45"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:group {"className":"vhs-cd-disc-info","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group vhs-cd-disc-info">
					<!-- wp:heading {"level":3,"className":"vhs-cd-disc-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15.5px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}}} -->
					<h3 class="wp-block-heading vhs-cd-disc-title has-text-color" style="color:#16324f;font-size:15.5px;font-weight:800;margin-top:0px;margin-bottom:2px">Home-burned CDs</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"vhs-cd-disc-sub","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"12.5px","fontWeight":"600"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
					<p class="vhs-cd-disc-sub has-text-color" style="color:#64748b;font-size:12.5px;font-weight:600;margin:0">CD-R and CD-RW discs</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Card 3: Data CDs -->
			<!-- wp:column {"className":"vhs-cd-disc-card"} -->
			<div class="wp-block-column vhs-cd-disc-card">
				<!-- wp:html -->
				<div class="vhs-cd-disc-icon">
					<svg width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2.5h8l4 4V21.5H6z"/><path d="M14 2.5v4h4"/><line x1="9" y1="12" x2="15" y2="12"/><line x1="9" y1="16" x2="15" y2="16"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:group {"className":"vhs-cd-disc-info","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group vhs-cd-disc-info">
					<!-- wp:heading {"level":3,"className":"vhs-cd-disc-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15.5px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}}} -->
					<h3 class="wp-block-heading vhs-cd-disc-title has-text-color" style="color:#16324f;font-size:15.5px;font-weight:800;margin-top:0px;margin-bottom:2px">Data CDs</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"vhs-cd-disc-sub","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"12.5px","fontWeight":"600"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
					<p class="vhs-cd-disc-sub has-text-color" style="color:#64748b;font-size:12.5px;font-weight:600;margin:0">Documents, photos, files</p>
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
