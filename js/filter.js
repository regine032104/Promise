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

// --- options ---
const filterOptions = {
  price: ["Under $150", "$200 - $400", "$400 - $600", "Over $600"],
  availability: ["In Stock", "Out of Stock"],
  size: ["XS", "S", "M", "L", "XL", "XXL"],
  silhouette: ["A-Line", "Ball Gown", "Convertible", "Mermaid", "Midi & Short", "Sheath"],
  length: ["Floor", "Midi", "Short"],
  sleeves: ["Cap Sleeves/Short", "Long Sleeves", "Off the Shoulder", "Sleeveless", "Spaghetti Straps", "Strapless", "Thick Straps"],
  collection: ["Online Collection", "Retailer Collection"],
};

const activeFilters = {};

// --- dropdown setup ---
$(".filter-btn").each(function () {
  const $btn = $(this);
  const filterName = $btn.text().trim().split(" ")[0].toLowerCase();

  if (!filterOptions[filterName]) return;

  const $dropdown = $(
    '<div class="absolute mt-2 bg-white border border-pink-200 rounded-lg shadow-lg p-3 hidden" style="min-width:220px; max-height:300px; overflow-y:auto; z-index:999;"></div>',
  );

  filterOptions[filterName].forEach(function (option) {
    const $label = $(
      '<label class="flex items-center py-2 px-2 hover:bg-pink-50 rounded cursor-pointer"></label>',
    );
    const $checkbox = $(
      '<input type="checkbox" class="mr-3 text-pink-600">',
    ).val(option);
    const $text = $('<span class="text-sm text-gray-700"></span>').text(
      option,
    );

    $label.append($checkbox).append($text);
    $dropdown.append($label);
  });

  const $wrapper = $('<div class="inline-block"></div>').css("position", "relative");
  $btn.wrap($wrapper);
  $btn.after($dropdown);

  $btn.on("click", function (e) {
    e.stopPropagation();
    $(".filter-btn").not($btn).siblings("div").addClass("hidden");
    $dropdown.toggleClass("hidden");
  });

  $dropdown.on("change", "input[type='checkbox']", function () {
    const checked = [];
    $dropdown.find("input:checked").each(function () {
      checked.push($(this).val());
    });
    activeFilters[filterName] = checked;
    applyFilters();
  });
});

$(document).on("click", function (e) {
  if (!$(e.target).closest(".filter-btn, .filter-btn + div").length) {
    $(".filter-btn + div").addClass("hidden");
  }
});

function applyFilters() {
  let count = 0;

  $(".product-card").each(function () {
    const $card = $(this);
    let shouldShow = true;

    for (const filterType in activeFilters) {
      if (activeFilters[filterType].length > 0) {
        const productValue = $card.attr("data-" + filterType);
        
        if (!productValue) {
          shouldShow = false;
          break;
        }
        
        let hasMatch = false;
        
        if (filterType === "price") {
          const price = parseFloat(productValue);
          for (let i = 0; i < activeFilters[filterType].length; i++) {
            const range = activeFilters[filterType][i];
            if (range === "Under $150" && price < 150) {
              hasMatch = true;
              break;
            } else if (range === "$200 - $400" && price >= 200 && price <= 400) {
              hasMatch = true;
              break;
            } else if (range === "$400 - $600" && price >= 400 && price <= 600) {
              hasMatch = true;
              break;
            } else if (range === "Over $600" && price > 600) {
              hasMatch = true;
              break;
            }
          }
        } else {

          for (let i = 0; i < activeFilters[filterType].length; i++) {
            if (productValue.includes(activeFilters[filterType][i])) {
              hasMatch = true;
              break;
            }
          }
        }
        
        if (!hasMatch) {
          shouldShow = false;
          break;
        }
      }
    }

    if (shouldShow) {
      $card.show();
      count++;
    } else {
      $card.hide();
    }
  });

  $toggle.parent().find(".text-sm").text(count + " Results");
}

