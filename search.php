<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Edunova
 */

get_header(); ?>

<div id="content" class="site-content">
    <section class="blog-area pt-150 pb-150 single-blog">
        <div class="container">
            <div class="row">      
              <div class="col-lg-8 mt-4 pt-2">
                <?php if ( have_posts() ) :
                /* Start the Loop */
                while ( have_posts() ) : the_post(); 
                  get_template_part( 'template-parts/content', '' ); 
                endwhile ; 
                else:
                get_template_part( 'template-parts/content', 'none' );
                endif ; ?>
                <!-- Pagination -->
                  
                <?php // Previous/next page navigation.
                the_posts_pagination( array(
                'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
                'next_text'          => '<i class="fa fa-angle-double-right"></i>',
                ) ); ?> 
            
              </div>
                
              <!-- Side-bar -->
              <div class="col-lg-4 col-md-12">
                <?php get_sidebar(); ?> 
              </div>  
         
            </div> 
        </div>
    </section>
</div>
<?php get_footer(); ?>