<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/amira/demos/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 18:29:10 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Register, Diskominfo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('tHomes')}}/img/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/style.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/skins/yellow.css" />

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{asset('tHomes')}}/css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="{{asset('tHomes')}}/css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{asset('tHomes')}}/css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="{{asset('tHomes')}}/css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{asset('tHomes')}}/css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="{{asset('tHomes')}}/css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="{{asset('tHomes')}}/css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="{{asset('tHomes')}}/css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{asset('tHomes')}}/css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{asset('tHomes')}}/css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/styleswitcher.css" />

    <!-- Template JS Files -->
    <script src="{{asset('tHomes')}}/js/modernizr.js"></script>

</head>

<body class="double-diagonal dark auth-page">
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="logopreloader">
            <img src="{{asset('tHomes')}}/img/styleswitcher/logos/yellow.png" alt="logo-black">
        </div>
        <div class="loader" id="loader"></div>
    </div>
    <!-- Preloader Ends -->
    
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <div class="container-fluid user-auth">
			<div class="hidden-xs col-sm-4 col-md-4 col-lg-4">
				<!-- Logo Starts -->
				<a class="logo" href="{{route('/')}}">
					<img id="single-logo" class="img-responsive" src="{{asset('tHomes')}}/img/styleswitcher/logos/yellow.png" alt="logo">
				</a>
				<!-- Logo Ends -->
				<!-- Slider Starts -->
				<div id="carousel-testimonials" class="carousel slide carousel-fade" data-ride="carousel">
					<!-- Indicators Starts -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-testimonials" data-slide-to="1"></li>
						<li data-target="#carousel-testimonials" data-slide-to="2"></li>
					</ol>
					<!-- Indicators Ends -->
					<!-- Carousel Inner Starts -->
					<div class="carousel-inner">
						<!-- Carousel Item Starts -->
						<div class="item active item-1">
							<div>
								<blockquote>
									<p>Amira's Team Was Great To Work With And Interpreted Our Needs Perfectly.</p>
									<footer><span>Lucy Smith</span>, England</footer>
								</blockquote>
							</div>
						</div>
						<!-- Carousel Item Ends -->
						<!-- Carousel Item Starts -->
						<div class="item item-2">
							<div>
								<blockquote>
									<p>The Team Is Endlessly Helpful, Flexible And Always Quick To Respond, Thanks Amira!</p>
									<footer><span>Rawia Chniti</span>, Russia</footer>
								</blockquote>
							</div>
						</div>
						<!-- Carousel Item Ends -->
						<!-- Carousel Item Starts -->
						<div class="item item-3">
							<div>
								<blockquote>
									<p>We Are So Appreciative Of Their Creative Efforts, And Love Our New Site!, millions of thanks Amira!</p>
									<footer><span>Mario Verratti</span>, Spain</footer>
								</blockquote>
							</div>
						</div>
						<!-- Carousel Item Ends -->
					</div>
					<!-- Carousel Inner Ends -->
				</div>
				<!-- Slider Ends -->
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<!-- Logo Starts -->
				<a class="visible-xs" href="{{route('/')}}">
					<img id="logo-mobile-light" class="img-responsive mobile-logo white-l" src="{{asset('tHomes')}}/img/styleswitcher/logos/yellow.png" alt="logo">
					<img id="logo-mobile-dark" class="img-responsive mobile-logo dark-l" src="{{asset('tHomes')}}/img/styleswitcher/logos/logos-dark/yellow.png" alt="logo">
				</a>
				<!-- Logo Ends -->
				<div class="form-container">
					<div>
						<!-- Main Heading Starts -->
					<div class="text-center top-text">
						<h1><span>get</span> started</h1>
						<p>open account absolutely free</p>
					</div>
					<!-- Main Heading Ends -->
						<!-- Form Starts -->
                        <form class="custom-form" action="{{route('postregister')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
							<!-- Input Field Starts -->
							<div class="form-group{{$errors->has('nama_depan') ? ' has-error' : ''}}">
                                <input class="form-control" name="nama_depan" id="nama_depan" placeholder="Nama Depan" type="text" required>
                                @if($errors->has('nama_depan'))
                                    <span class="help-block">{{$errors->first('nama_depan')}}</span>
                                @endif
							</div>
                            <!-- Input Field Ends -->
                            <div class="form-group">
								<input class="form-control" name="nama_belakang" id="nama_belakang" placeholder="Nama belakang" type="text" >
                            </div>
                            <div class="form-group">
								<input class="form-control" name="agama" id="agama" placeholder="Agama" type="text" required>
                            </div>
                        
							<!-- Input Field Starts -->
							<div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                                <input class="form-control" name="email" id="email" placeholder="Email" type="email" required>
                                @if($errors->has('email'))
                                    <span class="help-block">{{$errors->first('email')}}</span>
                                @endif 
							</div>
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group">
								<input class="form-control" name="password" id="password" placeholder="PASSWORD" type="password" required>
							</div>
							<!-- Input Field Ends -->
							<!-- Submit Form Button Starts -->
							<div class="form-group">
								<button class="custom-button" type="submit">Buat Akun</button>
								<p class="text-center">sudah mempunyai akun ? <a href="{{route('login')}}">Masuk</a>
							</div>
							<!-- Submit Form Button Ends -->
						</form>
						<!-- Form Ends -->
					</div>
				</div>
				<!-- Copyright Text Starts -->
				{{-- <p class="text-center copyright-text">Copyright © 2018 Amira All Rights Reserved</p> --}}
				<!-- Copyright Text Ends -->
			</div>
		</div>
    </div>
    <!-- Wrapper Ends -->

    <!-- Template JS Files -->
    <script src="{{asset('tHomes')}}/js/jquery-2.2.4.min.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/jquery.easing.1.3.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/bootstrap.min.js"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script src="{{asset('tHomes')}}/js/styleswitcher.js"></script>

    <!-- Main JS Initialization File -->
    <script src="{{asset('tHomes')}}/js/custom.js"></script>
</body>


<!-- Mirrored from slimhamdi.net/amira/demos/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 18:29:10 GMT -->
</html>
