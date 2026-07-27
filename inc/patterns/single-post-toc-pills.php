<?php
/**
 * Single Post TOC Quick Jump Pills Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Single Post TOC Quick Jump Pills', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"className":"vhs-toc-pills-wrapper","style":{"spacing":{"margin":{"top":"0px","bottom":"40px"}}}} -->
<div class="wp-block-group vhs-toc-pills-wrapper" style="margin-top:0px;margin-bottom:40px">
	<!-- wp:paragraph {"className":"vhs-toc-pills"} -->
	<p class="vhs-toc-pills"><a href="#smell" class="vhs-toc-pill">That smell, explained</a> <a href="#check" class="vhs-toc-pill">How to check safely</a> <a href="#types" class="vhs-toc-pill">White vs. black mold</a> <a href="#save" class="vhs-toc-pill">What’s saveable</a> <a href="#next" class="vhs-toc-pill">What to do next</a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
',
);
