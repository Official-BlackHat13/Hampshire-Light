// HEADER SCROLL TRIGGER
jQuery(document).scroll(function () {
  var y = jQuery(document).scrollTop(),
    header = jQuery(".header--section");
  if (y >= 100) {
    header.addClass("scroll--active");
  } else {
    header.removeClass("scroll--active");
  }
});
// SEREVICE SLIDER
var slider_ID = "service--slider",
  myEle = document.getElementById(slider_ID);
if (myEle) {
  jQuery("." + slider_ID).owlCarousel({
    loop: true,
    margin: 15,
    dots: true,
    dotsData: true,
    nav: false,
    center: true,
    items: 2,
    // autoWidth: true,
    responsive: {
      1800: {
        margin: 30,
      },
      1280: {
        margin: 15,
      },
    },
  });
}
// BRANDS SLIDER
var slider_ID = "brands--slider",
  myEle = document.getElementById(slider_ID);
if (myEle) {
  jQuery("." + slider_ID).owlCarousel({
    loop: false,
    margin: 30,
    slideTransition: "linear",
    dots: false,
    nav: false,
    items: 1,
    autoWidth: true,
    responsive: {
      1800: {
        margin: 70,
      },
      1280: {
        margin: 45,
      },
    },
  });
}
// TESTIMONIAL SLIDER
var slider_ID = "testimonial--slider",
  myEle = document.getElementById(slider_ID);
if (myEle) {
  jQuery("." + slider_ID).owlCarousel({
    loop: true,
    margin: 10,
    dots: true,
    nav: false,
    items: 1,
  });
}
if (screen.width <= 992) {
  // MOBILE NAVLIST TOGGLER
  jQuery("#navBar").on("click", function () {
    jQuery(this).toggleClass("active");
    jQuery("body").toggleClass("hide");
    jQuery("#navList").slideToggle();
  });
}
// FAQ Filter
jQuery(document).ready(function () {
  // filter items on button click
  jQuery("#faq--links li a").on("click", function (e) {
    e.preventDefault();
    var filterValue = jQuery(this).attr("data-filter");
    jQuery("#faq--links li a").removeClass('is--active');
    jQuery(this).addClass('is--active');
    jQuery('.faq--item').hide();
    jQuery('.faq--item[data-category="' + filterValue + '"]').show();
  });
});
