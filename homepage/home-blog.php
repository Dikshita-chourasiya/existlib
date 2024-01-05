<!-- Blog Area Start -->
<div class="blog-area pt-150 pb-150">
    <div class="container">
        <?php 
        $edunova_blog_title = get_theme_mod( "edunova_blog_Section_Title_Name", "LATEST FROM BLOG");
        if ( ! empty ( $edunova_blog_title ) ) { ?>
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        
                        <h2><?php echo esc_html(get_theme_mod("edunova_blog_Section_Title_Name" , "LATEST FROM BLOG"));?></h2>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="row">
            <?php                     
            $args = array('post_type' => 'post', 'posts_per_page' =>3,'post__not_in' => get_option( 'sticky_posts' ) );
            $blog_post = new WP_Query( $args );
            if( $blog_post->have_posts() )
            { 
                while($blog_post->have_posts()): $blog_post->the_post();     
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="shad">
                            <div class="blog-img">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(' ',array('class' => 'img-responsive'));  ?></a>
                                <div class="blog-hover">
                                    <a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-top">
                                    <p><?php echo esc_html__('By', 'edunova'); ?> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><?php the_author();?></a>  / <a href="<?php the_permalink(); ?>"> <?php the_date(); ?> </a> /  <i class="fa fa-comments-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number();?></a></p>
                                </div>
                                <div class="blog-bottom">
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <a href="<?php the_permalink(); ?>"><?php echo esc_html__('Read More', 'edunova'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                endwhile;
                wp_reset_postdata();
            } ?>
        </div>
    </div>
</div>
<!-- Blog Area End -->