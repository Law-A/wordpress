<?php
/**
 * Estore Woocommerce functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Estore Woocommerce
 */

include get_theme_file_path( 'vendor/wptrt/autoload/src/Estore_Woocommerce_Loader.php' );

$Estore_Woocommerce_Loader = new \WPTRT\Autoload\Estore_Woocommerce_Loader();

$Estore_Woocommerce_Loader->estore_woocommerce_add( 'WPTRT\\Customize\\Section', get_theme_file_path( 'vendor/wptrt/customize-section-button/src' ) );

$Estore_Woocommerce_Loader->estore_woocommerce_register();

if ( ! function_exists( 'estore_woocommerce_setup' ) ) :

	function estore_woocommerce_setup() {

		load_theme_textdomain( 'estore-woocommerce', get_template_directory() . '/languages' );
		add_theme_support( 'woocommerce' );
		add_theme_support( "responsive-embeds" );
		add_theme_support( "align-wide" );
		add_theme_support( "wp-block-styles" );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
        add_image_size('estore-woocommerce-featured-header-image', 2000, 660, true);

        register_nav_menus( array(
            'primary' => esc_html__( 'Primary','estore-woocommerce' ),
	        'footer'=> esc_html__( 'Footer Menu','estore-woocommerce' ),
        ) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'estore_woocommerce_custom_background_args', array(
			'default-color' => 'f7ebe5',
			'default-image' => '',
		) ) );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 50,
			'width'       => 50,
			'flex-width'  => true,
		) );

		add_editor_style( array( '/editor-style.css' ) );
	}
endif;
add_action( 'after_setup_theme', 'estore_woocommerce_setup' );


function estore_woocommerce_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'estore_woocommerce_content_width', 1170 );
}
add_action( 'after_setup_theme', 'estore_woocommerce_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function estore_woocommerce_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'estore-woocommerce' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'estore-woocommerce' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'estore_woocommerce_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function estore_woocommerce_scripts() {

	require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

	wp_enqueue_style(
		'montserrat',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' ),
		array(),
		'1.0'
	);

	wp_enqueue_style( 'estore-woocommerce-block-editor-style', get_theme_file_uri('/assets/css/block-editor-style.css') );

	// load bootstrap css
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');

    wp_enqueue_style( 'owl.carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css');

	wp_enqueue_style( 'estore-woocommerce-style', get_stylesheet_uri() );

	// fontawesome
	wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() .'/assets/css/fontawesome/css/all.css' );

    wp_enqueue_script('estore-woocommerce-theme-js', get_template_directory_uri() . '/assets/js/theme-script.js', array('jquery'), '', true );

    wp_enqueue_script('owl.carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'estore_woocommerce_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


function estore_woocommerce_sanitize_select( $input, $setting ){
    $input = sanitize_key($input);
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

/*dropdown page sanitization*/
function estore_woocommerce_sanitize_dropdown_pages( $page_id, $setting ) {
	$page_id = absint( $page_id );
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

if (!function_exists('estore_woocommerce_loop_columns')) {
		function estore_woocommerce_loop_columns() {
		return 3;
	}
}
add_filter('loop_shop_columns', 'estore_woocommerce_loop_columns');

add_filter( 'woocommerce_sale_flash', 'estore_woocommerce_woocommerce_sale_flash_percentage', 10, 3 );

function estore_woocommerce_woocommerce_sale_flash_percentage( $html, $post, $product ) {

	$found = preg_match( '#(<span.*?>)(.*?)(</span>)#', $html, $matches );

	if ( ! $found ) {
		return $html;
	}

	$tag_open      = $matches[1];
	$tag_close     = $matches[3];
	$original_text = $matches[2];

	$percentages = estore_woocommerce_woocommerce_get_product_sale_percentages( $product );
	$label       = estore_woocommerce_woocommerce_get_product_sale_percentage_label( $percentages, $original_text );

	$html = $tag_open . $label . $tag_close;

	return $html;
}

function estore_woocommerce_woocommerce_get_product_sale_percentages( $product ) {
	$percentages = array(
		'min' => false,
		'max' => false,
	);

	switch ( $product->get_type() ) {
		case 'grouped':
			$children = array_filter( array_map( 'wc_get_product', $product->get_children() ), 'wc_products_array_filter_visible_grouped' );

			foreach ( $children as $child ) {
				if ( $child->is_purchasable() && ! $child->is_type( 'grouped' ) && $child->is_on_sale() ) {
					$child_percentage = estore_woocommerce_woocommerce_get_product_sale_percentages( $child );

					$percentages['min'] = false !== $percentages['min'] ? $percentages['min'] : $child_percentage['min'];
					$percentages['max'] = false !== $percentages['max'] ? $percentages['max'] : $child_percentage['max'];

					if ( $child_percentage['min'] < $percentages['min'] ) {
						$percentages['min'] = $child_percentage['min'];
					}

					if ( $child_percentage['max'] > $percentages['max'] ) {
						$percentages['max'] = $child_percentage['max'];
					}
				}
			}

			break;

		case 'variable':
			$prices = $product->get_variation_prices();

			foreach ( $prices['price'] as $variation_id => $price ) {
				$regular_price = (float) $prices['regular_price'][ $variation_id ];
				$sale_price    = (float) $prices['sale_price'][ $variation_id ];

				if ( $sale_price < $regular_price ) {
					$variation_percentage = ( ( $regular_price - $sale_price ) / $regular_price ) * 100;

					$percentages['min'] = false !== $percentages['min'] ? $percentages['min'] : $variation_percentage;
					$percentages['max'] = false !== $percentages['max'] ? $percentages['max'] : $variation_percentage;

					if ( $variation_percentage < $percentages['min'] ) {
						$percentages['min'] = $variation_percentage;
					}

					if ( $variation_percentage > $percentages['max'] ) {
						$percentages['max'] = $variation_percentage;
					}
				}
			}
			break;

		case 'external':
		case 'variation':
		case 'simple':
		default:
			$regular_price = (float) $product->get_regular_price();
			$sale_price    = (float) $product->get_sale_price();

			if ( $sale_price < $regular_price ) {
				$percentages['max'] = ( ( $regular_price - $sale_price ) / $regular_price ) * 100;
			}
	}
	return $percentages;
}

function estore_woocommerce_woocommerce_get_product_sale_percentage_label( $percentages, $original_label ) {
	$label = '';

	$rounded_percentages = $percentages;
	$rounded_percentages = array_map( 'round', $percentages );
	$rounded_percentages = array_map( 'intval', $rounded_percentages );

	if ( ( empty( $percentages['min'] ) || empty( $percentages['max'] ) ) || ( $percentages['min'] === $percentages['max'] ) ) {
		$label = sprintf( _x( '-%1$d%%', 'product discount', 'estore-woocommerce' ), max( $rounded_percentages ) );
	} else {
		$label = sprintf( _x( '-%1$d%% / -%2$d%%', 'product discount', 'estore-woocommerce' ), $rounded_percentages['min'], $rounded_percentages['max'] );
	}

	$label = apply_filters( 'estore_woocommerce_woocommerce_sale_flash_percentage_label', $label, $rounded_percentages, $percentages, $original_label );

	return $label;
}
