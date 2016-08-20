/*!
* Custom scripts for Lee Hathaway Theme
* Author: Alex Ford
*/

// Loader
jQuery(document).ready(function() {
  var functionOne = function() {
    var r = $.Deferred();
    $('body').addClass('loaded');
    return r;
  };

  var functionTwo = function() {
    setTimeout(function(){
      $('#loader__wrapper').remove();
    }, 1);
  };

  functionOne().done( functionTwo() );

  // debug
  // setTimeout(function(){
    // $('body').addClass('loaded');
  // }, 4000);
});


// Expanded navbar
jQuery(document).ready(function(){
  if ($('body').hasClass('page-template-home') || $('body').hasClass('page-template-event') || $('body').hasClass('page-template-title-block')) {
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
