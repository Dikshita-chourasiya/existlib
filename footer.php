<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Edunova
 */
?>
</div>
  <footer class="footer-area">
    <?php if( is_active_sidebar( 'footer-widget-area-1') || is_active_sidebar( 'footer-widget-area-1') ||is_active_sidebar( 'footer-widget-area-1') || is_active_sidebar( 'footer-widget-area-1') ) { ?>
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <?php if( is_active_sidebar( 'footer-widget-area-1') ) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <?php dynamic_sidebar( 'footer-widget-area-1' ); ?>
                        </div>
                    <?php } ?>
                    <?php if( is_active_sidebar( 'footer-widget-area-2') ) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                        <?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
                        </div>
                    <?php } ?>
                    <?php if( is_active_sidebar( 'footer-widget-area-3') ) { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                        <?php dynamic_sidebar( 'footer-widget-area-3' ); ?>
                        </div>
                    <?php } ?>
                    <?php if( is_active_sidebar( 'footer-widget-area-4') ) { ?>
                        <div class="col-lg-3 col-md-5 col-sm-5">
                        <?php dynamic_sidebar( 'footer-widget-area-4' ); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>   
    <?php } ?>
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <p> <?php esc_html_e('&copy; 2023. All Rights Reserved','edunova'); ?></p>
                </div> 
            </div>
        </div>    
    </div>
</footer>
<!-- End-footer-section -->
<?php wp_footer(); ?>
</body>
</html>