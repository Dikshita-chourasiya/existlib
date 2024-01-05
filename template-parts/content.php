<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Edunova
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="single-blog1 mb-60">
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="blog-img">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(' ', array('class' => 'img-responsive')); ?></a>
            <div class="blog-hover">
                <i class="fa fa-link"></i>
            </div>
        </div>
        <?php endif ; ?>
        <div class="blog-content">
            <div class="blog-top">
                <p><?php echo esc_html__('By', 'edunova'); ?> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><?php the_author(); ?></a>  /  <a href="<?php the_permalink(); ?>"><?php the_date(); ?></a>  /  <i class="fa fa-comments-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></p>                
            </div>
            <div class="blog-bottom">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
                <a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'edunova' );?></a>
            </div>
        </div>
    </div>
</div>