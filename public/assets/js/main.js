/**SIDEBAR */
$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  })
})

/**CAROUSEL */
$('.wrapper-voucher').owlCarousel({
  loop:true,
  margin:30,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:true,
          autoplay: true
      },
      600:{
          items:2,
          nav:false
      },
      1000:{
          items:3,
          nav:false,
          loop:true,
          autoplay: true
      }
  }
})

/**TESTIMONI */
$(document).ready(function () {
  $('.owl-carousel.owl-theme.testi3.mt-4').owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    dots: false,
    autoplay: true,
    // navText: ["<div class='d-inline owl-carousel__prev'><</div>","<div class='d-inline  owl-carousel__next'>></div>"],
    responsiveClass: false,
    responsive: {
      0: {
        items: 0,
        nav: false
      },
      1024: {
        items: 3
      }
    }
  })
  
});

var owl = $('.owl-carousel.owl-theme.testi3.mt-4');
owl.owlCarousel();
// Go to the next item
$('.d-inline.owl-carousel__prev').click(function() {
    owl.trigger('prev.owl.carousel');
})
// Go to the previous item
$('.d-inline.owl-carousel__next').click(function() {
    owl.trigger('next.owl.carousel');
})
