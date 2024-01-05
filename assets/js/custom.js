/** 
  * Template Name: Varsity
  * Version: 1.0  
  * Template Scripts
  * Author: MarkUps
  * Author URI: http://www.markups.io/

  Custom JS
 
  1. HOVER DROPDOWN MENU
  2. SCROLL TOP BUTTON  

  
**/

jQuery(function(jQuery){

    var windows = jQuery(window);
    var stick = jQuery(".header-sticky");
    windows.on('scroll',function() {    
        var scroll = windows.scrollTop();
        if (scroll < 5) {
            stick.removeClass("sticky");
        }else{
            stick.addClass("sticky");
        }
    });  

 

    /*====================================
        slick nav
    ======================================*/
    var logo_path = jQuery('.mobile-menu').data('logo');
    var logo_link = jQuery('.mobile-menu').data('link');
    var logo_type = jQuery('.mobile-menu').data('type');
    let logo;

    if (logo_type === 'text') {
      logo = '<a href="' + logo_link + '"></a>';
    }else {
      logo = '<a href="' + logo_link + '"><img src="' + logo_path + '" class="img-fluid" alt="logo"></a>';;
    }

    jQuery('.navbar-nav').slicknav({
        appendTo: '.mobile-menu',
        removeClasses: true,
        label: '',
        closedSymbol: '<i class="fa fa-angle-right"><i/>',
        openedSymbol: '<i class="fa fa-angle-down"><i/>',
        brand: logo
    });

    function edunova_toggle_icon_burger() {
        const list = document.querySelectorAll(".slicknav_nav li a");
            // get first element to be focused inside modal
            const firstFocusableElement = document.getElementById('slicknav_btnn');
            const logo = document.querySelector('.navbar-brand');
            const firstFocusableElementclass = document.querySelector('.slicknav_collapsed');
            // get last element to be focused inside modal
            const last = list[list.length - 1];
            const lastFocusableElement = last;
            document.addEventListener('keydown', function (e) {
                let isTabPressed = e.key === 'Tab' || e.keyCode === 9;
                if (!isTabPressed) {
                    return;
                }
                if(event.shiftKey && event.keyCode == 9 && document.activeElement === firstFocusableElement) {               
                    lastFocusableElement.focus();
                    e.preventDefault();
                }
                if(event.shiftKey && event.keyCode == 9 && document.activeElement === firstFocusableElementclass) {               
                    logo.focus();
                    e.preventDefault();
                }

                // if shift key pressed for shift + tab combination
                if (e.shiftKey) {
                    if (document.activeElement === firstFocusableElement) {
                        lastFocusableElement.focus();
                        e.preventDefault();
                    }
                } else {
                    if (document.activeElement === lastFocusableElement) {
                        firstFocusableElement.focus();
                        e.preventDefault();
                    }
                }
            });
    }
    edunova_toggle_icon_burger();

    
 

    jQuery(document).ready(function() {
        jQuery(".navbar-nav").accessibleDropDown();
    });
    jQuery.fn.accessibleDropDown = function () {
        var el = jQuery(this);
        /* Make dropdown menus keyboard accessible */
        jQuery("a", el).focus(function() {
            jQuery(this).parents("li").addClass("force-show");
        }).blur(function() {
            jQuery(this).parents("li").removeClass("force-show");
        });
    }

});