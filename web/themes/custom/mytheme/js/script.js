window.onload = () => {
  // Write JS here
}

(function ($, Drupal, once) {
  Drupal.behaviors.slickSlider = {
    attach: function (context, settings) {
      const $slider = $('.slick-slider .field--name-field-slider .field__items');
      once('slickSlider', $slider, context).forEach(function (element) {
        $($slider).slick({
          autoplay: true,
          dots: true,
          arrows: true,
          prevArrow: '<button type="button" class="slick-prev">&#10094;</button>',
          nextArrow: '<button type="button" class="slick-next">&#10095;</button>',
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1
        });
      });
    }
  };
})(jQuery, Drupal, once);
