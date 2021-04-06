window.addEventListener('scroll', function () {
  var nav = document.querySelector('nav');
  nav.classList.toggle('sticky', window.scrollY > 0);
});
$(document).ready(function () {
  $('.post-wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 2,
    loop: true,
    autoplay: true,
    autoplaySpeed: 3000,
    nextArrow: $('.next'),
    prevArrow: $('.prev'),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });
});
function myFunction() {
  var x = document.getElementById('myTopnav');
  if (x.className === 'topnav') {
    x.className += ' responsive';
  } else {
    x.className = 'topnav';
  }
}
$(document).ready(function () {
  $('.toggle').click(function () {
    $('.sd-kontak').toggleClass('active');
    $('.toggle').toggleClass('active');
  });
});
$(function () {
  // contact form animations
  $('#contact').click(function () {
    $('#contactForm').fadeToggle();
  });
  $(document).mouseup(function (e) {
    var container = $('#contactForm');

    if (
      !container.is(e.target) && // if the target of the click isn't the container...
      container.has(e.target).length === 0
    ) {
      // ... nor a descendant of the container
      container.fadeOut();
    }
  });
});
$(document).ready(function () {
  $('.menu-toggle').click(function () {
    $('.navbar').toggleClass('active');
  });

  $('ul li').click(function () {
    $(this).siblings().removeClass('active');
    $(this).toggleClass('active');
  });
});
