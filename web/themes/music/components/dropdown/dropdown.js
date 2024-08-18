/**
 * @file
 * dropdown behaviors.
 */
(function (Drupal, $) {
  "use strict";

  Drupal.behaviors.music = {
    attach(context) {
      const dropdown = $(".dropdown", context);
      const menu = $(".dropdown-menu", context);

      dropdown.on("click", function () {
        menu.toggleClass("hidden");
      });

      $(document).on("click", function (e) {
        if (!$(e.target).closest(dropdown).length) {
          menu.addClass("hidden");
        }
      });

      $(".dropdown-menu li").on("click", function (e) {
        menu.attr("data-current-selection", e.target.text);
      });
    },
  };
})(Drupal, jQuery);
