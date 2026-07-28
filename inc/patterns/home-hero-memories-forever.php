<?php
/**
 * Home Hero — Your Memories, Preserved Forever
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri = get_template_directory_uri();
$hero_img  = esc_url( $theme_uri . '/assets/images/home-hero-family.png' );

return array(
	'title'      => __( 'Home Hero — Your Memories, Preserved Forever', 'realome' ),
	'categories' => array( 'vhs-sections', 'hero', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-home-hero-section","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-home-hero-section">

	<!-- Main two-column area -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"40px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
	<div class="wp-block-group" style="padding-top:80px;padding-bottom:40px;padding-left:24px;padding-right:24px">

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"64px"}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">

			<!-- ===== LEFT: Text & CTAs ===== -->
			<!-- wp:column {"verticalAlignment":"center","width":"48%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%">

				<!-- Eyebrow -->
				<!-- wp:paragraph {"style":{"color":{"text":"#39B7EC"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.16em","textTransform":"uppercase"}},"spacing":{"margin":{"top":"0px","bottom":"20px"}}} -->
				<p class="has-text-color" style="color:#39B7EC;font-size:13px;font-weight:800;letter-spacing:0.16em;text-transform:uppercase;margin-top:0;margin-bottom:20px">PREMIUM MEMORY DIGITIZATION &middot; HOLLYWOOD, FL</p>
				<!-- /wp:paragraph -->

				<!-- H1 -->
				<!-- wp:heading {"level":1,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"800","lineHeight":"1.08"},"spacing":{"margin":{"top":"0px","bottom":"24px"}}}} -->
				<h1 class="wp-block-heading has-text-color" style="color:#ffffff;font-weight:800;line-height:1.08;margin-top:0;margin-bottom:24px;font-size:56px">Your Memories,<br />Preserved <span style="color:#39B7EC">Forever.</span></h1>
				<!-- /wp:heading -->

				<!-- Description -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.78)"},"typography":{"fontSize":"17px","lineHeight":"1.65","fontWeight":"500"}},"spacing":{"margin":{"top":"0px","bottom":"36px"}}} -->
				<p class="has-text-color" style="color:rgba(255,255,255,0.78);font-size:17px;line-height:1.65;font-weight:500;max-width:520px;margin-top:0;margin-bottom:36px">Memory Converter is the white-glove digital media converter that turns your old VHS tapes, film reels, photos, and audio into crisp digital you can watch, share, and keep for good.</p>
				<!-- /wp:paragraph -->

				<!-- CTA Buttons -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"14px","margin":{"top":"0","bottom":"36px"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group" style="margin-top:0;margin-bottom:36px">

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"style":{"color":{"background":"#1e4f8f","text":"#ffffff"},"border":{"radius":"12px"}}} -->
						<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="/get-a-quote" style="border-radius:12px;background-color:#1e4f8f;color:#ffffff;padding:15px 28px;font-weight:700">Get a Free Quote</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"style":{"color":{"text":"#ffffff"},"border":{"color":"rgba(255,255,255,0.30)","radius":"12px","width":"1px"}}} -->
						<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" href="#how-it-works" style="border-radius:12px;border:1px solid rgba(255,255,255,0.30);color:#ffffff;padding:15px 28px;font-weight:700">See How It Works</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

				</div>
				<!-- /wp:group -->

				<!-- Trust columns -->
				<!-- wp:html -->
				<div class="vhs-home-hero-trust-cols">
					<div class="vhs-home-hero-trust-col">
						<p>Handled 100% in-house in<br />Hollywood, FL</p>
					</div>
					<div class="vhs-home-hero-trust-col">
						<p>Insured, tracked<br />shipping</p>
					</div>
					<div class="vhs-home-hero-trust-col">
						<p>Free return of your<br />originals</p>
					</div>
				</div>
				<!-- /wp:html -->

			</div>
			<!-- /wp:column -->

			<!-- ===== RIGHT: Cover image card + floating badge ===== -->
			<!-- wp:column {"verticalAlignment":"center","width":"52%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%">

				<!-- Card wrap: provides relative positioning for the badge -->
				<!-- wp:group {"className":"vhs-home-hero-card-wrap","layout":{"type":"default"}} -->
				<div class="wp-block-group vhs-home-hero-card-wrap">

					<!-- ✅ COVER BLOCK — click anywhere on it in the editor to Replace the photo -->
					<!-- wp:cover {"url":"' . $hero_img . '","dimRatio":0,"minHeight":1,"minHeightUnit":"px","isDark":false,"className":"vhs-home-hero-cover","style":{"border":{"radius":"20px"}}} -->
					<div class="wp-block-cover vhs-home-hero-cover" style="min-height:1px">
						<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#0e1e35"></span>
						<img class="wp-block-cover__image-background" src="' . $hero_img . '" alt="Family watching digitized home movies together" data-object-fit="cover"/>
						<div class="wp-block-cover__inner-container">
						</div>
					</div>
					<!-- /wp:cover -->

					<!-- Floating trust badge — sits bottom-right of the card-wrap -->
					<!-- wp:html -->
					<div class="vhs-home-hero-badge">
						<div class="vhs-home-hero-badge-icon">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
						</div>
						<div class="vhs-home-hero-badge-text">
							<strong>Digitized by hand in 4K/5K</strong>
							<span>Never outsourced overseas</span>
						</div>
					</div>
					<!-- /wp:html -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->

	<!-- Format Pills Strip -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"32px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
	<div class="wp-block-group" style="padding-top:0;padding-bottom:32px;padding-left:24px;padding-right:24px">
		<!-- wp:html -->
		<div class="vhs-home-hero-pills-strip">
			<a href="/vhs-to-digital" class="vhs-home-hero-pill">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="10" rx="2"/><path d="M8 7V5M16 7V5"/></svg>
				VHS &amp; Video
			</a>
			<a href="/film-to-digital" class="vhs-home-hero-pill">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3"/></svg>
				8mm &amp; Super 8 Film
			</a>
			<a href="/photo-scanning" class="vhs-home-hero-pill">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="9" cy="9" r="2"/><path d="M21 15l-5-5L5 21"/></svg>
				Photos &amp; Slides
			</a>
			<a href="/audio-cassette-to-digital" class="vhs-home-hero-pill">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="6" width="20" height="12" rx="2"/><circle cx="8" cy="14" r="2"/><circle cx="16" cy="14" r="2"/></svg>
				Cassettes &amp; Audio
			</a>
			<a href="/minidv-camcorder-to-digital" class="vhs-home-hero-pill">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg>
				MiniDV &amp; Camcorder
			</a>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
	',
);
