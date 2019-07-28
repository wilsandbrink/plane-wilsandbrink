jQuery(document).ready(function($) {
  // Focus styles for menus.
  $(".main-navigation")
    .find("a")
    .on("focus.plane blur.plane", function() {
      $(this)
        .parents()
        .toggleClass("focus");
    });

  // Header search
  $(".search-toggle").on("click.plane", function() {
    $(this).toggleClass("active");
    $(".search-expand").fadeToggle(250);
    setTimeout(function() {
      $(".search-expand .search-field").focus();
    }, 300);
  });

  $(window).scroll(function() {
    if ($(window).scrollTop() >= $(".site-header").height()) {
      $(".site-top").addClass("site-top-fixed");
      $(".owo").addClass("nav-jump-fix");
    } else {
      $(".site-top").removeClass("site-top-fixed");
      $(".owo").removeClass("nav-jump-fix");
    }
  });
});
