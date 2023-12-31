/*
** Scripts within the customizer controls window.
*/

(function( $ ) {
	wp.customize.bind( 'ready', function() {

	/*
	** Reusable Functions
	*/
		var optPrefix = '#customize-control-estore_woocommerce_options-';
		
		// Label
		function estore_woocommerce_customizer_label( id, title ) {

			// Site Identity

			if ( id === 'custom_logo' || id === 'site_icon' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-estore_woocommerce_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Topbar Option

			if ( id === 'estore_woocommerce_topbar_checkout_button' || id === 'estore_woocommerce_topbar1_wishlist_url' || id === 'estore_woocommerce_topbar_order_button' || id === 'estore_woocommerce_topbar_text' )  {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-estore_woocommerce_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Colors

			if ( id === 'estore_woocommerce_theme_color' || id === 'background_color' || id === 'background_image' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-estore_woocommerce_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Header Image

			if ( id === 'header_image' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-estore_woocommerce_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			//  Header

			if ( id === 'estore_woocommerce_header_location_button' || id === 'estore_woocommerce_topbar_phone_text' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-estore_woocommerce_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			//  Best Sells

			if ( id === 'estore_woocommerce_best_sells_section_heading' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-estore_woocommerce_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Slider

			if ( id === 'estore_woocommerce_top_slider_page1' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-estore_woocommerce_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Topbar

			if ( id === 'estore_woocommerce_topbar1_wishlist_button'  ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-estore_woocommerce_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Footer

			if ( id === 'estore_woocommerce_footer_text_setting' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-estore_woocommerce_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}
			
		}


	/*
	** Tabs
	*/

	    // Site Identity
		estore_woocommerce_customizer_label( 'custom_logo', 'Logo Setup' );
		estore_woocommerce_customizer_label( 'site_icon', 'Favicon' );

		// Topbar Option
		estore_woocommerce_customizer_label( 'estore_woocommerce_topbar_checkout_button', 'Checkout Button' );
		estore_woocommerce_customizer_label( 'estore_woocommerce_topbar1_wishlist_url', 'Wishlist' );
		estore_woocommerce_customizer_label( 'estore_woocommerce_topbar_order_button', 'Traking Button' );
		estore_woocommerce_customizer_label( 'estore_woocommerce_topbar_text', 'Text' );

		// Colors
		estore_woocommerce_customizer_label( 'estore_woocommerce_theme_color', 'Theme Color' );
		estore_woocommerce_customizer_label( 'background_color', 'Colors' );
		estore_woocommerce_customizer_label( 'background_image', 'Image' );

		//Header Image
		estore_woocommerce_customizer_label( 'header_image', 'Header Image' );

		// Header
		estore_woocommerce_customizer_label( 'estore_woocommerce_header_location_button', 'Location' );
		estore_woocommerce_customizer_label( 'estore_woocommerce_topbar_phone_text', 'Phone Number' );

		// Best Sells
		estore_woocommerce_customizer_label( 'estore_woocommerce_best_sells_section_heading', 'Best Sells' );

		//Slider
		estore_woocommerce_customizer_label( 'estore_woocommerce_top_slider_page1', 'Slider' );
		
		// Wishlist button
		estore_woocommerce_customizer_label( 'estore_woocommerce_topbar1_wishlist_button', 'Wishlist button' );

		//Footer
		estore_woocommerce_customizer_label( 'estore_woocommerce_footer_text_setting', 'Footer' );
	

	}); // wp.customize ready

})( jQuery );
