<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package EV Bike Shop
 */

get_header(); ?>

<div class="header-image-box text-center">
  <div class="container">
    <?php if ( get_theme_mod('ev_bike_shop_header_page_title' , true)) : ?>
      <h1><?php esc_html_e('404 Error!', 'ev-bike-shop'); ?></h1>
    <?php endif; ?>
    <?php if ( get_theme_mod('ev_bike_shop_header_breadcrumb' , true)) : ?>
      <div class="crumb-box mt-3">
        <?php ev_bike_shop_the_breadcrumb(); ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<div id="content">
	<div class="container">
		<div class="py-5 text-center">
			<p><?php esc_html_e('The page you are looking for may have been moved, deleted, or possibly never existed.', 'ev-bike-shop'); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>