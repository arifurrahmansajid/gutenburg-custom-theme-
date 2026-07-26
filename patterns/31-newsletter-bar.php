<?php
/**
 * Title: Newsletter Subscription Bar
 * Slug: realome/newsletter-bar
 * Categories: vhs-sections, featured, realome, pages
 * Keywords: newsletter, subscription, email, tips, subscribe
 */
?>
<!-- wp:group {"align":"full","className":"vhs-newsletter-bar-section","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"48px","bottom":"48px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-newsletter-bar-section has-background" style="background-color:#ffffff;padding-top:48px;padding-right:24px;padding-bottom:48px;padding-left:24px">
	<!-- wp:group {"className":"vhs-newsletter-bar-inner","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group vhs-newsletter-bar-inner">

		<!-- Left Text Column -->
		<div class="vhs-newsletter-left">
			<!-- wp:heading {"level":3,"style":{"color":{"text":"#16324f"},"typography":{"fontSize":"22px","fontWeight":"800"},"spacing":{"margin":{"top":"0px","bottom":"4px"}}}} -->
			<h3 class="wp-block-heading has-text-color" style="color:#16324f;font-size:22px;font-weight:800;margin-top:0px;margin-bottom:4px">One memory-preserving tip a week.</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px"}}} -->
			<p class="has-text-color" style="color:#64748b;font-size:14px;margin:0">No spam, no selling your address &mdash; unsubscribe any time.</p>
			<!-- /wp:paragraph -->
		</div>

		<!-- Right Form Column -->
		<!-- wp:html -->
		<form class="vhs-newsletter-form" action="#" method="post" onsubmit="return false;">
			<input type="email" class="vhs-newsletter-input" placeholder="you@example.com" required />
			<button type="submit" class="vhs-newsletter-submit">Subscribe</button>
		</form>
		<!-- /wp:html -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
