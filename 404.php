<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Edunova
 */

get_header();
?>
<section class="same-section-spacing error-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="error-box">
                    <h1><?php esc_html_e( '404', 'edunova' ); ?></h1>
                    <span><?php esc_html_e( 'OOOPS !', 'edunova' ); ?></span>
                    <p><?php esc_html_e( 'Something Went Wrong. Go Back Home', 'edunova' ); ?></p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-1"> <i class="fa fa-angle-double-left"></i><?php esc_html_e( 'Back To Home', 'edunova' ); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- error end-->
<?php get_footer(); ?>