<?php
/**
 * Single Post Related Service Banner Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Single Post Related Service Callout Banner', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"className":"vhs-related-service-banner","style":{"spacing":{"margin":{"top":"36px","bottom":"36px"}}}} -->
<div class="wp-block-group vhs-related-service-banner" style="margin-top:36px;margin-bottom:36px">
	<!-- wp:html -->
	<div class="vhs-service-banner-inner">
		<div class="vhs-service-banner-icon-box">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round"><rect x="2.5" y="6" width="19" height="12" rx="2"></rect><circle cx="8" cy="12" r="2.3"></circle><circle cx="16" cy="12" r="2.3"></circle><line x1="10.4" y1="12" x2="13.6" y2="12"></line></svg>
		</div>
		<div class="vhs-service-banner-info">
			<div class="vhs-service-banner-label">RELATED SERVICE</div>
			<div class="vhs-service-banner-title">Convert VHS to Digital &mdash; from $18 per tape</div>
			<div class="vhs-service-banner-desc">Every tape is inspected and de-molded in-house before transfer. Cleaning is included, not an upsell.</div>
		</div>
		<div class="vhs-service-banner-btn-wrapper">
			<a href="#" class="vhs-service-banner-btn">See the service</a>
		</div>
	</div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
',
);
