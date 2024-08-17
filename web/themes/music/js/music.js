/**
 * @file
 * music behaviors.
 */
(function (Drupal, $) {
  "use strict";

  Drupal.behaviors.music = {
    attach(context, settings) {
      const dropdowns = [
        "[data-drupal-selector=edit-field-era-target-id]",
        "[data-drupal-selector=edit-field-instrument-target-id]",
        "[data-drupal-selector=edit-field-nationality-value]",
      ];

      const submit = $("[data-drupal-selector=edit-actions] input");

      dropdowns.forEach((dropdown) => {
        $(dropdown, context).on("change", function () {
          submit.trigger("click");
        });
      });
    },
  };
})(Drupal, jQuery);
