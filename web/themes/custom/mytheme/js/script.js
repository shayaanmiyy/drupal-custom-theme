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

(function ($, Drupal, once) {
  Drupal.behaviors.openInModal = {
    attach: function (context, settings) {
      // Target <h1> tags with class 'colorbox' and their child <a> elements
      const $links = $('h1.colorbox > a', context);
      
      if ($links.length) {
        // Use once to ensure each link is only initialized once
        once('openInModal', $links).forEach(function (element) {
          $(element).on('click', function (event) {
            event.preventDefault();
            
            // Extract the node ID from the anchor href (e.g., /node/11)
            const href = $(this).attr('href'); // Get the href attribute
            const nodeId = href.split('/node/')[1]; // Extract node ID from URL
            
            // Make sure the nodeId is valid before proceeding
            if (nodeId) {
              // Make an AJAX request to fetch the node content
              $.ajax({
                url: `/node/${nodeId}`, // URL to fetch the node content
                type: 'GET',
                success: function (data) {
                  // Load the content into the modal
                  $('#modal-employee-content').html(data);
                  $('#employee-modal').show();
                },
                error: function () {
                  alert('Could not load the employee details.');
                }
              });
            } else {
              alert('Invalid node ID.');
            }
          });

          // Close button functionality
          $('.close-button').on('click', function () {
            $('#employee-modal').hide();
          });
    
          // Close modal when clicking outside
          $(window).on('click', function (event) {
            if (event.target === document.getElementById('employee-modal')) {
              $('#employee-modal').hide();
            }
          });
        });
      }
    }
  };
})(jQuery, Drupal, once);


