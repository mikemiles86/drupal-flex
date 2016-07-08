(function ($, Drupal) {
  "use strict";
  Drupal.behaviors.flexThemeMenuAlterMain = {
    attach: function (context) {
      // Loop through each link item in main menu
      $('.menu--main ul.menu li a').each(function(){
        // If pointing to node/5
        if ($(this).attr('href') == '/node/5') {
          // Attach custom class
          $(this).addClass('yellow-menu');
          // Add inline styling
          $(this).attr('style', 'color: #000;');
          // Change target
          $(this).attr('target', '_blank');
          // Alter title
          $(this).text($(this).text() + Drupal.t(' Alt'));
        }
        // Have a 'data-comob' and is set to the value 1?
        if ($(this).data('combo') == 1) {
          // Add a class.
          $(this).addClass('combo-item');
        }
      });
    }
  }
})(jQuery, Drupal);
