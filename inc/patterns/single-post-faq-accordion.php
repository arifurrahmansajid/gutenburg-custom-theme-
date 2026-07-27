<?php
/**
 * Single Post Reader FAQ Accordion Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

return array(
	'title'      => __( 'Single Post Reader FAQ Accordion', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"className":"vhs-blog-faq-section","style":{"spacing":{"margin":{"top":"48px","bottom":"48px"}}}} -->
<div class="wp-block-group vhs-blog-faq-section" style="margin-top:48px;margin-bottom:48px">

	<!-- Section Heading -->
	<!-- wp:heading {"level":2,"className":"vhs-blog-faq-heading","style":{"color":{"text":"#16324f"},"typography":{"fontSize":"28px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"28px"}}}} -->
	<h2 class="wp-block-heading vhs-blog-faq-heading has-text-color" style="color:#16324f;font-size:28px;font-weight:800;margin-top:0px;margin-bottom:28px">Questions from readers.</h2>
	<!-- /wp:heading -->

	<!-- FAQ Accordion List -->
	<!-- wp:html -->
	<div class="vhs-blog-faq-list">

		<!-- FAQ Item 1 (Active by default) -->
		<details class="vhs-blog-faq-item" open>
			<summary class="vhs-blog-faq-summary">
				<span class="vhs-blog-faq-question">Can I clean a moldy tape myself with isopropyl alcohol?</span>
				<span class="vhs-blog-faq-icon"></span>
			</summary>
			<div class="vhs-blog-faq-answer">
				<p>Please don’t. Alcohol on the wound pack only reaches the edges, spreads spores inward, and can attack the binder. Proper cleaning runs the full ribbon through a bench rig &mdash; edge cleaning is cosmetic, not a fix.</p>
			</div>
		</details>

		<!-- FAQ Item 2 -->
		<details class="vhs-blog-faq-item">
			<summary class="vhs-blog-faq-summary">
				<span class="vhs-blog-faq-question">Does freezing kill tape mold?</span>
				<span class="vhs-blog-faq-icon"></span>
			</summary>
			<div class="vhs-blog-faq-answer">
				<p>Freezing puts mold spores into dormancy but does not kill them. Once thawed in humid room air, moisture condensation can accelerate fungal regrowth and weaken the magnetic binder layer. Thermal vacuum drying is the studio-grade solution.</p>
			</div>
		</details>

		<!-- FAQ Item 3 -->
		<details class="vhs-blog-faq-item">
			<summary class="vhs-blog-faq-summary">
				<span class="vhs-blog-faq-question">Is mold on one tape a risk to the others in the box?</span>
				<span class="vhs-blog-faq-icon"></span>
			</summary>
			<div class="vhs-blog-faq-answer">
				<p>Yes. Mold spores airborne-spread rapidly inside enclosed storage boxes. If you spot white bloom on one tape, seal it in a zip-top bag immediately and inspect the remaining tapes under bright light.</p>
			</div>
		</details>

	</div>
	<!-- /wp:html -->

</div>
<!-- /wp:group -->
',
);
