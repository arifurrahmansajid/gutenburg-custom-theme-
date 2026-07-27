<?php
/**
 * Reel Revival Blog Hero Banner Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Reel Revival Blog Hero Banner', 'realome' ),
	'categories' => array( 'vhs-sections', 'hero', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-services-breadcrumb-bar","style":{"color":{"background":"#f4f7fb"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-services-breadcrumb-bar has-background" style="background-color:#f4f7fb;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontWeight":"500"}}} -->
		<p style="font-size:14px;font-weight:500;margin:0"><a href="/" style="color:#64748b;text-decoration:none">Home</a> &nbsp;&rsaquo;&nbsp; <span style="color:#0f172a;font-weight:600">Reel Revival</span></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"vhs-reel-revival-hero-box","style":{"color":{"background":"#132b45","text":"#ffffff"},"spacing":{"padding":{"top":"88px","bottom":"88px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-reel-revival-hero-box has-text-color has-background" style="background-color:#132b45;color:#ffffff;padding-top:88px;padding-right:24px;padding-bottom:88px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- wp:paragraph {"className":"vhs-reel-eyebrow","style":{"color":{"text":"#39B7EC"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
		<p class="vhs-reel-eyebrow has-text-color" style="color:#39B7EC;font-size:13px;font-weight:800;letter-spacing:0.08em;text-transform:uppercase;margin-top:0px;margin-bottom:16px">REEL REVIVAL</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"800","lineHeight":"1.15"}}} -->
		<h1 class="wp-block-heading" style="color:#ffffff;font-size:52px;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:16px">Turning Your Memories Into Family <span style="color:#39B7EC">Legacies</span>.</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.80)"},"typography":{"fontSize":"17px","lineHeight":"1.6"}}} -->
		<p class="has-text-color" style="color:rgba(255,255,255,0.80);font-size:17px;line-height:1.6;margin-bottom:36px;max-width:680px">Guides, tips, and stories on preserving your VHS tapes, film, photos, and family history &mdash; from the studio that digitizes them by hand.</p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<form role="search" method="get" class="vhs-reel-search-form" action="/">
			<div class="vhs-reel-search-inner">
				<span class="vhs-reel-search-icon">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
				</span>
				<input type="search" class="vhs-reel-search-input" placeholder="Search articles &mdash; &quot;mold&quot;, &quot;super 8&quot;, &quot;slides&quot;..." name="s" />
				<button type="submit" class="vhs-reel-search-button">Search</button>
			</div>
		</form>
		<!-- /wp:html -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
