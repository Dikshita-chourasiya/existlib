<?php 
/**
 * Edunova Theme Customizer
 *
 * @package Edunova
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function edunova_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'edunova_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'edunova_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'edunova_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function edunova_customize_partial_blogname() {
	bloginfo( 'name' );
}
/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function edunova_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function edunova_customize_preview_js() {
	wp_enqueue_script( 'edunova-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '', true );
}
add_action( 'customize_preview_init', 'edunova_customize_preview_js' );


/***
    *** Register Customizer Add Panel Function Code start Here
***/
function edunova_Customizer_Add_Panel_Function( $wp_customize ) {
	// Create Custom Panel for Home Page.
       $wp_customize->add_panel('edunova_Panel_Function' ,array(
              'theme_support' => '',
              'title'  => __('Edunova Theme Options','edunova') ,
              'priority' => 1,
       ));    
}
     add_action( 'customize_register', 'edunova_Customizer_Add_Panel_Function' );

/***
    *** Register Customizer Home Banner Section Code start Here
***/
class edunova_Banner_Customizer {

    public static function edunova__Banner_Section( $wp_customize ) {
 		// Add Home Banner Section Add Section for home page.
        $wp_customize->add_section( 'edunova_For_Home_Page_Banner_Section' , array(
			'title'    => __(' Home Banner Section ','edunova'),
			'panel'    => 'edunova_Panel_Function',
			'priority' => 2,
		) );

		//  ============================================================
	    //       Home Page Banner Section Title          
	    //  ============================================================
        $wp_customize->add_setting( 'edunova_Banner_Section_Title_Name', array(
            'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
              
        ) );

        // Add Banner Title Add control
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
               'edunova_Home_Banner_Section_Title',
                array(
                    'label'    => __( ' Banner Title ','edunova' ),
                    'section'  => 'edunova_For_Home_Page_Banner_Section',
                    'settings' => 'edunova_Banner_Section_Title_Name',
                    'type'     => 'text',
                    'priority' => 4,
                )
            )
        );
        //  ============================================================
	    //       Home Page Banner Section Content        
	    //  ============================================================
            $wp_customize->add_setting( 'edunova_Banner_Section_Content', array(
              'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',              
        ) );

        // Add Banner Content Add control
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
               'edunova_Home_Banner_Section_Content',
                array(
                    'label'    => __( ' Banner Content ','edunova' ),
                    'section'  => 'edunova_For_Home_Page_Banner_Section',
                    'settings' => 'edunova_Banner_Section_Content',
                    'type'     => 'textarea',
                    'priority' => 3,
                )
            )
        );
		//  ============================================================
	    //       Home Page Banner Section Button Text         
	    //  ============================================================
        $wp_customize->add_setting( 'edunova_Banner_Section_Button_Text', array(
            'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',              
        ) );

        // Button Text Add control
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'edunova_Home_Banner_Section_Button_Text',
            array(
                'label'    => __( ' Button Text ','edunova' ),
                'section'  => 'edunova_For_Home_Page_Banner_Section',
                'settings' => 'edunova_Banner_Section_Button_Text',
                'type'     => 'text',
                'priority' => 4,
            )
        )
        );
		//  ============================================================
	    //       Home Page Banner Section Button Url Path          
	    //  ============================================================
            $wp_customize->add_setting( 'edunova_Banner_Btn_URl_Path', array(
                'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
              
        ) );

        // Add Button Url Path Add control
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
                'edunova_Custom_Button_URl_Path',
                array(
                    'label'    => __( ' Button Url ','edunova' ),
                    'section'  => 'edunova_For_Home_Page_Banner_Section',
                    'settings' => 'edunova_Banner_Btn_URl_Path',
                    'type'     => 'text',
                    'priority' => 5,
                )
            )
        );

		//  ============================================================
	    //       Home Page Banner Section Image Upload         
	    //  ============================================================
	    $wp_customize->add_setting( 'edunova_Banner_Section_Image_Upload', array( 'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
	    )); 
	        	   
	    $wp_customize->add_control( new WP_Customize_Image_Control( 
	    	$wp_customize, 'edunova_Home_Banner_Section_Image_Upload_Id', array(
	        'label'    => ' Banner Image ',
	        'priority' => 1,
	        'section'  => 'edunova_For_Home_Page_Banner_Section',
	        'settings' => 'edunova_Banner_Section_Image_Upload',
	        'button_labels' => array(
	                    // All These labels are optional
	                    'select' => __( 'Select Image','edunova' ),
	                    'remove' => __( 'Remove Image','edunova' ),
	                    'change' => __( 'Change Image','edunova' )
	                    )
	    )));



	    // Sanitize Text Function For Home Banner
           function Home_Banner_Section_Sanitize_Text_Function( $text ) {
              return sanitize_text_field( $text );
          }

    }
}
add_action( 'customize_register', array('edunova_Banner_Customizer', 'edunova__Banner_Section') );


/***
    *** Register Customizer Home Blog Section Code start Here
***/
class edunova_Blog_Customizer {

    public static function edunova__Blog_Section( $wp_customize ) {
        // Add Home Blog Section Add Section for home page.
        $wp_customize->add_section( 'edunova_For_Home_Page_Blog_Section' , array(
         'title'    => __('Blog Section ','edunova'),
         'panel'    => 'edunova_Panel_Function',
         'priority' => 2,
        ) );

        //  ============================================================
        //       Home Page Blog Section Title          
        //  ============================================================
        $wp_customize->add_setting( 'edunova_blog_Section_Title_Name', array(
           'sanitize_callback' => 'Home_Blog_Section_Sanitize_Text_Function',
           
        ) );

        // Add Blog Title control
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
                'edunova_Home_Blog_Section_Title',
                    array(
                      'label'    => __( ' Blog Title ','edunova' ),
                      'section'  => 'edunova_For_Home_Page_Blog_Section',
                      'settings' => 'edunova_blog_Section_Title_Name',
                      'type'     => 'text',
                      'priority' => 3,
                    )
            )
        );
        //  ============================================================
        //       Home Page Blog Section Content        
        //  ============================================================
        $wp_customize->add_setting( 'edunova_blog_Section_Subtitle', array(
           'sanitize_callback' => 'Home_Blog_Section_Sanitize_Text_Function',
           
        ) );

        // Add Blog Content control
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
               'edunova_Home_Blog_Section_Content',
                   array(
                       'label'    => __( ' Blog Subtitle ','edunova' ),
                       'section'  => 'edunova_For_Home_Page_Blog_Section',
                       'settings' => 'edunova_blog_Section_Subtitle',
                       'type'     => 'textarea',
                       'priority' => 4,
                   )
            )
        );

        // Sanitize Text Function For Home Banner
        function Home_Blog_Section_Sanitize_Text_Function( $text ) {
           return sanitize_text_field( $text );
        }
    }
}
add_action( 'customize_register', array('edunova_Blog_Customizer', 'edunova__Blog_Section') );

/***
    *** Register Customizer Home topheader Section Code start Here
***/
class edunova_topheader_Customizer {

    public static function edunova__topheader_Section( $wp_customize ) {
        // Add Home topheader Section Add Section for home page.
        $wp_customize->add_section( 'edunova_For_Home_Page_topheader_Section' , array(
         'title'    => __('Top Header Section ','edunova'),
         'panel'    => 'edunova_Panel_Function',
         'priority' => 1,
        ) );

        //  ============================================================
        //       Home Page topheader Section info          
        //  ============================================================
        $wp_customize->add_setting( 'edunova_topheader_Section_Title_Name', array(
           'sanitize_callback' => 'Home_topheader_Section_Sanitize_Text_Function',
           
        ) );

        // Add topheader info control
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'edunova_Home_topheader_Section_Title',
                array(
                  'label'    => __( 'Contact Information ','edunova' ),
                  'section'  => 'edunova_For_Home_Page_topheader_Section',
                  'settings' => 'edunova_topheader_Section_Title_Name',
                  'type'     => 'text',
                  'priority' => 3,
                )
            )
        );

        //  ============================================================
        //       Home Page topheader Section Content        
        //  ============================================================
        $wp_customize->add_setting( 'edunova_topheader_Section_Subtitle', array(
           'sanitize_callback' => 'Home_topheader_Section_Sanitize_Text_Function',           
        ) );

        // Add Top Header Content control
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
               'edunova_Home_topheader_Section_Content',
                   array(
                       'label'    => __( ' Top Header Button Text ','edunova' ),
                       'section'  => 'edunova_For_Home_Page_topheader_Section',
                       'settings' => 'edunova_topheader_Section_Subtitle',
                       'type'     => 'text',
                       'priority' => 4,
                   )
            )
        );

        //  ============================================================
        //       Home Page topheader Section Button Url         
        //  ============================================================
        $wp_customize->add_setting( 'edunova_topheader_Section_Button_url', array(
           'sanitize_callback' => 'Home_topheader_Section_Sanitize_Text_Function',           
        ) );


        // Add topheader Content control
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
               'edunova_Home_topheader_Section_btnurl',
                array(
                   'label'    => __( ' Top Header Button URL ','edunova' ),
                   'section'  => 'edunova_For_Home_Page_topheader_Section',
                   'settings' => 'edunova_topheader_Section_Button_url',
                   'type'     => 'text',
                   'priority' => 4,
                )
            )
        );

        // Sanitize Text Function For Home Top Header
        function Home_topheader_Section_Sanitize_Text_Function( $text ) {
           return sanitize_text_field( $text );
        }
    }
}
add_action( 'customize_register', array('edunova_topheader_Customizer', 'edunova__topheader_Section') );