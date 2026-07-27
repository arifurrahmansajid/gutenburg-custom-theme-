<?php
/**
 * South Florida Studio Live Google Map Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'South Florida Studio Live Google Map', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-live-map-section","style":{"color":{"background":"#e8eff6"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-group alignfull vhs-live-map-section has-background" style="background-color:#e8eff6;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;margin-top:0px;margin-bottom:0px">

	<!-- Live Embedded Google Map -->
	<!-- wp:html -->
	<iframe class="vhs-live-map-iframe" src="https://maps.google.com/maps?q=Memory+Converter,+6630+Meade+St,+Hollywood,+FL+33024&amp;t=&amp;z=9&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%" height="380" style="border:0;width:100%;height:380px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Memory Converter Live Google Map Location"></iframe>
	<!-- /wp:html -->

</div>
<!-- /wp:group -->
',
);
