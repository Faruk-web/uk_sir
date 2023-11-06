<!doctype html>
<html lang="en" class="no-js">
<head>
<title>TV MOUNT MATE</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('front') }}/assets/css/font-awesome.css" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('front') }}/assets/css/jquery.fancybox-1.3.4.css" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('front') }}/assets/css/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('front') }}/assets/css/jquery.bxslider.css" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('front') }}/assets/css/fullwidth.css" media="screen">
<link rel="stylesheet" href="{{ asset('front') }}/assets/css/jquery.fancybox-1.3.4.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="{{ asset('front') }}/assets/css/revslider.css" media="screen">
<link rel="stylesheet" href="{{ asset('front') }}/assets/css/dr-framework.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,400italic,300italic,100italic,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="{{ asset('front') }}/assets/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="{{ asset('front') }}/assets/images/favicon.ico" type="image/x-icon">
</head>
<body>
<div id="container">
	<header>
	<div class="sub-header clearfix">
		<div class="wrapper">
			<ul>
				<li>
				<i class="fa fa-caret-square-o-right"></i><a href="#">terms & conditions</a>
				</li>
				<li>
				<i class="fa fa-caret-square-o-right"></i><a href="about.html">about us</a>
				</li>
				<li>
				<i class="fa fa-caret-square-o-right"></i><a href="#">login</a>
				</li>
				<li>
				<i class="fa fa-caret-square-o-right"></i><a href="{{ route('contact') }}">contact us</a>
				</li>
			</ul>
			<div class="socials">
				<a href="#"><i class="fa fa-google-plus"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
			</div>
		</div>
	</div>
	<div class="upper-header wrapper">
		<div class="logo">
			<a href="{{ route('home') }}"><img style="height: 51px;" src="{{ asset('front') }}/assets/images/uk/logo.webp"></a>
		</div>
		<!-- Navigation -->
		<div id="nav">
			<ul id="navlist" class="sf-menu clearfix">
				<li class="current"><a href="{{ route('home') }}">
				<div class="main-a">
					 Home
				</div>
				<div class="nav-border">
				</div>
				<div class="span">
					start here
				</div>
				</a>
				</li>
				<li><a href="{{ route('about') }}">
				<div class="main-a">
					 About
				</div>
				<div class="nav-border">
				</div>
				<div class="span">
					who we are
				</div>
				</a></li>
				{{-- <li><a href="portfolio.html">
				<div class="main-a">
					 Portfolio
				</div>
				<div class="nav-border">
				</div>
				<div class="span">
					our work
				</div>
				</a></li> --}}
				{{-- <li><a href="services.html">
				<div class="main-a">
					 Services
				</div>
				<div class="nav-border">
				</div>
				<div class="span">
					what we offer
				</div>
				</a>
				<ul class="sub-menu">
					<li><a href="shop.html"><span>--</span>Shop</a></li>
					<li><a href="shop-list.html"><span>--</span>Shop List View</a></li>
				</ul>
				</li> --}}
				<li><a href="{{ route('blog') }}">
				<div class="main-a">
					 BLOG
				</div>
				<div class="nav-border">
				</div>
				<div class="span">
					fresh blog
				</div>
				</a></li>
				<li><a href="{{ route('contact') }}">
				<div class="main-a">
					 Contact
				</div>
				<div class="nav-border">
				</div>
				<div class="span">
					get in touch
				</div>
				</a></li>
			</ul>
		</div>
		<!-- Navigation -->
		<div class="clear">
		</div>
	</div>
	</header>
	<!--end header-->

    @yield('body')

	<footer>
	<div class="inner-footer">
		<div class="wrapper clearfix">
			<div class="dark">
				<div class="column3 message-form">
					<img src="{{ asset('front') }}/assets/images/logo2.png" alt="">
					<p>
						This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
					</p>
					<div class="send-message">
						<form id="contact-form">
							<h4>Send us a Message</h4>
							<div class="text-fields">
								<div class="float-input">
									<input name="name" id="name" type="text" placeholder="Name">
								</div>
								<div class="float-input">
									<input name="mail" id="mail" type="text" placeholder="Email">
								</div>
							</div>
							<div class="submit-area">
								<textarea name="comment" id="comment" placeholder="Message"></textarea>
								<input type="submit" id="submit_contact" class="main-button" value="Send">
								<div id="msg" class="message">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="column3 contact">
					<h4>Recent Posts</h4>
					<ul>
						<li><a href="#"><i class="fa fa-arrow-circle-right"></i> New Search Platform Update</a></li>
						<li><a href="#"><i class="fa fa-arrow-circle-right"></i> Envato's Most Wanted - $5,000 for Ghost Themes</a></li>
						<li><a href="#"><i class="fa fa-arrow-circle-right"></i> Update: WordPress Theme Submission Requirements</a></li>
						<li><a href="#"><i class="fa fa-arrow-circle-right"></i> Envato Staff Vs Community Nike+ </a></li>
					</ul>
					<h4>Contact info</h4>
					<p class="f-phone">
						<i class="fa fa-phone"></i><span>9930 1234 5679</span>
					</p>
					<a href="#" class="f-mail"><i class="fa fa-envelope"></i><span>contact@yourdomain.com</span></a>
				</div>
				<div class="column3 third-row">
					<div class="tags">
						<h4>Popular Tags</h4>
						<a href="#">web design</a>
						<a href="#">coding</a>
						<a href="#">woo commerce</a>
						<a href="#">php</a>
						<a href="#">wordpress</a>
						<a href="#">photography</a>
						<div class="clear">
						</div>
					</div>
					<div class="tweets">
						<h4>Latest Tweets</h4>
						<div id="example2">
						</div>
					</div>
				</div>
				<div class="column3 flickr">
					<div class="singup">
						<h4>NEWSLETTER SIGNUP</h4>
						<p>
							This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
						</p>
						<form method="post" id="newsletter_subscribe" name="newsletter_form">
							<input type="text" name="nl-email" id="nl-email" value="" placeholder="your.address@email.com"/>
							<input type="submit" name="submit" id="nl-submit" value="Submit"/>
						</form>
					</div>
					<div class="flickr">
						<h4>Flickr Widget</h4>
						<ul class="dark clearfix">
							<li class="column4"><a href="#"><img src="{{ asset('front') }}/assets/images/flickr2.jpg" alt=""></a></li>
							<li class="column4"><a href="#"><img src="{{ asset('front') }}/assets/images/flickr3.jpg" alt=""></a></li>
							<li class="column4"><a href="#"><img src="{{ asset('front') }}/assets/images/flickr4.jpg" alt=""></a></li>
						</ul>
						<ul class="dark clearfix">
							<li class="column4"><a href="#"><img src="{{ asset('front') }}/assets/images/flickr5.jpg" alt=""></a></li>
							<li class="column4"><a href="#"><img src="{{ asset('front') }}/assets/images/flickr2.jpg" alt=""></a></li>
							<li class="column4"><a href="#"><img src="{{ asset('front') }}/assets/images/flickr3.jpg" alt=""></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- End Dark -->
		</div>
	</div>
	<!-- End Inner Footer -->
	<div class="last-div clearfix">
		<div class="wrapper">
			<div class="copyright">
				 © 2014 Arkitekt, All Rights Reserved
			</div>
			<div id="back-to-top">
				<a href="#top">Back to Top</a>
			</div>
			<div class="f-socials">
				<a href="#"><i class="fa fa-google-plus"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
			</div>
		</div>
	</div>
	<!-- End Last Div -->
	</footer>
	<!--end footer-->
    <style>
        body {
        font-family: sans-serif;
        }
        /* Add WA floating button CSS */
        .floating {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 70px;
        right: 15px;
        background-color:#4d933a;
        color: #fff;
        border-radius: 50px;
        text-align: center;
        font-size: 60px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
        }
        .fab-icon {
        margin-top: 16px;
        }
        </style>
        <!-- render the button and direct it to wa.me -->
        <a href="https://api.WhatsApp.com/send?phone=+880 1844 527 808&text=Can I speak to an Agent ?" class="floating" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
       </a>
</div>
<div class="preloader">
	<img alt="" src="{{ asset('front') }}/assets/images/preloader.gif">
</div>

<!-- include jQuery -->
<script src="{{ asset('front') }}/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('front') }}/assets/js/jquery.imagesloaded.min.js"></script>
<script type="text/javascript" src="{{ asset('front') }}/assets/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="{{ asset('front') }}/assets/js/script.js"></script>
<script type="text/javascript" src="{{ asset('front') }}/assets/js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="{{ asset('front') }}/assets/js/jquery.superfish.js"></script>
<script type="text/javascript" src="{{ asset('front') }}/assets/js/jquery.flexslider.js"></script>
<script src="{{ asset('front') }}/assets/js/jquery.bxslider.js"></script>
<script src="{{ asset('front') }}/assets/js/twitter.js"></script>
<!-- Revolution Slider -->
<script type="text/javascript" src="{{ asset('front') }}/assets/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="{{ asset('front') }}/assets/js/jquery.themepunch.revolution.js"></script>
<script type="text/javascript">
    var tpj=jQuery;
    tpj.noConflict();
    tpj(document).ready(function() {
      if (tpj.fn.cssOriginal!=undefined)
      tpj.fn.css = tpj.fn.cssOriginal;
      tpj('.fullwidthbanner').revolution({
        delay:6000,
        startwidth:1170,
        startheight:680,
        onHoverStop: "on",
                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 3,
                hideThumbs: 200,
                navigationType: "bullet",
                navigationArrows: "verticalcentered",
                navigationStyle: "round",
                touchenabled: "on",
                navOffsetHorizontal: 0,
                navOffsetVertical: 20,
                stopAtSlide: -1,
                stopAfterLoops: -1,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                hideSliderAtLimit: 0,
                fullWidth: "on",
                shadow: 0
      });
    });
  </script>
<!-- include jQuery + carouFredSel plugin -->
<script type="text/javascript" language="javascript" src="{{ asset('front') }}/assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<!-- optionally include helper plugins -->
<script type="text/javascript" language="javascript" src="{{ asset('front') }}/assets/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" language="javascript" src="{{ asset('front') }}/assets/js/jquery.touchSwipe.min.js"></script>
</body>
</html>
