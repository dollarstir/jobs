jQuery(
  (function ($) {
    "use strict";
    $(window).on("scroll", function () {
      if ($(this).scrollTop() > 50) {
        $(".main-nav").addClass("menu-shrink");
      } else {
        $(".main-nav").removeClass("menu-shrink");
      }
    });
    jQuery(".mean-menu").meanmenu({ meanScreenWidth: "991" });
    try {
      var mixer = mixitup("#container", {
        controls: { toggleDefault: "none" },
      });
    } catch (err) {}
    $(".odometer").appear(function (e) {
      var odo = $(".odometer");
      odo.each(function () {
        var countNumber = $(this).attr("data-count");
        $(this).html(countNumber);
      });
    });
    $(".companies-slider").owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: true,
      smartSpeed: 1000,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      responsive: { 0: { items: 1 }, 600: { items: 2 }, 1000: { items: 4 } },
    });
    $(".profile-slider").owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: true,
      smartSpeed: 1000,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      responsive: { 0: { items: 1 }, 600: { items: 2 }, 1000: { items: 4 } },
    });
    $(".newsletter-form")
      .validator()
      .on("submit", function (event) {
        if (event.isDefaultPrevented()) {
          formErrorSub();
          submitMSGSub(false, "Please enter your email correctly.");
        } else {
          event.preventDefault();
        }
      });
    function callbackFunction(resp) {
      if (resp.result === "success") {
        formSuccessSub();
      } else {
        formErrorSub();
      }
    }
    function formSuccessSub() {
      $(".newsletter-form")[0].reset();
      submitMSGSub(true, "Thank you for subscribing!");
      setTimeout(function () {
        $("#validator-newsletter").addClass("hide");
      }, 4000);
    }
    function formErrorSub() {
      $(".newsletter-form").addClass("animated shake");
      setTimeout(function () {
        $(".newsletter-form").removeClass("animated shake");
      }, 1000);
    }
    function submitMSGSub(valid, msg) {
      if (valid) {
        var msgClasses = "validation-success";
      } else {
        var msgClasses = "validation-danger";
      }
      $("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
    }
    $(".newsletter-form").ajaxChimp({
      url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9",
      callback: callbackFunction,
    });
    jQuery(window).on("load", function () {
      jQuery(".loader").fadeOut(500);
    });
    new WOW().init();
    $(".accordion > li:eq(0) a").addClass("active").next().slideDown();
    $(".accordion a").on("click", function (j) {
      var dropDown = $(this).closest("li").find("p");
      $(this).closest(".accordion").find("p").not(dropDown).slideUp(300);
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");
      } else {
        $(this).closest(".accordion").find("a.active").removeClass("active");
        $(this).addClass("active");
      }
      dropDown.stop(false, true).slideToggle(300);
      j.preventDefault();
    });
    $("body").append(
      '<div id="toTop" class="back-to-top-btn"><i class="icofont-dotted-up"></i></div>'
    );
    $(window).scroll(function () {
      if ($(this).scrollTop() != 0) {
        $("#toTop").fadeIn();
      } else {
        $("#toTop").fadeOut();
      }
    });
    $("#toTop").on("click", function () {
      $("html, body").animate({ scrollTop: 0 }, 900);
      return false;
    });
    // $("body").append(
    //   "<a href='https://themeforest.net/checkout/from_item/26313553?license=regular&support=bundle_6month&_ga=2.14942449.634514020.1646539215-1425290503.1590986634' target='_blank' class='buy-now-btn'><img src='assets/img/envato.png' alt='envato'/>Buy Now</a>"
    // );
    $("body").append(
      "<div class='switch-box'><label id='switch' class='switch'><input type='checkbox' onchange='toggleTheme()' id='slider'><span class='slider round'></span></label></div>"
    );
  })(jQuery)
);
function setTheme(themeName) {
  localStorage.setItem("Topeople_theme", themeName);
  document.documentElement.className = themeName;
}
function toggleTheme() {
  if (localStorage.getItem("Topeople_theme") === "theme-dark") {
    setTheme("theme-light");
  } else {
    setTheme("theme-dark");
  }
}
(function () {
  if (localStorage.getItem("Topeople_theme") === "theme-dark") {
    setTheme("theme-dark");
    document.getElementById("slider").checked = false;
  } else {
    setTheme("theme-light");
    document.getElementById("slider").checked = true;
  }
})();
