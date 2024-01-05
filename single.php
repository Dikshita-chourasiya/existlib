<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Edunova
 */
get_header(); ?>
<div id="content" class="site-content">
    <section class="blog-details-area pt-150 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <!-- item -->
                        <div class="col-lg-12 col-md-12">
                            <?php
                            while ( have_posts() ) : the_post();

                              get_template_part( 'template-parts/content', 'single' );

                            endwhile; // End of the loop.
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                       <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>