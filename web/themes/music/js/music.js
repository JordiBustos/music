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

  Drupal.behaviors.voting = {
    attach(context, settings) {
      once("voting", "#submit-vote", context).forEach(function (element) {
        init();
      });

      function init() {
        $("#submit-vote").on("click", function () {
          let vote = $("#dropdown-poll").attr("data-current-selection");
          let userUid = settings.user.uid;
          let nodeId = settings.statistics.data.nid;

          $.get(
            "/api/vote/" + nodeId + "/update?vote=" + vote + "&uid=" + userUid,
            function (data, status) {
              $("#voting-results").html(data);
            },
          );
        });
      }
    },
  };
})(Drupal, jQuery);
