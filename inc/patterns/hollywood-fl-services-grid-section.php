<?php
/**
 * Hollywood, FL Services Grid Section Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri = get_template_directory_uri();

return array(
	'title'      => __( 'Hollywood, FL Services Grid Section', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-hollywood-services-section","style":{"color":{"background":"#F3F7FC","text":"#34495e"},"spacing":{"padding":{"top":"88px","bottom":"88px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-hollywood-services-section has-text-color has-background" style="background-color:#F3F7FC;color:#34495e;padding-top:88px;padding-right:24px;padding-bottom:88px;padding-left:24px">

	<!-- Section Heading -->
	<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324F"},"typography":{"fontWeight":"800","lineHeight":"1.12","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0px","bottom":"40px"}}},"fontSize":"max-40"} -->
	<h2 class="wp-block-heading has-text-color" style="color:#16324F;font-size:40px;font-weight:800;line-height:1.12;letter-spacing:-0.01em;margin-top:0px;margin-bottom:40px">Services for Hollywood <span style="color:#39B7EC">Residents</span>.</h2>
	<!-- /wp:heading -->

	<!-- Services Grid -->
	<!-- wp:html -->
	<div class="vhs-hollywood-services-grid">
		
		<!-- Service 1: VHS to Digital -->
		<a href="/vhs-to-digital/" class="vhs-service-card-item">
			<div class="vhs-service-card-icon">
				<svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round"><rect x="2.5" y="6" width="19" height="12" rx="2"></rect><circle cx="8" cy="12" r="2.3"></circle><circle cx="16" cy="12" r="2.3"></circle><line x1="10.4" y1="12" x2="13.6" y2="12"></line></svg>
			</div>
			<span class="vhs-service-card-title">VHS to Digital</span>
		</a>

		<!-- Service 2: 8mm & Super 8 Film -->
		<a href="/film-to-digital/" class="vhs-service-card-item">
			<div class="vhs-service-card-icon">
				<svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8"><circle cx="12" cy="12" r="9"></circle><circle cx="12" cy="12" r="1.5"></circle><circle cx="12" cy="7" r="1.6"></circle><circle cx="12" cy="17" r="1.6"></circle><circle cx="7" cy="12" r="1.6"></circle><circle cx="17" cy="12" r="1.6"></circle></svg>
			</div>
			<span class="vhs-service-card-title">8mm &amp; Super 8 Film</span>
		</a>

		<!-- Service 3: Cassette to CD & Digital -->
		<a href="/cassette-to-digital/" class="vhs-service-card-item">
			<div class="vhs-service-card-icon">
				<svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2.5" y="5.5" width="19" height="13" rx="2"></rect><circle cx="8.5" cy="11.5" r="2"></circle><circle cx="15.5" cy="11.5" r="2"></circle><path d="M7 18.5l1.5-3h7l1.5 3"></path></svg>
			</div>
			<span class="vhs-service-card-title">Cassette to CD &amp; Digital</span>
		</a>

		<!-- Service 4: Photos & Slides -->
		<a href="/photo-scanning-and-restoration/" class="vhs-service-card-item">
			<div class="vhs-service-card-icon">
				<svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4.5" width="18" height="15" rx="2"></rect><circle cx="9" cy="10" r="1.7"></circle><path d="M3 16.5l5-4 4 3 4-3.5 5 4.5"></path></svg>
			</div>
			<span class="vhs-service-card-title">Photos &amp; Slides</span>
		</a>

		<!-- Service 5: Photo Restoration -->
		<a href="/photo-restoration/" class="vhs-service-card-item">
			<div class="vhs-service-card-icon">
				<svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linejoin="round"><path d="M12 4l1.8 6.2L20 12l-6.2 1.8L12 20l-1.8-6.2L4 12l6.2-1.8z"></path></svg>
			</div>
			<span class="vhs-service-card-title">Photo Restoration</span>
		</a>

		<!-- Service 6: DVD to Digital -->
		<a href="/dvd-to-digital/" class="vhs-service-card-item">
			<div class="vhs-service-card-icon">
				<svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8"><circle cx="12" cy="12" r="9"></circle><circle cx="12" cy="12" r="2.6"></circle><path d="M12 3a9 9 0 019 9" stroke-opacity=".45"></path></svg>
			</div>
			<span class="vhs-service-card-title">DVD to Digital</span>
		</a>

		<!-- Service 7: Living Memories -->
		<a href="/living-memories/" class="vhs-service-card-item">
			<div class="vhs-service-card-icon">
				<svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="10" width="18" height="9.5" rx="2"></rect><path d="M3.5 10l1.6-4.6 16 1.8-.9 2.8"></path><line x1="9.2" y1="5.8" x2="8.2" y2="9.3"></line><line x1="14.4" y1="6.4" x2="13.4" y2="9.7"></line></svg>
			</div>
			<span class="vhs-service-card-title">Living Memories</span>
		</a>

	</div>
	<!-- /wp:html -->

</div>
<!-- /wp:group -->
	',
);
