<?php
/**
 * Questions, Answered — Living Memories FAQ Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Questions, Answered — Living Memories FAQ', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-lm-faq-section","style":{"color":{"background":"#f0f4f8"},"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-lm-faq-section has-background" style="background-color:#f0f4f8;padding-top:90px;padding-right:24px;padding-bottom:90px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- 2-Column Columns -->
		<!-- wp:columns {"style":{"spacing":{"blockGap":"56px"}}} -->
		<div class="wp-block-columns">

			<!-- Left Column: Heading, Subtitle & Phone Link -->
			<!-- wp:column {"width":"38%"} -->
			<div class="wp-block-column" style="flex-basis:38%">

				<!-- Section Heading -->
				<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"12px"}}},"fontSize":"max-38"} -->
				<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-size:38px;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:12px">Questions, <span style="color:#39B7EC">Answered</span>.</h2>
				<!-- /wp:heading -->

				<!-- Section Subtitle -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"16px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"28px"}}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:16px;line-height:1.6;margin-bottom:28px">Every Living Memories project starts with a no-pressure discovery call. Ask us anything.</p>
				<!-- /wp:paragraph -->

				<!-- Phone CTA Link -->
				<!-- wp:paragraph {"style":{"color":{"text":"#39B7EC"},"typography":{"fontSize":"16px","fontWeight":"700"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
				<p class="has-text-color" style="color:#39B7EC;font-size:16px;font-weight:700;margin:0"><a href="tel:7542761601" style="color:#16324f;text-decoration:none;display:inline-flex;align-items:center;gap:8px"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg> 754-276-1601</a></p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:column -->

			<!-- Right Column: 7 FAQ Accordion Details Blocks -->
			<!-- wp:column {"width":"62%","className":"vhs-lm-faq-column"} -->
			<div class="wp-block-column vhs-lm-faq-column" style="flex-basis:62%">

				<!-- FAQ Item 1 (Open by default) -->
				<!-- wp:details {"showTemplate":true,"open":true,"className":"vhs-lm-faq-item"} -->
				<details class="wp-block-details vhs-lm-faq-item" open>
					<summary class="vhs-faq-summary">I’m not comfortable on camera. Will this work for me?</summary>
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14.5px","lineHeight":"1.6"}},"spacing":{"margin":{"top":"12px","bottom":"8px"}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:14.5px;line-height:1.6;margin-top:12px;margin-bottom:8px">That’s the most common worry &mdash; and the first thing that disappears. There’s no script and no studio: just a warm conversation in your own living room with an interviewer who’s done this hundreds of times. Most people forget the camera within ten minutes.</p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->

				<!-- FAQ Item 2 -->
				<!-- wp:details {"showTemplate":true,"className":"vhs-lm-faq-item"} -->
				<details class="wp-block-details vhs-lm-faq-item">
					<summary class="vhs-faq-summary">How long does the whole process take?</summary>
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14.5px","lineHeight":"1.6"}},"spacing":{"margin":{"top":"12px","bottom":"8px"}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:14.5px;line-height:1.6;margin-top:12px;margin-bottom:8px">Typically 4 to 6 weeks from our initial in-home interview date to your final delivered documentary package.</p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->

				<!-- FAQ Item 3 -->
				<!-- wp:details {"showTemplate":true,"className":"vhs-lm-faq-item"} -->
				<details class="wp-block-details vhs-lm-faq-item">
					<summary class="vhs-faq-summary">Where is the interview filmed?</summary>
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14.5px","lineHeight":"1.6"}},"spacing":{"margin":{"top":"12px","bottom":"8px"}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:14.5px;line-height:1.6;margin-top:12px;margin-bottom:8px">In the comfort of your own home across South Florida, or at a quiet venue of your choosing.</p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->

				<!-- FAQ Item 4 -->
				<!-- wp:details {"showTemplate":true,"className":"vhs-lm-faq-item"} -->
				<details class="wp-block-details vhs-lm-faq-item">
					<summary class="vhs-faq-summary">What media can we include?</summary>
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14.5px","lineHeight":"1.6"}},"spacing":{"margin":{"top":"12px","bottom":"8px"}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:14.5px;line-height:1.6;margin-top:12px;margin-bottom:8px">VHS tapes, Camcorder tapes, 8mm film reels, physical photo prints, slides, and digital files.</p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->

				<!-- FAQ Item 5 -->
				<!-- wp:details {"showTemplate":true,"className":"vhs-lm-faq-item"} -->
				<details class="wp-block-details vhs-lm-faq-item">
					<summary class="vhs-faq-summary">Can we interview more than one family member?</summary>
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14.5px","lineHeight":"1.6"}},"spacing":{"margin":{"top":"12px","bottom":"8px"}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:14.5px;line-height:1.6;margin-top:12px;margin-bottom:8px">Yes! Our Testament and Legacy packages support 2 or more family subjects.</p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->

				<!-- FAQ Item 6 -->
				<!-- wp:details {"showTemplate":true,"className":"vhs-lm-faq-item"} -->
				<details class="wp-block-details vhs-lm-faq-item">
					<summary class="vhs-faq-summary">What exactly do we receive at the end?</summary>
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14.5px","lineHeight":"1.6"}},"spacing":{"margin":{"top":"12px","bottom":"8px"}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:14.5px;line-height:1.6;margin-top:12px;margin-bottom:8px">The final edited documentary film, full raw interview footage, printed transcript, digitized media archive, and optional hardcover video book.</p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->

				<!-- FAQ Item 7 -->
				<!-- wp:details {"showTemplate":true,"className":"vhs-lm-faq-item"} -->
				<details class="wp-block-details vhs-lm-faq-item">
					<summary class="vhs-faq-summary">What does it cost?</summary>
					<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14.5px","lineHeight":"1.6"}},"spacing":{"margin":{"top":"12px","bottom":"8px"}}} -->
					<p class="has-text-color" style="color:#64748b;font-size:14.5px;line-height:1.6;margin-top:12px;margin-bottom:8px">Our collections range from $1,800 to $5,400 depending on the scope, number of subjects, and features chosen.</p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->

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
