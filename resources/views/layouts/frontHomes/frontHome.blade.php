<!DOCTYPE HTML>
<html class="no-js" lang="zxx">
	
<!-- Mirrored from oscarthemes.com/html/edukul/education/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jan 2021 04:16:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="Muhammad Bilal">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="HTML, IconiqThemes Themeforest, Best Theme ">
    <!-- title here -->
	<title>@yield('title')</title>
    {{-- <title>Diskominfo - Informasi</title> --}}
    <!-- Favicon and Touch Icons -->
    <link rel="shortcut icon" href="{{asset('tHome')}}/images/fav.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="stylesheet" href="{{asset('tHome')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('tHome')}}/css/flaticon.css">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{asset('tHome')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('tHome')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('tHome')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('tHome')}}/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('tHome')}}/css/owl.transitions.css">
    <link rel="stylesheet" href="{{asset('tHome')}}/css/meanmenu.min.css">
    <link rel="stylesheet" href="{{asset('tHome')}}/css/lightbox.min.css">
    <link rel="stylesheet" href="{{asset('tHome')}}/css/magnific-popup.css">
    <!--Theme custom css -->
    <link rel="stylesheet" href="{{asset('tHome')}}/css/typography.css">
    <link rel="stylesheet" href="{{asset('tHome')}}/css/shortcode.css">
    <link rel="stylesheet" href="{{asset('tHome')}}/style.css">
    <link rel="stylesheet" href="{{asset('tHome')}}/css/color.css">
    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{asset('tHome')}}/css/responsive.css" />
	<script src="{{asset('tHome')}}/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<!--Alert-->
	{{-- <link rel="stylesheet" type="text/css" href="/pathto/css/sweetalert.css"> --}}
</head>
	<body>
		<!-- LOADER --> 
        {{-- <div id="loader-overflow">
          <div id="loader3" class="loader-cont">Please enable JS</div>
        </div>  --}}
        <!-- Header Start -->
		<header class="header-style1-1">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-3 col-md-3 col-sm-4">
						<!-- Logo Start -->
						<h1 class="logo"><a href="{{route('/')}}"><img src="{{asset('tHome')}}/images/logo.png" alt="logo"></a></h1>
						<!-- Logo End -->
					</div>
					<div class="col-lg-6 col-md-6 col-sm-8">
						<div class="d-lg-flex justify-content-lg-center">
							<div class="menu-holder">
	                            <div class="mobile-menu"></div>
	                            <div class="main-menu navigation">
	                                <nav>
	                                    <ul>
	                                        <li><a href="{{route('/')}}">Home</a></li>                                                         
	                                        <li><a href="about-us.html">About</a></li>
	                                        <li><a href="{{route('blog')}}">Blog</a></li>
	                                        <li><a href="#">Informasi</a>
	                                        	<ul class="sub-menu">
	                                                <li><a href="{{route('blogGird')}}">Informasi Grid</a></li>
	                                                <li><a href="{{route('blog')}}">Informasi List</a></li>
	                                            </ul>
											</li>
											{{-- @if(Auth::user()->role=='admin')
											@endif --}}
											@guest
	                                        <li><a href="{{route('login')}}">Login</a></li>
	                                        <li><a href="{{route('register')}}">Register</a></li>	
											@else
	                                        <li><a href="#">Profil</a>
	                                        	<ul class="sub-menu">
													<li>
														<a href="#" style="text-align: center">
															<img class="rounded-circle" src="images/profile/default.jpg" style="max-width: 20%;">
															<span class="d-none d-xl-inline-block ml-1" key="t-henry">{{auth()->user()->name}}</span>
														</a>
													</li>
													<li class="divider"></li>
	                                                <li><a style="text-align: center" href="{{route('logout')}}">Keluar</a></li>
	                                            </ul>
											</li>
											@endguest
	                                    </ul>
	                                </nav>
	                            </div>
	                        </div>
                        </div> 
					</div>
					<div class="col-lg-3 col-md-3 hidden-xs">
						<div class="helping-box float-lg-right d-flex align-items-center">
							<div class="icon-box">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="overflow-text">
								<h6 class="title">Butuh Bantuan?</h6>
								<p><a href="#">rizkysegitarius12@gmail.com</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
        <!-- Header End -->

        @yield('content')

        <!-- Footer Start -->
        <footer class="footer-style-1">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-4 col-md-6">
        				<!-- Widget Start -->
        				<div class="widget widget-about">
        					<div class="widget-title mb-28">
                                <h5 class="title"><img src="{{asset('tHome')}}/images/footer-logo.png" alt="oscarthemes"></h5>
                            </div><!-- /Widget Title -->
        					<div class="text">
        						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloque laudantium. </p>
        					</div>
        					<ul class="social-meta style-2">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
							</ul>
        				</div>
        				<!-- Widget End -->
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<!-- Widget Start -->
        				<div class="widget widget_nav_menu">
                            <div class="widget-title">
                                <h5 class="title"> Latest Courses</h5>
                            </div><!-- /Widget Title -->
                            <ul>
                                <li><a href="#">Computer Engineering</a></li>
                                <li><a href="#">Web Design & Development</a></li>
                                <li><a href="#">Business Studies</a></li>
                                <li><a href="#">Civil Engineering</a></li>
                            </ul><!-- / Ul -->
                        </div>
        				<!-- Widget End -->
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<!-- Widget Start -->
        				<div class="widget newsletter-widget">
                            <div class="widget-title">
                                <h5 class="title"> Newsletters</h5>
                            </div><!-- /Widget Title -->
                            <div class="text">
                                <p>Subscribe Our Newsletter To Get More Update And Join Our Course Information </p>
                                <!-- Begin Mailchimp Signup Form -->
                                <div id="mc_embed_signup" class="input-field nl-form-container clearfix">
                                    <form action="https://bilalmghl.us19.list-manage.com/subscribe/post-json?u=224c3c7777919c909b29129f9&amp;id=4f4eeeae5b&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate="">
                                        <input value="" type="email" name="EMAIL" id="mce-EMAIL" maxlength="32" placeholder="Enter Your Email" class="email form-control nl-email-input" required="">
                                        <div style="position: absolute; left: -5000px;">
                                            <input type="text" name="b_224c3c7777919c909b29129f9_4f4eeeae5b" tabindex="-1" value="">
                                        </div>
                                        <label class="submit-btn th-bg th-bdr"><input id="mc-embedded-subscribe" type="submit" name="subscribe" value="Subscribe"></label>
                                    </form>
                                    <div id="notification_container"></div>
                                </div>
                                <!--End mc_embed_signup-->
                            </div>
                        </div>
        				<!-- Widget End -->
        			</div>
        		</div>
        	</div>
        	<div class="copy-right text-center">
        		<div class="container">
        			<div class="row">
        				<div class="col-lg-12">
        					<p>Copyright ©2019 <span class="th-cl">Edukul</span>. All Rights Reserved</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </footer>
		<!-- Footer End -->
		<!-- js file start -->
		<script src="{{asset('tHome')}}/js/vendor/jquery-1.12.0.min.js"></script>
		<script src="{{asset('tHome')}}/js/plugins.js"></script>
		<script src="{{asset('tHome')}}/js/Popper.js"></script>
		<script src="{{asset('tHome')}}/js/bootstrap.min.js"></script>
		<script src="{{asset('tHome')}}/js/owl.carousel.min.js"></script>
		<script src="{{asset('tHome')}}/js/isotope.pkgd.min.js"></script>
		<script src="{{asset('tHome')}}/js/imagesloaded.pkgd.min.js"></script>
		<script src="{{asset('tHome')}}/js/scrollup.js"></script>
		<script src="{{asset('tHome')}}/js/jquery.counterup.min.js"></script>
		<script src="{{asset('tHome')}}/js/waypoints.min.js"></script>
		<script src="{{asset('tHome')}}/js/jquery.meanmenu.js"></script>
		<script src="{{asset('tHome')}}/js/lightbox.min.js"></script>
		<script src="{{asset('tHome')}}/js/jquery.magnific-popup.js"></script>
        <!-- Contact Form Validation Js -->
        <script src="{{asset('tHome')}}/js/contact-form-validation.min.js"></script>
        <script src="{{asset('tHome')}}/js/jquery.validate.min.js"></script>
		<script src="{{asset('tHome')}}/js/main.js"></script>

		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		@include('sweet::alert')
		<!-- End js file -->
	</body>

<!-- Mirrored from oscarthemes.com/html/edukul/education/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jan 2021 04:21:05 GMT -->
</html>