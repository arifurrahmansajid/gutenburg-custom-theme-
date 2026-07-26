<?php
/**
 * Restoration & Upgrades Section Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri = get_template_directory_uri();

return array(
	'title'      => __( 'Restoration & Upgrades Grid', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-services-catalog-section vhs-restoration-section","style":{"color":{"background":"#f4f7fb"},"spacing":{"padding":{"top":"10px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-services-catalog-section vhs-restoration-section has-background" style="background-color:#f4f7fb;padding-top:10px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<div class="vhs-catalog-category" id="restoration">
			<div class="vhs-category-title-row">
				<h2 class="vhs-category-title">RESTORATION &amp; UPGRADES</h2>
				<div class="vhs-category-line"></div>
			</div>

			<div class="vhs-catalog-grid vhs-restoration-grid">
				<!-- Card 1: De-Molding & Cleaning -->
				<div class="vhs-catalog-card vhs-restoration-card">
					<div class="vhs-card-icon-badge">
						<img src="' . esc_url( $theme_uri ) . '/assets/icons/sparkle.svg" alt="De-molding Icon" width="20" height="20" />
					</div>
					<div class="vhs-restoration-content">
						<h3>De-Molding &amp; Cleaning</h3>
						<p>Florida humidity is no match &mdash; we rescue moldy media</p>
					</div>
				</div>

				<!-- Card 2: Tape Splicing & Repair -->
				<div class="vhs-catalog-card vhs-restoration-card">
					<div class="vhs-card-icon-badge">
						<img src="' . esc_url( $theme_uri ) . '/assets/icons/projector.svg" alt="Tape Splicing Icon" width="20" height="20" />
					</div>
					<div class="vhs-restoration-content">
						<h3>Tape Splicing &amp; Repair</h3>
						<p>Snapped and chewed tapes carefully rebuilt</p>
					</div>
				</div>

				<!-- Card 3: 4K/5K AI Upscaling -->
				<div class="vhs-catalog-card vhs-restoration-card">
					<div class="vhs-card-icon-badge">
						<img src="' . esc_url( $theme_uri ) . '/assets/icons/monitor.svg" alt="AI Upscaling Icon" width="20" height="20" />
					</div>
					<div class="vhs-restoration-content">
						<h3>4K/5K AI Upscaling</h3>
						<p>Optional enhancement for extra clarity</p>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
