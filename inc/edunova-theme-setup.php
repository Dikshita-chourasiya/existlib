<?php
defined( 'ABSPATH' ) or die();

function edunova_theme_setup() {

      /* Text Domain. */
      load_theme_textdomain( 'edunova' );

      /* Register custom menu. */
      register_nav_menu( 'primary', esc_html__( 'Primary Menu', 'edunova' ) );

      /* Enable support for Post Thumbnails. */
      add_theme_support( 'post-thumbnails' );

      /* Custom Logo */
      add_theme_support( 'custom-logo', array(    	
      'header-text' => array( 'site-title', 'site-description' ),
          ) );

      /* Add title tag support. */
      add_theme_support( 'title-tag' );

      /* Enable support for Custom Background. */
      add_theme_support( 'custom-background' );
      if ( ! isset( $content_width ) ) $content_width = 900;

      /* Add default posts and comments RSS feed links to head. */
      add_theme_support( 'automatic-feed-links' );

      /* Gutenberg */
      add_theme_support( 'wp-block-styles' );
      add_theme_support( 'align-wide' );
      add_theme_support('responsive-embeds');

    /* Enable support for HTML5 */
        add_theme_support( 'html5', array(
          'comment-form',
          'comment-list',
          'gallery',
          'caption',
        ) );

      /* Add editor style. */
        add_theme_support( 'editor-styles' );
        add_theme_support( 'dark-editor-style' );
      /*
        * This theme styles the visual editor to resemble the theme style,
        * specifically font, colors, icons, and column width.
        */
        add_editor_style('/assets/css/editor-style.css');

        /* Load editor style. */
          add_editor_style();
}

add_action( 'after_setup_theme', 'edunova_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function edunova_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'edunova_content_width', 640 );
}
add_action( 'after_setup_theme', 'edunova_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

 function edunova_theme_sidebars() {
    /*sidebar*/
    register_sidebar( array(
        'name' => esc_html__( 'Sidebar', 'edunova' ),
        'id' => 'blog-sidebar',
        'description' => esc_html__( 'The primary widget area', 'edunova' ),
        'before_widget' => '<div  class="widget single-blog-widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="title">',
      'after_title' => '</h3>',
    ) );
    register_sidebar( array(
      'name' => esc_html__( 'Footer Widgets 1', 'edunova' ),
      'id' => 'footer-widget-area-1',
      'description' => esc_html__( 'footer widget area', 'edunova' ),
      'before_widget' => '<div  class="widget footer-widget single-widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    ) ); 

      register_sidebar( array(
          'name' => esc_html__( 'Footer Widgets 2', 'edunova' ),
          'id' => 'footer-widget-area-2',
          'description' => esc_html__( 'footer widget area', 'edunova' ),
          'before_widget' => '<div class="widget footer-widget single-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ) ); 
      register_sidebar( array(
          'name' => esc_html__( 'Footer Widgets 3', 'edunova' ),
          'id' => 'footer-widget-area-3',
          'description' => esc_html__( 'footer widget area', 'edunova' ),
          'before_widget' => '<div class="widget footer-widget single-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ) ); 
      register_sidebar( array(
          'name' => esc_html__( 'Footer Widgets 4', 'edunova' ),
          'id' => 'footer-widget-area-4',
          'description' => esc_html__( 'footer widget area', 'edunova' ),
          'before_widget' => '<div class="widget footer-widget single-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ) ); 
}
add_action( 'widgets_init', 'edunova_theme_sidebars' );

function edunova_enqueue_styles()
{
         
       wp_enqueue_style('font', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), 1, 'all');
       wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 1, 'all');
       wp_enqueue_style('slick-slider', get_template_directory_uri() . '/assets/css/slick.css', array(), 1, 'all');
       wp_enqueue_style( 'slicktheme',   get_template_directory_uri() . '/assets/css/slick-theme.css' );
       wp_enqueue_style( 'slicknav',   get_template_directory_uri() . '/assets/css/slicknav.css' );
       wp_enqueue_style('edunova-default-theme', get_template_directory_uri() . '/assets/css/custom-style.css', array(), 1, 'all');
       wp_enqueue_style('edunova-style', get_stylesheet_uri());
       wp_enqueue_style( 'edunova-responsive',   get_template_directory_uri() . '/assets/css/responsive.css' );
       wp_enqueue_script( 'jquery-slicknav',  get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array( 'jquery' ), true, true); 
       wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), 1, 1, 1);
       wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.js', array(), 1, 1, 1);
       wp_enqueue_script('edunova-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), 1, 1, 1);
           
       if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
}
}
add_action('wp_enqueue_scripts', 'edunova_enqueue_styles');