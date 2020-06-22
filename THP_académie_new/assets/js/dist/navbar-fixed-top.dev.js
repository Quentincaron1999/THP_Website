"use strict";

if ($(window).width() > 992) {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      $('#navbar-top').addClass("fixed-top");
      $('#navbar-top').removeClass("order-1");
      $('.hero').removeClass("jump");
      $('#navbarBasicExample').removeClass("is-fixed-top");
      $('#principal-nav').removeClass("navsix");
      $('#navbar-top').addClass("order-2");
      $('#principal-nav').addClass("order-1");
      $('#navbar-top').css('margin-top', '3.25rem'); // add padding top to show content behind navbar

      $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
    } else {
      $('#navbar-top').css("margin-top", "0%");
      $('#navbar-top').removeClass("fixed-top");
      $('#navbarBasicExample').addClass("is-fixed-top");
      $('#principal-nav').addClass("navsix"); // remove padding top from body

      $('body').css('padding-top', '0');
    }
  });
}