<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Modern Medical Website For Your Clinic</title>
  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon/favicon-32x32.png')}}" rel="icon">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/medical/dentista.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
</head>

<body>

  <header id="header">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom-header">
        <a class="navbar-brand" href="">
          <span>Dentista</span>
        </a>
        <div class="navbar-collapse" id="">
          <div class="custom-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
          </div>
          <div id="myNav" class="overlay">
            <div class="overlay-top">
              <h5>TRUSTED & CERTIFIED MEDICAL SOLUTION IN CITY</h5>
            </div>
            <div class="row overlay-content">
              <a class="col-md-4 col-6" href="#hero"><img src="{{asset('assets/img/medical/dentista/nav/icon1.png')}}" class="img-fluid"> <span>Home</span></a>
              <a class="col-md-4 col-6" href="#aboutus"><img src="{{asset('assets/img/medical/dentista/nav/icon2.png')}}" class="img-fluid"> <span>Why Us</span></a>
              <a class="col-md-4 col-6" href="#services"><img src="{{asset('assets/img/medical/dentista/nav/icon4.png')}}" class="img-fluid"> <span>Services</span></a>
              <a class="col-md-4 col-6" href="#gallery"><img src="{{asset('assets/img/medical/dentista/nav/gallery.png')}}" class="img-fluid"> <span>Gallery</span></a>
              <a class="col-md-4 col-6" href="#doctors"><img src="{{asset('assets/img/medical/dentista/nav/icon7.png')}}" class="img-fluid"> <span>Doctors</span></a>
              <a class="col-md-4 col-6" href="#contactus"><img src="{{asset('assets/img/medical/dentista/nav/icon8.png')}}" class="img-fluid"> <span>Contact Us</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <div class="alert alert-info alert-dismissible">
    <marquee><strong>Our Office will be Closed on Saturday & Sunday</strong></marquee>
    <span class="close" data-dismiss="alert">&times;</span>
  </div>

  <section class="hero" id="hero">
    <div class="owl-carousel hero-carousel">
      <div class="row slide">
        <div class="col-lg-6 hero-img">
          <img src="{{asset('assets/img/medical/dentista/service/image1.webp')}}" class="img-fluid">
        </div>
        <div class="col-lg-6 hero-content">
          <h1>Best <span>Dental Cleaning</span> In City</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="#aboutus" class="template-btn"><span>Learn More</span></a>
        </div>
      </div>
      <div class="row slide">
        <div class="col-lg-6 hero-img">
          <img src="{{asset('assets/img/medical/dentista/service/image2.webp')}}" class="img-fluid">
        </div>
        <div class="col-lg-6 hero-content">
          <h1>Best <span>Family Dentistry</span> In City</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="#aboutus" class="template-btn"><span>Learn More</span></a>
        </div>
      </div>
      <div class="row slide">
        <div class="col-lg-6 hero-img">
          <img src="{{asset('assets/img/medical/dentista/service/image3.webp')}}" class="img-fluid">
        </div>
        <div class="col-lg-6 hero-content">
          <h1>Best <span>Child Dentistry</span> In City</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="#aboutus" class="template-btn"><span>Learn More</span></a>
        </div>
      </div>
    </div>
  </section>

  <main id="main" class="section-bg">

    <section id="aboutus" class="aboutus">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 about-content" data-aos="fade-right">
            <h6><span>WHY US</span></h6>
            <h3>Why Choose us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
            <div class="about-btn">
              <a class="template-btn"><span>Learn More</span></a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12 about-item" id="about1" data-aos="zoom-in">
                <div class="about-icon"><img src="{{asset('assets/img/medical/dentista/about/icon1.png')}}" class="img-fluid"></div>
                <h5>Trained Physician</h5>
                <div class="about-desc" id="about1">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
              <div class="col-lg-12 about-item" id="about2" data-aos="zoom-in">
                <div class="about-icon"><img src="{{asset('assets/img/medical/dentista/about/icon2.png')}}" class="img-fluid"></div>
                <h5>Extra Care</h5>
                <div class="about-desc" id="about2">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-center pl-lg-4">
            <div class="about-item" id="about3" data-aos="zoom-in">
              <div class="about-icon"><img src="{{asset('assets/img/medical/dentista/about/icon3.png')}}" class="img-fluid"></div>
              <h5>24x7 Support</h5>
              <div class="about-desc" id="about3">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="services">
      <div class="container mytitle">
        <div class="row">
          <div class="col-lg-7 title-left order-lg-1 order-2" data-aos="fade-right">
            <span>Our Services</span>
            <h6>Dental Services</h6>
          </div>
        </div>
      </div>
      <div id="service1">
        <div class="container-fluid myservices">
          <div class="row">
            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="row service-item">
                <div class="col-md-6 service-img">
                  <img src="{{asset('assets/img/medical/dentista/service/image1.webp')}}" class="img-fluid">
                </div>
                <div class="col-md-6 service-content">
                  <h5>Dental Cleaning</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="row service-item">
                <div class="col-md-6 service-img order-lg-1 order-md-2">
                  <img src="{{asset('assets/img/medical/dentista/service/image2.webp')}}" class="img-fluid">
                </div>
                <div class="col-md-6 service-content order-lg-2 order-md-1">
                  <h5>Family Dentistry</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="row service-item">
                <div class="col-md-6 service-img order-lg-2">
                  <img src="{{asset('assets/img/medical/dentista/service/image3.webp')}}" class="img-fluid">
                </div>
                <div class="col-md-6 service-content order-lg-1">
                  <h5>Pediatric Services</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="row service-item">
                <div class="col-md-6 service-img order-md-2">
                  <img src="{{asset('assets/img/medical/dentista/service/image4.webp')}}" class="img-fluid">
                </div>
                <div class="col-md-6 service-content order-md-1">
                  <h5>Oral Appliances</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="service-btn">
          <a class="template-btn" onclick="document.getElementById('service2').style.display='block';document.getElementById('service1').style.display='none';"><span>More Services</span></a>
        </div>
      </div>

      <div id="service2" style="display: none;">
        <div class="container-fluid myservices">
          <div class="row">
            <div class="col-lg-6">
              <div class="row service-item">
                <div class="col-md-6 service-img">
                  <img src="{{asset('assets/img/medical/dentista/service/image5.webp')}}" class="img-fluid">
                </div>
                <div class="col-md-6 service-content">
                  <h5>Orthodontics</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row service-item">
                <div class="col-md-6 service-img order-lg-1 order-md-2">
                  <img src="{{asset('assets/img/medical/dentista/service/image6.webp')}}" class="img-fluid">
                </div>
                <div class="col-md-6 service-content order-lg-2 order-md-1">
                  <h5>Sedation Dentistry</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row service-item">
                <div class="col-md-6 service-img order-lg-2">
                  <img src="{{asset('assets/img/medical/dentista/service/image7.webp')}}" class="img-fluid">
                </div>
                <div class="col-md-6 service-content order-lg-1">
                  <h5>Cosmetic Dentistry</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row service-item">
                <div class="col-md-6 service-img order-md-2">
                  <img src="{{asset('assets/img/medical/dentista/service/image8.webp')}}" class="img-fluid">
                </div>
                <div class="col-md-6 service-content order-md-1">
                  <h5>Tooth Replacement</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="service-btn">
          <a class="template-btn" onclick="document.getElementById('service1').style.display='block';document.getElementById('service2').style.display='none';"><span>Back To Previous Services</span></a>
        </div>
      </div>
    </section>

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="col-lg-7 title-left order-lg-1 order-2" data-aos="fade-right">
          <span>Gallery</span>
          <h6>Check Our Gallery</h6>
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
      <div class="container mytitle">
        <div class="row">
          <div class="col-lg-7 title-left order-lg-1 order-2" data-aos="fade-right">
            <span>Our Doctors</span>
            <h6>Best Medical Expert</h6>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="team-block">
              <div class="team-item">
                <div class="team-img">
                  <img src="{{asset('assets/img/medical/dentista/doctor/doctor-1.jpg')}}" class="img-fluid">
                </div>
                <div class="team-social">
                  <a class="facebook-bg"><i class="icofont-facebook"></i></a>
                  <a class="twitter-bg"><i class="icofont-twitter"></i></a>
                  <a class="instagram-bg"><i class="icofont-instagram"></i></a>
                </div>
                <div class="team-content">
                  <h5>Ashton Kutcher</h5>
                  <span>Dental Cleaner</span>
                </div>
              </div>
              <div class="team-appointment">
                <a class="template-btn"><span>Chat on Whatsapp</span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-block">
              <div class="team-item">
                <div class="team-img">
                  <img src="{{asset('assets/img/medical/dentista/doctor/doctor-2.jpg')}}" class="img-fluid">
                </div>
                <div class="team-social">
                  <a class="facebook-bg"><i class="icofont-facebook"></i></a>
                  <a class="twitter-bg"><i class="icofont-twitter"></i></a>
                  <a class="instagram-bg"><i class="icofont-instagram"></i></a>
                </div>
                <div class="team-content">
                  <h5>Sarah Jhonson</h5>
                  <span>Pediatric Dentist</span>
                </div>
              </div>
              <div class="team-appointment">
                <a class="template-btn"><span>Chat on Whatsapp</span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="team-block">
              <div class="team-item">
                <div class="team-img">
                  <img src="{{asset('assets/img/medical/dentista/doctor/doctor-3.jpg')}}" class="img-fluid">
                </div>
                <div class="team-social">
                  <a class="facebook-bg"><i class="icofont-facebook"></i></a>
                  <a class="twitter-bg"><i class="icofont-twitter"></i></a>
                  <a class="instagram-bg"><i class="icofont-instagram"></i></a>
                </div>
                <div class="team-content">
                  <h5>William Anderson</h5>
                  <span>Sedation Dentist</span>
                </div>
              </div>
              <div class="team-appointment">
                <a class="template-btn"><span>Chat on Whatsapp</span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-block">
              <div class="team-item">
                <div class="team-img">
                  <img src="{{asset('assets/img/medical/dentista/doctor/doctor-4.jpg')}}" class="img-fluid">
                </div>
                <div class="team-social">
                  <a class="facebook-bg"><i class="icofont-facebook"></i></a>
                  <a class="twitter-bg"><i class="icofont-twitter"></i></a>
                  <a class="instagram-bg"><i class="icofont-instagram"></i></a>
                </div>
                <div class="team-content">
                  <h5>Amanda Jepson</h5>
                  <span>Cosmetic Dentist</span>
                </div>
              </div>
              <div class="team-appointment">
                <a class="template-btn"><span>Chat on Whatsapp</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

      
    <section id="contactus" class="contactus">
      <div class="container mytitle">
        <div class="row">
          <div class="col-lg-7 title-left order-lg-1 order-2" data-aos="fade-right">
            <span>Contact Us</span>
            <h6>Get In Touch</h6>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mb-5">
            <div class="row">
              <div class="col-lg-3 col-md-6" id="contact1" data-aos="zoom-in" data-aos-delay="100">
                <div class="contact-item">
                  <div class="contact-icon">
                    <img src="{{asset('assets/img/medical/dentista/contact/icon1.png')}}" class="img-fluid">
                  </div>
                  <div class="contact-content">
                    <h5>Address</h5>
                    <p>New Office</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6" id="contact2" data-aos="zoom-in" data-aos-delay="200">
                <div class="contact-item">
                  <div class="contact-icon">
                    <img src="{{asset('assets/img/medical/dentista/contact/icon2.png')}}" class="img-fluid">
                  </div>
                  <div class="contact-content">
                    <h5>Email</h5>
                    <p>contact@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6" id="contact3" data-aos="zoom-in" data-aos-delay="300">
                <div class="contact-item">
                  <div class="contact-icon">
                    <img src="{{asset('assets/img/medical/dentista/contact/icon3.png')}}" class="img-fluid">
                  </div>
                  <div class="contact-content">
                    <h5>Phone</h5>
                    <p>xxx-xxx-xxxx</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6" id="contact4" data-aos="zoom-in" data-aos-delay="400">
                <div class="contact-item">
                  <div class="contact-icon">
                    <img src="{{asset('assets/img/medical/dentista/contact/icon4.png')}}" class="img-fluid">
                  </div>
                  <div class="contact-content">
                    <h5>Hours</h5>
                    <p>09:00 AM - 05:30 PM</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="socialmedia">
      <div class="container mytitle">
        <div class="row">
          <div class="col-lg-7 title-left order-lg-1 order-2" data-aos="fade-right">
            <span>Follow Us</span>
            <h6>Social Platforms</h6>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="owl-carousel socialmedia-carousel">
          <div class="social-block" data-aos="zoom-in" data-aos-delay="100">
            <a><img src="{{asset('assets/img/medical/dentista/social/youtube (1).png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="social-block" data-aos="zoom-in" data-aos-delay="100">
            <a><img src="{{asset('assets/img/medical/dentista/social/google-plus.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="social-block" data-aos="zoom-in" data-aos-delay="100">
            <a><img src="{{asset('assets/img/medical/dentista/social/instagram.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="social-block" data-aos="zoom-in" data-aos-delay="100">
            <a><img src="{{asset('assets/img/medical/dentista/social/twitter.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="social-block" data-aos="zoom-in" data-aos-delay="100">
            <a><img src="{{asset('assets/img/medical/dentista/social/yelp.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="social-block" data-aos="zoom-in" data-aos-delay="100">
            <a><img src="{{asset('assets/img/medical/dentista/social/facebook (1).png')}}" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="d-flex">
              <h5>Quick Links</h5>
            </div>
            <div class="d-flex ">
              <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="#aboutus">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contactus">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
            <div class="d-flex">
              <h5>Quick Links</h5>
            </div>
            <div class="d-flex ">
              <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="#aboutus">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contactus">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="d-flex">
              <h5>Quick Links</h5>
            </div>
            <div class="d-flex ">
              <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="#aboutus">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contactus">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="d-flex">
              <h5>Working Hours</h5>
            </div>
            <div class="d-flex ">
              <ul>
                <li><a href="">Mon - Fri</a></li>
                <li><a href="">Sat</a></li>
                <li><a href="">Sun</a></li>
              </ul>
              <ul class="ml-3 ml-md-5">
                <li><a href="">09:00 AM - 05:30 PM</a></li>
                <li><a href="">09:00 AM - 01:30 PM</a></li>
                <li><a href="">Closed</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline">
          <div class="social-box">
            <a class="facebook-bg"><i class="icofont-facebook"></i></a>
            <a class="twitter-bg"><i class="icofont-twitter"></i></a>
            <a class="instagram-bg"><i class="icofont-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid copyright">
      <p>Designed by <a href="https://agrawalsoftwarehouse.com/" target="_blank">Agrawal Software House</a></p>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-arrow-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/medical/dentista.js')}}"></script>
  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom-btn")
        .classList.toggle("custom-cross-btn");
    }
  </script> 
</body>

</html>