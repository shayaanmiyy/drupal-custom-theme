window.onload = () => {
  // Write JS here
  (function ($, Drupal) {
    Drupal.behaviors.slickSlider = {
      attach: function (context, settings) {
        $('.slick-slider', context).once('slickSlider').slick({
          autoplay: true,
          dots: true,
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
        });
      }
    };
  })(jQuery, Drupal);
}