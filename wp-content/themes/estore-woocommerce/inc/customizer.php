<?php
/**
 * Estore Woocommerce Theme Customizer
 *
 * @link: https://developer.wordpress.org/themes/customize-api/customizer-objects/
 *
 * @package Estore Woocommerce
 */

use WPTRT\Customize\Section\Estore_Woocommerce_Button;

add_action( 'customize_register', function( $manager ) {

    $manager->register_section_type( Estore_Woocommerce_Button::class );

    $manager->add_section(
        new Estore_Woocommerce_Button( $manager, 'estore_woocommerce_pro', [
            'title'       => __( 'Estore Woocommerce Pro', 'estore-woocommerce' ),
            'priority'    => 0,
            'button_text' => __( 'GET PREMIUM', 'estore-woocommerce' ),
            'button_url'  => esc_url( 'https://www.themagnifico.net/themes/estore-wordpress-theme/', 'estore-woocommerce')
        ] )
    );

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_script(
        'estore-woocommerce-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
        [ 'customize-controls' ],
        $version,
        true
    );

    wp_enqueue_style(
        'estore-woocommerce-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
        [ 'customize-controls' ],
        $version
    );

} );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function estore_woocommerce_customize_register($wp_customize){
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';

    //TopBar
    $wp_customize->add_section('estore_woocommerce_topbar',array(
        'title' => esc_html__('Topbar Option','estore-woocommerce')
    ));

    $wp_customize->add_setting('estore_woocommerce_topbar_phone_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('estore_woocommerce_topbar_phone_text',array(
        'label' => esc_html__('Phone Text','estore-woocommerce'),
        'section' => 'estore_woocommerce_topbar',
        'setting' => 'estore_woocommerce_topbar_phone_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('estore_woocommerce_topbar_phone_number',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('estore_woocommerce_topbar_phone_number',array(
        'label' => esc_html__('Phone Number','estore-woocommerce'),
        'section' => 'estore_woocommerce_topbar',
        'setting' => 'estore_woocommerce_topbar_phone_number',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('estore_woocommerce_topbar_checkout_button',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('estore_woocommerce_topbar_checkout_button',array(
        'label' => esc_html__('CheckOut Button','estore-woocommerce'),
        'section' => 'estore_woocommerce_topbar',
        'setting' => 'estore_woocommerce_topbar_checkout_button',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('estore_woocommerce_topbar_about_url',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('estore_woocommerce_topbar_about_url',array(
        'label' => esc_html__('Button Url 1','estore-woocommerce'),
        'section' => 'estore_woocommerce_topbar',
        'setting' => 'estore_woocommerce_topbar_about_url',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('estore_woocommerce_topbar_order_button',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('estore_woocommerce_topbar_order_button',array(
        'label' => esc_html__('Button Text 3','estore-woocommerce'),
        'section' => 'estore_woocommerce_topbar',
        'setting' => 'estore_woocommerce_topbar_order_button',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('estore_woocommerce_topbar_order_url',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('estore_woocommerce_topbar_order_url',array(
        'label' => esc_html__('Button Url 3','estore-woocommerce'),
        'section' => 'estore_woocommerce_topbar',
        'setting' => 'estore_woocommerce_topbar_order_url',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('estore_woocommerce_topbar1_wishlist_url',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('estore_woocommerce_topbar1_wishlist_url',array(
        'label' => esc_html__('Wishlist url','estore-woocommerce'),
        'section' => 'estore_woocommerce_topbar',
        'setting' => 'estore_woocommerce_topbar1_wishlist_url',
        'type'  => 'text'
    ));

    //Header
    $wp_customize->add_section('estore_woocommerce_header',array(
        'title' => esc_html__('Header Option','estore-woocommerce')
    ));

    $wp_customize->add_setting('estore_woocommerce_header_location_button',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('estore_woocommerce_header_location_button',array(
        'label' => esc_html__('Location Text','estore-woocommerce'),
        'section' => 'estore_woocommerce_header',
        'setting' => 'estore_woocommerce_header_location_button',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('estore_woocommerce_header_locaion_url',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('estore_woocommerce_header_locaion_url',array(
        'label' => esc_html__('Location Url','estore-woocommerce'),
        'section' => 'estore_woocommerce_header',
        'setting' => 'estore_woocommerce_header_locaion_url',
        'type'  => 'text'
    ));

     //Slider
    $wp_customize->add_section('estore_woocommerce_top_slider',array(
        'title' => esc_html__('Slider Settings','estore-woocommerce'),
        'description' => esc_html__('Here you have to add 3 different pages in below dropdown. Note: Image Dimensions 1400 x 550 px','estore-woocommerce')
    ));

    for ( $estore_woocommerce_count = 1; $estore_woocommerce_count <= 3; $estore_woocommerce_count++ ) {

        $wp_customize->add_setting( 'estore_woocommerce_top_slider_page' . $estore_woocommerce_count, array(
            'default'           => '',
            'sanitize_callback' => 'estore_woocommerce_sanitize_dropdown_pages'
        ) );
        $wp_customize->add_control( 'estore_woocommerce_top_slider_page' . $estore_woocommerce_count, array(
            'label'    => __( 'Select Slide Page', 'estore-woocommerce' ),
            'section'  => 'estore_woocommerce_top_slider',
            'type'     => 'dropdown-pages'
        ) );
    }

    // Best Sells Product
    $wp_customize->add_section('estore_woocommerce_best_sells',array(
        'title' => esc_html__('Best Sells Option','estore-woocommerce')
    ));

    $wp_customize->add_setting('estore_woocommerce_best_sells_section_heading',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('estore_woocommerce_best_sells_section_heading',array(
        'label' => __('Heading','estore-woocommerce'),
        'section' => 'estore_woocommerce_best_sells',
        'setting' => 'estore_woocommerce_best_sells_section_heading',
        'type'    => 'text'
    ));

    $wp_customize->add_setting('estore_woocommerce_best_sells_section_button',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('estore_woocommerce_best_sells_section_button',array(
        'label' => esc_html__('Button Text','estore-woocommerce'),
        'section' => 'estore_woocommerce_best_sells',
        'setting' => 'estore_woocommerce_best_sells_section_button',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('estore_woocommerce_best_sells_section_button_url',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('estore_woocommerce_best_sells_section_button_url',array(
        'label' => esc_html__('Button Url ','estore-woocommerce'),
        'section' => 'estore_woocommerce_best_sells',
        'setting' => 'estore_woocommerce_best_sells_section_button_url',
        'type'  => 'text'
    ));

    if(class_exists('woocommerce')){
        $estore_woocommerce_args = array(
            'type'                     => 'product',
            'child_of'                 => 0,
            'parent'                   => '',
            'orderby'                  => 'term_group',
            'order'                    => 'ASC',
            'hide_empty'               => false,
            'hierarchical'             => 1,
            'number'                   => '',
            'taxonomy'                 => 'product_cat',
            'pad_counts'               => false
        );
        $categories = get_categories( $estore_woocommerce_args );
        $cats = array();
        $i = 0;
        foreach($categories as $category){
            if($i==0){
                $default = $category->slug;
                $i++;
            }
            $cats[$category->slug] = $category->name;
        }
        $wp_customize->add_setting('estore_woocommerce_cate_tab',array(
            'sanitize_callback' => 'estore_woocommerce_sanitize_select',
        ));
        $wp_customize->add_control('estore_woocommerce_cate_tab',array(
            'type'    => 'select',
            'choices' => $cats,
            'label' => __('Select Product Category','estore-woocommerce'),
            'section' => 'estore_woocommerce_best_sells',
        ));
    }
    
    // Footer
    $wp_customize->add_section('estore_woocommerce_site_footer_section', array(
        'title' => esc_html__('Footer', 'estore-woocommerce'),
    ));

    $wp_customize->add_setting('estore_woocommerce_footer_text_setting', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('estore_woocommerce_footer_text_setting', array(
        'label' => __('Replace the footer text', 'estore-woocommerce'),
        'section' => 'estore_woocommerce_site_footer_section',
        'priority' => 1,
        'type' => 'text',
    ));
}
add_action('customize_register', 'estore_woocommerce_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function estore_woocommerce_customize_partial_blogname(){
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function estore_woocommerce_customize_partial_blogdescription(){
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function estore_woocommerce_customize_preview_js(){
    wp_enqueue_script('estore-woocommerce-customizer', esc_url(get_template_directory_uri()) . '/assets/js/customizer.js', array('customize-preview'), '20151215', true);
}
add_action('customize_preview_init', 'estore_woocommerce_customize_preview_js');

/*
** Load dynamic logic for the customizer controls area.
*/
function estore_woocommerce_panels_js() {
    wp_enqueue_style( 'estore-woocommerce-customizer-layout-css', get_theme_file_uri( '/assets/css/customizer-layout.css' ) );
    wp_enqueue_script( 'estore-woocommerce-customize-layout', get_theme_file_uri( '/assets/js/customize-layout.js' ), array(), '1.2', true );
}
add_action( 'customize_controls_enqueue_scripts', 'estore_woocommerce_panels_js' );