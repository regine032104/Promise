(function ($) {
  $(function () {
    var $row = $("#reviews-row");
    if (!$row.length) return;

    var $prev = $("#reviews-prev");
    var $next = $("#reviews-next");
    var itemSelector = "figure";

    var $original = $row.children(itemSelector);
    var originalCount = $original.length;
    if (originalCount < 2) {
      function page(dir) {
        var step = $row.innerWidth();
        $row
          .stop()
          .animate(
            { scrollLeft: $row.scrollLeft() + dir * step },
            400,
            "swing",
          );
      }
      $next.on("click", function (e) {
        e.preventDefault();
        page(1);
      });
      $prev.on("click", function (e) {
        e.preventDefault();
        page(-1);
      });
      $row.on("keydown", function (e) {
        if (e.key === "ArrowRight") {
          e.preventDefault();
          page(1);
        } else if (e.key === "ArrowLeft") {
          e.preventDefault();
          page(-1);
        }
      });
      return;
    }

    var $before = $original.clone();
    var $after = $original.clone();
    $row.prepend($before);
    $row.append($after);

    var trackWidth = Math.max(1, ($row.get(0).scrollWidth || 0) / 3);

    $row.scrollLeft(trackWidth);
    $row.data("trackWidth", trackWidth);
    $row.data("originalCount", originalCount);

    var adjusting = false;

    function normalizePosition() {
      var x = $row.scrollLeft();
      var tw = $row.data("trackWidth") || trackWidth;
      var threshold = 40;
      if (x <= threshold || x >= tw * 2 - threshold) {
        adjusting = true;
        var hadSnapX = $row.hasClass("snap-x");
        var hadSnapMandatory = $row.hasClass("snap-mandatory");
        var hadSmooth = $row.hasClass("scroll-smooth");
        if (hadSnapX) $row.removeClass("snap-x");
        if (hadSnapMandatory) $row.removeClass("snap-mandatory");
        if (hadSmooth) $row.removeClass("scroll-smooth");

        if (x <= threshold) {
          $row.scrollLeft(x + tw);
        } else {
          $row.scrollLeft(x - tw);
        }

        setTimeout(function () {
          if (hadSnapX) $row.addClass("snap-x");
          if (hadSnapMandatory) $row.addClass("snap-mandatory");
          if (hadSmooth) $row.addClass("scroll-smooth");
          adjusting = false;
        }, 0);
      }
    }

    $row.on("scroll", function () {
      if (!adjusting) normalizePosition();
    });

    function page(dir) {
      var step = $row.innerWidth();
      normalizePosition();
      $row
        .stop()
        .animate({ scrollLeft: $row.scrollLeft() + dir * step }, 400, "swing");
    }
    $next.on("click", function (e) {
      e.preventDefault();
      page(1);
    });
    $prev.on("click", function (e) {
      e.preventDefault();
      page(-1);
    });

    $row.on("keydown", function (e) {
      if (e.key === "ArrowRight") {
        e.preventDefault();
        page(1);
      } else if (e.key === "ArrowLeft") {
        e.preventDefault();
        page(-1);
      }
    });

    var resizeTimer;
    $(window).on("resize", function () {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function () {
        var newTw = Math.max(1, ($row.get(0).scrollWidth || 0) / 3);
        var oldTw = $row.data("trackWidth") || trackWidth;
        var x = $row.scrollLeft();
        var ratio = (x - oldTw) / oldTw; // -1..+1 roughly
        var newX = newTw * (1 + ratio);
        adjusting = true;
        var hadSnapX = $row.hasClass("snap-x");
        var hadSnapMandatory = $row.hasClass("snap-mandatory");
        var hadSmooth = $row.hasClass("scroll-smooth");
        if (hadSnapX) $row.removeClass("snap-x");
        if (hadSnapMandatory) $row.removeClass("snap-mandatory");
        if (hadSmooth) $row.removeClass("scroll-smooth");
        $row.scrollLeft(newX);
        setTimeout(function () {
          if (hadSnapX) $row.addClass("snap-x");
          if (hadSnapMandatory) $row.addClass("snap-mandatory");
          if (hadSmooth) $row.addClass("scroll-smooth");
          adjusting = false;
        }, 0);
        $row.data("trackWidth", newTw);
      }, 100);
    });

    $(window).on("load", function () {
      normalizePosition();
    });
  });
})(jQuery);
