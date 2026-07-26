<?php
/**
 * Why We Publish Comparisons Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri = get_template_directory_uri();

return array(
	'title'      => __( 'Why We Publish Comparisons', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-why-publish-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-why-publish-section has-background" style="background-color:#ffffff;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- wp:columns {"className":"vhs-why-publish-grid","style":{"spacing":{"blockGap":{"top":"40px","left":"60px"}}}} -->
		<div class="wp-block-columns vhs-why-publish-grid">

			<!-- wp:column {"className":"vhs-why-publish-col-left"} -->
			<div class="wp-block-column vhs-why-publish-col-left">
				<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"20px"}}},"fontSize":"max-36"} -->
				<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:20px;font-size:38px">Why We Publish <span style="color:#39B7EC">Comparisons</span>.</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.6"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:16px;line-height:1.6;margin:0">The choice between a studio and a bulk mail-in box is real &mdash; and it depends on your media, your budget, and your risk tolerance. We&rsquo;re one of the options, and we say so on every page. What you&rsquo;ll get here: fair credit where competitors earn it, clear trade-offs where they don&rsquo;t, and no invented numbers &mdash; competitor specifics are labeled for verification.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"vhs-why-publish-col-right"} -->
			<div class="wp-block-column vhs-why-publish-col-right">

				<!-- wp:group {"className":"vhs-why-publish-card","style":{"color":{"background":"#f4f9ff"},"border":{"radius":"16px","width":"1px","color":"#e5effb","style":"solid"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"28px","right":"28px"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group vhs-why-publish-card has-background" style="border-color:#e5effb;border-style:solid;border-width:1px;border-radius:16px;background-color:#f4f9ff;padding:24px 28px">
					<div class="vhs-why-card-inner">
						<!-- wp:html -->
						<div class="vhs-why-card-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
						<!-- /wp:html -->

						<div class="vhs-why-card-body">
							<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"700"}},"className":"vhs-card-heading"} -->
							<h3 class="wp-block-heading has-text-color vhs-card-heading" style="color:#16324f;font-size:16px;font-weight:700;margin:0 0 6px 0">In-house, hands-on</h3>
							<!-- /wp:heading -->

							<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
							<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.5;margin:0">Every comparison reflects how we actually work: one item at a time, in Hollywood, FL.</p>
							<!-- /wp:paragraph -->
						</div>
					</div>
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"vhs-why-publish-card","style":{"color":{"background":"#f4f9ff"},"border":{"radius":"16px","width":"1px","color":"#e5effb","style":"solid"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"28px","right":"28px"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group vhs-why-publish-card has-background" style="border-color:#e5effb;border-style:solid;border-width:1px;border-radius:16px;background-color:#f4f9ff;padding:24px 28px">
					<div class="vhs-why-card-inner">
						<!-- wp:html -->
						<div class="vhs-why-card-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg></div>
						<!-- /wp:html -->

						<div class="vhs-why-card-body">
							<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"16px","fontWeight":"700"}},"className":"vhs-card-heading"} -->
							<h3 class="wp-block-heading has-text-color vhs-card-heading" style="color:#16324f;font-size:16px;font-weight:700;margin:0 0 6px 0">No competitor logos, no smears</h3>
							<!-- /wp:heading -->

							<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
							<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.5;margin:0">Text-only, verified claims, and genuine &ldquo;choose them if&rdquo; guidance.</p>
							<!-- /wp:paragraph -->
						</div>
					</div>
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
