window.onload = () => {
  // Write JS here
}

(function ($, Drupal, drupalSettings, once) {
  Drupal.behaviors.welcomeMessage = {
    attach: function (context, settings) {
      if (drupalSettings.mytheme && drupalSettings.mytheme.welcomeMessage) {
        var message = drupalSettings.mytheme.welcomeMessage;
        once('welcomeMessage', 'body', context).forEach(function (element) {
          var welcomeDiv = $('<div>', {
            class: 'welcome-message',
            text: message
          }).prependTo(element);
          welcomeDiv.css({
            'background-color': '#f8f9fa',
            'color': '#000',
            'padding': '10px',
            'text-align': 'center',
            'font-size': '18px'
          });
        });
      }
    }
  };
})(jQuery, Drupal, drupalSettings, once);

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
