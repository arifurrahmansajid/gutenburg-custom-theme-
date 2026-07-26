<?php
/**
 * Every Reel, Welcome — Film Formats Section Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Every Reel, Welcome — Film Formats Grid', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-reels-welcome-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-reels-welcome-section has-background" style="background-color:#ffffff;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Section Heading -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"36px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group" style="margin-bottom:36px">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:12px;font-size:38px">Every Reel, <span style="color:#39B7EC">Welcome</span>.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.6"}}} -->
			<p class="has-text-color" style="color:#64748b;font-size:16px;line-height:1.6;margin:0">Silent or sound, three-inch to seven-inch-plus &mdash; we scan them all.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- 3-Column Grid -->
		<!-- wp:html -->
		<div class="vhs-reels-welcome-grid">

			<!-- Card 1: Regular 8mm -->
			<div class="vhs-reel-card">
				<div class="vhs-reel-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/><path d="M12 3v6M12 15v6M3 12h6M15 12h6"/></svg>
				</div>
				<div class="vhs-reel-info">
					<h3 class="vhs-reel-title">Regular 8mm</h3>
					<p class="vhs-reel-sub">The classic home-movie format</p>
				</div>
			</div>

			<!-- Card 2: Super 8 -->
			<div class="vhs-reel-card">
				<div class="vhs-reel-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/><path d="M12 3v6M12 15v6M3 12h6M15 12h6"/></svg>
				</div>
				<div class="vhs-reel-info">
					<h3 class="vhs-reel-title">Super 8</h3>
					<p class="vhs-reel-sub">Sharper frames, often with sound</p>
				</div>
			</div>

			<!-- Card 3: Sound film -->
			<div class="vhs-reel-card">
				<div class="vhs-reel-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="2" x2="12" y2="22"/><line x1="17" y1="5" x2="17" y2="19"/><line x1="7" y1="5" x2="7" y2="19"/><line x1="22" y1="9" x2="22" y2="15"/><line x1="2" y1="9" x2="2" y2="15"/></svg>
				</div>
				<div class="vhs-reel-info">
					<h3 class="vhs-reel-title">Sound film</h3>
					<p class="vhs-reel-sub">Audio captured where present</p>
				</div>
			</div>

			<!-- Card 4: 3" reels -->
			<div class="vhs-reel-card">
				<div class="vhs-reel-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/><path d="M12 3v6M12 15v6M3 12h6M15 12h6"/></svg>
				</div>
				<div class="vhs-reel-info">
					<h3 class="vhs-reel-title">3&quot; reels</h3>
					<p class="vhs-reel-sub">~50 ft &middot; about 4 minutes</p>
				</div>
			</div>

			<!-- Card 5: 5" reels -->
			<div class="vhs-reel-card">
				<div class="vhs-reel-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/><path d="M12 3v6M12 15v6M3 12h6M15 12h6"/></svg>
				</div>
				<div class="vhs-reel-info">
					<h3 class="vhs-reel-title">5&quot; reels</h3>
					<p class="vhs-reel-sub">~200 ft &middot; about 16 minutes</p>
				</div>
			</div>

			<!-- Card 6: 7"+ reels -->
			<div class="vhs-reel-card">
				<div class="vhs-reel-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/><path d="M12 3v6M12 15v6M3 12h6M15 12h6"/></svg>
				</div>
				<div class="vhs-reel-info">
					<h3 class="vhs-reel-title">7&quot;+ reels</h3>
					<p class="vhs-reel-sub">~400 ft and up</p>
				</div>
			</div>

			<!-- Card 7: Unlabeled reels -->
			<div class="vhs-reel-card">
				<div class="vhs-reel-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
				</div>
				<div class="vhs-reel-info">
					<h3 class="vhs-reel-title">Unlabeled reels</h3>
					<p class="vhs-reel-sub">We&rsquo;ll identify the format</p>
				</div>
			</div>

		</div>
		<!-- /wp:html -->

		<!-- Bottom Callout Note -->
		<!-- wp:html -->
		<div class="vhs-reel-bottom-callout">
			<span class="vhs-reel-callout-icon">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
			</span>
			<span class="vhs-reel-callout-text">Reels missing labels? We&rsquo;ll identify the format &mdash; and splice small reels onto larger ones on request.</span>
		</div>
		<!-- /wp:html -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
