<?php
/**
 * Find Your Format Pill Navigation Bar Pattern
 *
 * @package Realome
 * @since Realome 1.0
 */

$theme_uri = get_template_directory_uri();

return array(
	'title'      => __( 'Find Your Format Pill Navigation Bar', 'realome' ),
	'categories' => array( 'vhs-sections', 'featured', 'realome', 'pages' ),
	'content'    => '
<!-- wp:group {"align":"full","className":"vhs-pills-bar-container","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"24px","right":"24px"}},"border":{"bottom":{"color":"#e2e8f0","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1350px"}} -->
<div class="wp-block-group alignfull vhs-pills-bar-container has-background" style="border-bottom-color:#e2e8f0;border-bottom-width:1px;background-color:#ffffff;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px">
	<!-- wp:group {"className":"vhs-pills-row","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"left"}} -->
	<div class="wp-block-group vhs-pills-row">
		<!-- wp:paragraph {"className":"vhs-pills-label","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"12px","fontWeight":"800","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
		<p class="vhs-pills-label has-text-color" style="color:#64748b;font-size:12px;font-weight:800;letter-spacing:0.12em;text-transform:uppercase">Find Your Format</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"className":"vhs-pills-group","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group vhs-pills-group">
			<!-- wp:group {"className":"vhs-format-pill","style":{"color":{"background":"#f0f7fd"},"border":{"radius":"9999px","width":"1px","color":"#dce7f5","style":"solid"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","blockGap":"6px"}} -->
			<div class="wp-block-group vhs-format-pill has-background" style="border-color:#dce7f5;border-style:solid;border-width:1px;border-radius:9999px;background-color:#f0f7fd;padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px">
				<!-- wp:image {"width":"16","height":"16","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full is-resized" style="width:16px;height:16px;margin:0"><img src="' . esc_url( $theme_uri ) . '/assets/icons/vhs.svg" alt="Video Tapes" style="width:16px;height:16px;max-width:16px;max-height:16px" width="16" height="16"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"13.5px"}}} -->
				<p style="font-size:13.5px;font-weight:700"><a href="#" style="color:#16324f;text-decoration:none">Video Tapes</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"vhs-format-pill","style":{"color":{"background":"#f0f7fd"},"border":{"radius":"9999px","width":"1px","color":"#dce7f5","style":"solid"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","blockGap":"6px"}} -->
			<div class="wp-block-group vhs-format-pill has-background" style="border-color:#dce7f5;border-style:solid;border-width:1px;border-radius:9999px;background-color:#f0f7fd;padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px">
				<!-- wp:image {"width":"16","height":"16","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full is-resized" style="width:16px;height:16px;margin:0"><img src="' . esc_url( $theme_uri ) . '/assets/icons/film.svg" alt="Film Reels" style="width:16px;height:16px;max-width:16px;max-height:16px" width="16" height="16"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"13.5px"}}} -->
				<p style="font-size:13.5px;font-weight:700"><a href="#" style="color:#16324f;text-decoration:none">Film Reels</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"vhs-format-pill","style":{"color":{"background":"#f0f7fd"},"border":{"radius":"9999px","width":"1px","color":"#dce7f5","style":"solid"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","blockGap":"6px"}} -->
			<div class="wp-block-group vhs-format-pill has-background" style="border-color:#dce7f5;border-style:solid;border-width:1px;border-radius:9999px;background-color:#f0f7fd;padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px">
				<!-- wp:image {"width":"16","height":"16","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full is-resized" style="width:16px;height:16px;margin:0"><img src="' . esc_url( $theme_uri ) . '/assets/icons/photo.svg" alt="Photos &amp; Slides" style="width:16px;height:16px;max-width:16px;max-height:16px" width="16" height="16"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"13.5px"}}} -->
				<p style="font-size:13.5px;font-weight:700"><a href="#" style="color:#16324f;text-decoration:none">Photos &amp; Slides</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"vhs-format-pill","style":{"color":{"background":"#f0f7fd"},"border":{"radius":"9999px","width":"1px","color":"#dce7f5","style":"solid"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","blockGap":"6px"}} -->
			<div class="wp-block-group vhs-format-pill has-background" style="border-color:#dce7f5;border-style:solid;border-width:1px;border-radius:9999px;background-color:#f0f7fd;padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px">
				<!-- wp:image {"width":"16","height":"16","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full is-resized" style="width:16px;height:16px;margin:0"><img src="' . esc_url( $theme_uri ) . '/assets/icons/cassette.svg" alt="Audio" style="width:16px;height:16px;max-width:16px;max-height:16px" width="16" height="16"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"13.5px"}}} -->
				<p style="font-size:13.5px;font-weight:700"><a href="#" style="color:#16324f;text-decoration:none">Audio</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"vhs-format-pill","style":{"color":{"background":"#f0f7fd"},"border":{"radius":"9999px","width":"1px","color":"#dce7f5","style":"solid"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","blockGap":"6px"}} -->
			<div class="wp-block-group vhs-format-pill has-background" style="border-color:#dce7f5;border-style:solid;border-width:1px;border-radius:9999px;background-color:#f0f7fd;padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px">
				<!-- wp:image {"width":"16","height":"16","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full is-resized" style="width:16px;height:16px;margin:0"><img src="' . esc_url( $theme_uri ) . '/assets/icons/disc.svg" alt="Discs" style="width:16px;height:16px;max-width:16px;max-height:16px" width="16" height="16"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"13.5px"}}} -->
				<p style="font-size:13.5px;font-weight:700"><a href="#" style="color:#16324f;text-decoration:none">Discs</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"vhs-format-pill","style":{"color":{"background":"#f0f7fd"},"border":{"radius":"9999px","width":"1px","color":"#dce7f5","style":"solid"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","blockGap":"6px"}} -->
			<div class="wp-block-group vhs-format-pill has-background" style="border-color:#dce7f5;border-style:solid;border-width:1px;border-radius:9999px;background-color:#f0f7fd;padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px">
				<!-- wp:image {"width":"16","height":"16","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full is-resized" style="width:16px;height:16px;margin:0"><img src="' . esc_url( $theme_uri ) . '/assets/icons/sparkle.svg" alt="Restoration" style="width:16px;height:16px;max-width:16px;max-height:16px" width="16" height="16"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"13.5px"}}} -->
				<p style="font-size:13.5px;font-weight:700"><a href="#" style="color:#16324f;text-decoration:none">Restoration</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"vhs-format-pill","style":{"color":{"background":"#f0f7fd"},"border":{"radius":"9999px","width":"1px","color":"#dce7f5","style":"solid"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","blockGap":"6px"}} -->
			<div class="wp-block-group vhs-format-pill has-background" style="border-color:#dce7f5;border-style:solid;border-width:1px;border-radius:9999px;background-color:#f0f7fd;padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px">
				<!-- wp:image {"width":"16","height":"16","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full is-resized" style="width:16px;height:16px;margin:0"><img src="' . esc_url( $theme_uri ) . '/assets/icons/archive.svg" alt="Premium" style="width:16px;height:16px;max-width:16px;max-height:16px" width="16" height="16"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"13.5px"}}} -->
				<p style="font-size:13.5px;font-weight:700"><a href="#" style="color:#16324f;text-decoration:none">Premium</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
