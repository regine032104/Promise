$(document).ready(function () {
  // --- loads the modal ---
  $.get("../components/modal.php", function (data) {
    $("body").append(data);
    $.get("../components/product-modal.php", function (pm) {
      $("#modal-overlay").append(pm);
    });
    initializeModalLogic();
  });

  // --- navbar toggle ---
  const $toggle = $("#nav-toggle");
  const $menu = $("#nav-menu");

  $toggle.click(function () {
    $menu.slideToggle(200);
    const expanded = $(this).attr("aria-expanded") === "true";
    $(this).attr("aria-expanded", !expanded);
    $(this).find("svg").toggleClass("rotate-90");
  });

  $(window).on("resize", function () {
    if ($(window).width() >= 768) {
      $menu.removeAttr("style");
    }
  });

  // --- header background carousel ---
  (function initializeHeaderCarousel() {
    const $header = $("header");
    if (!$header.length) return;
    $header.addClass("group");

    // list of images to cycle through (relative to project root)
    const images = [
      "../images/bg-1.png",
      "../images/bg-2.png",
      "../images/bg-3.png",
      "../images/bg-4.png",
      "../images/bg-5.png",
    ];

    let current = 0;
    let timer = null;
    const interval = 4000;
    const fadeDuration = 4000;

    // preload images
    images.forEach((src) => {
      const i = new Image();
      i.src = src;
    });

    const $bg = $(
      '<div class="header-bg h-150 absolute inset-0 z-0 bg-center bg-repeat opacity-100 transition-opacity duration-300" aria-hidden="true"></div>',
    );
    $bg.css({ "background-size": "cover" });
    $header.css("position", "relative");
    $header.prepend($bg);

    const btnBase =
      "flex items-center justify-center bg-white text-pink-800 shadow-sm border border-white/60 p-2 rounded-md w-10 h-10 md:w-12 md:h-12";
    const leftSvg =
      '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 md:h-6 md:w-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>';
    const rightSvg =
      '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 md:h-6 md:w-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>';

    const revealClasses =
      "opacity-0 group-hover:opacity-100 group-focus-within:opacity-100 transition-opacity duration-300";

    const $prev = $(
      `<button aria-label="Previous" class="header-prev ${btnBase} cursor-pointer absolute left-3 top-1/2 -translate-y-1/2 z-10 ${revealClasses} focus:outline-none" tabindex="0" aria-hidden="false">${leftSvg}</button>`,
    );
    const $next = $(
      `<button aria-label="Next" class="header-next ${btnBase} cursor-pointer absolute right-3 top-1/2 -translate-y-1/2 z-10 ${revealClasses} focus:outline-none" tabindex="0" aria-hidden="false">${rightSvg}</button>`,
    );

    // append buttons to header
    $header.append($prev, $next);

    // touch handling: reveal arrows on tap for mobile devices
    let touchRevealTimer = null;
    $header.on("touchstart", function (e) {
      $prev.add($next).removeClass("opacity-0").addClass("opacity-90");
      if (touchRevealTimer) clearTimeout(touchRevealTimer);
    });
    $header.on("touchend touchcancel", function (e) {
      if (touchRevealTimer) clearTimeout(touchRevealTimer);
      touchRevealTimer = setTimeout(function () {
        $prev.add($next).removeClass("opacity-90").addClass("opacity-0");
      }, 2500);
    });

    $(function () {
      const $row = $(".reviews-row");
      const $prevBtn = $("#reviews-prev");
      const $nextBtn = $("#reviews-next");
      if (!$row.length) return;

      function scrollBy(offset) {
        const start = $row.scrollLeft();
        $({ x: start }).animate(
          { x: start + offset },
          {
            duration: 400,
            step(now) {
              $row.scrollLeft(now);
            },
          },
        );
      }

      $prevBtn.on("click touchstart", function (e) {
        e.preventDefault();
        const item = $row.find("figure").first();
        const w = item.outerWidth(true);
        scrollBy(-w - 16); // include gap
      });
      $nextBtn.on("click touchstart", function (e) {
        e.preventDefault();
        const item = $row.find("figure").first();
        const w = item.outerWidth(true);
        scrollBy(w + 16);
      });
    });

    (function enableDragScrollWithjQuery() {
      const $el = $(".reviews-row");
      if (!$el.length) return;

      let isDown = false;
      let startX = 0;
      let scrollLeft = 0;

      $el.on("mousedown", function (e) {
        isDown = true;
        $el.addClass("cursor-grabbing");
        startX = e.pageX - $el.offset().left;
        scrollLeft = $el.scrollLeft();
        e.preventDefault();
      });

      $(document).on("mousemove", function (e) {
        if (!isDown) return;
        const x = e.pageX - $el.offset().left;
        const walk = x - startX;
        $el.scrollLeft(scrollLeft - walk);
      });

      $(document).on("mouseup mouseleave", function () {
        if (!isDown) return;
        isDown = false;
        $el.removeClass("cursor-grabbing");
      });

      // touch events (swipe)
      $el.on("touchstart", function (e) {
        if (!e.originalEvent || !e.originalEvent.touches) return;
        const t = e.originalEvent.touches[0];
        startX = t.pageX - $el.offset().left;
        scrollLeft = $el.scrollLeft();
      });
      $el.on("touchmove", function (e) {
        if (!e.originalEvent || !e.originalEvent.touches) return;
        const t = e.originalEvent.touches[0];
        const x = t.pageX - $el.offset().left;
        const walk = x - startX;
        $el.scrollLeft(scrollLeft - walk);
      });
    })();

    function setBackground(index, withFade = true) {
      index = (index + images.length) % images.length;
      const src = `url(${images[index]})`;
      if (withFade) {
        $bg.animate({ opacity: 0 }, fadeDuration / 0, function () {
          $bg.css("background-image", src);
          $bg.animate({ opacity: 1 }, fadeDuration / 0);
        });
      } else {
        $bg.css("background-image", src);
      }
      current = index;
    }

    function startTimer() {
      stopTimer();
      timer = setInterval(() => setBackground(current + 1, true), interval);
    }
    function stopTimer() {
      if (timer) {
        clearInterval(timer);
        timer = null;
      }
    }

    // button handlers
    $prev.on("click touchstart", function (e) {
      e.preventDefault();
      setBackground(current - 1, true);
      startTimer();
    });
    $next.on("click touchstart", function (e) {
      e.preventDefault();
      setBackground(current + 1, true);
      startTimer();
    });

    setBackground(0, false);
    startTimer();

    $bg.css({ "background-size": "cover", "background-position": "center" });

    $header
      .children()
      .not(".header-bg, .header-prev, .header-next")
      .css("position", "relative");
  })();

  // --- product details modal ---
  (function initializeProductModal() {
    function updateScrollShadows(el) {
      const $el = $(el);
      const top = el.scrollTop;
      const max = el.scrollHeight - el.clientHeight - 1;
      const atTop = top <= 0;
      const atBottom = top >= max;
      const $top = $el.find(".shadow-top");
      const $bottom = $el.find(".shadow-bottom");
      $top.toggleClass("opacity-0", atTop).toggleClass("opacity-100", !atTop);
      $bottom
        .toggleClass("opacity-0", atBottom)
        .toggleClass("opacity-100", !atBottom);
    }

    function openProductModal(data) {
      const $overlay = $("#modal-overlay");
      const $modal = $("#product-modal");
      if (!$modal.length) return;

      // populate
      $("#pm-title").text(data.title || "");
      $("#pm-price").text(data.price || "");
      $("#pm-description").text(data.description || "");
      const $img = $("#pm-image");
      $img
        .attr("src", data.image || "")
        .attr("alt", data.title || "Product image");

      // show overlay and modal
      $overlay.removeClass("hidden").css("display", "flex");
      requestAnimationFrame(() => {
        $overlay.removeClass("opacity-0").addClass("opacity-100");
      });
      $("body").addClass("overflow-hidden");
      $(".modal-panel").hide();
      const $m = $modal;
      $m.show().addClass("opacity-0 scale-95");
      requestAnimationFrame(() => {
        $m.removeClass("opacity-0 scale-95").addClass("opacity-100 scale-100");
      });
      updateScrollShadows($m[0]);
      $m.off("scroll.__shadow").on("scroll.__shadow", function () {
        updateScrollShadows(this);
      });
    }

    function closeProductModal() {
      const $overlay = $("#modal-overlay");
      const $m = $("#product-modal");
      $m.addClass("opacity-0 scale-95").removeClass("opacity-100 scale-100");
      setTimeout(() => {
        $m.hide();
      }, 180);
      $overlay.removeClass("opacity-100").addClass("opacity-0");
      setTimeout(() => {
        $overlay.addClass("hidden").hide();
        $("body").removeClass("overflow-hidden");
      }, 200);
    }

    // delegate clicks on product cards to open modal with data
    $(document).on("click", "article", function (e) {
      if (
        $(e.target).closest('button, a[href], select, [role="button"]').length
      )
        return;
      const $card = $(this);
      const title = $card.find("h3").first().text().trim();
      const price = $card.find(".font-bold").first().text().trim();
      const description =
        $card.find(".product-full").text().trim() ||
        $card.find("p").first().text().trim();
      const image = $card.find("img").first().attr("src");
      openProductModal({ title, price, description, image });
    });

    // close button
    $(document).on("click", "#close-product", function () {
      closeProductModal();
    });

    // close product modal when clicking/tapping outside the modal panel (on the overlay)
    $(document).on("mousedown touchstart", "#modal-overlay", function (e) {
      // If product modal is visible and the event target is the overlay itself, close it
      const $pm = $("#product-modal");
      if ($pm.length && $pm.is(":visible") && e.target === this) {
        // prevent interfering with other modal panels
        closeProductModal();
      }
    });

    (function prepareProductCards() {
      const $cards = $("main article");
      if (!$cards.length) return;
      $cards.addClass("cursor-pointer");
      $cards.each(function () {
        const $card = $(this);
        const $desc = $card.find("p").first();
        if (!$desc.length) return;
        const full = $.trim($desc.text());
        if (!full) return;
        if (!$card.find(".product-full").length) {
          const $hidden = $('<p class="product-full hidden"></p>').text(full);
          $hidden.insertAfter($desc);
        }
        const maxLen = 180;
        let short = full;
        if (full.length > maxLen) {
          short = full.slice(0, maxLen);
          short = short.replace(/\s+\S*$/, "") + "…";
        }
        $desc.text(short);
      });
    })();
  })();

  // --- login/signup ---
  function initializeModalLogic() {
    let formSubmitted = false;

    function ensureToastContainer() {
      let $c = $("#toast-container");
      if (!$c.length) {
        $c = $(
          '<div id="toast-container" class="fixed top-4 right-4 z-50 flex flex-col gap-3"></div>',
        );
        $("body").append($c);
      }
      return $c;
    }
    function showToast(message) {
      if (typeof window.showToast === "function")
        return window.showToast(message);
      const $c = ensureToastContainer();
      const $toast = $(
        '<div class="pointer-events-auto select-none rounded-md bg-amber-600 px-4 py-3 text-sm font-medium text-white shadow-lg ring-1 ring-amber-500/50 opacity-0 -translate-y-2 transition duration-300"></div>',
      ).text(message);
      $c.append($toast);
      requestAnimationFrame(() => {
        $toast
          .removeClass("opacity-0 -translate-y-2")
          .addClass("opacity-100 translate-y-0");
      });
      setTimeout(() => {
        $toast.addClass("opacity-0 -translate-y-2");
        setTimeout(() => $toast.remove(), 300);
      }, 2800);
    }

    // --- password visibility toggle ---
    $(document).on("click", ".password-toggle", function (e) {
      e.preventDefault();
      var $btn = $(this);
      var targetSelector = $btn.attr("data-target");
      var $input = $(targetSelector);
      if (!$input.length) return;
      var isPassword = $input.attr("type") === "password";
      $input.attr("type", isPassword ? "text" : "password");
      var $svg = $btn.find("svg");
      if (isPassword) {
        $svg.html(
          '<path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18M10.73 6.73A9.77 9.77 0 0 1 12 6c4.477 0 8.268 2.943 9.542 7a9.77 9.77 0 0 1-1.566 2.566M17.94 17.94A9.77 9.77 0 0 1 12 19c-4.477 0-8.268-2.943-9.542-7a9.77 9.77 0 0 1 1.566-2.566" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 0 1-6 0" />',
        );
      } else {
        $svg.html(
          '<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />',
        );
      }
    });

    // --- validation regex ---
    const nameRegex = /^[A-Za-z\s.\-']+$/;
    const emailRegex = /^[A-Za-z0-9._\-]+@[A-Za-z0-9.\-]+\.[A-Za-z]{2,}$/;
    const phoneRegex = /^\+?\d+$/;

    function setFieldError($field, message) {
      const id = $field.attr("id");
      const $err = $('[data-error-for="' + id + '"]');
      if (message) {
        $err.text(message).removeClass("hidden");
        $field.addClass(
          "border-red-400 focus:border-red-400 focus:ring-red-400",
        );
      } else {
        $err.text("").addClass("hidden");
        $field.removeClass(
          "border-red-400 focus:border-red-400 focus:ring-red-400",
        );
      }
    }

    // --- field validators ---
    function validateLoginEmail() {
      const $f = $("#login-email");
      const v = $.trim($f.val());
      if (!v) return (setFieldError($f, "Email is required."), false);
      if (!emailRegex.test(v))
        return (setFieldError($f, "Enter a valid email."), false);
      setFieldError($f, null);
      return true;
    }
    function validateLoginPassword() {
      const $f = $("#login-password");
      const v = $.trim($f.val());
      if (!v) return (setFieldError($f, "Password is required."), false);
      if (v.length < 6)
        return (setFieldError($f, "Minimum 6 characters."), false);
      setFieldError($f, null);
      return true;
    }

    function validateFirst() {
      const $f = $("#reg-first");
      const v = $.trim($f.val());
      if (!v) return (setFieldError($f, "First name required."), false);
      if (!nameRegex.test(v))
        return (setFieldError($f, "Invalid characters."), false);
      setFieldError($f, null);
      return true;
    }
    function validateLast() {
      const $f = $("#reg-last");
      const v = $.trim($f.val());
      if (!v) return (setFieldError($f, "Last name required."), false);
      if (!nameRegex.test(v))
        return (setFieldError($f, "Invalid characters."), false);
      setFieldError($f, null);
      return true;
    }
    function validateAddress() {
      const $f = $("#reg-address");
      const v = $.trim($f.val());
      if (!v) return (setFieldError($f, "Address required."), false);
      setFieldError($f, null);
      return true;
    }
    function validateEmail() {
      const $f = $("#reg-email");
      const v = $.trim($f.val());
      if (!v) return (setFieldError($f, "Email required."), false);
      if (!emailRegex.test(v))
        return (setFieldError($f, "Enter a valid email."), false);
      setFieldError($f, null);
      return true;
    }
    function validatePhone() {
      const $f = $("#reg-phone");
      const v = $.trim($f.val());
      if (!v) return (setFieldError($f, "Contact number required."), false);
      if (!phoneRegex.test(v))
        return (setFieldError($f, "Digits only (optional +)."), false);
      setFieldError($f, null);
      return true;
    }
    function validatePass() {
      const $f = $("#reg-pass");
      const v = $.trim($f.val());
      if (!v) return (setFieldError($f, "Password required."), false);
      if (v.length < 6)
        return (setFieldError($f, "Minimum 6 characters."), false);
      setFieldError($f, null);
      validatePassConfirm();
      return true;
    }
    function validatePassConfirm() {
      const $f = $("#reg-pass-confirm");
      const v = $.trim($f.val());
      const p = $.trim($("#reg-pass").val());
      if (!v) return (setFieldError($f, "Please confirm password."), false);
      if (v !== p) return (setFieldError($f, "Passwords do not match."), false);
      setFieldError($f, null);
      return true;
    }

    // --- animations ---
    function animateIn($m) {
      $m.show();
      requestAnimationFrame(() => {
        $m.removeClass("opacity-0 scale-95").addClass("opacity-100 scale-100");
      });
    }
    function animateOut($m) {
      $m.addClass("opacity-0 scale-95").removeClass("opacity-100 scale-100");
      setTimeout(() => {
        $m.hide();
      }, 180);
    }

    function openModal(modalId) {
      const $overlay = $("#modal-overlay");
      $overlay.removeClass("hidden");
      $overlay.css("display", "flex");
      // fade in overlay to trigger backdrop blur
      requestAnimationFrame(() => {
        $overlay.removeClass("opacity-0").addClass("opacity-100");
      });
      $("body").addClass("overflow-hidden");
      $(".modal-panel").each(function () {
        $(this).hide();
      });
      const $m = $(modalId);
      $m.addClass("opacity-0 scale-95");
      animateIn($m);
      $m.find("input").first().focus();
      updateScrollShadows($m[0]);
      $m.off("scroll.__shadow").on("scroll.__shadow", function () {
        updateScrollShadows(this);
      });
    }

    function closeModals() {
      const $overlay = $("#modal-overlay");
      $(".modal-panel:visible").each(function () {
        animateOut($(this));
      });
      // fade overlay out then hide
      $overlay.removeClass("opacity-100").addClass("opacity-0");
      setTimeout(() => {
        $overlay.addClass("hidden").hide();
        $("body").removeClass("overflow-hidden");
        formSubmitted = false;
        $overlay.find("input").val("");
        $overlay.find("[data-error-for]").text("").addClass("hidden");
        $overlay
          .find("input")
          .removeClass(
            "border-red-400 focus:border-red-400 focus:ring-red-400",
          );
      }, 200);
    }

    // --- scroll shadow  ---
    function updateScrollShadows(el) {
      const $el = $(el);
      const top = el.scrollTop;
      const max = el.scrollHeight - el.clientHeight - 1;
      const atTop = top <= 0;
      const atBottom = top >= max;
      const $top = $el.find(".shadow-top");
      const $bottom = $el.find(".shadow-bottom");
      $top.toggleClass("opacity-0", atTop).toggleClass("opacity-100", !atTop);
      $bottom
        .toggleClass("opacity-0", atBottom)
        .toggleClass("opacity-100", !atBottom);
    }

    // open login
    $(document).on("click", "#open-login", function (e) {
      e.preventDefault();
      $("#signup-modal").hide();
      openModal("#login-modal");
    });

    // open signup
    $(document).on("click", "#open-signup", function (e) {
      e.preventDefault();
      $("#login-modal").hide();
      openModal("#signup-modal");
    });

    // close buttons
    $(document).on("click", "#close-login, #close-signup", function () {
      closeModals();
    });

    // switch login/signup
    $(document).on("click", "#switch-to-signup", function (e) {
      e.preventDefault();
      $("#login-modal").hide();
      openModal("#signup-modal");
    });
    $(document).on("click", "#switch-to-login", function (e) {
      e.preventDefault();
      $("#signup-modal").hide();
      openModal("#login-modal");
    });

    // close on escape
    $(document).on("keydown", function (e) {
      if (e.key === "Escape") closeModals();
    });

    // --- real-time validation while typing ---
    $(document).on("input", "#login-email", validateLoginEmail);
    $(document).on("input", "#login-password", validateLoginPassword);

    $(document).on("input", "#reg-first", validateFirst);
    $(document).on("input", "#reg-last", validateLast);
    $(document).on("input", "#reg-address", validateAddress);
    $(document).on("input", "#reg-email", validateEmail);
    $(document).on("input", "#reg-phone", validatePhone);
    $(document).on("input", "#reg-pass", validatePass);
    $(document).on("input", "#reg-pass-confirm", validatePassConfirm);

    // --- validate on blur after first submit ---
    $(document).on("blur", "input", function () {
      if (formSubmitted) {
        const id = $(this).attr("id");
        switch (id) {
          case "login-email":
            validateLoginEmail();
            break;
          case "login-password":
            validateLoginPassword();
            break;
          case "reg-first":
            validateFirst();
            break;
          case "reg-last":
            validateLast();
            break;
          case "reg-address":
            validateAddress();
            break;
          case "reg-email":
            validateEmail();
            break;
          case "reg-phone":
            validatePhone();
            break;
          case "reg-pass":
            validatePass();
            break;
          case "reg-pass-confirm":
            validatePassConfirm();
            break;
        }
      }
    });

    // form submissions
    $(document).on("submit", "#login-form", function (e) {
      e.preventDefault();
      formSubmitted = true;
      const ok = validateLoginEmail() & validateLoginPassword();
      if (!ok) return;
      closeModals();
      showToast("Logged in successfully!");
      $("#login-email, #login-password").val("");
    });

    $(document).on("submit", "#signup-form", function (e) {
      e.preventDefault();
      formSubmitted = true;
      const ok =
        validateFirst() &
        validateLast() &
        validateAddress() &
        validateEmail() &
        validatePhone() &
        validatePass() &
        validatePassConfirm();
      if (!ok) return;
      closeModals();
      showToast("Account created successfully!");
      $(
        "#reg-first, #reg-last, #reg-address, #reg-email, #reg-phone, #reg-pass, #reg-pass-confirm",
      ).val("");
    });
  }
});
