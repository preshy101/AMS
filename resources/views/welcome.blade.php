       {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Appointment</title>

        <link href="{{asset('frontend/css/master.css')}}" rel="stylesheet">

		<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="{{asset('frontend/assets/switcher/css/switcher.css')}}" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/assets/switcher/css/color1.css')}}" title="color1" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/assets/switcher/css/color2.css')}}" title="color2" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/assets/switcher/css/color3.css')}}" title="color3" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/assets/switcher/css/color4.css')}}" title="color4" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/assets/switcher/css/color5.css')}}" title="color5" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/assets/switcher/css/color6.css')}}" title="color6" media="all" />

        <!--[if lt IE 9]>
          <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
	<body data-scrolling-animations="true">
		<div class="sp-body">
			<!-- Loader Landing Page -->
			{{-- <div id="ip-container" class="ip-container">
				<div class="ip-header" >
					<div class="ip-loader">
						<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
							<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,39.3,10z"/>
							<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
						</svg>
					</div>
				</div>
			</div> --}}
			<!-- Loader end -->
			<!-- Start Switcher -->
			<div class="switcher-wrapper">
				<div class="demo_changer">
					<div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
					<div class="form_holder">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="predefined_styles">
									<div class="skin-theme-switcher">
										<h4>Color</h4>
										<a href="#" data-switchcolor="color1" class="styleswitch" style="background-color:#a91605;"> </a>
										<a href="#" data-switchcolor="color2" class="styleswitch" style="background-color:#228dcb;"> </a>
										<a href="#" data-switchcolor="color3" class="styleswitch" style="background-color:#00bff3;"> </a>
										<a href="#" data-switchcolor="color4" class="styleswitch" style="background-color:#ff9600;"> </a>
										<a href="#" data-switchcolor="color5" class="styleswitch" style="background-color:#2dcc70;"> </a>
										<a href="#" data-switchcolor="color6" class="styleswitch" style="background-color:#6054c2;"> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Switcher -->
			<header id="this-is-top">
				<div class="container-fluid">
					<div class="topmenu row">
						<nav class="col-sm-offset-3 col-md-offset-4 col-lg-offset-4 col-sm-6 col-md-5 col-lg-5">
							<a href="#">BUY NOW</a>
							<a href="#">read documentation</a>
							<a href="#">WHY US</a>
						</nav>
						<nav class="text-right col-sm-3 col-md-3 col-lg-3">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</nav>
					</div>
					<div class="row header">
						<div class="col-sm-3 col-md-3 col-lg-3">
							<a href="01_home.html" id="logo"></a>
						</div>
						<div class="col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-sm-8 col-md-8 col-lg-8">
							<div class="text-right header-padding">
								<div class="h-block"><span>CALL US</span>1.800.987.6543</div>
								<div class="h-block"><span>EMAIL US</span>info@domain.com</div>
								<div class="h-block"><span>WORKING HOURS</span>Mon - Sat  8.00 - 19.00</div>
								<a class="btn btn-success" href="#">GET A FREE QUOTE</a>
							</div>
						</div>
					</div>
					<div id="main-menu-bg"></div>
					<a id="menu-open" href="#"><i class="fa fa-bars"></i></a>
					<nav class="main-menu navbar-main-slide">
						<ul class="nav navbar-nav navbar-main">
							<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle border-hover-color1" href="01_home.html">HOME <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="01_home.html">HOME 1</a></li>
									<li><a href="02_home.html">HOME 2</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle border-hover-color1" href="05_services.html">OUR SERVICES <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="05_services.html">OUR SERVICES 1</a></li>
									<li><a href="06_services.html">OUR SERVICES 2</a></li>
									<li><a href="07_services.html">OUR SERVICES 3</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle border-hover-color1" href="03_about.html">ABOUT US <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="03_about.html">ABOUT US 1</a></li>
									<li><a href="04_about.html">ABOUT US 2</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle border-hover-color1" href="09_blog.html">Blog <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="09_blog.html">Blog 1</a></li>
									<li><a href="10_blog.html">Blog 2</a></li>
								</ul>
							</li>
							<li><a href="11_blog-details.html">NEWS</a></li>
							<li><a href="12_contact.html">CONTACT</a></li>
							<li><a class="btn_header_search" href="#"><i class="fa fa-search"></i></a></li>
						</ul>
						<div class="search-form-modal transition">
							<form class="navbar-form header_search_form">
								<i class="fa fa-times search-form_close"></i>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn_search customBgColor">Search</button>
							</form>
						</div>
	                </nav>
					<a id="menu-close" href="#"><i class="fa fa-times"></i></a>
				</div>
			</header>

			<div id="owl-main-slider" class="owl-carousel enable-owl-carousel" data-single-item="true" data-pagination="false" data-auto-play="true" data-main-slider="true" data-stop-on-hover="true">
				<div class="item">
					<img src="{{asset('frontend/media/main-slider/1.jpg')}}" alt="Img">
					<div class="container-fluid">
						<div class="slider-content col-md-6 col-lg-6">
							<div style="display:table;">
								<div style="display:table-cell; width:100px; vertical-align:top;">
									<a class="prev"><i class="fa fa-angle-left"></i></a>
									<a class="next"><i class="fa fa-angle-right"></i></a>
								</div>
								<div style="display:table-cell;">
									<h1>LARGE NUMBER OF FREIGHT WAYS MAKES US POWERFUL</h1>
								</div>
							</div>
							<p>Nunc accumsan metus quis metus. Sed luctus. Mauris eu enim quisque dignissim nequesudm consectetuer dapibus wn eu leo integer varius erat.<br><a class="btn btn-success" href="#">LEARN MORE</a></p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="{{asset('frontend/media/main-slider/2.jpg')}}" alt="Img">
					<div class="container-fluid">
						<div class="slider-content col-md-6 col-lg-6">
							<div style="display:table;">
								<div style="display:table-cell; width:100px; vertical-align:top;">
									<a class="prev"><i class="fa fa-angle-left"></i></a>
									<a class="next"><i class="fa fa-angle-right"></i></a>
								</div>
								<div style="display:table-cell;">
									<h1>LARGE NUMBER OF FREIGHT WAYS MAKES US POWERFUL</h1>
								</div>
							</div>
							<p>Nunc accumsan metus quis metus. Sed luctus. Mauris eu enim quisque dignissim nequesudm consectetuer dapibus wn eu leo integer varius erat.<br><a class="btn btn-success" href="#">LEARN MORE</a></p>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid block-content">
				<div class="row">
					<div class="col-sm-5 col-md-5 col-lg-5 welcome-text wow fadeInLeft" data-wow-delay="3.3s">
						<h1>welcome to <br> TRanscargo ONLINE</h1>
						<p>Integer congue elit non semper laoreet sed lectus orcil posuer nisl tempor sed felis acm Pelentesque inyd urna. Integer vitae felis vel magna posu vestibulum. Nam rutrumc diam. Aliquam malesuada maurs etulga metu Curabitur laoreet convallis nisal. </p>
						<p>Pellentesque bibendum. Cras porttitor. Don cursus ante et  vulputate feugiat mil justo faucibusn sd Integad elemen tuma volutpat vestibulum enim mi tincidunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incidanaut labore et dolore magna aliqua. </p>
						<a href="10_blog.html" class="btn btn-sm btn-success">READ MORE</a>
					</div>
					<div class="col-sm-7 col-md-7 col-lg-7 wow fadeInRight" data-wow-delay="3.3s">
						<div class="quote-form">
							<div class="hgroup">
								<h1 class="color-1">GET A FREE QUOTE</h1>
								<h2>we always use best & fastest fleets</h2>
							</div>
							<div class="row">
                                 @if ($message = Session::get('message'))
                <div class="alert alert-success  alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
								<div id="success"></div>
                                <form action="{{route('store.appoint')}}" method="post">
                                     @csrf
									<div class="col-xs-6">
										<input type="text" class="form-control" name="name" id="user-name" placeholder="FULL Name">
									</div>
									<div class="col-xs-6">
										<input type="date" class="form-control" name="date" id="user-email" placeholder="Email Address">
									</div>
									<div class="col-xs-6">
										<input type="time" class="form-control" name="time" id="user-lastname" placeholder="Destination From">
									</div>

									<div class="col-xs-6 mb-3">
										<textarea  id="user-message" name="reasonForAppointment" class="form-control" placeholder="COMMENTS"></textarea>
									</div>
									<div class="col-xs-6 col-xs-offset-6 mb-3">
										<button type="submit" class="btn btn-danger">SEND Appointment</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="block-content inner-offset">
				<div class="info-texts wow fadeIn" data-wow-delay="0.3s">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-4 col-md-4 col-lg-4">
								<p>We have wide network of offices in all major locations to help you with the services we offer</p>
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4">
								<p>With the help of our worldwide partners we are providing specialized services in Logistics solutions to our satisfied customers</p>
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4">
								<p>We provides comprehensive cargo care, cargo movement & project management</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row column-info">
					<div class="col-sm-4 col-md-4 col-lg-4 wow fadeInLeft" data-wow-delay="0.3s">
						<img src="{{asset('frontend/media/3-column-info/1.jpg')}}" alt="Img">
						<span></span>
						<h3>SAFE & SECURE DELIVERY</h3>
						<p>Integer congue, elit non semper laoreet sed lectus orci posuh nisl tempor lacus felis ac mauris. Pellentesque in urna. Intege vitae felis vel magna posuere vestibulum.</p>
						<a class="btn btn-default btn-sm" href="08_services-details.html">READ MORE</a>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
						<img src="{{asset('frontend/media/3-column-info/2.jpg')}}" alt="Img">
						<span></span>
						<h3>SAFE & SECURE DELIVERY</h3>
						<p>Integer congue, elit non semper laoreet sed lectus orci posuh nisl tempor lacus felis ac mauris. Pellentesque in urna. Intege vitae felis vel magna posuere vestibulum.</p>
						<a class="btn btn-default btn-sm" href="08_services-details.html">READ MORE</a>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 wow fadeInRight" data-wow-delay="0.3s">
						<img src="{{asset('frontend/media/3-column-info/3.jpg')}}" alt="Img">
						<span></span>
						<h3>SAFE & SECURE DELIVERY</h3>
						<p>Integer congue, elit non semper laoreet sed lectus orci posuh nisl tempor lacus felis ac mauris. Pellentesque in urna. Intege vitae felis vel magna posuere vestibulum.</p>
						<a class="btn btn-default btn-sm" href="08_services-details.html">READ MORE</a>
					</div>
				</div>
			</div>

			<div class="block-content bg-image parallax" style="background-image:url(frontend/media/bg/3.jpg);">
				<div class="container-fluid">
					<h1 class="wow fadeInLeft" data-wow-delay="0.3s">WE ARE DEDICATED TO PROVIDE THE BEST SERVICE <br> AT THE LOWEST POSSIBLE COST</h1>
					<a class="btn btn-success wow fadeInRightBig" data-wow-delay="0.3s" href="07_services.html">READ MORE</a>
				</div>
			</div>

			<div class="container-fluid block-content">
				<div class="hgroup text-center wow zoomInUp" data-wow-delay="0.3s">
					<h1>OUR SERVICES</h1>
					<h2>We have wide network of offices in all major locations to help you with <br> the services we offer</h2>
				</div>
				<div class="row our-services styled">
					<div class="col-sm-6 wow zoomInLeft" data-wow-delay="0.3s">
						<a href="08_services-details.html">
							<span><i class="glyph-icon flaticon-boats4"></i></span>
							<h4>SEA FREIGHT</h4>
							<p>Integer congue elit non semper laore lectus orci posuer nisl tempor lacus mauris led ipsum.</p>
						</a>
					</div>
					<div class="col-sm-6 wow zoomInRight" data-wow-delay="0.3s">
						<a href="08_services-details.html">
							<span><i class="glyph-icon flaticon-flying"></i></span>
							<h4>SEA FREIGHT</h4>
							<p>Integer congue elit non semper laore lectus orci posuer nisl tempor lacus mauris led ipsum.</p>
						</a>
					</div>
					<div class="col-sm-6 wow zoomInLeft" data-wow-delay="0.3s">
						<a href="08_services-details.html">
							<span><i class="glyph-icon flaticon-garage1"></i></span>
							<h4>SEA FREIGHT</h4>
							<p>Integer congue elit non semper laore lectus orci posuer nisl tempor lacus mauris led ipsum.</p>
						</a>
					</div>
					<div class="col-sm-6 wow zoomInRight" data-wow-delay="0.3s">
						<a href="08_services-details.html">
							<span><i class="glyph-icon flaticon-package7"></i></span>
							<h4>SEA FREIGHT</h4>
							<p>Integer congue elit non semper laore lectus orci posuer nisl tempor lacus mauris led ipsum.</p>
						</a>
					</div>
					<div class="col-sm-6 wow zoomInLeft" data-wow-delay="0.3s">
						<a href="08_services-details.html">
							<span><i class="glyph-icon flaticon-railway1"></i></span>
							<h4>SEA FREIGHT</h4>
							<p>Integer congue elit non semper laore lectus orci posuer nisl tempor lacus mauris led ipsum.</p>
						</a>
					</div>
					<div class="col-sm-6 wow zoomInRight" data-wow-delay="0.3s">
						<a href="08_services-details.html">
							<span><i class="glyph-icon flaticon-traffic-signal"></i></span>
							<h4>SEA FREIGHT</h4>
							<p>Integer congue elit non semper laore lectus orci posuer nisl tempor lacus mauris led ipsum.</p>
						</a>
					</div>
				</div>
			</div>

			<hr>
			<div class="big-hr color-2 wow zoomInUp" data-wow-delay="0.3s">
				<div class="text-left" style="margin-right:40px;">
					<h2>WE PROVIDE FASTEST & AFFORDABLE CARGO SERVICES</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
				</div>
				<div><a class="btn btn-danger btn-lg" href="#">REQUEST A FREE QUOTE</a></div>
			</div>

			<div class="block-content blog-section">
				<div class="container-fluid">
					<div class="wow fadeInLeft" data-wow-delay="0.3s">
						<h1>LATEST NEWS</h1>
						<h2>READ our latest blog news</h2>
					</div>
					<a class="btn btn-success btn-sm pull-right read-all-news wow fadeInRight" data-wow-delay="0.3s" href="09_blog.html">READ ALL NEWS</a>
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-6 one-news wow fadeInLeft" data-wow-delay="0.3s">
							<div style="background-image:url(media/news-images/1.jpg')}});">
								<div>
									<a href="11_blog-details.html"><h3>Duis vel tellus vitae ante tincidunt tincidun</h3></a>
									<small class="news-author">BY JOHN DEO</small>
									<small>JUN 29, 2015</small>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 two-news wow fadeInRight" data-wow-delay="0.3s">
							<div class="news-item row">
								<div class="col-sm-6 col-md-6 col-lg-6">
									<div style="background-image:url(media/news-images/2.jpg')}});"></div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<div>
										<a href="11_blog-details.html"><h3>Duis vel tellus vitae ante tincidunt tincidun</h3></a>
										<small class="news-author">BY JOHN DEO</small>
										<small>JUN 29, 2015</small>
									</div>
								</div>
							</div>
							<div class="news-item row">
								<div class="col-sm-6 col-md-6 col-lg-6">
									<div style="background-image:url(media/news-images/3.jpg')}});"></div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<div>
										<a href="11_blog-details.html"><h3>Duis vel tellus vitae ante tincidunt tincidun</h3></a>
										<small class="news-author">BY JOHN DEO</small>
										<small>JUN 29, 2015</small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid partners block-content">
				<div class="title-space wow fadeInLeft" data-wow-delay="0.3s">
					<div class="hgroup">
						<h1>TRUSTED partners</h1>
						<h2>Lorem ipsum dolor sit amet consectetur</h2>
					</div>
				</div>
				<div id="partners" class="owl-carousel enable-owl-carousel" data-pagination="false" data-navigation="true" data-min450="2" data-min600="2" data-min768="4">
					<div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img src="{{asset('frontend/media/partners/1.png')}}" alt="Img"></a></div>
					<div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img src="{{asset('frontend/media/partners/2.png')}}" alt="Img"></a></div>
					<div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img src="{{asset('frontend/media/partners/3.png')}}" alt="Img"></a></div>
					<div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img src="{{asset('frontend/media/partners/4.png')}}" alt="Img"></a></div>
					<div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img src="{{asset('frontend/media/partners/1.png')}}" alt="Img"></a></div>
					<div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img src="{{asset('frontend/media/partners/2.png')}}" alt="Img"></a></div>
				</div>
			</div>

			<footer>
				<div class="color-part2"></div>
				<div class="color-part"></div>
				<div class="container-fluid">
					<div class="row block-content">
						<div class="col-xs-8 col-sm-4 wow zoomIn" data-wow-delay="0.3s">
							<a href="#" class="logo-footer"></a>
							<p>Integer congue elit non semper laoreet sed lectu orc posuer nisl tempor sed felis ac mauris ellent esque ndu ca urna Integer vitae felis.</p>
							<div class="footer-icons">
								<a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
								<a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
								<a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
								<a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a>
								<a href="#"><i class="fa fa-vimeo-square fa-2x"></i></a>
							</div>
							<a href="#" class="btn btn-lg btn-danger">GET A FREE QUOTE</a>
						</div>
						<div class="col-xs-4 col-sm-2 wow zoomIn" data-wow-delay="0.3s">
							<h4>WE OFFERS</h4>
							<nav>
								<a href="#">Sea Freight</a>
								<a href="#">Road Transportation</a>
								<a href="#">Air Freight</a>
								<a href="#">Railway Logistics</a>
								<a href="#">Packaging & Storage</a>
								<a href="#">Warehousing</a>
							</nav>
						</div>
						<div class="col-xs-6 col-sm-2 wow zoomIn" data-wow-delay="0.3s">
							<h4>MAIN LINKS</h4>
							<nav>
								<a href="01_home.html">Home</a>
	                            <a href="06_services.html">Our Services</a>
	                            <a href="04_about.html">About Us</a>
	                            <a href="07_services.html">News</a>
	                            <a href="10_blog.html">Shop</a>
	                            <a href="12_contact.html">Contact</a>
							</nav>
						</div>
						<div class="col-xs-6 col-sm-4 wow zoomIn" data-wow-delay="0.3s">
							<h4>CONTACT INFO</h4>
							Everyday is a new day for us and we work really hard to satisfy our customers everywhere.
							<div class="contact-info">
								<span><i class="fa fa-location-arrow"></i><strong>TRANSCARGO LTD.</strong><br>3608 NewHill Station Ave CA, Newyork 33102 </span>
								<span><i class="fa fa-phone"></i>1.800.987.6543</span>
								<span><i class="fa fa-envelope"></i>info@domain.com   |   quote@domain.com</span>
								<span><i class="fa fa-clock-o"></i>Mon - Sat  8.00 - 19.00</span>
							</div>
						</div>
					</div>
					<div class="copy text-right"><a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>Created by <a href="#">Templines</a> &copy; 2015 TransCargo All rights reserved.</div>
				</div>
			</footer>
		</div>

		<!--Main-->
		{{-- <script src="{{asset('frontend/js/jquery-1.11.3.min.js')}}"></script> --}}
		<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
		<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('frontend/js/modernizr.custom.js')}}"></script>
		<!-- Loader -->
		<script src="{{asset('frontend/assets/loader/js/classie.js')}}"></script>
		<script src="{{asset('frontend/assets/loader/js/pathLoader.js')}}"></script>
		<script src="{{asset('frontend/assets/loader/js/main.js')}}"></script>
		<script src="{{asset('frontend/js/classie.js')}}"></script>
		<!--Switcher-->
		<script src="{{asset('frontend/assets/switcher/js/switcher.js')}}"></script>
		<!--Owl Carousel-->
		<script src="{{asset('frontend/assets/owl-carousel/owl.carousel.min.js')}}"></script>
        <!--Contact form-->
        <script src="{{asset('frontend/assets/contact/jqBootstrapValidation.js')}}"></script>
        <script src="{{asset('frontend/assets/contact/contact_me.js')}}"></script>
        <!-- SCRIPTS -->
	    <script type="text/javascript" src="{{asset('frontend/assets/isotope/jquery.isotope.min.js')}}"></script>
		<!--Theme-->
		<script src="{{asset('frontend/js/jquery.smooth-scroll.js')}}"></script>
		<script src="{{asset('frontend/js/wow.min.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.placeholder.min.js')}}"></script>
		<script src="{{asset('frontend/js/smoothscroll.min.js')}}"></script>
		<script src="{{asset('frontend/js/theme.js')}}"></script>
	</body>
</html>













