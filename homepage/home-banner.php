<section id="slider-container" class="slider-area"> 
   <div class="slider-owl owl-theme owl-carousel">        
      <!-- Start Slingle Slide -->
      <div class="single-slide item" style="background-image: url(<?php if (get_theme_mod( "edunova_Banner_Section_Image_Upload" )) { echo esc_url(get_theme_mod( "edunova_Banner_Section_Image_Upload" )); } else{ echo esc_url(get_template_directory_uri(). '/assets/img/banner.jpg'); } ?>)">
         <!-- Start Slider Content -->
         <div class="slider-content-area">  
            <div class="container">
               <div class="row">
                  <div class="col-lg-7 col-md-offset-left-5"> 
                     <div class="slide-content-wrapper">
                        <div class="slide-content">
                           <?php $edunova_banner_title = get_theme_mod( "edunova_Banner_Section_Title_Name", "EDUCATION MAKES PROPER HUMANITY");
                           if ( ! empty ( $edunova_banner_title ) ) { ?>
                              <h3><?php echo esc_html(get_theme_mod("edunova_Banner_Section_Title_Name" , "EDUCATION MAKES PROPER HUMANITY"));?></h3>
                           <?php } ?>
                           <?php $edunova_banner_content = get_theme_mod( "edunova_Banner_Section_Content", "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolor.Aenean massa. Cum sociis natoque penatibus et magnis");
                           if ( ! empty ( $edunova_banner_content ) ) { ?>
                           <p><?php echo esc_html(get_theme_mod("edunova_Banner_Section_Content" ," Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolor.Aenean massa. Cum sociis natoque penatibus et magnis "));?></p> 
                           <?php 
                           }
                           $edunova_banner_btn = get_theme_mod( "edunova_Banner_Section_Button_Text", "Learn More");
                           if ( ! empty ( $edunova_banner_btn ) ) { ?>                    
                              <a class="default-btn" href="<?php echo esc_html(get_theme_mod("edunova_Banner_Btn_URl_Path" , "#"));?>"><?php  echo esc_html(get_theme_mod("edunova_Banner_Section_Button_Text" ,"Learn More"));?></a> 
                           <?php } ?>                    
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Start Slider Content -->
      </div>
      <!-- End Slingle Slide -->                
   </div>
</section>