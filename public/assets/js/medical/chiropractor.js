!(function($) {
  "use strict";

  // Hero animations
  $(window).on('load', function(e) {
    $('#hero').toggleClass('hero-animate');
  });

  // Toggle nav menu
  $(document).on('click', '.nav-toggle', function(e) {
    $('.image-animate').toggleClass('image-animate-active');
    $('.nav-menu').toggleClass('nav-menu-active');
    $('.nav-toggle').toggleClass('nav-toggle-active');
    $('.nav-toggle i').toggleClass('bx-left-arrow-alt bx-menu');

  });

  // Toggle .header-scrolled class to #header when page is scrolled
  $(window).scroll(function() {
    if ($(this).scrollTop() > 400) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  // Smooth scroll for the navigation menu and links with .scrollto classes
  $(document).on('click', '.nav-menu a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      e.preventDefault();
      var target = $(this.hash);
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
          $('.image-animate').toggleClass('image-animate-active');
          $('.nav-menu').removeClass('nav-menu-active');
          $('.nav-toggle').removeClass('nav-toggle-active');
          $('.nav-toggle i').toggleClass('bx-left-arrow-alt bx-menu');
        }
        return false;
      }
    }
  });

  // Hero carousel (uses the Owl Carousel library)
  $(".hero-carousel").owlCarousel({
    autoplay: true,
    dots: false,
    loop: true,
    margin:30,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 1
      },
      900: {
        items: 1
      }
    }
  });

  // Social Media carousel (uses the Owl Carousel library)
  $(".socialmedia-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    margin:20,
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

  // Recentblogs carousel (uses the Owl Carousel library)
  $(".recentblogs-carousel").owlCarousel({
    autoplay: true,
    dots: false,
    loop: true,
    margin:30,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 1
      },
      900: {
        items: 1
      }
    }
  });

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

  // Initiate the venobox plugin
  $(window).on('load', function() {
    $('.venobox').venobox();
  });

})(jQuery);