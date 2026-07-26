<?php
/**
 * Realome: Block Patterns
 *
 * @package Realome
 * @since Realome 1.0
 */

if ( ! function_exists( 'realome_register_block_patterns' ) ) :

	function realome_register_block_patterns() {
		$block_pattern_categories = array(
			'realome' => array( 'label' => __( 'Realome', 'realome' ) ),
			'vhs-sections' => array( 'label' => __( 'VHS Converter Sections', 'realome' ) ),
			'featured' => array( 'label' => __( 'Featured', 'realome' ) ),
			'footer'  => array( 'label' => __( 'Footers', 'realome' ) ),
			'header'  => array( 'label' => __( 'Headers', 'realome' ) ),
			'hero'  => array( 'label' => __( 'Hero', 'realome' ) ),
			'pages'    => array( 'label' => __( 'Pages', 'realome' ) ),
		);

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

		$block_patterns = array(
			'hero-dark',
			'trust-ribbon',
			'format-banner',
			'formats-grid',
			'living-memories-spotlight',
			'how-it-works',
			'flat-pricing',
			'why-trust-us',
			'local-coverage',
			'wall-of-stories',
			'faq-accordion',
			'final-cta',
			'footer-default',
			'header-default',
			'hero-four',
			'services-hero',
			'format-pills-bar',
			'studio-vs-mailin',
			'white-glove-difference',
			'services-catalog',
			'restoration-upgrades',
			'compare-hero',
			'the-comparisons-grid',
			'why-publish-comparisons',
			'memory-converter-difference',
			'big-box-store-guides',
			'howto-buyer-guides',
			'why-trust-us',
			'areas-served-hero',
			'areas-served-map',
			'areas-served-cities',
			'local-service-works',
			'fl-climate-feature',
			'service-pills',
			'areas-served-stories',
			'reel-revival-hero',
			'newsletter-bar',
			'contact-quote-banner',
			'contact-form-section',
			'wall-of-stories-trustindex',
			'vhsc-hero-before-after',
			'vhsc-formats-convert',
			'vhsc-flat-pricing',
			'vhsc-why-trust-us',
			'vhsc-wall-of-stories',
			'film-hero-before-after',
			'film-reels-welcome',
			'film-what-you-get',
			'film-transparent-pricing',
			'film-why-memory-converter',
			'studio-vs-mailin-comparison',
			'film-faq-accordion',
			'film-locations-banner',
			'living-memories-callout',
			'film-preserve-cta-banner',
			'dvd-hero-before-after',
			'discs-we-accept',
			'dvd-what-you-get',
			'dvd-why-convert-now',
			'dvd-why-memory-converter',
			'dvd-locations-banner',
			'dvd-wall-of-stories',
			'dvd-living-memories-callout',
			'lm-hero-preserved',
			'lm-family-history',
			'lm-nothing-else-like-it',
			'lm-how-story-comes-to-life',
			'lm-see-a-sample',
			'lm-pricing-collections',
			'lm-what-you-receive',
			'lm-made-for-storytellers',
			'heartfelt-mother-testimonial',
			'lm-faq-accordion',
			'scan-and-restore',
			'damaged-to-restored',
			'scan-what-you-get',
			'photo-transparent-pricing',
			'photo-faq-accordion',
			'cassette-hero-audio',
			'audio-what-we-transfer',
			'audio-what-you-get',
			'audio-why-memory-converter',
			'audio-wall-of-stories',
			'tape-formats-accepted',
			'why-memory-converter-cards',
			'video-8mm-formats-convert',
			'pick-camcorder-format',
			'what-we-restore',
			'restoration-gallery',
			'what-you-get',
			'why-memory-converter-photo',
			'south-florida-nationwide-mail',
		);

		foreach ( $block_patterns as $block_pattern ) {
			$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );
			if ( file_exists( $pattern_file ) ) {
				register_block_pattern(
					'realome/' . $block_pattern,
					require $pattern_file
				);
			}
		}
	}

endif;

add_action( 'init', 'realome_register_block_patterns', 9 );
