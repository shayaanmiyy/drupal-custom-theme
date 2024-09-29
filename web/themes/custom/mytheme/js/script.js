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
