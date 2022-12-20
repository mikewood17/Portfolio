const $carouselEg1 = '.coding-carousel';
const carouselSettings = {
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  pauseOnFocus: false,
  arrows: false,
  centerPadding: true,
  mobileFirst: true,
};

function intializeCarousel(element, settings) {
  $(element).slick(settings);
};

$(document).ready(function(){
  intializeCarousel($carouselEg1, carouselSettings);
});