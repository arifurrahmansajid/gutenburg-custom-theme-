<?php
/**
 * Hollywood, FL City Studio Section Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri = get_template_directory_uri();

return array(
	'title'      => __( 'Hollywood, FL City Studio Section', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-hollywood-city-studio-section","style":{"color":{"background":"#ffffff","text":"#34495e"},"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-hollywood-city-studio-section has-text-color has-background" style="background-color:#ffffff;color:#34495e;padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">

	<!-- wp:columns {"align":"wide","verticalAlignment":"top","style":{"spacing":{"blockGap":"64px"}},"className":"vhs-hollywood-city-studio-grid"} -->
	<div class="wp-block-columns alignwide vhs-hollywood-city-studio-grid" style="gap:64px">

		<!-- Left Column: Story & Paragraphs -->
		<!-- wp:column {"width":"58%","verticalAlignment":"top"} -->
		<div class="wp-block-column" style="flex-basis:58%">

			<!-- Heading H2 -->
			<!-- wp:heading {"level":2,"style":{"color":{"text":"#16324F"},"typography":{"fontWeight":"800","lineHeight":"1.12","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0px","bottom":"24px"}}},"fontSize":"max-38"} -->
			<h2 class="wp-block-heading has-text-color" style="color:#16324F;font-size:38px;font-weight:800;line-height:1.12;letter-spacing:-0.01em;margin-top:0px;margin-bottom:24px">A Studio for the City We <span style="color:#39B7EC">Live In</span>.</h2>
			<!-- /wp:heading -->

			<!-- Paragraph 1 -->
			<!-- wp:paragraph {"style":{"color":{"text":"#4A5D73"},"typography":{"fontSize":"16px","lineHeight":"1.75","fontWeight":"500"}},"spacing":{"margin":{"top":"0px","bottom":"18px"}}} -->
			<p class="has-text-color" style="color:#4A5D73;font-size:16px;line-height:1.75;font-weight:500;margin-top:0px;margin-bottom:18px">From Emerald Hills to Hollywood Lakes, Beverly Hills to Boulevard Heights, Driftwood to Playa del Sol &mdash; Hollywood families have been recording their lives for seventy years. Weddings at the Hollywood Beach Broadwalk. First birthdays filmed at ArtsPark at Young Circle. Quinceañeras, bar mitzvahs, and Sunday dinners on VHS, Super 8, and slide carousels tucked into closets all over town.</p>
			<!-- /wp:paragraph -->

			<!-- Paragraph 2 -->
			<!-- wp:paragraph {"style":{"color":{"text":"#4A5D73"},"typography":{"fontSize":"16px","lineHeight":"1.75","fontWeight":"500"}},"spacing":{"margin":{"top":"0px","bottom":"18px"}}} -->
			<p class="has-text-color" style="color:#4A5D73;font-size:16px;line-height:1.75;font-weight:500;margin-top:0px;margin-bottom:18px">Our longtime beach families, retirees, and Hollywood’s large Jewish community bring us decades of home movies &mdash; often three generations in a single box. We digitize all of it by hand, a few minutes from wherever you are in the city.</p>
			<!-- /wp:paragraph -->

			<!-- Paragraph 3 (Bold emphasis) -->
			<!-- wp:paragraph {"style":{"color":{"text":"#16324F"},"typography":{"fontSize":"16px","lineHeight":"1.75","fontWeight":"700"}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}} -->
			<p class="has-text-color" style="color:#16324F;font-size:16px;line-height:1.75;font-weight:700;margin:0">And here’s the honest local truth: beachside heat, humidity, and salt air are already at work on your tapes. Every summer they sit in a garage or storage unit, a little more mold, a little more signal loss. Digitizing isn’t a someday project in South Florida &mdash; it’s an urgent one.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- Right Column: Sidebar Info Cards -->
		<!-- wp:column {"width":"42%","verticalAlignment":"top"} -->
		<div class="wp-block-column" style="flex-basis:42%">

			<!-- Card 1: Neighborhoods -->
			<!-- wp:group {"className":"vhs-city-sidebar-card","style":{"color":{"background":"#F3F7FC"},"border":{"color":"#E3EBF4","width":"1px","radius":"16px"},"spacing":{"padding":{"top":"26px","bottom":"26px","left":"26px","right":"26px"},"margin":{"bottom":"16px"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group vhs-city-sidebar-card has-background" style="background-color:#F3F7FC;border:1px solid #E3EBF4;border-radius:16px;padding:26px;margin-bottom:16px">

				<!-- Eyebrow -->
				<!-- wp:paragraph {"style":{"color":{"text":"#436DA5"},"typography":{"fontSize":"12.5px","fontWeight":"800","letterSpacing":"0.12em"}},"spacing":{"margin":{"top":"0px","bottom":"14px"}}} -->
				<p class="has-text-color" style="color:#436DA5;font-size:12.5px;font-weight:800;letter-spacing:0.12em;margin-top:0px;margin-bottom:14px;text-transform:uppercase">NEIGHBORHOODS WE SEE MOST</p>
				<!-- /wp:paragraph -->

				<!-- Pills Bar -->
				<!-- wp:group {"className":"vhs-neighborhood-pills","layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group vhs-neighborhood-pills" style="display:flex;flex-wrap:wrap;gap:8px">
					<!-- wp:paragraph {"className":"vhs-pill-item"} -->
					<p class="vhs-pill-item" style="border:1px solid #D7E2EE;background-color:#FFFFFF;color:#34495E;font-size:13px;font-weight:700;padding:8px 14px;border-radius:99px;margin:0">Emerald Hills</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"vhs-pill-item"} -->
					<p class="vhs-pill-item" style="border:1px solid #D7E2EE;background-color:#FFFFFF;color:#34495E;font-size:13px;font-weight:700;padding:8px 14px;border-radius:99px;margin:0">Hollywood Lakes</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"vhs-pill-item"} -->
					<p class="vhs-pill-item" style="border:1px solid #D7E2EE;background-color:#FFFFFF;color:#34495E;font-size:13px;font-weight:700;padding:8px 14px;border-radius:99px;margin:0">Beverly Hills</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"vhs-pill-item"} -->
					<p class="vhs-pill-item" style="border:1px solid #D7E2EE;background-color:#FFFFFF;color:#34495E;font-size:13px;font-weight:700;padding:8px 14px;border-radius:99px;margin:0">Boulevard Heights</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"vhs-pill-item"} -->
					<p class="vhs-pill-item" style="border:1px solid #D7E2EE;background-color:#FFFFFF;color:#34495E;font-size:13px;font-weight:700;padding:8px 14px;border-radius:99px;margin:0">Driftwood</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"vhs-pill-item"} -->
					<p class="vhs-pill-item" style="border:1px solid #D7E2EE;background-color:#FFFFFF;color:#34495E;font-size:13px;font-weight:700;padding:8px 14px;border-radius:99px;margin:0">Playa del Sol</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

			<!-- Card 2: Landmarks -->
			<!-- wp:group {"className":"vhs-city-sidebar-card","style":{"color":{"background":"#F3F7FC"},"border":{"color":"#E3EBF4","width":"1px","radius":"16px"},"spacing":{"padding":{"top":"26px","bottom":"26px","left":"26px","right":"26px"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group vhs-city-sidebar-card has-background" style="background-color:#F3F7FC;border:1px solid #E3EBF4;border-radius:16px;padding:26px">

				<!-- Eyebrow -->
				<!-- wp:paragraph {"style":{"color":{"text":"#436DA5"},"typography":{"fontSize":"12.5px","fontWeight":"800","letterSpacing":"0.12em"}},"spacing":{"margin":{"top":"0px","bottom":"14px"}}} -->
				<p class="has-text-color" style="color:#436DA5;font-size:12.5px;font-weight:800;letter-spacing:0.12em;margin-top:0px;margin-bottom:14px;text-transform:uppercase">LANDMARKS IN YOUR FOOTAGE</p>
				<!-- /wp:paragraph -->

				<!-- Landmarks List -->
				<!-- wp:html -->
				<div class="vhs-landmarks-list" style="display:flex;flex-direction:column;gap:10px">
					<div style="display:flex;align-items:center;gap:9px">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21.5s-7-6.5-7-11.5a7 7 0 0114 0c0 5-7 11.5-7 11.5z"></path><circle cx="12" cy="9.5" r="2.5"></circle></svg>
						<span style="font-size:14px;font-weight:600;color:#34495E">Hollywood Beach Broadwalk</span>
					</div>
					<div style="display:flex;align-items:center;gap:9px">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21.5s-7-6.5-7-11.5a7 7 0 0114 0c0 5-7 11.5-7 11.5z"></path><circle cx="12" cy="9.5" r="2.5"></circle></svg>
						<span style="font-size:14px;font-weight:600;color:#34495E">ArtsPark at Young Circle</span>
					</div>
					<div style="display:flex;align-items:center;gap:9px">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21.5s-7-6.5-7-11.5a7 7 0 0114 0c0 5-7 11.5-7 11.5z"></path><circle cx="12" cy="9.5" r="2.5"></circle></svg>
						<span style="font-size:14px;font-weight:600;color:#34495E">Downtown Hollywood ArtWalk</span>
					</div>
					<div style="display:flex;align-items:center;gap:9px">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#39B7EC" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21.5s-7-6.5-7-11.5a7 7 0 0114 0c0 5-7 11.5-7 11.5z"></path><circle cx="12" cy="9.5" r="2.5"></circle></svg>
						<span style="font-size:14px;font-weight:600;color:#34495E">Anniversary Park</span>
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
	',
);
