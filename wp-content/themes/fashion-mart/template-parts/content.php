<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emart-shop
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array('emart-blog-post') ); ?>>

 	 <?php
    /**
    * Hook - emart_shop_posts_blog_media.
    *
    * @hooked emart_shop_posts_formats_thumbnail - 10
    */
    do_action( 'emart_shop_posts_blog_media' );
    ?>

     <div class="d-flex">
    <div class="align-self-start">
    <div class="archive post-date <?php echo esc_attr($space);?>">
        <span class="day"><?php echo get_the_date('d'); ?></span><span class="month"><?php echo get_the_date('M'); ?></span>
    </div>
    </div>
    <div class="post">
    	
		<?php
        /**
        * Hook - shoper_site_content_type.
        *
		* @hooked site_loop_heading - 10
        * @hooked render_meta_list	- 20
		* @hooked site_content_type - 30
        */
		
		$meta = array();
		
		if ( is_singular() ) :
			
			if( emart_shop_get_option('signle_meta_hide') != true ){
				
				$meta = array( 'author', 'date', 'category', 'comments' );
			}
			$meta  	 = apply_filters( 'emart_shop_single_post_meta', $meta );
			
		else :
			if( emart_shop_get_option('blog_meta_hide') != true ){
				
				$meta = array( 'author', 'date','category' );
			}
			$meta  	 = apply_filters( 'emart_shop_blog_meta', $meta );
		 endif;
	
		
		 do_action( 'emart_shop_site_content_type', $meta  );
        ?>
      
       
   
     </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
