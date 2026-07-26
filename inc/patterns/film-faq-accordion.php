<?php
/**
 * Questions, Answered — Film FAQ Accordion Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Questions, Answered — FAQ Accordion', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-faq-section","style":{"color":{"background":"#f0f4f8"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-faq-section has-background" style="background-color:#f0f4f8;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1350px","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- 2-Column Layout -->
		<!-- wp:columns {"style":{"spacing":{"blockGap":"56px"}}} -->
		<div class="wp-block-columns">

			<!-- Left Column: Title, Subtitle, Phone Link -->
			<!-- wp:column {"width":"36%"} -->
			<div class="wp-block-column" style="flex-basis:36%">

				<!-- Section Heading -->
				<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324f"},"typography":{"fontWeight":"800","lineHeight":"1.15"},"spacing":{"margin":{"top":"0px","bottom":"16px"}}},"fontSize":"max-38"} -->
				<h2 class="wp-block-heading has-text-color" style="color:#16324f;font-size:38px;font-weight:800;line-height:1.15;margin-top:0px;margin-bottom:16px">Questions, <span style="color:#39B7EC">Answered</span>.</h2>
				<!-- /wp:heading -->

				<!-- Section Subtitle -->
				<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"15px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"28px"}}}} -->
				<p class="has-text-color" style="color:#64748b;font-size:15px;line-height:1.6;margin-bottom:28px">Anything else? Call us &mdash; a real person in our Hollywood studio picks up.</p>
				<!-- /wp:paragraph -->

				<!-- Phone Callout Link -->
				<!-- wp:html -->
				<div class="vhs-faq-phone-callout">
					<a href="tel:754-276-1601" class="vhs-faq-phone-link">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
						<span>754-276-1601</span>
					</a>
				</div>
				<!-- /wp:html -->

			</div>
			<!-- /wp:column -->

			<!-- Right Column: Accordion Items -->
			<!-- wp:column {"width":"64%"} -->
			<div class="wp-block-column" style="flex-basis:64%">
				<!-- wp:html -->
				<div class="vhs-faq-accordion-list">

					<!-- FAQ Item 1 (Expanded by default) -->
					<details class="vhs-faq-item" open>
						<summary class="vhs-faq-question">
							<span>Does my film have sound, and will you capture it?</span>
							<span class="vhs-faq-toggle-icon"></span>
						</summary>
						<div class="vhs-faq-answer">
							<p>Some Super 8 film carries a magnetic or optical soundtrack &mdash; we capture it whenever it&rsquo;s present and sync it to the scan. Regular 8mm is silent; many families pair it with a Living Memories narration instead.</p>
						</div>
					</details>

					<!-- FAQ Item 2 -->
					<details class="vhs-faq-item">
						<summary class="vhs-faq-question">
							<span>Per-reel vs. per-foot pricing &mdash; how does it work?</span>
							<span class="vhs-faq-toggle-icon"></span>
						</summary>
						<div class="vhs-faq-answer">
							<p>We charge simple flat per-reel rates based on reel size (3&quot;, 5&quot;, or 7&quot;+), rather than complex per-foot calculations. Cleaning, splicing, and digital output are included with no surprise fees.</p>
						</div>
					</details>

					<!-- FAQ Item 3 -->
					<details class="vhs-faq-item">
						<summary class="vhs-faq-question">
							<span>My film is brittle, moldy, or snapped. Can you scan it?</span>
							<span class="vhs-faq-toggle-icon"></span>
						</summary>
						<div class="vhs-faq-answer">
							<p>Yes. Our technicians repair broken splices, clean moldy film, and condition brittle reels by hand before scanning on gentle sprocketless capture equipment.</p>
						</div>
					</details>

					<!-- FAQ Item 4 -->
					<details class="vhs-faq-item">
						<summary class="vhs-faq-question">
							<span>What resolution do you scan at?</span>
							<span class="vhs-faq-toggle-icon"></span>
						</summary>
						<div class="vhs-faq-answer">
							<p>We scan every frame natively up to 5K resolution, capturing all fine optical details present in 8mm and Super 8 film stocks.</p>
						</div>
					</details>

					<!-- FAQ Item 5 -->
					<details class="vhs-faq-item">
						<summary class="vhs-faq-question">
							<span>How long does it take?</span>
							<span class="vhs-faq-toggle-icon"></span>
						</summary>
						<div class="vhs-faq-answer">
							<p>Standard turnaround is 1 to 2 weeks. Rush options are available for urgent requests.</p>
						</div>
					</details>

					<!-- FAQ Item 6 -->
					<details class="vhs-faq-item">
						<summary class="vhs-faq-question">
							<span>Do I get my reels back?</span>
							<span class="vhs-faq-toggle-icon"></span>
						</summary>
						<div class="vhs-faq-answer">
							<p>Always. Your original film reels are carefully inspected, packaged, and returned safely alongside your digital files.</p>
						</div>
					</details>

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
