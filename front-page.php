<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package clinix_s
 */

get_header(); ?>

	<div class="wrap">
		<main class="content" role="main">

<?php 

			 //Place the home widgets.
			 //Add widget support on the home page.
			 
      if   ( is_active_sidebar( 'home-left' ) || is_active_sidebar( 'home-ctr' ) || is_active_sidebar( 'home-right' ) ) { 
			  
			  
			}?>
			
			<div class="homewidgets">
         
      <div class="widget home-left">
        <?php dynamic_sidebar( 'home-left' );?>
      <h3 class="widget-title"></h3>
      </div><!-- end .home-left -->  

      <div class="widget home-ctr">
        <?php dynamic_sidebar( 'home-ctr' );?>
      <h3 class="widget-title"></h3>
      </div><!-- end .home-middle -->  

      <div class="widget home-right">
        <?php dynamic_sidebar( 'home-right' );?>
      <h3 class="widget-title"></h3>
      </div><!-- end .home-featured-right -->
      
    </div><!--end .homewidgets-->
      
      




    </div><!--.content -->
		</main><!-- main -->
	</div><!-- .wrap -->


<?php get_footer(); ?>
