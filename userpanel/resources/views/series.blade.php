
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | TV- Series :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('assets/css/contactstyle.css')}}" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('assets/css/faqstyle.css')}}" type="text/css" media="all" />
<link href="{{asset('assets/css/single.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('assets/css/medile.css')}}" rel='stylesheet' type='text/css' />
{{-- <!-- banner-slider -->
<link href="{{asset('assets/css/jquery.slidey.min.css')}}" rel="stylesheet">
<!-- //banner-slider --> --}}
{{-- <!-- pop-up -->
<link href="{{asset('assets/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up --> --}}
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->

{{-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/single.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all" />
<link href="css/medile.css" rel='stylesheet' type='text/css' />
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'> --}}
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('assets/js/move-top.js')}}"></script>
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
<link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,5],
		  itemsDesktopSmall : [414,4]
	 
		});
	 
	}); 
</script> 
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
	<div class="faq">
<!-- general -->
	<div class="general_agileits_genres">
		<h4 class="latest-text w3_latest_text" style="color: #fff;">Featured Movies</h4>
		<div class="container">
            <div class="agileits-single-top">
				<ol class="breadcrumb">
				  <li><a href="{{route('index')}}">Home</a></li>
				  <li class="active">TV - Series</li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Featured</a></li>
					<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Top viewed</a></li>
					<li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="true">Top Rating</a></li>
					<li role="presentation"><a href="#imdb" role="tab" id="imdb-tab" data-toggle="tab" aria-controls="imdb" aria-expanded="false">Recently Added</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						<div class="w3_agile_featured_movies">
                            @foreach ($std as $p)
                                
                            
							<div class="col-md-2 w3l-movie-gride-agile" style="background:#fff; width:180px; height: 230px;">
								<a href="single.html" class="hvr-shutter-out-horizontal" style="height: 150px; "><img style="width:130px; height:150px; padding-left: 15px; padding-top: 5px; " src="{{url("/assets/movie_img")}}/{{$p->image}}" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="single.html">{{$p->mname}}</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home" style="display:flex; text-align: center; justify-content:center; gap:8px;">
										<p>2016</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>
                            @endforeach
							<div class="clearfix"> </div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
						@foreach ($std as $p)
						@if (5==$p->id || 6==$p->id || 7==$p->id)
						<div class="col-md-2 w3l-movie-gride-agile" style="background: #fff; width:180px; height: 330px;">
							<a href="{{route('single')}}" class="hvr-shutter-out-horizontal" style="padding-left: 15px; " ><img src="{{url("/assets/movie_img")}}/{{$p->image}}" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home" >
								<div class="w3l-movie-text">
									<h6><a href="{{route('single')}}">{{$p->mname}}</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home" style="display:flex; text-align: center; justify-content:center; gap:8px;">
									<p>2016</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
						@endif
						@endforeach
						<div class="clearfix"> </div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="rating" aria-labelledby="rating-tab">
						@foreach ($std as $p)
						@if (2==$p->id || 10==$p->id || 20==$p->id || 16==$p->id || 17==$p->id || 25==$p->id)
						<div class="col-md-2 w3l-movie-gride-agile" style="background: #fff; width:180px; height: 330px;">
							<a href="{{route('single')}}" class="hvr-shutter-out-horizontal" style="padding-left: 15px;"><img style="height:250px;" src="{{url("/assets/movie_img")}}/{{$p->image}}" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="{{route('single')}}">{{$p->mname}}</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home" style="display:flex; text-align: center; justify-content:center; gap:8px;">
									<p>2016</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
						@endif
						@endforeach
						
						<div class="clearfix"> </div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="imdb" aria-labelledby="imdb-tab">
						@foreach ($std as $p)
						@if (14==$p->id || 13==$p->id || 12==$p->id || 11==$p->id)
						<div class="col-md-2 w3l-movie-gride-agile" style="background: #fff; width:180px; height: 330px;">
							<a href="single.html" class="hvr-shutter-out-horizontal" style="padding-left: 15px;"><img style="height:250px;" src="{{url("/assets/movie_img")}}/{{$p->image}}" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="{{route('single')}}">{{$p->mname}}</a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home" style="display:flex; text-align: center; justify-content:center; gap:8px;">
									<p>2016</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
						@endif
						@endforeach
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--body wrapper start-->
	{{-- <div class="review-slider">
		 <h4 class="latest-text" style="color: #fff;">TV - Series Reviews</h4>
			   <div class="container">
				<div class="w3_agile_banner_bottom_grid">
					<div id="owl-demo" class="owl-carousel owl-theme">
						<div class="item">
							<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
								<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m13.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="single.html">Citizen Soldier</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2016</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
								<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m11.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="single.html">X-Men</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2016</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
								<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m12.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="single.html">Greater</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2016</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
								<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m7.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="single.html">Light B/t Oceans</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2016</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
								<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m8.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="single.html">The BFG</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2016</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
								<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m9.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="single.html">Central Intelligence</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2016</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
								<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m10.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="single.html">Don't Think Twice</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2016</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
								<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m17.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="single.html">Peter</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2016</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
								<a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m15.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="single.html">God’s Compass</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2016</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>
						</div>
					</div>
				</div>
		<!--body wrapper end-->
	</div>	 --}}
<!-- //general -->
	</div>
	</div>
<!-- footer -->
	@include('partials.footer')
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
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
<!-- //here ends scrolling icon -->
</body>
</html>