/*!
* Custom scripts for Lee Hathaway Theme
* Author: Alex Ford
*/

// Expanded navbar
jQuery(document).ready(function(){
  if ($('body').hasClass('page-template-home')) {
    jQuery(window).scroll(function(){
        var scroll = jQuery(window).scrollTop();
        if(scroll > 280) {
            jQuery('#navbar-header').addClass('navbar--condensed');
        } else if(scroll < 280) {
            jQuery('#navbar-header').removeClass('navbar--condensed');
        }
    });
  }
  else {}
});
