<?php
/**
 * Living Memories DVD Callout Bar Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Living Memories DVD Callout Bar', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-living-memories-callout-section","style":{"color":{"background":"#f0f4f8"},"spacing":{"padding":{"top":"36px","bottom":"36px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-living-memories-callout-section has-background" style="background-color:#f0f4f8;padding-top:36px;padding-right:24px;padding-bottom:36px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Callout Container -->
		<!-- wp:group {"className":"vhs-lm-callout-wrapper","style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group vhs-lm-callout-wrapper">

			<!-- Left Side: Icon + Text -->
			<!-- wp:group {"className":"vhs-lm-left-content","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group vhs-lm-left-content">

				<!-- Dark Navy Icon Circle -->
				<!-- wp:html -->
				<div class="vhs-lm-icon-circle">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="11" width="16" height="8" rx="2"/><path d="M4 11L5 6.5A1 1 0 0 1 6 5.5L18 7A1 1 0 0 1 19 8L20 11H4Z"/><line x1="9" y1="10.8" x2="9.8" y2="7.2"/><line x1="14" y1="10.8" x2="14.8" y2="7.6"/></svg>
				</div>
				<!-- /wp:html -->

				<!-- Text Block -->
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group vhs-lm-text-block">
					<!-- Eyebrow -->
					<!-- wp:paragraph {"style":{"color":{"text":"#436da5"},"typography":{"fontSize":"12px","fontWeight":"700","letterSpacing":"0.08em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"4px"}}}} -->
					<p class="has-text-color" style="color:#436da5;font-size:12px;font-weight:700;letter-spacing:0.08em;text-transform:uppercase;margin-top:0px;margin-bottom:4px">MORE THAN A CONVERSION?</p>
					<!-- /wp:paragraph -->

					<!-- Main Paragraph -->
					<!-- wp:paragraph {"style":{"color":{"text":"#334155"},"typography":{"fontSize":"15px","lineHeight":"1.5"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
					<p class="has-text-color" style="color:#334155;font-size:15px;line-height:1.5;margin:0">More than a backup? Turn these recordings into a documentary of your family&rsquo;s story with <strong style="color:#16324f">Living Memories</strong>. From $1,800.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

			<!-- Right Side: Outlined Button CTA -->
			<!-- wp:html -->
			<div class="vhs-lm-btn-wrapper">
				<a href="#" class="vhs-btn-outline vhs-btn-lm">Explore Living Memories</a>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
