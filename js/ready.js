$(document).ready(function () { 
  $('.slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    dots: false,
    infinite: false,
    responsive: [{
      breakpoint: 1025,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,
        infinite: false
      }
    }]
  });
  $("a.scrollLink").click(function (event) {
    event.preventDefault();
    $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
  });
  AOS.init();
});

showModal = (element) =>{
  let img = element.getElementsByTagName('img')[0].src;
  let caption = element.getElementsByTagName('img')[0].dataset.caption;
  document.getElementById('imageModal').innerHTML = '<img src="'+img+'">';
  document.getElementById('captionModal').innerHTML = '<p>'+caption+'</p>';

  document.getElementsByClassName('wrappModal')[0].classList.add('showModal');
  document.getElementsByClassName('overflow')[0].classList.add('showModalWrapp');
}

closeModal = () => {
  document.getElementsByClassName('wrappModal')[0].classList.remove('showModal');
  document.getElementsByClassName('overflow')[0].classList.remove('showModalWrapp');
}