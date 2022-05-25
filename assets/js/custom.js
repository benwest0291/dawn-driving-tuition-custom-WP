jQuery(function($) {

$('.js-logo-slider').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: false,
    variableWidth: true,
    autoplay: true,
    centerMode: true,
    autoplaySpeed: 2000,
    prevArrow: '<div class="slick-next"></i></div>',
    nextArrow: '<div class="slick-prev"></i></div>',
  });
 });