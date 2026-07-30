<?php
/**
 * Realome functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Realome
 * @since Realome 1.0
 */

if ( ! function_exists( 'realome_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Realome 1.0
	 *
	 * @return void
	 */
	function realome_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for WooCommerce.
		add_theme_support( 'woocommerce' );

		// Enqueue editor styles.
		add_editor_style(
			array(
				'style.css',
				'/build/style-index.css',
			)
		);

		add_image_size( 'square-medium', 1000, 1000, true );
		add_image_size( 'square-small', 500, 500, true );

		add_image_size( 'landscape', 1300, 975, true );
		add_image_size( 'portrait', 1300, 1736, true );

		add_image_size( 'landscape-medium', 1000, 750, true );
		add_image_size( 'portrait-medium', 1000, 1335, true );

		add_image_size( 'landscape-small', 632, 474, true );
		add_image_size( 'portrait-small', 632, 844, true );

	}

endif;

add_action( 'after_setup_theme', 'realome_support' );

/**
 * Make custom sizes selectable from WordPress admin.
 *
 * @param array $sizes images sizes.
 */
function realome_custom_image_sizes( $sizes ) {
	return array_merge(
		$sizes,
		array(
			'square-medium'    => __( 'Square Medium', 'realome' ),
			'square-small'     => __( 'Square Small', 'realome' ),
			'landscape'        => __( 'Landscape', 'realome' ),
			'landscape-medium' => __( 'Landscape Medium', 'realome' ),
			'landscape-small'  => __( 'Landscape Small', 'realome' ),
			'portrait'         => __( 'Portrait', 'realome' ),
			'portrait-medium'  => __( 'Portrait Medium', 'realome' ),
			'portrait-small'   => __( 'Portrait Small', 'realome' ),
		)
	);
}
add_filter( 'image_size_names_choose', 'realome_custom_image_sizes' );

if ( ! function_exists( 'realome_scripts' ) ) :

	/**
	 * Enqueue scripts and styles.
	 *
	 * @since Realome 1.0
	 *
	 * @return void
	 */
	function realome_scripts() {

		// Register theme stylesheet.
		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'realome-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Add styles inline.
		wp_add_inline_style( 'realome-style', realome_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'realome-style' );

		// Register theme stylesheet.
		wp_register_style(
			'realome-theme-style',
			get_template_directory_uri() . '/build/style-index.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'realome-theme-style' );

		// Register Google Font Manrope (weights 400-800)
		wp_register_style(
			'realome-manrope-font',
			'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap',
			array(),
			'1.0.0'
		);
		wp_enqueue_style( 'realome-manrope-font' );

		// Register material icons stylesheet.
		wp_register_style(
			'material-icons',
			'https://fonts.googleapis.com/icon?family=Material+Icons+Outlined',
			array(),
			'1.0.0'
		);
		wp_enqueue_style( 'material-icons' );

		// Responsive embeds script.
		wp_enqueue_script(
			'realome-responsive-embeds-script',
			get_template_directory_uri() . '/assets/js/responsive-embeds.js',
			array(),
			wp_get_theme()->get( 'Version' ),
			true
		);

		// Before-After comparison slider script.
		wp_enqueue_script(
			'realome-before-after-script',
			get_template_directory_uri() . '/assets/js/before-after.js',
			array(),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}

endif;

add_action( 'wp_enqueue_scripts', 'realome_scripts' );

if ( ! function_exists( 'realome_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 *
	 * @since Realome 1.0
	 *
	 * @return void
	 */
	function realome_inline_editor_styles() {

		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', realome_get_font_face_styles() );
		wp_add_inline_style( 'wp-block-library', realome_editor_styles() );
	}

endif;

add_action( 'admin_init', 'realome_inline_editor_styles' );


if ( ! function_exists( 'realome_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions realome_scripts() and realome_editor_styles() above.
	 *
	 * @since Realome 1.0
	 *
	 * @return string
	 */
	function realome_get_font_face_styles() {

		return "
		@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap');

		body,
		h1, h2, h3, h4, h5, h6,
		p, span, div, a, li, label, input, button, select, textarea,
		.editor-styles-wrapper,
		.editor-styles-wrapper *,
		.wp-block-heading,
		.wp-block-paragraph,
		.wp-block-button,
		.wp-block-navigation,
		:root {
			font-family: 'Manrope', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif !important;
		}

		/* fallback */
		@font-face {
		  font-family: 'Material Icons Outlined';
		  font-style: normal;
		  font-weight: 400;
		  src: url(https://fonts.gstatic.com/s/materialiconsoutlined/v105/gok-H7zzDkdnRel8-DQ6KAXJ69wP1tGnf4ZGhUce.woff2) format('woff2');
		}
		
		.material-icons-outlined {
		  font-family: 'Material Icons Outlined' !important;
		  font-weight: normal;
		  font-style: normal;
		  font-size: 24px;
		  line-height: 1;
		  letter-spacing: normal;
		  text-transform: none;
		  display: inline-block;
		  white-space: nowrap;
		  word-wrap: normal;
		  direction: ltr;
		  -webkit-font-feature-settings: 'liga';
		  -webkit-font-smoothing: antialiased;
		}

		";

	}

endif;

if ( ! function_exists( 'realome_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font (Manrope) to improve performance.
	 *
	 * @since Realome 1.0
	 *
	 * @return void
	 */
	function realome_preload_webfonts() {
		?>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap">
		<?php
	}

endif;

add_action( 'wp_head', 'realome_preload_webfonts' );

if ( ! function_exists( 'realome_editor_styles' ) ) :

	/**
	 * Get editor styles.
	 * Called by function realome_inline_editor_styles() above.
	 *
	 * @since realome 1.0
	 *
	 * @return string
	 */
	function realome_editor_styles() {

		return '
		.editor-styles-wrapper h1,
		.editor-styles-wrapper h2,
		.editor-styles-wrapper h3,
		.editor-styles-wrapper h4,
		.editor-styles-wrapper h5,
		.editor-styles-wrapper h6 {
			font-weight: 800 !important;
			letter-spacing: -0.01em !important;
		}

		.editor-styles-wrapper h1 { font-size: 54px !important; line-height: 1.06 !important; }
		.editor-styles-wrapper h2 { font-size: 40px !important; line-height: 1.14 !important; }
		.editor-styles-wrapper h3 { font-size: 28px !important; line-height: 1.2 !important; }
		.editor-styles-wrapper h4 { font-size: 22px !important; line-height: 1.25 !important; }
		.editor-styles-wrapper h5 { font-size: 18px !important; line-height: 1.3 !important; }
		.editor-styles-wrapper h6 { font-size: 15px !important; line-height: 1.35 !important; }

		.editor-styles-wrapper .wp-block-button__link,
		.editor-styles-wrapper button,
		.editor-styles-wrapper .button {
			font-size: 16px !important;
			font-weight: 700 !important;
			border-radius: 12px !important;
		}

		.editor-styles-wrapper .wp-block-group.alignfull > div,
		.editor-styles-wrapper .is-root-container > div {
			max-width: 1320px !important;
			padding-left: 60px !important;
			padding-right: 60px !important;
			box-sizing: border-box !important;
		}

		.editor-styles-wrapper .vhs-reel-pricing-header-row,
		.editor-styles-wrapper .vhs-reel-pricing-row {
			display: flex !important;
			flex-direction: row !important;
			align-items: center !important;
			justify-content: space-between !important;
			width: 100% !important;
			box-sizing: border-box !important;
		}

		.editor-styles-wrapper .vhs-reel-pricing-header-row > .wp-block-column,
		.editor-styles-wrapper .vhs-reel-pricing-row > .wp-block-column {
			margin: 0 !important;
			padding: 0 !important;
			text-align: left !important;
		}

		.editor-styles-wrapper .vhs-reel-card-inner {
			display: flex !important;
			flex-direction: row !important;
			align-items: center !important;
			justify-content: flex-start !important;
			gap: 14px !important;
			width: 100% !important;
		}

		.editor-styles-wrapper .vhs-reel-card-text {
			display: flex !important;
			flex-direction: column !important;
			align-items: flex-start !important;
			justify-content: center !important;
			text-align: left !important;
			flex: 1 1 auto !important;
			width: auto !important;
		}

		.editor-styles-wrapper .vhs-reel-card-text p {
			display: block !important;
			text-align: left !important;
			margin-top: 0 !important;
			width: 100% !important;
		}

		.editor-styles-wrapper .vhs-reel-trust-grid {
			display: flex !important;
			flex-direction: row !important;
			gap: 48px !important;
			width: 100% !important;
		}

		.editor-styles-wrapper .vhs-reel-trust-item {
			display: flex !important;
			flex-direction: row !important;
			align-items: flex-start !important;
			gap: 16px !important;
			width: 100% !important;
		}

		.editor-styles-wrapper .vhs-reel-trust-text {
			display: flex !important;
			flex-direction: column !important;
			align-items: flex-start !important;
			text-align: left !important;
			flex: 1 1 auto !important;
		}

		.editor-styles-wrapper .vhs-reel-trust-text p {
			display: block !important;
			text-align: left !important;
			width: 100% !important;
		}

		.editor-styles-wrapper .block-editor-block-list__layout.is-root-container > p + h1,
		.editor-styles-wrapper .block-editor-block-list__layout.is-root-container > p + h2,
		.editor-styles-wrapper .block-editor-block-list__layout.is-root-container > p + h3,
		.editor-styles-wrapper .block-editor-block-list__layout.is-root-container > p + h4 {
			margin-top: var(--wp--custom--spacing--medium, 6rem) !important;
		}
		
		.nav-list-vertical-gap-small {
			.wp-block-navigation__container {
				row-gap: 10px;
			}
		}

		/* core block fix */
		@media only screen and (min-width: 482px) {
			.editor-styles-wrapper .edit-post-visual-editor__post-title-wrapper > .alignleft, .editor-styles-wrapper .block-editor-block-list__layout.is-root-container > .alignleft {
			    margin-right: 2em !important;
			}
			.editor-styles-wrapper .edit-post-visual-editor__post-title-wrapper > .alignright, .editor-styles-wrapper .block-editor-block-list__layout.is-root-container > .alignright {
			    margin-left: 2em !important;
			}
		
			.editor-styles-wrapper .edit-post-visual-editor__post-title-wrapper > .alignleft, .editor-styles-wrapper .block-editor-block-list__layout.is-root-container > .alignleft { 
				margin-left: calc(50% - 400px) !important;
			}
			.editor-styles-wrapper .edit-post-visual-editor__post-title-wrapper > .alignright, .editor-styles-wrapper .block-editor-block-list__layout.is-root-container > .alignright { 
				margin-right: calc(50% - 400px) !important;
			}

		}
		.wp-block-search__input {
			border-color: var(--wp--preset--color--foreground);
			border-width: 0.125rem;
			border-radius: 0.5rem;
			padding: calc(calc(0.551em + 2px) - 2px) calc(calc(1.5rem + 2px) - 2px);
		}
		.wp-block-search.wp-block-search__button-inside .wp-block-search__inside-wrapper {
			background-color: var(--wp--preset--color--white);
			border-color: var(--wp--preset--color--foreground);
			border-width: 0.125rem;
			border-radius: 0.5rem;
		}
		.wp-block-search.wp-block-search__button-inside .wp-block-search__inside-wrapper input.wp-block-search__input {
			padding: calc(calc(0.551em + 2px) - 2px) calc(calc(1.5rem + 2px) - 2px);
		}
		
		table.mce-item-table {
		    border-collapse: collapse;
		    width: 100%;
		}
		.mce-item-table thead {
			border-bottom: 3px solid;
		}
		.mce-item-table tfoot {
			border-top: 3px solid;
		}
		.mce-item-table td,
		.mce-item-table th {
			padding: 0.5em;
			border: 1px solid;
			word-break: normal;
		}
		.mce-item-table figcaption {
			color: #555;
			font-size: 13px;
			text-align: center;
		}
		.is-dark-theme .mce-item-table figcaption {
			color: rgba(255, 255, 255, 0.65);
		}
		.wp-block-freeform.block-library-rich-text__tinymce a {
			color: var(--wp--preset--color--foreground);
		}
		';

	}

endif;

// Load the TGMPA class.
require get_parent_theme_file_path( '/inc/plugins.php' );

// Add block patterns.
require get_template_directory() . '/inc/block-patterns.php';

/**
 * Fix REST API URL and CORS header issues (X-HTTP-Method-Override) for Site Editor / Gutenberg.
 */
add_filter( 'rest_url', function( $url ) {
	if ( ! empty( $_SERVER['HTTP_HOST'] ) ) {
		$scheme       = is_ssl() ? 'https' : 'http';
		$current_host = $_SERVER['HTTP_HOST'];
		$url          = preg_replace( '#^https?://[^/]+#i', $scheme . '://' . $current_host, $url );
	}
	return $url;
} );

add_action( 'init', function() {
	if ( isset( $_SERVER['HTTP_ORIGIN'] ) ) {
		$origin = $_SERVER['HTTP_ORIGIN'];
		header( "Access-Control-Allow-Origin: {$origin}" );
		header( 'Access-Control-Allow-Credentials: true' );
		header( 'Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS' );
		header( 'Access-Control-Allow-Headers: Authorization, X-WP-Nonce, Content-Type, X-HTTP-Method-Override, Origin, X-Requested-With, Accept' );

		if ( isset( $_SERVER['REQUEST_METHOD'] ) && 'OPTIONS' === $_SERVER['REQUEST_METHOD'] ) {
			status_header( 200 );
			exit();
		}
	}
} );

add_filter( 'rest_allowed_cors_headers', function( $headers ) {
	if ( ! is_array( $headers ) ) {
		$headers = array();
	}
	$headers[] = 'X-HTTP-Method-Override';
	$headers[] = 'X-WP-Nonce';
	$headers[] = 'Authorization';
	$headers[] = 'Content-Type';
	return array_unique( $headers );
} );

add_filter( 'allowed_http_origins', function( $origins ) {
	if ( ! is_array( $origins ) ) {
		$origins = array();
	}
	if ( isset( $_SERVER['HTTP_ORIGIN'] ) && ! in_array( $_SERVER['HTTP_ORIGIN'], $origins, true ) ) {
		$origins[] = $_SERVER['HTTP_ORIGIN'];
	}
	return $origins;
} );

/**
 * Automatically handle 'How It Works' & 'Reviews' navigation clicks:
 * Smooth scroll if on Homepage, or redirect to Homepage /#anchor if on any subpage.
 */
add_action( 'wp_footer', function() {
	$home_url = esc_url( home_url( '/' ) );
	?>
	<script>
	document.addEventListener('DOMContentLoaded', function() {
		var homeUrl     = <?php echo wp_json_encode( $home_url ); ?>;
		var currentPath = window.location.pathname.replace(/\/$/, '') || '/';
		var homePath    = (new URL(homeUrl)).pathname.replace(/\/$/, '') || '/';
		var isHome      = (currentPath === homePath);

		function getHeaderOffset() {
			var header = document.querySelector('header') || document.querySelector('.vhs-header-container') || document.querySelector('.wp-block-template-part');
			if (header) {
				return header.offsetHeight + 16;
			}
			return 90;
		}

		function scrollToTarget(target, activeLink) {
			if (!target) return;
			var headerOffset = getHeaderOffset();
			var elementPosition = target.getBoundingClientRect().top;
			var offsetPosition = elementPosition + window.pageYOffset - headerOffset;

			window.scrollTo({
				top: Math.max(0, offsetPosition),
				behavior: 'smooth'
			});

			if (activeLink) {
				setActiveNav(activeLink);
			}

			// Close mobile menu if open
			var mobileNavClose = document.querySelector('.wp-block-navigation__responsive-container-close-button, .vhs-mobile-menu-close');
			if (mobileNavClose && window.getComputedStyle(mobileNavClose).display !== 'none') {
				mobileNavClose.click();
			}
		}

		function setActiveNav(activeLink) {
			document.querySelectorAll('header nav a, .wp-block-navigation a').forEach(function(a) {
				a.classList.remove('vhs-nav-active');
			});
			if (activeLink) {
				activeLink.classList.add('vhs-nav-active');
			}
		}

		document.querySelectorAll('a').forEach(function(link) {
			var text = (link.textContent || '').trim().toLowerCase();
			var href = (link.getAttribute('href') || '').trim().toLowerCase();

			// 1. How It Works
			if (text === 'how it works' || text === 'see how it works' || href === '#how-it-works' || href === '/#how-it-works' || href === homeUrl.toLowerCase() + '#how-it-works') {
				link.addEventListener('click', function(e) {
					var target = document.getElementById('how-it-works') || document.querySelector('.vhs-how-section') || document.querySelector('.vhs-hollywood-how-it-works-section');
					if (isHome && target) {
						e.preventDefault();
						scrollToTarget(target, link);
						if (history.pushState) {
							history.pushState(null, null, '#how-it-works');
						}
					} else if (!isHome) {
						e.preventDefault();
						window.location.href = homeUrl + '#how-it-works';
					}
				});
			}

			// 2. Reviews
			if (text === 'reviews' || href === '#reviews' || href === '/#reviews' || href === '#wall-of-stories' || href === homeUrl.toLowerCase() + '#reviews') {
				link.addEventListener('click', function(e) {
					var target = document.getElementById('reviews') || document.querySelector('.vhs-stories-section') || document.querySelector('.vhs-trustindex-section') || document.getElementById('wall-of-stories');
					if (isHome && target) {
						e.preventDefault();
						scrollToTarget(target, link);
						if (history.pushState) {
							history.pushState(null, null, '#reviews');
						}
					} else if (!isHome) {
						e.preventDefault();
						window.location.href = homeUrl + '#reviews';
					}
				});
			}

			// 3. Start a mail-in order
			if (text.indexOf('start a mail-in order') !== -1) {
				link.setAttribute('href', homeUrl + 'contact/');
			}
		});

		// Hash listener on page load for cross-page navigation to Home section
		var hash = window.location.hash;
		if (hash === '#how-it-works' || hash === '#reviews' || hash === '#wall-of-stories') {
			var checkAndScroll = function() {
				var targetId = hash.substring(1);
				var target = document.getElementById(targetId) || document.querySelector('.' + (targetId === 'reviews' || targetId === 'wall-of-stories' ? 'vhs-stories-section' : 'vhs-how-section'));
				if (target) {
					var matchingLink = null;
					document.querySelectorAll('header nav a, .wp-block-navigation a').forEach(function(a) {
						var txt = (a.textContent || '').trim().toLowerCase();
						if ((targetId === 'how-it-works' && (txt === 'how it works' || txt === 'see how it works')) || 
							((targetId === 'reviews' || targetId === 'wall-of-stories') && txt === 'reviews')) {
							matchingLink = a;
						}
					});
					scrollToTarget(target, matchingLink);
				}
			};

			setTimeout(checkAndScroll, 200);
			setTimeout(checkAndScroll, 600);
		}

		// Automatically ensure all embedded Google Map iframes use tight 6630 Meade St z=16 street zoom
		document.querySelectorAll('iframe[src*="maps.google.com"], iframe.vhs-live-map-iframe').forEach(function(iframe) {
			iframe.setAttribute('src', 'https://maps.google.com/maps?q=6630+Meade+St,+Hollywood,+FL+33024&t=&z=16&ie=UTF8&iwloc=&output=embed');
		});
		// Auto fix heading for Slide and Negative Scanning page if Betamax text was mistakenly rendered
		document.querySelectorAll('h1, h2, h3, p, div').forEach(function(el) {
			var txt = (el.textContent || '').trim();
			if (txt.indexOf('The Beta Formats We Convert') !== -1 && (document.body.innerText.indexOf('35mm') !== -1 || window.location.href.indexOf('slide') !== -1)) {
				el.innerHTML = 'Every Slide &amp; Negative We <span style="color:#39B7EC">Scan</span>.';
			}
			if ((txt.indexOf('Sony’s Betamax') !== -1 || txt.indexOf("Sony's Betamax") !== -1 || txt.indexOf('higher-band') !== -1) && (document.body.innerText.indexOf('35mm') !== -1 || window.location.href.indexOf('slide') !== -1)) {
				el.textContent = 'From a single carousel to boxes of loose negatives — cleaned, scanned at high resolution, and organized.';
			}
		});

		// Auto fix title for MiniDV page if 8mm Tapes text was mistakenly rendered
		document.querySelectorAll('h1, h2, h3').forEach(function(el) {
			var txt = (el.textContent || '').trim();
			if (txt.indexOf('Why Trust Us With Your 8mm Tapes') !== -1 && (document.body.innerText.indexOf('MiniDV') !== -1 || window.location.href.indexOf('minidv') !== -1)) {
				el.innerHTML = 'Why Trust Us With Your <span style="color:#39B7EC">MiniDV<br>Tapes?</span>';
			}
			if (txt.indexOf('Why Trust Us With Your 8mm Tapes') !== -1 && (document.body.innerText.indexOf('Betamax') !== -1 || window.location.href.indexOf('beta') !== -1)) {
				el.innerHTML = 'Why Bring Betamax <span style="color:#39B7EC">to Us</span>?';
			}
			if (txt.indexOf('Why Trust Us With Your 8mm Tapes') !== -1 && (document.body.innerText.indexOf('Broadcast') !== -1 || document.body.innerText.indexOf('Institutions') !== -1 || window.location.href.indexOf('professional') !== -1 || window.location.href.indexOf('broadcast') !== -1)) {
				el.innerHTML = 'Why Institutions Choose <span style="color:#39B7EC">Us</span>.';
			}
			if (txt.indexOf('Why Trust Us With Your 8mm Tapes') !== -1 && (document.body.innerText.indexOf('Negatives') !== -1 || document.body.innerText.indexOf('Dust & scratch') !== -1 || window.location.href.indexOf('slide') !== -1)) {
				el.innerHTML = 'Why Scan Your Slides &amp;<br>Negatives With <span style="color:#39B7EC">Us</span>?';
			}
		});
	});
	</script>
	<?php
} );

// Filter post content dynamically
add_filter( 'the_content', function( $content ) {
	if ( ! is_admin() ) {
		$content = str_replace(
			array(
				'The Beta Formats We <span style="color:#39B7EC">Convert</span>.',
				'The Beta Formats We Convert.',
				'Sony’s Betamax and its higher-band variants — all handled on maintained period-correct equipment.',
				"Sony's Betamax and its higher-band variants — all handled on maintained period-correct equipment.",
				'Sony&#8217;s Betamax and its higher-band variants — all handled on maintained period-correct equipment.',
			),
			array(
				'Every Slide &amp; Negative We <span style="color:#39B7EC">Scan</span>.',
				'Every Slide &amp; Negative We Scan.',
				'From a single carousel to boxes of loose negatives — cleaned, scanned at high resolution, and organized.',
				'From a single carousel to boxes of loose negatives — cleaned, scanned at high resolution, and organized.',
				'From a single carousel to boxes of loose negatives — cleaned, scanned at high resolution, and organized.',
			),
			$content
		);

		if ( is_page( 'minidv-to-digital' ) || ( strpos( $content, 'MiniDV' ) !== false && strpos( $content, 'Why Trust Us With Your' ) !== false ) ) {
			$content = str_replace(
				array(
					'Why Trust Us With Your <span style="color:#39B7EC">8mm Tapes?</span>',
					'Why Trust Us With Your <span style="color:#39B7EC">8mm<br>Tapes?</span>',
					'Why Trust Us With Your 8mm Tapes?',
				),
				array(
					'Why Trust Us With Your <span style="color:#39B7EC">MiniDV<br>Tapes?</span>',
					'Why Trust Us With Your <span style="color:#39B7EC">MiniDV<br>Tapes?</span>',
					'Why Trust Us With Your <span style="color:#39B7EC">MiniDV<br>Tapes?</span>',
				),
				$content
			);
		}

		if ( is_page( 'betamax-to-digital' ) || ( strpos( $content, 'Betamax' ) !== false && strpos( $content, 'Why Trust Us With Your' ) !== false ) ) {
			$content = str_replace(
				array(
					'Why Trust Us With Your <span style="color:#39B7EC">8mm Tapes?</span>',
					'Why Trust Us With Your <span style="color:#39B7EC">8mm<br>Tapes?</span>',
					'Why Trust Us With Your 8mm Tapes?',
				),
				array(
					'Why Bring Betamax <span style="color:#39B7EC">to Us</span>?',
					'Why Bring Betamax <span style="color:#39B7EC">to Us</span>?',
					'Why Bring Betamax <span style="color:#39B7EC">to Us</span>?',
				),
				$content
			);
		}

		if ( is_page( 'professional-broadcast' ) || is_page( 'professional-and-broadcast-video-transfer' ) || ( ( strpos( $content, 'Broadcast-grade' ) !== false || strpos( $content, 'archives' ) !== false ) && strpos( $content, 'Why Trust Us With Your' ) !== false ) ) {
			$content = str_replace(
				array(
					'Why Trust Us With Your <span style="color:#39B7EC">8mm Tapes?</span>',
					'Why Trust Us With Your <span style="color:#39B7EC">8mm<br>Tapes?</span>',
					'Why Trust Us With Your 8mm Tapes?',
				),
				array(
					'Why Institutions Choose <span style="color:#39B7EC">Us</span>.',
					'Why Institutions Choose <span style="color:#39B7EC">Us</span>.',
					'Why Institutions Choose <span style="color:#39B7EC">Us</span>.',
				),
				$content
			);
		}

		if ( is_page( 'slide-negative-scanning' ) || ( ( strpos( $content, 'Negatives' ) !== false || strpos( $content, 'Dust & scratch' ) !== false ) && strpos( $content, 'Why Trust Us With Your' ) !== false ) ) {
			$content = str_replace(
				array(
					'Why Trust Us With Your <span style="color:#39B7EC">8mm Tapes?</span>',
					'Why Trust Us With Your <span style="color:#39B7EC">8mm<br>Tapes?</span>',
					'Why Trust Us With Your 8mm Tapes?',
				),
				array(
					'Why Scan Your Slides &amp;<br>Negatives With <span style="color:#39B7EC">Us</span>?',
					'Why Scan Your Slides &amp;<br>Negatives With <span style="color:#39B7EC">Us</span>?',
					'Why Scan Your Slides &amp;<br>Negatives With <span style="color:#39B7EC">Us</span>?',
				),
				$content
			);
		}

		if ( strpos( $content, 'Your Memories' ) !== false ) {
			$content = preg_replace_callback(
				'/(?:<p[^>]*>.*?PREMIUM MEMORY DIGITIZATION.*?<\/p>\s*)?<h1[^>]*>.*?Your Memories.*?<\/h1>(?:\s*<p[^>]*>.*?Memory Converter is the white-glove.*?<\/p>)?/is',
				function($matches) {
					return '<p class="has-accent-color has-text-color has-extra-small-font-size has-heading-font-family" style="color:#39B7EC;font-style:normal;font-weight:800;letter-spacing:0.16em;margin-top:0;margin-bottom:16px">PREMIUM MEMORY DIGITIZATION &middot; HOLLYWOOD, FL</p>' .
					       '<h1 class="wp-block-heading has-heading-font-family" style="color:#ffffff;font-weight:800;line-height:1.06;margin-top:16px;margin-bottom:22px">Your Memories,<br />Preserved <span style="color:#39B7EC">Forever.</span></h1>' .
					       '<p class="has-text-color has-medium-font-size has-body-font-family" style="color:rgba(255,255,255,0.82);margin-bottom:32px">Memory Converter is the white-glove digital media converter that turns your old VHS tapes, film reels, photos, and audio into crisp digital you can watch, share, and keep for good.</p>';
				},
				$content
			);
		}
	}
	return $content;
}, 999 );

add_action('wp_footer', function() {
    if ( is_front_page() || is_home() ) {
        ?>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            var isMobile = window.matchMedia("(max-width: 768px)").matches;
            if (isMobile) {
                var heroEls = document.querySelectorAll('.vhs-hero-grid p, .vhs-home-hero-section p, .vhs-hero-grid li, .vhs-home-hero-section li, .vhs-hero-grid div.wp-block-group > div');
                heroEls.forEach(function(el) {
                    var text = el.innerText || '';
                    if (text.includes('Handled 100%')) {
                        el.innerHTML = '<span style="color:#39B7EC; font-weight:bold; margin-right:4px;">✓</span> Handled 100% in-house in Hollywood, FL';
                        el.classList.add('vhs-fixed-trust-item');
                        if (el.parentElement) el.parentElement.classList.add('vhs-fixed-trust-container');
                    }
                    else if (text.includes('Insured, tracked')) {
                        el.innerHTML = '<span style="color:#39B7EC; font-weight:bold; margin-right:4px;">✓</span> Insured, tracked shipping — both ways';
                        el.classList.add('vhs-fixed-trust-item');
                        if (el.parentElement) el.parentElement.classList.add('vhs-fixed-trust-container');
                    }
                    else if (text.includes('Free return of')) {
                        el.innerHTML = '<span style="color:#39B7EC; font-weight:bold; margin-right:4px;">✓</span> Free return of your originals';
                        el.classList.add('vhs-fixed-trust-item');
                        if (el.parentElement) el.parentElement.classList.add('vhs-fixed-trust-container');
                    }
                });
            }
        });
        </script>
        <style>
        @media (max-width: 768px) {
            .vhs-home-hero-trust-col::before,
            .vhs-fixed-trust-item::before {
                content: none !important;
                display: none !important;
            }
            .vhs-home-hero-badge,
            .vhs-hero-badge,
            .vhs-badge {
                display: none !important;
            }
            .vhs-fixed-trust-item {
                margin-top: 0 !important;
                margin-bottom: 6px !important;
                padding-top: 0 !important;
                padding-bottom: 0 !important;
                line-height: 1.4 !important;
                font-size: 14px !important;
                display: block !important;
            }
            .vhs-fixed-trust-item:last-child {
                margin-bottom: 0 !important;
            }
            .vhs-fixed-trust-container,
            .vhs-home-hero-trust-cols {
                gap: 6px !important;
                display: flex !important;
                flex-direction: column !important;
                padding-top: 0px !important;
                padding-bottom: 0px !important;
                padding-left: 0px !important;
                margin-left: 0px !important;
                margin-bottom: 16px !important;
                align-items: flex-start !important;
                text-align: left !important;
                width: 100% !important;
            }
            .vhs-fixed-trust-item,
            .vhs-home-hero-trust-col {
                padding-left: 0px !important;
                margin-left: 0px !important;
                text-align: left !important;
                justify-content: flex-start !important;
                align-items: flex-start !important;
                width: 100% !important;
            }
            .vhs-home-hero-pills-strip,
            div.vhs-home-hero-pills-strip {
                display: flex !important;
                flex-wrap: wrap !important;
                justify-content: flex-start !important;
                align-items: center !important;
                gap: 6px 6px !important;
                width: 100% !important;
                padding-top: 8px !important;
                padding-bottom: 4px !important;
                padding-left: 16px !important;
                padding-right: 16px !important;
                margin-top: 8px !important;
                margin-bottom: 4px !important;
                margin-left: 0px !important;
                margin-right: 0px !important;
                box-sizing: border-box !important;
                border-top: 1px solid rgba(255, 255, 255, 0.10) !important;
            }
            .vhs-home-hero-section > div:last-child,
            .vhs-home-hero-section .wp-block-group:last-child {
                padding-top: 0px !important;
                padding-bottom: 12px !important;
                padding-left: 16px !important;
                padding-right: 16px !important;
                margin-top: 0px !important;
                margin-bottom: 0px !important;
                margin-left: 0px !important;
                margin-right: 0px !important;
                box-sizing: border-box !important;
                width: 100% !important;
            }
            .vhs-home-hero-pill,
            a.vhs-home-hero-pill {
                display: inline-flex !important;
                align-items: center !important;
                justify-content: center !important;
                width: auto !important;
                max-width: max-content !important;
                flex: 0 1 auto !important;
                padding: 5px 10px !important;
                font-size: 11.5px !important;
                font-weight: 600 !important;
                border-radius: 999px !important;
                background: rgba(255, 255, 255, 0.08) !important;
                border: 1px solid rgba(255, 255, 255, 0.12) !important;
                color: rgba(255, 255, 255, 0.90) !important;
                white-space: nowrap !important;
                margin: 0 !important;
            }
            .vhs-hero-media-box,
            .vhs-home-hero-card-wrap,
            .vhs-home-hero-cover,
            .vhs-home-hero-section .wp-block-column:last-child,
            .vhs-hero-grid .wp-block-column:last-child {
                padding-top: 0px !important;
                padding-bottom: 0px !important;
                padding-left: 0px !important;
                padding-right: 0px !important;
                margin-top: 0px !important;
                margin-bottom: 0px !important;
                margin-left: 0px !important;
                margin-right: 0px !important;
                width: 100% !important;
                max-width: 100% !important;
            }
            .vhs-hero-media-box img,
            .vhs-home-hero-card-wrap img,
            .vhs-home-hero-cover img,
            .wp-block-cover img {
                width: 100% !important;
                max-width: 100% !important;
                margin-left: 0 !important;
                margin-right: 0 !important;
            }
        }
        </style>
        <?php
    }
}, 999);
