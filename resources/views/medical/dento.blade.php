<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Modern Dental Website For Your Clinic</title>
  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon/favicon-32x32.png')}}" rel="icon">
  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/medical/dento.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
</head>

<body>

  <a href="https://api.whatsapp.com/send?phone=917770951212" target="_blank" class="whatsapp-btn"><img src="{{asset('assets/img/medical/dento/whatsapp.png')}}" class="img-fluid"></a>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center header-transparent">
    <div class="container-fluid d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{route('medicalDento')}}"><span class="span1">D</span><span class="span2">E</span><span class="span3">N</span><span class="span2">T</span><span class="span1">O</span></a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#hero"><img src="{{asset('assets/img/medical/dento/nav/home.png')}}" class="img-fluid"> <span>Home</span></a></li>
          <li><a href="#aboutus"><img src="{{asset('assets/img/medical/dento/nav/about.png')}}" class="img-fluid"> <span>About</span></a></li>
          <li><a href="#services"><img src="{{asset('assets/img/medical/dento/nav/service.png')}}" class="img-fluid"> <span>Services</span></a></li>
          <li><a href="#gallery"><img src="{{asset('assets/img/medical/dento/nav/gallery.png')}}" class="img-fluid"> <span>Gallery</span></a></li>
          <li><a href="#doctors"><img src="{{asset('assets/img/medical/dento/nav/doctor.png')}}" class="img-fluid"> <span>Doctors</span></a></li>
          <li><a href="#contactus"><img src="{{asset('assets/img/medical/dento/nav/contact.png')}}" class="img-fluid"> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 order-lg-1 order-2">
          <div class="owl-carousel hero-carousel">
            <div class="hero-item">
              <h1>Welcome to Dento</h1>
              <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h2>
              <div class="hero-btns">
                <a href="tel:7770951212" class="herobtn1">Call Now</a>
                <a href="mailto:sunny.agarwal865@gmail.com" class="herobtn2">Send An Email</a>
              </div>
            </div>
            <div class="hero-item">
              <h1>Top Dental Services</h1>
              <h2>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</h2>
              <div class="hero-btns">
                <a href="#aboutus" class="herobtn1">Learn More</a>
                <a href="#services" class="herobtn2">Our Services</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 offset-lg-2 order-lg-2 order-1">
          <div class="owl-carousel heroimg-carousel">
            <div class="hero-img">
              <img src="{{asset('assets/img/medical/dento/hero/hero1.webp')}}" class="img-fluid">
            </div>
            <div class="hero-img">
              <img src="{{asset('assets/img/medical/dento/hero/hero2.webp')}}" class="img-fluid">
            </div>
            <div class="hero-img">
              <img src="{{asset('assets/img/medical/dento/hero/hero3.webp')}}" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #hero -->

  <main id="main" class="section-bg">

    <section id="aboutus" class="aboutus"> 
      <div class="container">
        <div class="aboutus-title" data-aos="flip-up">
          <h3>Why Choose Us</h3>
          <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 about-block" data-aos="flip-down" data-aos-delay="100">
            <div class="about-item">
              <div class="about-icon">
                <img src="{{asset('assets/img/medical/dento/about/icon1.png')}}" class="img-fluid">
              </div>
              <div class="aboutus-content">
                <h4>Trained Dentists</h4>
              </div>
              <div class="about-desc">
                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
              </div>
            </div>
            <div class="about-arrow">
              <img src="{{asset('assets/img/medical/dento/arrow.png')}}" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-6 about-block" data-aos="flip-down" data-aos-delay="300">
            <div class="about-item">
              <div class="about-icon">
                <img src="{{asset('assets/img/medical/dento/about/icon2.png')}}" class="img-fluid">
              </div>
              <div class="aboutus-content">
                <h4>Extra Care</h4>
              </div>
              <div class="about-desc">
                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
              </div>
            </div>
            <div class="about-arrow">
              <img src="{{asset('assets/img/medical/dento/arrow.png')}}" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-6 about-block" data-aos="flip-down" data-aos-delay="500">
            <div class="about-item">
              <div class="about-icon">
                <img src="{{asset('assets/img/medical/dento/about/icon3.png')}}" class="img-fluid">
              </div>
              <div class="aboutus-content">
                <h4>24x7 Support</h4>
              </div>
              <div class="about-desc">
                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
              </div>
            </div>
            <div class="about-arrow">
              <img src="{{asset('assets/img/medical/dento/arrow.png')}}" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-6 about-block" data-aos="flip-down" data-aos-delay="700">
            <div class="about-item">
              <div class="about-icon">
                <img src="{{asset('assets/img/medical/dento/about/icon4.png')}}" class="img-fluid">
              </div>
              <div class="aboutus-content">
                <h4>Focused Doctors</h4>
              </div>
              <div class="about-desc">
                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
              </div>
            </div>
            <div class="about-arrow">
              <img src="{{asset('assets/img/medical/dento/arrow.png')}}" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="services">
      <div class="container-fluid">
        <div class="section-title" data-aos="flip-up">
          <h2>Most Popular Dental Services</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6" data-aos="flip-down" data-aos-delay="100">
            <div class="service-item">
              <div class="service-img">
                <img src="{{asset('assets/img/medical/dento/services/image1.webp')}}" class="img-fluid">
                <div class="service-content">
                <div class="service-icon">
                  <img src="{{asset('assets/img/medical/dento/service/image1.png')}}" class="img-fluid">
                </div>
                <h4>Dental Cleaning</h4>
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="flip-down" data-aos-delay="200">
            <div class="service-item">
              <div class="service-img">
                <img src="{{asset('assets/img/medical/dento/services/image2.webp')}}" class="img-fluid">
                <div class="service-content">
                <div class="service-icon">
                  <img src="{{asset('assets/img/medical/dento/service/image2.png')}}" class="img-fluid">
                </div>
                <h4>Family Dentistry</h4>
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="flip-down" data-aos-delay="300">
            <div class="service-item">
              <div class="service-img">
                <img src="{{asset('assets/img/medical/dento/services/image3.webp')}}" class="img-fluid">
                <div class="service-content">
                <div class="service-icon">
                  <img src="{{asset('assets/img/medical/dento/service/image3.png')}}" class="img-fluid">
                </div>
                <h4>Pediatric Services</h4>
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="flip-down" data-aos-delay="400">
            <div class="service-item">
              <div class="service-img">
                <img src="{{asset('assets/img/medical/dento/services/image4.webp')}}" class="img-fluid">
                <div class="service-content">
                <div class="service-icon">
                  <img src="{{asset('assets/img/medical/dento/service/image4.png')}}" class="img-fluid">
                </div>
                <h4>Oral Appliances</h4>
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="flip-down" data-aos-delay="500">
            <div class="service-item">
              <div class="service-img">
                <img src="{{asset('assets/img/medical/dento/services/image5.webp')}}" class="img-fluid">
                <div class="service-content">
                <div class="service-icon">
                  <img src="{{asset('assets/img/medical/dento/service/image5.png')}}" class="img-fluid">
                </div>
                <h4>Orthodontics</h4>
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="flip-down" data-aos-delay="600">
            <div class="service-item">
              <div class="service-img">
                <img src="{{asset('assets/img/medical/dento/services/image6.webp')}}" class="img-fluid">
                <div class="service-content">
                <div class="service-icon">
                  <img src="{{asset('assets/img/medical/dento/service/image6.png')}}" class="img-fluid">
                </div>
                <h4>Sedation Dentistry</h4>
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="flip-down" data-aos-delay="700">
            <div class="service-item">
              <div class="service-img">
                <img src="{{asset('assets/img/medical/dento/services/image7.webp')}}" class="img-fluid">
                <div class="service-content">
                <div class="service-icon">
                  <img src="{{asset('assets/img/medical/dento/service/image7.png')}}" class="img-fluid">
                </div>
                <h4>Cosmetic Dentistry</h4>
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="flip-down" data-aos-delay="800">
            <div class="service-item">
              <div class="service-img">
                <img src="{{asset('assets/img/medical/dento/services/image8.webp')}}" class="img-fluid">
                <div class="service-content">
                <div class="service-icon">
                  <img src="{{asset('assets/img/medical/dento/service/image8.png')}}" class="img-fluid">
                </div>
                <h4>Tooth Replacement</h4>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="flip-up">
          <h2>Check Our Gallery</h2>
        </div>

        <div class="row no-gutters" data-aos="fade-left">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="{{asset('assets/img/medical/dento/gallery/gallery-1.jpg')}}" class="venobox" data-gall="gallery-item">
                <img src="{{asset('assets/img/medical/dento/gallery/gallery-1.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="{{asset('assets/img/medical/dento/gallery/gallery-2.jpg')}}" class="venobox" data-gall="gallery-item">
                <img src="{{asset('assets/img/medical/dento/gallery/gallery-2.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="{{asset('assets/img/medical/dento/gallery/gallery-3.jpg')}}" class="venobox" data-gall="gallery-item">
                <img src="{{asset('assets/img/medical/dento/gallery/gallery-3.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="{{asset('assets/img/medical/dento/gallery/gallery-4.jpg')}}" class="venobox" data-gall="gallery-item">
                <img src="{{asset('assets/img/medical/dento/gallery/gallery-4.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="{{asset('assets/img/medical/dento/gallery/gallery-5.jpg')}}" class="venobox" data-gall="gallery-item">
                <img src="{{asset('assets/img/medical/dento/gallery/gallery-5.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="{{asset('assets/img/medical/dento/gallery/gallery-6.jpg')}}" class="venobox" data-gall="gallery-item">
                <img src="{{asset('assets/img/medical/dento/gallery/gallery-6.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="{{asset('assets/img/medical/dento/gallery/gallery-7.jpg')}}" class="venobox" data-gall="gallery-item">
                <img src="{{asset('assets/img/medical/dento/gallery/gallery-7.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="{{asset('assets/img/medical/dento/gallery/gallery-8.jpg')}}" class="venobox" data-gall="gallery-item">
                <img src="{{asset('assets/img/medical/dento/gallery/gallery-8.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <section id="doctors" class="doctors">
      <div class="container">
        <div class="section-title" data-aos="flip-up">
          <h2>Meet Our Dentists</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6" data-aos="flip-down" data-aos-delay="100">
            <div class="team-item">
              <div class="team-img">
                <img src="{{asset('assets/img/medical/dento/doctor/image1.png')}}" class="img-fluid">
                <div class="team-social">
                  <a class="team-sicon facebook-bg"><i class="icofont-facebook"></i><span>facebook</span></a>
                  <a class="team-sicon twitter-bg"><i class="icofont-twitter"></i><span>twitter</span></a>
                  <a class="team-sicon instagram-bg"><i class="icofont-instagram"></i><span>instagram</span></a>
                </div>
              </div>
              <div class="team-content">
                <h4>Andrew Tye</h4>
                <span>Dental Cleaner</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="flip-down" data-aos-delay="300">
            <div class="team-item">
              <div class="team-img">
                <img src="{{asset('assets/img/medical/dento/doctor/image2.png')}}" class="img-fluid">
                <div class="team-social">
                  <a class="team-sicon facebook-bg"><i class="icofont-facebook"></i><span>facebook</span></a>
                  <a class="team-sicon twitter-bg"><i class="icofont-twitter"></i><span>twitter</span></a>
                  <a class="team-sicon instagram-bg"><i class="icofont-instagram"></i><span>instagram</span></a>
                </div>
              </div>
              <div class="team-content">
                <h4>Thomas Henry</h4>
                <span>Pediatric Dentist</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="flip-down" data-aos-delay="500">
            <div class="team-item">
              <div class="team-img">
                <img src="{{asset('assets/img/medical/dento/doctor/image3.png')}}" class="img-fluid">
                <div class="team-social">
                  <a class="team-sicon facebook-bg"><i class="icofont-facebook"></i><span>facebook</span></a>
                  <a class="team-sicon twitter-bg"><i class="icofont-twitter"></i><span>twitter</span></a>
                  <a class="team-sicon instagram-bg"><i class="icofont-instagram"></i><span>instagram</span></a>
                </div>
              </div>
              <div class="team-content">
                <h4>James Alexander</h4>
                <span>Sedation Dentist</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="flip-down" data-aos-delay="700">
            <div class="team-item">
              <div class="team-img">
                <img src="{{asset('assets/img/medical/dento/doctor/image4.png')}}" class="img-fluid">
                <div class="team-social">
                  <a class="team-sicon facebook-bg"><i class="icofont-facebook"></i><span>facebook</span></a>
                  <a class="team-sicon twitter-bg"><i class="icofont-twitter"></i><span>twitter</span></a>
                  <a class="team-sicon instagram-bg"><i class="icofont-instagram"></i><span>instagram</span></a>
                </div>
              </div>
              <div class="team-content">
                <h4>Harrison Samuel</h4>
                <span>Cosmetic Dentist</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contactus" class="contactus">
      <div class="container">
        <div class="section-title" data-aos="flip-up">
          <h2>Get In Touch</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6" data-aos="flip-down" data-aos-delay="100">
            <div class="contact-item">
              <div class="contact-outer">
                <div class="contact-inner">
                  <img src="{{asset('assets/img/medical/dento/contact/icon1.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="contact-desc">
                <h4>Our Location</h4>
                <p>New office</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="flip-down" data-aos-delay="300">
            <div class="contact-item">
              <div class="contact-outer">
                <div class="contact-inner">
                  <img src="{{asset('assets/img/medical/dento/contact/icon2.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="contact-desc">
                <h4>Send An Email</h4>
                <p>dento@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="flip-down" data-aos-delay="500">
            <div class="contact-item">
              <div class="contact-outer">
                <div class="contact-inner">
                  <img src="{{asset('assets/img/medical/dento/contact/icon3.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="contact-desc">
                <h4>Call Now</h4>
                <p>xxxx -xxx- xxx</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="flip-down" data-aos-delay="700">
            <div class="contact-item">
              <div class="contact-outer">
                <div class="contact-inner">
                  <img src="{{asset('assets/img/medical/dento/contact/icon4.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="contact-desc">
                <h4>Office Hours</h4>
                <p>09:00 AM - 05:30 PM</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="socialmedia" id="socialmedia">
      <div class="container">
        <div class="section-title" data-aos="flip-up">
          <h2>Let's Start Follow Us</h2>
        </div>
        <div class="owl-carousel socialmedia-carousel">
          <div class="social-block" data-aos="flip-down" data-aos-delay="100">
            <a><img src="{{asset('assets/img/medical/dento/social/youtube.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="social-block" data-aos="flip-down" data-aos-delay="300">
            <a><img src="{{asset('assets/img/medical/dento/social/instagram.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="social-block" data-aos="flip-down" data-aos-delay="500">
            <a><img src="{{asset('assets/img/medical/dento/social/twitter.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="social-block" data-aos="flip-down" data-aos-delay="700">
            <a><img src="{{asset('assets/img/medical/dento/social/facebook.png')}}" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer id="footer">
    <div class="container">
      <div class="credits">
        Designed by <a href="https://agrawalsoftwarehouse.com/" target="_blank">Agrawal Software House</a>
      </div>
    </div>
  </footer>
  
  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/medical/dento.js')}}"></script>

</body>

</html>