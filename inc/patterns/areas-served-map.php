<?php
/**
 * Areas Served — One Studio, Twelve Cities Map Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Areas Served — One Studio, Twelve Cities Map', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-cities-map-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-cities-map-section has-background" style="background-color:#ffffff;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- Section Heading -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"36px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group" style="margin-bottom:36px">
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-weight:800;line-height:1.15;margin-top:0;margin-bottom:12px;font-size:40px">One Studio. Twelve <span style="color:#39B7EC">Cities</span>.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.6"}}} -->
			<p class="has-text-color" style="color:#64748b;font-size:16px;line-height:1.6;margin:0">Every pin connects to our service areas &mdash; and every order comes home to the same Hollywood studio.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- CSS Map -->
		<!-- wp:html -->
		<div class="vhs-city-map-wrapper">

			<!-- Grid background + "atlantic ocean" label -->
			<span class="vhs-map-ocean-label">atlantic ocean</span>
			<div class="vhs-map-ocean-divider"></div>

			<!-- West Palm Beach -->
			<a href="/areas-served/" class="vhs-map-pin" style="left:36%;top:14%">
				<span class="vhs-map-pin-label">West Palm Beach</span>
				<span class="vhs-map-pin-dot"></span>
			</a>

			<!-- Boca Raton -->
			<a href="/areas-served/" class="vhs-map-pin" style="left:58%;top:24%">
				<span class="vhs-map-pin-label">Boca Raton</span>
				<span class="vhs-map-pin-dot"></span>
			</a>

			<!-- Pompano Beach -->
			<a href="/areas-served/" class="vhs-map-pin" style="left:46%;top:32%">
				<span class="vhs-map-pin-label">Pompano Beach</span>
				<span class="vhs-map-pin-dot"></span>
			</a>

			<!-- Fort Lauderdale -->
			<a href="/areas-served/" class="vhs-map-pin" style="left:58%;top:38%">
				<span class="vhs-map-pin-label">Fort Lauderdale</span>
				<span class="vhs-map-pin-dot"></span>
			</a>

			<!-- Weston -->
			<a href="/areas-served/" class="vhs-map-pin" style="left:22%;top:40%">
				<span class="vhs-map-pin-label">Weston</span>
				<span class="vhs-map-pin-dot"></span>
			</a>

			<!-- Plantation -->
			<a href="/areas-served/" class="vhs-map-pin" style="left:34%;top:43%">
				<span class="vhs-map-pin-label">Plantation</span>
				<span class="vhs-map-pin-dot"></span>
			</a>

			<!-- Davie -->
			<a href="/areas-served/" class="vhs-map-pin" style="left:29%;top:49%">
				<span class="vhs-map-pin-label">Davie</span>
				<span class="vhs-map-pin-dot"></span>
			</a>

			<!-- HOLLYWOOD — OUR STUDIO (highlighted) -->
			<a href="/areas-served/" class="vhs-map-pin vhs-map-pin--studio" style="left:42%;top:51%">
				<span class="vhs-map-pin-label vhs-map-pin-label--studio">HOLLYWOOD &mdash; OUR STUDIO</span>
				<span class="vhs-map-pin-dot vhs-map-pin-dot--studio"></span>
			</a>

			<!-- Pembroke Pines -->
			<a href="/areas-served/" class="vhs-map-pin" style="left:21%;top:55%">
				<span class="vhs-map-pin-label">Pembroke Pines</span>
				<span class="vhs-map-pin-dot"></span>
			</a>

			<!-- Aventura -->
			<a href="/areas-served/" class="vhs-map-pin" style="left:59%;top:57%">
				<span class="vhs-map-pin-label">Aventura</span>
				<span class="vhs-map-pin-dot"></span>
			</a>

			<!-- Coral Gables -->
			<a href="/areas-served/" class="vhs-map-pin" style="left:33%;top:67%">
				<span class="vhs-map-pin-label">Coral Gables</span>
				<span class="vhs-map-pin-dot"></span>
			</a>

			<!-- Miami -->
			<a href="/areas-served/" class="vhs-map-pin" style="left:45%;top:68%">
				<span class="vhs-map-pin-label">Miami</span>
				<span class="vhs-map-pin-dot"></span>
			</a>

			<!-- Studio Address Card (bottom-left) -->
			<div class="vhs-map-studio-card">
				<strong>Our studio</strong>
				<span>6630 Meade Street, Hollywood, FL 33024</span>
			</div>

		</div>
		<!-- /wp:html -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
	',
);
