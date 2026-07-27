<?php
/**
 * Reel Revival Category Filter Bar Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Reel Revival Category Filter Bar', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-reel-filter-bar-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"22px","bottom":"22px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull vhs-reel-filter-bar-section has-background" style="background-color:#ffffff;padding-top:22px;padding-right:24px;padding-bottom:22px;padding-left:24px;border-bottom:1px solid #e3ebf4">

	<!-- wp:html -->
	<div class="vhs-reel-filter-pills-row">
		<a href="#" class="vhs-filter-pill active">All</a>
		<a href="#" class="vhs-filter-pill">Preservation Tips</a>
		<a href="#" class="vhs-filter-pill">Formats &amp; Technology</a>
		<a href="#" class="vhs-filter-pill">Damage &amp; Rescue</a>
		<a href="#" class="vhs-filter-pill">Family Legacy &amp; Living Memories</a>
		<a href="#" class="vhs-filter-pill">News</a>
	</div>
	<!-- /wp:html -->

</div>
<!-- /wp:group -->
',
);
