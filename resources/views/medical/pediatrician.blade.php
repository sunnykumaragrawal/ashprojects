<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modern Pediatric Website For Your Clinic</title>
	<!-- Favicons -->
	<link href="{{asset('assets/img/favicon/favicon-32x32.png')}}" rel="icon">
	<link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}"/>
	<link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{asset('assets/css/medical/pediatrician.css')}}"/>
</head>
<body>

	<div id="preloder"><div class="loader"></div></div>
	<a href="#" class="back-to-top"><i class="icofont-arrow-up"></i></a>

	<!-- Offcanvas Menu Section -->
	<div class="menu-wrapper">
		<div class="menu-switch"><i class="ti-menu"></i></div>
		<div class="menu-social-warp">
			<div class="menu-social">
				<a href=""><i class="ti-facebook"></i></a>
				<a href=""><i class="ti-twitter-alt"></i></a>
				<a href=""><i class="ti-linkedin"></i></a>
				<a href=""><i class="ti-instagram"></i></a>	
			</div>
		</div>	
	</div>
	<div class="side-menu-wrapper">
		<div class="sm-header">
			<div class="menu-close"><i class="ti-arrow-left"></i></div>
			<a href="" class="site-logo"><h1>Pediatrician</h1></a>
		</div>
		<nav class="main-menu">
			<ul>
				<li><a href="#hero" class="active">Home</a></li>
				<li><a href="#aboutus">About</a></li>
				<li><a href="#myservices">Services</a></li>
				<li><a href="#recentblogs">News</a></li>
				<li><a href="#doctors">Doctors</a></li>
				<li><a href="#contactus">Contact</a></li>
			</ul>
		</nav>
	</div>

	<section id="hero" class="py-0">
		<div class="owl-carousel hero-carousel">
			<div class="row hero-block">
				<div class="col-lg-6 hero-content order-lg-1 order-2">
					<div class="hero-doctor">
						<img src="{{asset('assets/img/medical/pediatrician/doctor/doctor-2.jpg')}}" class="img-fluid">
						<h5>Walter White</h5>
						<span>Pediatrician</span>
					</div>
					<h1>Hey, <span class="servicetwo-typed"></span></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
					<a class="hero-btn">Get An Appointment</a>
				</div>
				<div class="col-lg-6 hero-img order-lg-2 order-1">
					<img src="{{asset('assets/img/medical/pediatrician/service/image1.jpg')}}" class="img-fluid">
				</div>	
			</div>
			<div class="row hero-block">
				<div class="col-lg-6 hero-content order-lg-1 order-2">
					<div class="hero-doctor">
						<img src="{{asset('assets/img/medical/pediatrician/doctor/doctor-1.jpg')}}" class="img-fluid">
						<h5>Sarah Jhonson</h5>
						<span>Allergist</span>
					</div>
					<h1>Hey, <span class="servicethree-typed"></span></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
					<a class="hero-btn">Get An Appointment</a>
				</div>
				<div class="col-lg-6 hero-img order-lg-2 order-1">
					<img src="{{asset('assets/img/medical/pediatrician/service/image5.jpg')}}" class="img-fluid">
				</div>	
			</div>
			<div class="row hero-block">
				<div class="col-lg-6 hero-content order-lg-1 order-2">
					<div class="hero-doctor">
						<img src="{{asset('assets/img/medical/pediatrician/doctor/doctor-3.jpg')}}" class="img-fluid">
						<h5>Amanda Jepson</h5>
						<span>Acute Illness Specialist</span>
					</div>
					<h1>Best <span class="serviceone-typed"></span></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
					<a class="hero-btn">Get An Appointment</a>
				</div>
				<div class="col-lg-6 hero-img order-lg-2 order-1">
					<img src="{{asset('assets/img/medical/pediatrician/service/image3.jpg')}}" class="img-fluid">
				</div>	
			</div>

		</div>	
	</section>

	<main id="main" class="section-bg">

		<section id="aboutus" class="aboutus">
			<div class="container">
				<div class="row">
					<div class="col-lg-6" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="200">
						<div class="about-img">
							<img src="{{asset('assets/img/medical/pediatrician/about-img.jpg')}}" class="img-fluid">	
						</div>	
					</div>
					<div class="col-lg-6">
						<div class="about-content" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="100">
							<span>About Us</span>
							<h2>Top Pediatrician In City</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
						<div class="about-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="200">
							<a onclick="trainedPhy()" class="about-innerbox">Trained Physician
								<div class="about-btn"><span class="icofont-arrow-right"></span></div>
							</a>
							<p id="about1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
						<div class="about-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">
							<a onclick="extraCare()" class="about-innerbox">Extra Care
								<div class="about-btn"><span class="icofont-arrow-right"></span></div>
							</a>
							<p id="about2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>
						<div class="about-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
							<a onclick="allSupport()" class="about-innerbox">24 X 7 Support
								<div class="about-btn"><span class="icofont-arrow-right"></span></div>
							</a>
							<p id="about3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						</div>	
					</div>
				</div>	
			</div>
		</section>

		<section id="myservices" class="myservices">
			<div class="container">
				<div class="section-title" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="100">
					<span>Services</span>
					<h2>Pediatric Services</h2>
				</div>	
				<div class="row">
					<div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="200">
						<div class="service-item">
							<div class="service-content" id="myservice1">
								<h5>Well Child Check Ups</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
							<div class="service-img">
								<img src="{{asset('assets/img/medical/pediatrician/service/image1.jpg')}}" class="img-fluid">
							</div>
						</div>	
					</div>
					<div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="400">
						<div class="service-item">
							<div class="service-content" id="myservice2">
								<h5>Child immunization</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
							<div class="service-img">
								<img src="{{asset('assets/img/medical/pediatrician/service/image2.jpg')}}" class="img-fluid">
							</div>
						</div>	
					</div>
					<div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
						<div class="service-item">
							<div class="service-content" id="myservice3">
								<h5>Acute Illnesses</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
							<div class="service-img">
								<img src="{{asset('assets/img/medical/pediatrician/service/image3.jpg')}}" class="img-fluid">
							</div>
						</div>	
					</div>
					<div class="col-lg-4 col-md-6 d-none" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="800">
						<div class="service-item">
							<div class="service-content" id="myservice4">
								<h5>Add/adhd</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
							<div class="service-img">
								<img src="{{asset('assets/img/medical/pediatrician/service/image4.jpg')}}" class="img-fluid">
							</div>
						</div>	
					</div>
					<div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="200">
						<div class="service-item">
							<div class="service-content" id="myservice5">
								<h5>Asthma & Eczema</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
							<div class="service-img">
								<img src="{{asset('assets/img/medical/pediatrician/service/image5.jpg')}}" class="img-fluid">
							</div>
						</div>	
					</div>
					<div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="400">
						<div class="service-item">
							<div class="service-content" id="myservice6">
								<h5>Behavioral Problems</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
							<div class="service-img">
								<img src="{{asset('assets/img/medical/pediatrician/service/image6.jpg')}}" class="img-fluid">
							</div>
						</div>	
					</div>
					<div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
						<div class="service-item">
							<div class="service-content" id="myservice7">
								<h5>Growth Problems</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
							<div class="service-img">
								<img src="{{asset('assets/img/medical/pediatrician/service/image7.jpg')}}" class="img-fluid">
							</div>
						</div>	
					</div>
				</div>	
			</div>
		</section>

		<section id="recentblogs" class="recentblogs">
			<div class="container">
				<div class="section-title" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="100">
					<span>Blogs</span>
					<h2>Recent Medical News</h2>
				</div>
				<div class="owl-carousel recentblogs-carousel">
					<div class="recentblogs-block" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="200">
						<div class="recentblogs-item">
							<div class="recentblogs-img">
								<img src="{{asset('assets/img/medical/pediatrician/blog/blog-1.jpg')}}" class="img-fluid">
							</div>
							<div class="recentblogs-content">
								<div class="blog-date">
									<div class="one">
										<span class="day">11</span>	
									</div>
									<div class="two">
										<span class="yr">2022</span>
										<span class="mos">March</span>	
									</div>
								</div>
								<div class="recentblogs-icons">
									<ul>
										<li><i class="fa fa-user"></i> John Doe</li>
										<li><i class="fa fa-folder"></i> 3 Comments</li>
									</ul>
								</div>
								<h3>Ut enim ad minim veniam</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
								<div class="recentblogs-btn"><a href="">Read more</a></div>	
							</div>
						</div>	
					</div>
					<div class="recentblogs-block" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="400">
						<div class="recentblogs-item">
							<div class="recentblogs-img">
								<img src="{{asset('assets/img/medical/pediatrician/blog/blog-2.jpg')}}" class="img-fluid">
							</div>
							<div class="recentblogs-content">
								<div class="blog-date">
									<div class="one">
										<span class="day">11</span>	
									</div>
									<div class="two">
										<span class="yr">2022</span>
										<span class="mos">March</span>	
									</div>
								</div>
								<div class="recentblogs-icons">
									<ul>
										<li><i class="fa fa-user"></i> John Doe</li>
										<li><i class="fa fa-folder"></i> 3 Comments</li>
									</ul>
								</div>
								<h3>Ut enim ad minim veniam</h3>

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
								<div class="recentblogs-btn"><a href="">Read more</a></div>	
							</div>
						</div>	
					</div>
					<div class="recentblogs-block" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
						<div class="recentblogs-item">
							<div class="recentblogs-img">
								<img src="{{asset('assets/img/medical/pediatrician/blog/blog-3.jpg')}}" class="img-fluid">
							</div>
							<div class="recentblogs-content">
								<div class="blog-date">
									<div class="one">
										<span class="day">11</span>	
									</div>
									<div class="two">
										<span class="yr">2022</span>
										<span class="mos">March</span>	
									</div>
								</div>
								<div class="recentblogs-icons">
									<ul>
										<li><i class="fa fa-user"></i> John Doe</li>
										<li><i class="fa fa-folder"></i> 3 Comments</li>
									</ul>
								</div>
								<h3>Ut enim ad minim veniam</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
								<div class="recentblogs-btn"><a href="">Read more</a></div>	
							</div>
						</div>	
					</div>
				</div>
			</div>
		</section>

		<section id="doctors" class="doctors">
			<div class="container">
				<div class="section-title" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="100">
					<span>Doctors</span>
					<h2>Best Medical Experts</h2>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="200">
						<div class="doctor-item">
							<img src="{{asset('assets/img/medical/pediatrician/doctor/doctor-1.jpg')}}" class="img-fluid">
							<div class="doctor-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
								<div class="doctor-title">
									<h4>Sarah Jhonson</h4>
									<span>Immunization Specialist</span>	
								</div>
								<div class="doctor-social">
									<a><i class="fa fa-facebook"></i></a>
									<a><i class="fa fa-twitter"></i></a>
									<a><i class="fa fa-instagram"></i></a>
									<a><i class="fa fa-linkedin"></i></a>	
								</div>
							</div>
						</div>	
					</div>
					<div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="400">
						<div class="doctor-item">
							<img src="{{asset('assets/img/medical/pediatrician/doctor/doctor-2.jpg')}}" class="img-fluid">
							<div class="doctor-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
								<div class="doctor-title">
									<h4>Walter White</h4>
									<span>Developmental Specialist</span>	
								</div>
								<div class="doctor-social">
									<a><i class="fa fa-facebook"></i></a>
									<a><i class="fa fa-twitter"></i></a>
									<a><i class="fa fa-instagram"></i></a>
									<a><i class="fa fa-linkedin"></i></a>	
								</div>
							</div>
						</div>	
					</div>
					<div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
						<div class="doctor-item">
							<img src="{{asset('assets/img/medical/pediatrician/doctor/doctor-3.jpg')}}" class="img-fluid">
							<div class="doctor-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
								<div class="doctor-title">
									<h4>Amanda Jepson</h4>
									<span>Behavioral Specialist</span>	
								</div>
								<div class="doctor-social">
									<a><i class="fa fa-facebook"></i></a>
									<a><i class="fa fa-twitter"></i></a>
									<a><i class="fa fa-instagram"></i></a>
									<a><i class="fa fa-linkedin"></i></a>	
								</div>
							</div>
						</div>	
					</div>
				</div>	
			</div>
		</section>

		<section id="contacts" class="contacts">
			<div class="container">
				<div class="section-title" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="100">
					<span>Contact</span>
					<h2>Get In Touch</h2>
				</div>
				<div class="row mb-5">
					<div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="200">
						<div class="contact-item">
							<div class="contact-icon bg-primary">
								<span class="fa fa-map-marker"></span>	
							</div>
							<div class="contact-desc">
								<p><span>Address:</span> New Office</p>	
							</div>
						</div>	
					</div>
					<div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="400">
						<div class="contact-item">
							<div class="contact-icon bg-secondary">
								<span class="fa fa-phone"></span>	
							</div>
							<div class="contact-desc">
								<p><span>Phone:</span> <a href="">xxx-xxx-xxxx</a></p>	
							</div>
						</div>	
					</div>
					<div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
						<div class="contact-item">
							<div class="contact-icon bg-tertiary">
								<span class="fa fa-paper-plane"></span>	
							</div>
							<div class="contact-desc">
								<p><span>Email:</span> <a href="">contact@gmail.com</a></p>	
							</div>
						</div>	
					</div>
					<div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="800">
						<div class="contact-item">
							<div class="contact-icon bg-quarternary">
								<span class="icofont-ui-clock"></span>	
							</div>
							<div class="contact-desc">
								<p><span>Hours</span> <a href="#">09:00 AM - 05:30 PM</a></p>	
							</div>
						</div>	
					</div>
				</div>
				<div class="row no-gutters">
					<div class="col-lg-7 order-lg-1 order-2" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="200" style="background: #54348f;box-shadow: 0px 10px 23px -8px rgba(0, 0, 0, 0.3);">
						<div class="contact-wrap w-100 p-md-5 p-4">
							<h3 class="mb-4">Contact Us</h3>
							<form method="POST" id="contactForm" name="contactForm" class="contactForm">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="label" for="name">Full Name</label>
											<input type="text" class="form-control" name="name" id="name" placeholder="Name">
										</div>
									</div>
									<div class="col-md-12"> 
										<div class="form-group">
											<label class="label" for="email">Email Address</label>
											<input type="email" class="form-control" name="email" id="email" placeholder="Email">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="label" for="subject">Subject</label>
											<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="label" for="#">Message</label>
											<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-md-12 mt-3">
										<div class="form-group">
											<input type="submit" value="Send Message" class="template-btn">
											<div class="submitting"></div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-5 d-flex align-items-stretch order-lg-2 order-1" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="200">
						<div class="info-wrap w-100 img">
							<img src="{{asset('assets/img/medical/pediatrician/contact.jpg')}}" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="socialmedia">
			<div class="container">
				<div class="section-title" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="100">
					<span>Follow</span>
					<h2>Social Media Platforms</h2>
				</div>
				<div class="owl-carousel socialmedia-carousel">
					<div class="social-box" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="200">
						<a><img src="{{asset('assets/img/medical/pediatrician/social/youtube (1).png')}}" class="img-fluid" alt=""></a>
					</div>
					<div class="social-box" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="200">
						<a><img src="{{asset('assets/img/medical/pediatrician/social/google-plus.png')}}" class="img-fluid" alt=""></a>
					</div>
					<div class="social-box" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="200">
						<a><img src="{{asset('assets/img/medical/pediatrician/social/instagram.png')}}" class="img-fluid" alt=""></a>
					</div>
					<div class="social-box" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="200">
						<a><img src="{{asset('assets/img/medical/pediatrician/social/twitter.png')}}" class="img-fluid" alt=""></a>
					</div>
					<div class="social-box" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="200">
						<a><img src="{{asset('assets/img/medical/pediatrician/social/yelp.png')}}" class="img-fluid" alt=""></a>
					</div>
					<div class="social-box" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="200">
						<a><img src="{{asset('assets/img/medical/pediatrician/social/facebook (1).png')}}" class="img-fluid" alt=""></a>
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

	<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
	<script src="{{asset('assets/vendor/typed/typed.js')}}"></script>
	<script src="{{asset('assets/vendor/typed/typed.min.js')}}"></script>
	<script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
	<script src="{{asset('assets/js/medical/pediatrician.js')}}"></script>
</body>
</html>