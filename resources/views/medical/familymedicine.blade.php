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
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/medical/familymedicine.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo" style="float: left;">
        <h1><a href=""><span>HEALTHCARE</span></a></h1>
      </div>

      <button type="button" class="nav-toggle">
        <i class="bx bx-menu-alt-right"></i>
      </button>
      <nav class="nav-menu">
        <ul>
          <li><a href="index.html" class="nav-title">HEALTHCARE</a></li>
          <li class="active"><a href="#hero"><img src="{{asset('assets/img/medical/fammed/nav/home.png')}}" class="img-fluid"><span>Home</span></a></li>
          <li><a href="#aboutus"><img src="{{asset('assets/img/medical/fammed/nav/about.png')}}" class="img-fluid"><span>Why Us</span></a></li>
          <li><a href="#service-main"><img src="{{asset('assets/img/medical/fammed/nav/service.png')}}" class="img-fluid"><span>Services</span></a></li>
          <li><a href="#recentblogs"><img src="{{asset('assets/img/medical/fammed/nav/blog.png')}}" class="img-fluid"><span>News</span></a></li>
          <li><a href="#doctors"><img src="{{asset('assets/img/medical/fammed/nav/doctor.png')}}" class="img-fluid"><span>Doctors</span></a></li>
          <li><a href="#faq"><img src="{{asset('assets/img/medical/fammed/nav/faq.png')}}" class="img-fluid"><span>Faqs</span></a></li>
          <li><a href="#testimonials"><img src="{{asset('assets/img/medical/fammed/nav/review.png')}}" class="img-fluid"><span>Reviews</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 order-lg-1 order-2">
          <div class="owl-carousel hero-carousel">
            <div class="hero-content">
              <p>Best Medical Clinic</p>
              <h1>We provide best medical solution for your Clinic</h1>
              <a class="template-btn1 hero-btn1">Get Started</a>
              <a href="#aboutus" class="template-btn2 hero-btn2">Learn More</a>
            </div>
            <div class="hero-content">
              <p>Best Medical Clinic</p>
              <h1>Best medical services In City</h1>
              <a href="#service-main" class="template-btn1 hero-btn1">View Services</a>
              <a class="template-btn2 hero-btn2">Get Appointment</a>
            </div>
            <div class="hero-content">
              <p>Best Medical Clinic</p>
              <h1>Get Appointment With Our Doctors</h1>
              <a href="#doctors" class="template-btn1 hero-btn1">Search Doctors</a>
              <a class="template-btn2 hero-btn2">Get Appointment</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 order-lg-2 order-1">
          <div class="owl-carousel heroimg-carousel">
            <div class="hero-img">
              <img src="{{asset('assets/img/medical/fammed/hero/hero1.webp')}}" class="img-fluid">
            </div>
            <div class="hero-img">
              <img src="{{asset('assets/img/medical/fammed/hero/hero2.webp')}}" class="img-fluid">
            </div>
            <div class="hero-img">
              <img src="{{asset('assets/img/medical/fammed/hero/hero3.webp')}}" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #hero -->

  <main id="main" class="section-bg">

    <section id="aboutus" class="aboutus">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="about-content" data-aos="flip-left" data-aos-delay="100">
              <h3>Why Choose Us</h3>
              <p>We are a leading medical solutions expert in the your city.</p>
            </div>
            <div class="row">
              <div class="col-md-4" data-aos="flip-up" data-aos-delay="200">
                <div class="about-item">
                  <div class="about-icon">
                    <img src="{{asset('assets/img/medical/fammed/about/icon1.png')}}" class="img-fluid">
                  </div>
                  <div class="about-desc">
                    <h4>Physician</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-4" data-aos="flip-up" data-aos-delay="400">
                <div class="about-item">
                  <div class="about-icon">
                    <img src="{{asset('assets/img/medical/fammed/about/icon2.png')}}" class="img-fluid">
                  </div>
                  <div class="about-desc">
                    <h4>Extra Care</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-4" data-aos="flip-up" data-aos-delay="600">
                <div class="about-item">
                  <div class="about-icon">
                    <img src="{{asset('assets/img/medical/fammed/about/icon3.png')}}" class="img-fluid">
                  </div>
                  <div class="about-desc">
                    <h4>24 Hours</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="flip-right" data-aos-delay="100">
            <div class="about-img">
              <img src="{{asset('assets/img/medical/fammed/about/about.jpg')}}" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="service-main" class="service-main">
      <div class="container">
        <div class="section-title" data-aos="flip-down" data-aos-delay="100">
          <h2>Family Medical Services</h2>
        </div>
        <div class="row">
          <div class="col-lg-5 order-lg-2">
            <ul class="nav nav-tabs row">
              <li class="nav-item col-lg-12 col-md-6 col-12" data-aos="flip-down" data-aos-delay="200">
                <a class="nav-link active show" data-toggle="tab" href="#service-1">
                  <h4>Sports Physicals</h4>
                </a>
              </li>
              <li class="nav-item col-lg-12 col-md-6 col-12" data-aos="flip-down" data-aos-delay="300">
                <a class="nav-link" data-toggle="tab" href="#service-2">
                  <h4>Gyn Services</h4>
                </a>
              </li>
              <li class="nav-item col-lg-12 col-md-6 col-12" data-aos="flip-down" data-aos-delay="400">
                <a class="nav-link" data-toggle="tab" href="#service-3">
                  <h4>Camp Physicals</h4>
                </a>
              </li>
              <li class="nav-item col-lg-12 col-md-6 col-12" data-aos="flip-down" data-aos-delay="500">
                <a class="nav-link" data-toggle="tab" href="#service-4">
                  <h4>School Physicals</h4>
                </a>
              </li>
              <li class="nav-item col-lg-12 col-md-6 col-12" data-aos="flip-down" data-aos-delay="600">
                <a class="nav-link" data-toggle="tab" href="#service-5">
                  <h4>FAA Exams</h4>
                </a>
              </li>
              <li class="nav-item col-lg-12 col-md-6 col-12" data-aos="flip-down" data-aos-delay="700">
                <a class="nav-link" data-toggle="tab" href="#service-6">
                  <h4>Lab Services</h4>
                </a>
              </li>
              <li class="nav-item col-lg-12 col-md-6 col-12" data-aos="flip-down" data-aos-delay="800">
                <a class="nav-link" data-toggle="tab" href="#service-7">
                  <h4>EKG Services</h4>
                </a>
              </li>
              <li class="nav-item col-lg-12 col-md-6 col-12" data-aos="flip-down" data-aos-delay="900">
                <a class="nav-link" data-toggle="tab" href="#service-8">
                  <h4>Well Child Care</h4>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-7 order-lg-1">
            <div class="tab-content" data-aos="flip-up" data-aos-delay="200">
              <div class="tab-pane active show" id="service-1">
                <div class="service-item">
                  <img src="{{asset('assets/img/medical/fammed/services/image1.webp')}}" class="img-fluid">
                  <h4>Sports Physicals</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
              </div>
              <div class="tab-pane" id="service-2">
                <div class="service-item">
                  <img src="{{asset('assets/img/medical/fammed/services/image2.webp')}}" class="img-fluid">
                  <h4>Including Gyn Services</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
              </div>
              <div class="tab-pane" id="service-3">
                <div class="service-item">
                  <img src="{{asset('assets/img/medical/fammed/services/image3.webp')}}" class="img-fluid">
                  <h4>Camp Physicals</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
              </div>
              <div class="tab-pane" id="service-4">
                <div class="service-item">
                  <img src="{{asset('assets/img/medical/fammed/services/image4.webp')}}" class="img-fluid">
                  <h4>School Physicals</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
              </div>
              <div class="tab-pane" id="service-5">
                <div class="service-item">
                  <img src="{{asset('assets/img/medical/fammed/services/image5.webp')}}" class="img-fluid">
                  <h4>FAA Exams</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
              </div>
              <div class="tab-pane" id="service-6">
                <div class="service-item">
                  <img src="{{asset('assets/img/medical/fammed/services/image6.webp')}}" class="img-fluid">
                  <h4>Laboratory Services</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
              </div>
              <div class="tab-pane" id="service-7">
                <div class="service-item">
                  <img src="{{asset('assets/img/medical/fammed/services/image7.webp')}}" class="img-fluid">
                  <h4>EKG Services</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
              </div>
              <div class="tab-pane" id="service-8">
                <div class="service-item">
                  <img src="{{asset('assets/img/medical/fammed/services/image8.webp')}}" class="img-fluid">
                  <h4>Well Child Care</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="recentblogs" class="recentblogs">
      <div class="container">
        <div class="section-title" data-aos="flip-down" data-aos-delay="100">
          <h2>Recent Medical News</h2>
        </div>
        <div class="row">
          <div class="owl-carousel recentblogs-carousel">
            <div class="recentblogs-block" data-aos="flip-up" data-aos-delay="200">
              <div class="recentblogs-item">
                <div class="recentblogs-img">
                  <img src="{{asset('assets/img/medical/fammed/blog/blog-1.jpg')}}" class="img-fluid">
                </div>
                <div class="recentblogs-content">
                  <span>01 SEP, 2022</span>
                  <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h4>
                </div>
              </div>
              <div class="recentblogs-btn">
                <a href="" class="template-btn2">Full Story</a>
              </div>
            </div>
            <div class="recentblogs-block" data-aos="flip-up" data-aos-delay="400">
              <div class="recentblogs-item">
                <div class="recentblogs-img">
                  <img src="{{asset('assets/img/medical/fammed/blog/blog-2.jpg')}}" class="img-fluid">
                </div>
                <div class="recentblogs-content">
                  <span>01 SEP, 2022</span>
                  <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h4>
                </div>
              </div>
              <div class="recentblogs-btn">
                <a href="" class="template-btn2">Full Story</a>
              </div>
            </div>
            <div class="recentblogs-block" data-aos="flip-up" data-aos-delay="600">
              <div class="recentblogs-item">
                <div class="recentblogs-img">
                  <img src="{{asset('assets/img/medical/fammed/blog/blog-3.jpg')}}" class="img-fluid">
                </div>
                <div class="recentblogs-content">
                  <span>01 SEP, 2022</span>
                  <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</h4>
                </div>
              </div>
              <div class="recentblogs-btn">
                <a href="" class="template-btn2">Full Story</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="doctors" class="doctors">
      <div class="container">
        <div class="section-title" data-aos="flip-down" data-aos-delay="100">
          <h2>Best Medical Experts</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6" data-aos="flip-up" data-aos-delay="200">
            <div class="team-item">
              <div class="team-img">
                <img src="{{asset('assets/img/medical/fammed/doctor/image1.jpg')}}" class="img-fluid">
              </div>
              <div class="team-content">
                <h4>Andrew Tye</h4>
                <span>EKG Specialist</span>
              </div>
              <div class="team-social">
                <a class="team-sicon facebook-bg"><i class="icofont-facebook"></i></a>
                <a class="team-sicon twitter-bg"><i class="icofont-twitter"></i></a>
                <a class="team-sicon instagram-bg"><i class="icofont-instagram"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="flip-up" data-aos-delay="400">
            <div class="team-item">
              <div class="team-img">
                <img src="{{asset('assets/img/medical/fammed/doctor/image2.jpg')}}" class="img-fluid">
              </div>
              <div class="team-content">
                <h4>Thomas Henry</h4>
                <span>Physician</span>
              </div>
              <div class="team-social">
                <a class="team-sicon facebook-bg"><i class="icofont-facebook"></i></a>
                <a class="team-sicon twitter-bg"><i class="icofont-twitter"></i></a>
                <a class="team-sicon instagram-bg"><i class="icofont-instagram"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="flip-up" data-aos-delay="600">
            <div class="team-item">
              <div class="team-img">
                <img src="{{asset('assets/img/medical/fammed/doctor/image3.jpg')}}" class="img-fluid">
              </div>
              <div class="team-content">
                <h4>James Alexander</h4>
                <span>Gyn Specialist</span>
              </div>
              <div class="team-social">
                <a class="team-sicon facebook-bg"><i class="icofont-facebook"></i></a>
                <a class="team-sicon twitter-bg"><i class="icofont-twitter"></i></a>
                <a class="team-sicon instagram-bg"><i class="icofont-instagram"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="flip-up" data-aos-delay="800">
            <div class="team-item">
              <div class="team-img">
                <img src="{{asset('assets/img/medical/fammed/doctor/image4.jpg')}}" class="img-fluid">
              </div>
              <div class="team-content">
                <h4>Harrison Samuel</h4>
                <span>Child Specialist</span>
              </div>
              <div class="team-social">
                <a class="team-sicon facebook-bg"><i class="icofont-facebook"></i></a>
                <a class="team-sicon twitter-bg"><i class="icofont-twitter"></i></a>
                <a class="team-sicon instagram-bg"><i class="icofont-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="faq">
      <div class="container">
        <div class="section-title" data-aos="flip-down" data-aos-delay="100">
          <h2>Frequently Asked Questions</h2>
        </div>
        <div class="row accordion">
          <div class="col-lg-12" data-aos="flip-up" data-aos-delay="200">
            <label class="faq-item">
              <input type="checkbox" name="accordion">
              <div class="faq-heading"><img src="{{asset('assets/img/medical/fammed/faq.png')}}" class="img-fluid"> Lorem ipsum dolor sit amet, consectetur adipisicing elit?</div>
              <div class="faq-desc"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p></div>
            </label>
          </div>
          <div class="col-lg-12" data-aos="flip-up" data-aos-delay="300">
            <label class="faq-item">
              <input type="checkbox" name="accordion">
              <div class="faq-heading"><img src="{{asset('assets/img/medical/fammed/faq.png')}}" class="img-fluid"> Lorem ipsum dolor sit amet, consectetur adipisicing elit?</div>
              <div class="faq-desc"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p></div>
            </label>
          </div>
          <div class="col-lg-12" data-aos="flip-up" data-aos-delay="400">
            <label class="faq-item">
              <input type="checkbox" name="accordion">
              <div class="faq-heading"><img src="{{asset('assets/img/medical/fammed/faq.png')}}" class="img-fluid"> Lorem ipsum dolor sit amet, consectetur adipisicing elit?</div>
              <div class="faq-desc"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p></div>
            </label>
          </div>
          <div class="col-lg-12" data-aos="flip-up" data-aos-delay="500">
            <label class="faq-item">
              <input type="checkbox" name="accordion">
              <div class="faq-heading"><img src="{{asset('assets/img/medical/fammed/faq.png')}}" class="img-fluid"> Lorem ipsum dolor sit amet, consectetur adipisicing elit?</div>
              <div class="faq-desc"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p></div>
            </label>
          </div>
          <div class="col-lg-12" data-aos="flip-up" data-aos-delay="600">
            <label class="faq-item">
              <input type="checkbox" name="accordion">
              <div class="faq-heading"><img src="{{asset('assets/img/medical/fammed/faq.png')}}" class="img-fluid"> Lorem ipsum dolor sit amet, consectetur adipisicing elit?</div>
              <div class="faq-desc"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p></div>
            </label>
          </div>
          <div class="col-lg-12" data-aos="flip-up" data-aos-delay="700">
            <label class="faq-item">
              <input type="checkbox" name="accordion">
              <div class="faq-heading"><img src="{{asset('assets/img/medical/fammed/faq.png')}}" class="img-fluid"> Lorem ipsum dolor sit amet, consectetur adipisicing elit?</div>
              <div class="faq-desc"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p></div>
            </label>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="section-title" data-aos="flip-down" data-aos-delay="100">
          <h2>What Are Patients Saying....</h2>
        </div>
        <div class="owl-carousel testimonial-carousel">
          <div class="testimonial-block" data-aos="flip-up" data-aos-delay="200">
            <div class="testimonial-item">
              <div class="testimonial-icon">
                <img src="{{asset('assets/img/medical/fammed/rms/quote.png')}}" class="img-fluid">
              </div>
              <div class="testimonial-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              </div>
              <div class="testimonial-author">
                <img src="{{asset('assets/img/medical/fammed/rms/comments-1.jpg')}}" alt="" class="img-fluid">
                <h5>Caroline Grant</h5>
                <span>One Month Ago</span>
              </div>
            </div>
          </div>
          <div class="testimonial-block" data-aos="flip-up" data-aos-delay="400">
            <div class="testimonial-item">
              <div class="testimonial-icon">
                <img src="{{asset('assets/img/medical/fammed/rms/quote.png')}}" class="img-fluid">
              </div>
              <div class="testimonial-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              </div>
              <div class="testimonial-author">
                <img src="{{asset('assets/img/medical/fammed/rms/comments-2.jpg')}}" alt="" class="img-fluid">
                <h5>Nathan Mullins</h5>
                <span>One Month Ago</span>
              </div>
            </div>
          </div>
          <div class="testimonial-block" data-aos="flip-up" data-aos-delay="600">
            <div class="testimonial-item">
              <div class="testimonial-icon">
                <img src="{{asset('assets/img/medical/fammed/rms/quote.png')}}" class="img-fluid">
              </div>
              <div class="testimonial-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
              </div>
              <div class="testimonial-author">
                <img src="{{asset('assets/img/medical/fammed/rms/comments-3.jpg')}}" alt="" class="img-fluid">
                <h5>Maria Angel</h5>
                <span>One Month Ago</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="socialmedia" id="socialmedia">
      <div class="container">
        <div class="section-title" data-aos="flip-down" data-aos-delay="100">
          <h2>Social Media Platforms</h2>
        </div>
        <div class="owl-carousel socialmedia-carousel">
          <div class="social-block" data-aos="flip-up" data-aos-delay="200">
            <a><img src="{{asset('assets/img/medical/fammed/social/youtube.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="social-block" data-aos="flip-up" data-aos-delay="200">
            <a><img src="{{asset('assets/img/medical/fammed/social/google.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="social-block" data-aos="flip-up" data-aos-delay="200">
            <a><img src="{{asset('assets/img/medical/fammed/social/instagram.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="social-block" data-aos="flip-up" data-aos-delay="200">
            <a><img src="{{asset('assets/img/medical/fammed/social/twitter.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="social-block" data-aos="flip-up" data-aos-delay="200">
            <a><img src="{{asset('assets/img/medical/fammed/social/yelp.png')}}" class="img-fluid" alt=""></a>
          </div>
          <div class="social-block" data-aos="flip-up" data-aos-delay="200">
            <a><img src="{{asset('assets/img/medical/fammed/social/facebook.png')}}" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <footer id="footer">
    <div class="container-fluid footer-contacts">
     <div class="row">
      <div class="col-lg-4">
        <div class="footer-cbox">
          <div class="footer-cimg">
            <img src="{{asset('assets/img/medical/fammed/contact/icon3.png')}}" class="img-fluid">
          </div>
          <h5>Say Hello</h5>
          <span>xxx-xxx-xxxx</span>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="footer-cbox">
          <div class="footer-cimg">
            <img src="{{asset('assets/img/medical/fammed/contact/icon2.png')}}" class="img-fluid">
          </div>
          <h5>Mail Us</h5>
          <span>contact@gmail.com</span>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="footer-cbox">
          <div class="footer-cimg">
            <img src="{{asset('assets/img/medical/fammed/contact/icon1.png')}}" class="img-fluid">
          </div>
          <h5>Our Address</h5>
          <span>New Office</span>
        </div>
      </div>
     </div>
    </div>
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#aboutus">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#service-main">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#recentblogs">Blogs</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#aboutus">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#service-main">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#recentblogs">Blogs</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6">
            <h4>Recent News</h4>
            <div class="footer-blogs">
              <img src="{{asset('assets/img/medical/fammed/blog/blog-1.jpg')}}" class="img-fluid">
              <span>11 April, 2022</span>
              <h5>Less Than 15% of Medical Sites Meet CORE WEB VITALS Scores</h5>
            </div>
            <div class="footer-blogs">
              <img src="{{asset('assets/img/medical/fammed/blog/blog-2.jpg')}}" class="img-fluid">
              <span>11 April, 2022</span>
              <h5>8 Silly But Harmful SEO Mistakes Medical Sites Make</h5>
            </div>
            <div class="footer-blogs">
              <img src="{{asset('assets/img/medical/fammed/blog/blog-3.jpg')}}" class="img-fluid">
              <span>11 April, 2022</span>
              <h5>Don't Let Your Medical Web Site Listings be Sabotaged</h5>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="credits">
        Designed by <a href="https://agrawalsoftwarehouse.com/" target="_blank">Agrawal Software House</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-arrow-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  
  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/medical/familymedicine.js')}}"></script>

</body>

</html>