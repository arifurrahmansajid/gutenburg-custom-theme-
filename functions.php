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
			$version_string
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

