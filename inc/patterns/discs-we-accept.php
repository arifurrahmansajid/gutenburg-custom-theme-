<?php
/**
 * Discs We Accept — DVD & Disc Formats Grid Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Discs We Accept — DVD & Disc Formats Grid', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-discs-accept-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-discs-accept-section has-background" style="background-color:#ffffff;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Section Heading -->
		<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}},"fontSize":"max-38"} -->
		<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-size:38px;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:12px">Discs We <span style="color:#39B7EC">Accept</span>.</h2>
		<!-- /wp:heading -->

		<!-- Subtitle -->
		<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"36px"}}}} -->
		<p class="has-text-color" style="color:#64748b;font-size:16px;line-height:1.6;margin-bottom:36px">If your family recorded it, we&rsquo;ll convert it.</p>
		<!-- /wp:paragraph -->

		<!-- 5-Card Formats Grid -->
		<!-- wp:html -->
		<div class="vhs-discs-grid">

			<!-- Card 1: Standard DVDs -->
			<div class="vhs-disc-card">
				<div class="vhs-disc-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/><circle cx="12" cy="12" r="1.5"/></svg>
				</div>
				<div class="vhs-disc-info">
					<h3 class="vhs-disc-title">Standard DVDs</h3>
					<p class="vhs-disc-sub">Home-recorded, any brand</p>
				</div>
			</div>

			<!-- Card 2: Mini DVDs -->
			<div class="vhs-disc-card">
				<div class="vhs-disc-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="7"/><circle cx="12" cy="12" r="2.5"/></svg>
				</div>
				<div class="vhs-disc-info">
					<h3 class="vhs-disc-title">Mini DVDs</h3>
					<p class="vhs-disc-sub">8cm camcorder discs</p>
				</div>
			</div>

			<!-- Card 3: CDs -->
			<div class="vhs-disc-card">
				<div class="vhs-disc-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 3v6M12 15v6"/></svg>
				</div>
				<div class="vhs-disc-info">
					<h3 class="vhs-disc-title">CDs</h3>
					<p class="vhs-disc-sub">Audio &amp; home-burned CDs</p>
				</div>
			</div>

			<!-- Card 4: DVD-R / DVD-RW -->
			<div class="vhs-disc-card">
				<div class="vhs-disc-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3"/></svg>
				</div>
				<div class="vhs-disc-info">
					<h3 class="vhs-disc-title">DVD-R / DVD-RW</h3>
					<p class="vhs-disc-sub">Burned home discs</p>
				</div>
			</div>

			<!-- Card 5: Finalized home discs -->
			<div class="vhs-disc-card">
				<div class="vhs-disc-icon">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><polyline points="9 12 11 14 15 10"/></svg>
				</div>
				<div class="vhs-disc-info">
					<h3 class="vhs-disc-title">Finalized home discs</h3>
					<p class="vhs-disc-sub">From set-top recorders</p>
				</div>
			</div>

		</div>
		<!-- /wp:html -->

		<!-- Bottom Copyright Warning Banner -->
		<!-- wp:html -->
		<div class="vhs-disc-notice-banner">
			<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
			<span>Home movies and personal recordings only &mdash; we don&rsquo;t duplicate copyrighted commercial discs.</span>
		</div>
		<!-- /wp:html -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
