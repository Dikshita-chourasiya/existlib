<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Edunova
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="shortcut icon" href="#" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'edunova' ); ?></a>
  <header class="top">
    
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="header-top-left">
                        <p><?php echo esc_html(get_theme_mod("edunova_topheader_Section_Title_Name" , "HAVE ANY QUESTION ? +123 456 7809"));?></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="header-top-right text-md-end text-center">
                        <ul>
                            <li><a href="<?php echo esc_html(get_theme_mod("edunova_topheader_Section_Button_url" , "#"));?>"><?php echo esc_html(get_theme_mod("edunova_topheader_Section_Subtitle" , "LOGIN"));?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Menu-start-area -->
    <div class="header-area header-sticky two">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">                 
                      <?php
                      $custom_logo_id = get_theme_mod( 'custom_logo' );
                      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                      if ( has_custom_logo() ) { ?>
                        <!-- Brand -->
                          <?php the_custom_logo(); ?> 
                      <?php 
                      } 
                      if (display_header_text()==true){ ?>
                        <div>
                          <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
                              <h3 class="site-title"><?php bloginfo('name'); ?></h3>
                          </a>
                          <p><span class="site-description"><?php  bloginfo('description'); ?></span></p>
                        </div>
                      <?php } ?>                        
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="main-navbar navbar navbar-expand-lg navbar-light">
                        <div class="content-wrapper one collapse navbar-collapse justify-content-end">
                            <nav>
                                <?php 
                                if ( has_nav_menu( 'primary' ) ) :
                        
                                    wp_nav_menu( array (
                                    'theme_location' => 'primary',
                                    'container'  => 'ul',
                                    'menu_class' => 'navbar-nav navbar__nav nav menuon',
                                    'menu_id'        => 'primary-menu',
                                    ) 
                                );
                                else :
                                    printf(
                                    '<ul class="navbar-nav"><li class="nav-item"><a class="nav-link" href="%1$s">%2$s</a></li></ul>',
                                    esc_url( admin_url( 'nav-menus.php' ) ),
                                    esc_html( 'Create New Menu', 'edunova' )
                                    );
                                endif;
                                ?>
                            </nav>
                        </div>              
                    </div>
                </div>
                
                <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); 
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) {  ?>
                    <div class="mobile-menu" data-type="logo" data-link="<?php echo esc_attr( home_url('/') ); ?>" data-logo="<?php echo esc_attr( $logo[0] ); ?>"> </div>
                <?php } else{ ?>
                    <div class="mobile-menu" data-type="text" data-link="<?php echo esc_attr( home_url('/') ); ?>" data-logo="<?php bloginfo( 'name' ); ?>"> </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- End-Menu-area-->
</header>
<!-- Header-end -->
<?php if(!(is_page_template( 'edunova-homepage.php' ) || is_404() )) { ?>
    <div class="banner-area-wrapper">
        <div class="banner-area text-center"> 
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <?php if (is_home() || is_front_page()) { ?>
                                    <h2><?php echo esc_html__('blog', 'edunova') ?></h2>
                                <?php } elseif(is_search()){?>
                                    <h2><?php   /* translators: %s: search term */             
                                    printf( esc_html__( 'Search Results for: %s', 'edunova' ), '<span>' . get_search_query() . '</span>' ); ?>
                                    </h2>
                                <?php }else if(is_archive()){ ?>
                                    <h2><?php the_archive_title(); ?></h2>
                                <?php }else{  ?>                      
                                    <h2><?php the_title(); ?></h2>
                                    
                                    <?php 
                                } ?>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
<?php } ?>