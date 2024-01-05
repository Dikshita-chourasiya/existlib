<?php
/**
 * Template part for displaying results in single page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Edunova
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('blog-box'); ?>>
    <?php if( has_post_thumbnail() ) : ?>
        <div class="blog-details-img">
            <?php the_post_thumbnail('full'); ?>
        </div>
    <?php endif; ?>
    <div class="blog-details-content">
        
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
        <h6>By <?php the_author(); ?>  /  <?php the_date(); ?>  /  <i class="fa fa-comments-o"></i> <?php comments_number(); ?></h6>
        <div class="blog-data">
            <?php the_content();
            wp_link_pages( 
                array(
                    'before'    => '<nav><ul class="pagination custom-nav">',
                    'after'     => '</ul></nav>',
                    'separator' => ' ',
                ) 
            );
            ?>
        </div>
    </div>
</div>
<?php 
    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
?>