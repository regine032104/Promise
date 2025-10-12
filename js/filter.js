$(function () {
  const $toggle = $("#toggle-filters");
  const $filters = $("#product-filters .mt-4"); // the controls row

  if (!$toggle.length || !$filters.length) return;

  $toggle.attr("aria-expanded", "true");

  $toggle.on("click", function (e) {
    e.preventDefault();
    const expanded = $toggle.attr("aria-expanded") === "true";
    if (expanded) {
      $filters.slideUp(200);
      $toggle.attr("aria-expanded", "false");
      $toggle.find("span").text("Show filters");
    } else {
      $filters.slideDown(200);
      $toggle.attr("aria-expanded", "true");
      $toggle.find("span").text("Hide filters");
    }
  });
});
