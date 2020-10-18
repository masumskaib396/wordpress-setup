(function($) {
"use strict";

/*------------------------------------------------------------------
[Table of contents]

THEPAW TESTIMONIAL SLIDER JS
THEPAW SWIPER SLIDER JS

-------------------------------------------------------------------*/

/*--------------------------------------------------------------
CUSTOM PRE DEFINE FUNCTION
------------------------------------------------------------*/
/* is_exist() */
jQuery.fn.is_exist = function(){
  return this.length;
}


$(function(){


  /*--------------------------------------------------------------
THEPAW EVT ACCORDION CUSTOM JS
--------------------------------------------------------------*/

var testimonial_slider = $('.wc--slider');
  if (testimonial_slider.is_exist()) {
      testimonial_slider.owlCarousel({
      loop:true,
      margin: 0,
      nav:true,
      dots:true,
      autoHeight:true,
      items:1,
      navText: ["<i class=\"fas fa-angle-left\"></i>",
      "<i class=\"fas fa-angle-right\"</i>"],
  });

}










// document.querySelectorAll('a[href^="#"]').forEach($anchor => {
//       $anchor.addEventListener('click', function (e) {
//           e.preventDefault();
//           document.querySelector(this.getAttribute('href')).scrollIntoView({
//               behavior: 'smooth',
//               block: 'start',
//           });
//       });
//   });






});/*End document ready*/


$(window).on("resize", function(){

}); // end window resize


$(window).on("load" ,function(){


}); // End window LODE



})(jQuery);






