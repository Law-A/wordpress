<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'ev_bike_shop_logo_resizer',
		'label'       => esc_html__( 'Adjust Logo Size', 'ev-bike-shop' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ev_bike_shop_enable_logo_text',
		'section'     => 'title_tagline',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'ev-bike-shop' ) . '</h3>',
		'priority'    => 10,
	] );

  	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ev_bike_shop_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'ev-bike-shop' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ev-bike-shop' ),
			'off' => esc_html__( 'Disable', 'ev-bike-shop' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ev_bike_shop_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'ev-bike-shop' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ev-bike-shop' ),
			'off' => esc_html__( 'Disable', 'ev-bike-shop' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ev_bike_shop_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'ev-bike-shop' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'ev_bike_shop_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ev_bike_shop_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'ev-bike-shop' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'ev_bike_shop_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	// HEADER SECTION

	Kirki::add_section( 'ev_bike_shop_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'ev-bike-shop' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'ev-bike-shop' ),
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Advertisement Text', 'ev-bike-shop' ),
		'settings' => 'ev_bike_shop_header_advertisement_text',
		'section'  => 'ev_bike_shop_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ev_bike_shop_header_phone_number_heading',
		'section'     => 'ev_bike_shop_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'ev-bike-shop' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'ev_bike_shop_header_phone_number',
		'section'  => 'ev_bike_shop_section_header',
		'default'  => '',
		'sanitize_callback' => 'ev_bike_shop_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ev_bike_shop_enable_email_heading',
		'section'     => 'ev_bike_shop_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Email Address', 'ev-bike-shop' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'ev_bike_shop_header_email',
		'section'  => 'ev_bike_shop_section_header',
		'default'  => '',
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ev_bike_shop_enable_button_heading',
		'section'     => 'ev_bike_shop_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Book Now Button', 'ev-bike-shop' ) . '</h3>',
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Button Text', 'ev-bike-shop' ),
		'settings' => 'ev_bike_shop_header_button_text',
		'section'  => 'ev_bike_shop_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    =>  esc_html__( 'Button Link', 'ev-bike-shop' ),
		'settings' => 'ev_bike_shop_header_button_url',
		'section'  => 'ev_bike_shop_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ev_bike_shop_details_button_heading',
		'section'     => 'ev_bike_shop_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'More Details Button', 'ev-bike-shop' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Button Text', 'ev-bike-shop' ),
		'settings' => 'ev_bike_shop_details_button_text',
		'section'  => 'ev_bike_shop_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    =>  esc_html__( 'Button Link', 'ev-bike-shop' ),
		'settings' => 'ev_bike_shop_details_button_url',
		'section'  => 'ev_bike_shop_section_header',
		'default'  => '',
	] );

	// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'ev_bike_shop_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'ev-bike-shop' ),
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'ev-bike-shop' ),
		'panel'    => 'woocommerce',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ev_bike_shop_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'ev-bike-shop' ),
		'section'     => 'ev_bike_shop_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'ev-bike-shop' ),
		'settings'    => 'ev_bike_shop_shop_page_layout',
		'section'     => 'ev_bike_shop_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'ev-bike-shop' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'ev-bike-shop' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'ev_bike_shop_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]

	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'ev-bike-shop' ),
		'settings'    => 'ev_bike_shop_products_per_row',
		'section'     => 'ev_bike_shop_woocommerce_settings',
		'default'     => '3',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'ev-bike-shop' ),
		'settings'    => 'ev_bike_shop_products_per_page',
		'section'     => 'ev_bike_shop_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ev_bike_shop_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'ev-bike-shop' ),
		'section'     => 'ev_bike_shop_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'ev-bike-shop' ),
		'settings'    => 'ev_bike_shop_single_product_sidebar_layout',
		'section'     => 'ev_bike_shop_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'ev-bike-shop' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'ev-bike-shop' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'ev_bike_shop_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );
	
	//ADDITIONAL SETTINGS

	Kirki::add_section( 'ev_bike_shop_additional_setting', array(
		'title'          => esc_html__( 'Additional Settings', 'ev-bike-shop' ),
		'description'    => esc_html__( 'Additional Settings of themes', 'ev-bike-shop' ),
		'priority'       => 10,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ev_bike_shop_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'ev-bike-shop' ),
		'section'     => 'ev_bike_shop_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ev_bike_shop_header_background_attachment_heading',
		'section'     => 'ev_bike_shop_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'ev-bike-shop' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'ev_bike_shop_header_background_attachment',
		'section'     => 'ev_bike_shop_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'ev-bike-shop' ),
			'fixed' => esc_html__( 'Fixed', 'ev-bike-shop' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	 ) );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ev_bike_shop_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'ev-bike-shop' ),
		'section'     => 'ev_bike_shop_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ev_bike_shop_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'ev-bike-shop' ),
		'section'     => 'ev_bike_shop_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'ev_bike_shop_blog_post', array(
		'title'          => esc_html__( 'Post Settings', 'ev-bike-shop' ),
		'description'    => esc_html__( 'Here you can add post information.', 'ev-bike-shop' ),
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ev_bike_shop_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'ev-bike-shop' ),
		'section'     => 'ev_bike_shop_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ev_bike_shop_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'ev-bike-shop' ),
		'section'     => 'ev_bike_shop_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ev_bike_shop_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'ev-bike-shop' ),
		'section'     => 'ev_bike_shop_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ev_bike_shop_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'ev-bike-shop' ),
		'section'     => 'ev_bike_shop_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ev_bike_shop_length_setting_heading',
		'section'     => 'ev_bike_shop_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'ev-bike-shop' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'ev_bike_shop_length_setting',
		'section'     => 'ev_bike_shop_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
		 			'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'ev-bike-shop' ),
		'settings'    => 'ev_bike_shop_single_post_tag',
		'section'     => 'ev_bike_shop_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'ev-bike-shop' ),
		'settings'    => 'ev_bike_shop_single_post_category',
		'section'     => 'ev_bike_shop_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ev_bike_shop_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'ev-bike-shop' ),
		'section'     => 'ev_bike_shop_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ev_bike_shop_single_post_radius',
		'section'     => 'ev_bike_shop_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'ev-bike-shop' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'ev_bike_shop_single_post_border_radius',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'ev-bike-shop' ),
		'type'        => 'text',
		'section'     => 'ev_bike_shop_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );

	// FOOTER SECTION

	Kirki::add_section( 'ev_bike_shop_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'ev-bike-shop' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'ev-bike-shop' ),
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ev_bike_shop_footer_text_heading',
		'section'     => 'ev_bike_shop_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'ev-bike-shop' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'ev_bike_shop_footer_text',
		'section'  => 'ev_bike_shop_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ev_bike_shop_footer_enable_heading',
		'section'     => 'ev_bike_shop_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'ev-bike-shop' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ev_bike_shop_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'ev-bike-shop' ),
		'section'     => 'ev_bike_shop_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ev-bike-shop' ),
			'off' => esc_html__( 'Disable', 'ev-bike-shop' ),
		],
	] );
}
