<?php
/**
 * Every Small Tape We Digitize Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Every Small Tape We Digitize', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-small-tapes-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-small-tapes-section has-background" style="background-color:#ffffff;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Section Header -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"36px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group" style="margin-bottom:36px">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}},"fontSize":"max-38"} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:12px;font-size:38px">Every Small Tape We <span style="color:#39B7EC">Digitize</span>.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16.5px","lineHeight":"1.6"}}} -->
			<p class="has-text-color" style="color:#64748b;font-size:16.5px;line-height:1.6;margin:0">The tiny dictation formats, captured at the right speed and cleaned up for clarity.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- 3 Cards Grid -->
		<!-- wp:columns {"className":"vhs-small-tapes-grid","style":{"spacing":{"blockGap":"20px","margin":{"top":"0px","bottom":"0px"}}}} -->
		<div class="wp-block-columns vhs-small-tapes-grid" style="margin-top:0px">

			<!-- Card 1: Microcassette -->
			<!-- wp:column {"className":"vhs-small-tape-card"} -->
			<div class="wp-block-column vhs-small-tape-card">
				<!-- wp:html -->
				<div class="vhs-small-tape-icon">
					<svg width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="3" width="6" height="11" rx="3"/><path d="M5.5 11a6.5 6.5 0 0013 0"/><line x1="12" y1="17.5" x2="12" y2="21"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:group {"className":"vhs-small-tape-info","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group vhs-small-tape-info">
					<!-- wp:heading {"level":3,"className":"vhs-small-tape-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15.5px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}}} -->
					<h3 class="wp-block-heading vhs-small-tape-title has-text-color" style="color:#16324f;font-size:15.5px;font-weight:800;margin-top:0px;margin-bottom:2px">Microcassette</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"vhs-small-tape-sub","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"12.5px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
					<p class="vhs-small-tape-sub has-text-color" style="color:#64748b;font-size:12.5px;margin:0">Standard dictation tapes</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Card 2: Minicassette -->
			<!-- wp:column {"className":"vhs-small-tape-card"} -->
			<div class="wp-block-column vhs-small-tape-card">
				<!-- wp:html -->
				<div class="vhs-small-tape-icon">
					<svg width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="3" width="6" height="11" rx="3"/><path d="M5.5 11a6.5 6.5 0 0013 0"/><line x1="12" y1="17.5" x2="12" y2="21"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:group {"className":"vhs-small-tape-info","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group vhs-small-tape-info">
					<!-- wp:heading {"level":3,"className":"vhs-small-tape-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15.5px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}}} -->
					<h3 class="wp-block-heading vhs-small-tape-title has-text-color" style="color:#16324f;font-size:15.5px;font-weight:800;margin-top:0px;margin-bottom:2px">Minicassette</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"vhs-small-tape-sub","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"12.5px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
					<p class="vhs-small-tape-sub has-text-color" style="color:#64748b;font-size:12.5px;margin:0">Philips minicassette</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- Card 3: Standard cassettes -->
			<!-- wp:column {"className":"vhs-small-tape-card"} -->
			<div class="wp-block-column vhs-small-tape-card">
				<!-- wp:html -->
				<div class="vhs-small-tape-icon">
					<svg width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2.5" y="5.5" width="19" height="13" rx="2"/><circle cx="8.5" cy="11.5" r="2"/><circle cx="15.5" cy="11.5" r="2"/><path d="M7 18.5l1.5-3h7l1.5 3"/></svg>
				</div>
				<!-- /wp:html -->
				<!-- wp:group {"className":"vhs-small-tape-info","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group vhs-small-tape-info">
					<!-- wp:heading {"level":3,"className":"vhs-small-tape-title","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"15.5px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"2px"}}}} -->
					<h3 class="wp-block-heading vhs-small-tape-title has-text-color" style="color:#16324f;font-size:15.5px;font-weight:800;margin-top:0px;margin-bottom:2px">Standard cassettes</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"vhs-small-tape-sub","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"12.5px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
					<p class="vhs-small-tape-sub has-text-color" style="color:#64748b;font-size:12.5px;margin:0">Have those? See Cassette to Digital</p>
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
