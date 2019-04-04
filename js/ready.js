$(document).ready(function () { 
  $('.slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true
      }
    }]
  });
  $("a.scrollLink").click(function (event) {
    event.preventDefault();
    $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
  });
  AOS.init();
});