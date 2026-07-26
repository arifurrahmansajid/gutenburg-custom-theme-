<?php
/**
 * Big-Box Store Guides 4-Card Grid Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri = get_template_directory_uri();

return array(
	'title'      => __( 'Big-Box Store Guides 4-Card Grid', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-services-catalog-section vhs-big-box-section","style":{"color":{"background":"#f4f7fb"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-services-catalog-section vhs-big-box-section has-background" style="background-color:#f4f7fb;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Heading & Subtitle -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"44px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group" style="margin-bottom:44px">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"16px"}}},"fontSize":"max-36"} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:16px;font-size:38px">Big-Box Store <span style="color:#39B7EC">Guides</span>.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.5"}}} -->
			<p class="has-text-color" style="color:#64748b;font-size:16px;line-height:1.5;max-width:650px;margin:0">Researching a retailer&rsquo;s photo or video service? Start here &mdash; fair credit, honest trade-offs, no store logos.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- 4-Card Grid -->
		<!-- wp:group {"className":"vhs-big-box-grid"} -->
		<div class="wp-block-group vhs-big-box-grid">

			<!-- Card 1: Costco Photo Center Alternative (MOST SEARCHED) -->
			<!-- wp:group {"className":"vhs-catalog-card vhs-big-box-card"} -->
			<div class="wp-block-group vhs-catalog-card vhs-big-box-card">
				<!-- wp:html -->
				<div class="vhs-pill-badge-searched">MOST SEARCHED</div>
				<!-- /wp:html -->
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"}}} -->
				<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0;margin-bottom:10px;line-height:1.3">Costco Photo Center Alternative</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.5;margin-bottom:20px">The Photo Center is gone &mdash; where members send photos &amp; tapes now.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
				<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">Read guide &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Card 2: Walgreens Photo & Video Transfer -->
			<!-- wp:group {"className":"vhs-catalog-card vhs-big-box-card"} -->
			<div class="wp-block-group vhs-catalog-card vhs-big-box-card">
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"}}} -->
				<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0;margin-bottom:10px;line-height:1.3">Walgreens Photo &amp; Video Transfer</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.5;margin-bottom:20px">What the mail-out service covers, and what it doesn&rsquo;t.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
				<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">Read guide &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Card 3: CVS Photo & Video Transfer -->
			<!-- wp:group {"className":"vhs-catalog-card vhs-big-box-card"} -->
			<div class="wp-block-group vhs-catalog-card vhs-big-box-card">
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"}}} -->
				<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0;margin-bottom:10px;line-height:1.3">CVS Photo &amp; Video Transfer</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.5;margin-bottom:20px">Convenient for prints &mdash; the fine print on transfers.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
				<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">Read guide &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Card 4: Best Buy VHS Conversion -->
			<!-- wp:group {"className":"vhs-catalog-card vhs-big-box-card"} -->
			<div class="wp-block-group vhs-catalog-card vhs-big-box-card">
				<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"17px","fontWeight":"800"}}} -->
				<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:17px;font-weight:800;margin-top:0;margin-bottom:10px;line-height:1.3">Best Buy VHS Conversion</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px","lineHeight":"1.5"}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:14px;line-height:1.5;margin-bottom:20px">A tech retailer isn&rsquo;t a memory studio &mdash; current status inside.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"vhs-card-link-wrapper"} -->
				<p class="vhs-card-link-wrapper"><a href="#" class="vhs-card-link">Read guide &rarr;</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
