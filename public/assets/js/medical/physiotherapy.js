!(function($) {
  "use strict";

  // AOS animation
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  // whatsapp-btn
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.whatsapp-btn').addClass('showbacktop');
    } else {
      $('.whatsapp-btn').removeClass('showbacktop');
    }
  });

  // Toggle .header-scrolled class to #header when page is scrolled
  $(window).scroll(function() {
    if ($(this).scrollTop() > 400) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  // Toggle nav menu
  $(document).on('click', '.nav-toggle', function(e) {
    $('body').toggleClass('body-active');
    $('main').toggleClass('main-active');
    $('header').toggleClass('header-active');
    $('.nav-menu').toggleClass('nav-menu-active');
    $('.nav-toggle').toggleClass('nav-toggle-active');
   // $('.nav-toggle i').toggleClass('bx-x bx-menu');

  });

  // Toogle nav menu drop-down items
  $(document).on('click', '.nav-menu .drop-down > a', function(e) {
    e.preventDefault();
    $(this).next().slideToggle(300);
    $(this).parent().toggleClass('active');
  });

  // Smooth scroll for the navigation menu and links with .scrollto classes
  $(document).on('click', '.nav-menu a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      e.preventDefault();
      var target = $(this.hash);
      var width = $( window ).width();
      if (target.length) {

        var scrollto = target.offset().top;

        if ($(this).attr("href") == '#header') {
          scrollto = 0;
        }

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu').length) {
          $('.nav-menu .active').removeClass('active');
          $(this).closest('li').addClass('active');
          //$('body').toggleClass('body-active');
          // $('header').toggleClass('header-active');
          // $('.nav-menu').toggleClass('nav-menu-active');
          // $('.nav-toggle').removeClass('nav-toggle-active');
          // $('.nav-toggle i').toggleClass('bx-x bx-menu');
          if(width <= 900){
            $('.nav-menu').removeClass('nav-menu-active');
          }
        }
        return false;
      }
    }
  });

  // Social Media carousel (uses the Owl Carousel library)
  $(".socialmedia-carousel").owlCarousel({
    autoplay: true,
    dots: false,
    loop: true,
    margin:20,
    smartSpeed: 1200,
    responsive: {
      0: {
        items: 3
      },
      768: {
        items: 5
      },
      900: {
        items: 6
      }
    }
  });

  // Initiate the venobox plugin
  $(window).on('load', function() {
    $('.venobox').venobox();
  });

})(jQuery);