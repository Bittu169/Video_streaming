<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | Contact :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->

{{-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all" />
<link href="css/medile.css" rel='stylesheet' type='text/css' />
<link href="css/single.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all" />
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script> --}}
<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('assets/css/faqstyle.css')}}" type="text/css" media="all" />
<link href="{{asset('assets/css/medile.css')}}" rel='stylesheet' type='text/css' />
<link href="css/single.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="{{asset('assets/css/contactstyle.css')}}" type="text/css" media="all" />
<!-- news-css -->
<link rel="stylesheet" href="{{asset('assets/news-css/news.css')}}" type="text/css" media="all" />
<!-- //news-css -->
<!-- list-css -->
<link rel="stylesheet" href="{{asset('assets/list-css/list.css')}}" type="text/css" media="all" />
<!-- //list-css -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('assetsjs/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body style="background: #333;">
<!-- header -->
	@include('partials.header')
<!-- //header -->
<!-- bootstrap-pop-up -->
	
<!-- //bootstrap-pop-up -->
<!-- nav -->
	@include('partials.nav')
<!-- //nav -->
@include('partials.social')
<!-- contact -->
	<div class="contact-agile">
		<div id="map"></div>
		<div class="faq">
			<h4 class="latest-text w3_latest_text" style="color: #fff;">Contact Us</h4>
			<div class="container">
				<div class="col-md-3 location-agileinfo" style="background: #fff;">
					<div class="icon-w3">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					</div>
					<h3 style="color: black; font-weight:bold;">Address</h3>
					<h4 style="color: black; font-weight:bold;">345 Setwant natrer,</h4>
					<h4 style="color: black; font-weight:bold;">Washington,</h4>
					<h4 style="color: black; font-weight:bold;">United States.</h4>
				</div>
				<div class="col-md-3 call-agileits" style="background: #fff;">
					<div class="icon-w3">
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
					</div>
					<h3 style="color: black; font-weight:bold;">Call</h3>
					<h4 style="color: black; font-weight:bold;">+18044126235</h4>
					<h4 style="color: black; font-weight:bold;">+14056489808</h4>
					<h4 style="color: black; font-weight:bold;">+16789339049</h4>
				</div>
				<div class="col-md-3 mail-wthree" style="background: #fff;">
					<div class="icon-w3">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<h3 style="color: black; font-weight:bold;">Email</h3>
					<h4><a style="color: black; font-weight:bold;" href="mailto:info@example.com">example1@mail.com</a></h4>
					<h4><a style="color: black; font-weight:bold;" href="mailto:info@example.com">example2@mail.com</a></h4>
					<h4><a style="color: black; font-weight:bold;" href="mailto:info@example.com">example3@mail.com</a></h4>
				</div>
				<div class="col-md-3 social-w3l" style="background: #fff;">
					<div class="icon-w3">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					</div>
					<h3 style="color: black; font-weight:bold;">Social media</h3>
					<ul>
						<li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i><span class="text">Facebook</span></a></li>
						<li class="twt"><a href="https://x.com/?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i><span class="text">Twitter</span></a></li>
						<li class="ggp"><a href="https://www.google.co.in/"><i class="fa fa-google-plus" aria-hidden="true"></i><span class="text">Google+</span></a></li>	
					</ul>
				</div>
				<div class="clearfix"></div>
				<form action="#" method="post">
					<input style="background: #fff;" type="text" name="your name" placeholder="FIRST NAME" required="">
					<input style="background: #fff;" type="text" name="your name" placeholder="LAST NAME" required="">
					<input style="background: #fff;" type="text" name="your email" placeholder="EMAIL" required="">
					<input style="background: #fff;" type="text" name="subject" placeholder="SUBJECT" required="">
					<textarea  name="your message" placeholder="YOUR MESSAGE" required=""></textarea>
					<input type="submit" class="btn btn-primary" style="background: rgb(48, 169, 240);" value="SEND MESSAGE">
				</form>
			</div>
		</div>
	</div>
				<!-- Map-JavaScript -->
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>        
			<script type="text/javascript">
				google.maps.event.addDomListener(window, 'load', init);
				function init() {
					var mapOptions = {
						zoom: 11,
						center: new google.maps.LatLng(40.6700, -73.9400),
						styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
					};
					var mapElement = document.getElementById('map');
					var map = new google.maps.Map(mapElement, mapOptions);
					var marker = new google.maps.Marker({
						position: new google.maps.LatLng(40.6700, -73.9400),
						map: map,
					});
				}
			</script>
		<!-- //Map-JavaScript -->
<!-- //contact -->
<!-- footer -->
	@include('partials.footer')
<!-- //footer -->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
	$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/
							
		$().UItoTop({ easingType: 'easeOutQuart' });
							
		});
</script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>