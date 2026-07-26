<?php
/**
 * Cassette to CD & Digital Hero Section with Audio Waveform Player Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Cassette to CD & Digital — Audio Hero Section', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-cassette-hero-section","style":{"color":{"background":"#16324f"},"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-cassette-hero-section has-background" style="background-color:#16324f;padding-top:90px;padding-right:24px;padding-bottom:90px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- 2 Columns Layout -->
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"56px"}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">

			<!-- Left Column: Eyebrow, Title, Subtitle, Buttons & Trust Text -->
			<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

				<!-- Eyebrow Category -->
				<!-- wp:paragraph {"style":{"color":{"text":"#39B7EC"},"typography":{"fontSize":"13px","fontWeight":"800","letterSpacing":"0.12em"},"spacing":{"margin":{"top":"0px","bottom":"16px"}}}} -->
				<p class="has-text-color" style="color:#39B7EC;font-size:13px;font-weight:800;letter-spacing:0.12em;margin-top:0px;margin-bottom:16px;text-transform:uppercase">SERVICE &middot; CD, WAV &amp; MP3</p>
				<!-- /wp:paragraph -->

				<!-- Hero Heading -->
				<!-- wp:heading {"level":1,"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"800","lineHeight":"1.1"},"spacing":{"margin":{"top":"0px","bottom":"20px"}}},"fontSize":"max-48"} -->
				<h1 class="wp-block-heading has-text-color" style="color:#ffffff;font-size:48px;font-weight:800;line-height:1.1;margin-top:0px;margin-bottom:20px">Cassette to<br>CD &amp; <span style="color:#39B7EC">Digital</span>.</h1>
				<!-- /wp:heading -->

				<!-- Subtitle Description -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.85)"},"typography":{"fontSize":"16px","lineHeight":"1.65"},"spacing":{"margin":{"bottom":"32px"}}}} -->
				<p class="has-text-color" style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.65;margin-bottom:32px">Recorded voices, mixtapes, interviews, and music you thought were lost &mdash; Memory Converter transfers your cassettes to CD or crystal-clear digital files, restored by hand in Hollywood, FL.</p>
				<!-- /wp:paragraph -->

				<!-- Action Buttons Row -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"bottom":"28px"}}}} -->
				<div class="wp-block-buttons" style="margin-bottom:28px">
					<!-- wp:button {"style":{"color":{"background":"#436da5","text":"#ffffff"},"border":{"radius":"10px"},"typography":{"fontWeight":"700","fontSize":"15px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"28px","right":"28px"}}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" href="#" style="border-radius:10px;background-color:#436da5;color:#ffffff;font-size:15px;font-weight:700;padding:14px 28px;text-decoration:none">Get a Free Quote</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#39B7EC"},"border":{"radius":"10px","color":"#39B7EC","width":"1px"},"typography":{"fontWeight":"700","fontSize":"15px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"28px","right":"28px"}}}} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color" href="#" style="border-radius:10px;border-color:#39B7EC;border-width:1px;color:#39B7EC;font-size:15px;font-weight:700;padding:14px 28px;text-decoration:none">Hear a Sample</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

				<!-- Trust Microtext -->
				<!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.6)"},"typography":{"fontSize":"12.5px","lineHeight":"1.6"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<p class="has-text-color" style="color:rgba(255,255,255,0.6);font-size:12.5px;line-height:1.6;margin:0">Family-owned since 2020 &middot; 5-star on Google &amp; Yelp &middot; Digitized in-house &middot; Never outsourced overseas</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:column -->

			<!-- Right Column: Audio Waveform Player Card -->
			<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

				<!-- Audio Card Box -->
				<!-- wp:html -->
				<div class="vhs-audio-player-card">

					<!-- BEFORE Row -->
					<div class="vhs-audio-row vhs-audio-before-row">
						<div class="vhs-audio-header">
							<span class="vhs-audio-tag vhs-tag-before">BEFORE &mdash; MUFFLED TAPE</span>
							<span class="vhs-audio-time">Side A - 00:42</span>
						</div>
						<!-- Waveform Bars -->
						<div class="vhs-waveform vhs-waveform-before">
							<span style="height:35%"></span><span style="height:55%"></span><span style="height:40%"></span><span style="height:75%"></span><span style="height:50%"></span><span style="height:65%"></span><span style="height:30%"></span><span style="height:85%"></span><span style="height:60%"></span><span style="height:45%"></span><span style="height:70%"></span><span style="height:40%"></span><span style="height:80%"></span><span style="height:50%"></span><span style="height:65%"></span><span style="height:35%"></span><span style="height:90%"></span><span style="height:55%"></span><span style="height:40%"></span><span style="height:75%"></span><span style="height:50%"></span><span style="height:60%"></span><span style="height:30%"></span><span style="height:80%"></span><span style="height:45%"></span>
						</div>
					</div>

					<!-- AFTER Row -->
					<div class="vhs-audio-row vhs-audio-after-row">
						<div class="vhs-audio-header">
							<span class="vhs-audio-tag vhs-tag-after">AFTER &mdash; CLEANED &amp; MASTERED</span>
							<div class="vhs-audio-play-btn">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="#ffffff" stroke="none"><polygon points="5 3 19 12 5 21 5 3"/></svg>
							</div>
						</div>
						<!-- Cyan Waveform Bars -->
						<div class="vhs-waveform vhs-waveform-after">
							<span style="height:45%"></span><span style="height:75%"></span><span style="height:50%"></span><span style="height:95%"></span><span style="height:65%"></span><span style="height:85%"></span><span style="height:40%"></span><span style="height:100%"></span><span style="height:75%"></span><span style="height:60%"></span><span style="height:90%"></span><span style="height:55%"></span><span style="height:95%"></span><span style="height:70%"></span><span style="height:80%"></span><span style="height:45%"></span><span style="height:100%"></span><span style="height:70%"></span><span style="height:55%"></span><span style="height:90%"></span><span style="height:65%"></span><span style="height:80%"></span><span style="height:40%"></span><span style="height:95%"></span><span style="height:60%"></span>
						</div>
					</div>

				</div>
				<!-- /wp:html -->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
