<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
<!-- banner-slider -->
<link href="{{asset('assets/css/jquery.slidey.min.css')}}" rel="stylesheet">
<!-- //banner-slider -->
<!-- pop-up -->
<link href="{{asset('assets/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<!-- banner-bottom-plugin -->
<link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script> 
<!-- //banner-bottom-plugin -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
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
</head>
	
<body style="background: #333;">
<!-- header -->
	@include('partials.header');
<!-- //header -->
<!-- bootstrap-pop-up -->
	
<!-- //bootstrap-pop-up -->
<!-- nav -->
	@include('partials.nav');
<!-- //nav -->

<!-- banner -->
	<div id="slidey" style="display:none; border: 1px solid white;">
		<ul>
			@foreach ($std as $s)
				
			
			<li><img src="{{url('car_img')}}//{{$s->image}}" alt=" "><p class='title' style="cursor: pointer;"><a style="color: #fff;" href="{{route('single_clone',['id'=>$s->id])}}">{{$s->name}}</a></p><p class='description'>{{$s->description}}</p></li>
			
			@endforeach
			{{-- <li><img src="{{asset('assets/images/War.jpg')}}" alt=" "><p class='title'>War</p><p class='description'> Tarzan, having acclimated to life in London, is called back to his former home in the jungle to investigate the activities at a mining encampment.</p></li>
			<li><img src="{{asset('assets/images/kalki.jpg')}}" alt=" "><p class='title'>Kalki 2898 AD</p><p class='description'>In 1977, paranormal investigators Ed (Patrick Wilson) and Lorraine Warren come out of a self-imposed sabbatical to travel to Enfield, a borough in north ...</p></li>
			<li><img src="{{asset('assets/images/7.jpg')}}" alt=" "><p class='title'>Conjuring 2</p><p class='description'>Six children, genetically cross-bred with avian DNA, take flight around the country to discover their origins. Along the way, their mysterious past is ...</p></li>
			<li><img src="{{asset('assets/images/pushpa-2.png')}}" alt=" "><p class='title'>Puahpa 2</p><p class='description'>Bullied as a teen for being overweight, Bob Stone (Dwayne Johnson) shows up to his high school reunion looking fit and muscular. Claiming to be on a top-secret ...</p></li>
			<li><img src="{{asset('assets/images/Fighter.jpg')}}" alt=" "><p class='title'>Fighter</p><p class='description'>In the film's epilogue, Scrat keeps struggling to control the alien ship until it crashes on Mars, destroying all life on the planet.</p></li> --}}
					</ul>   	
    </div>
    <script src="{{asset('assets/js/jquery.slidey.js')}}"></script>
    <script src="{{asset('assets/js/jquery.dotdotdot.min.js')}}"></script>
	   <script type="text/javascript">
			$("#slidey").slidey({
				interval: 8000,
				listCount: 5,
				autoplay: false,
				showList: true
			});
			$(".slidey-list-description").dotdotdot();
		</script>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<h4 class="latest-text w3_latest_text" style="color: #fff;">Free Movies</h4>
		<div class="container">
			<div class="w3_agile_banner_bottom_grid">
				<div id="owl-demo" class="owl-carousel owl-theme">
				 @foreach ($stg as $m)
				  @if($m->mprice==0)
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1" style="background:#fff; width:180px; height: 230px;">
							<a href="{{route('single',['id'=>$m->id])}}" class="hvr-shutter-out-horizontal" style="height: 150px; "><img style="width:130px; height:150px; padding-left: 15px; padding-top: 5px; " src="{{url("/assets/movie_img")}}/{{$m->image}}" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="{{route('single',['id'=>$m->id])}}">{{$m->mname}}</a></h6>							
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
				  @endif
				 @endforeach
					
				</div>
			</div>			
		</div>
	</div>
<!-- //banner-bottom -->
<div class="general_social_icons">
	<nav class="social">
		<ul>
			<li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
			<li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
			<li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
			<li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>				  
		</ul>
  </nav>
</div>
<!-- general -->
<div class="general_agileits_genres">
	<h4 class="latest-text w3_latest_text" style="color: #fff;">Featured Movies</h4>
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
						@foreach ($stg as $p)
							
						
						<div class="col-md-2 w3l-movie-gride-agile" style="background:#fff; width:180px; height: 230px;">
							<a href="{{route('single',['id'=>$p->id])}}" class="hvr-shutter-out-horizontal" style="height: 150px; "><img style="width:130px; height:150px; padding-left: 15px; padding-top: 5px; " src="{{url("/assets/movie_img")}}/{{$p->image}}" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="{{route('single',['id'=>$p->id])}}">{{$p->mname}}</a></h6>							
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
					@foreach ($stg as $p)
					@if (5==$p->id || 6==$p->id || 7==$p->id)
					<div class="col-md-2 w3l-movie-gride-agile" style="background: #fff; width:180px; height: 330px;">
						<a href="{{route('single',['id'=>$p->id])}}" class="hvr-shutter-out-horizontal" style="padding-left: 15px; " ><img src="{{url("/assets/movie_img")}}/{{$p->image}}" title="album-name" class="img-responsive" alt=" " />
							<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
						</a>
						<div class="mid-1 agileits_w3layouts_mid_1_home" >
							<div class="w3l-movie-text">
								<h6><a href="{{route('single',['id'=>$p->id])}}">{{$p->mname}}</a></h6>							
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
					@foreach ($stg as $p)
					@if (2==$p->id || 10==$p->id || 20==$p->id || 16==$p->id || 17==$p->id || 25==$p->id)
					<div class="col-md-2 w3l-movie-gride-agile" style="background: #fff; width:180px; height: 330px;">
						<a href="{{route('single',['id'=>$p->id])}}" class="hvr-shutter-out-horizontal" style="padding-left: 15px;"><img style="height:250px;" src="{{url("/assets/movie_img")}}/{{$p->image}}" title="album-name" class="img-responsive" alt=" " />
							<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
						</a>
						<div class="mid-1 agileits_w3layouts_mid_1_home">
							<div class="w3l-movie-text">
								<h6><a href="{{route('single',['id'=>$p->id])}}">{{$p->mname}}</a></h6>							
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
					@foreach ($stg as $p)
					@if (24==$p->id || 21==$p->id || 26==$p->id || 19==$p->id)
					<div class="col-md-2 w3l-movie-gride-agile" style="background: #fff; width:180px; height: 330px;">
						<a href="{{route('single',['id'=>$p->id])}}" class="hvr-shutter-out-horizontal" style="padding-left: 15px;"><img style="height:250px;" src="{{url("/assets/movie_img")}}/{{$p->image}}" title="album-name" class="img-responsive" alt=" " />
							<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
						</a>
						<div class="mid-1 agileits_w3layouts_mid_1_home">
							<div class="w3l-movie-text">
								<h6><a href="{{route('single',['id'=>$p->id])}}">{{$p->mname}}</a></h6>							
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
<!-- //general -->
<!-- Latest-tv-series -->
	<div class="Latest-tv-series" >
		<h4 class="latest-text w3_latest_text w3_home_popular" style="color:#fff;">Most Popular Movies</h4>
		<div class="container">
			<section class="slider"  >
				<div class="flexslider" >
					<ul class="slides" >
						<li>
							<div class="agile_tv_series_grid" >
								
								<div class="col-md-6 agile_tv_series_grid_left" >
									<div class="w3ls_market_video_grid1">
										{{-- <img src="images/h1-1.jpg" alt=" " class="img-responsive" /> --}}
										<iframe width="570" height="312" style="border:1px solid #fff;" src="https://www.youtube.com/embed/VFsmuRPClr4?si=HKrbleMe9ATuarnU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

										{{-- <a class="w3_play_icon" href="#small-dialog">   
											<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
										</a> --}}
									</div>
								</div>
								<div class="col-md-6 agile_tv_series_grid_right" style="border:1px solid #fff">
									<p class="fexi_header">the conjuring 2</p>
									<p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span> 720p,Bluray HD Free Movie Downloads, Watch Free Movies Online with high speed Free Movie Streaming | MyDownloadTube Lorraine and Ed Warren go to north London to help a single...</p>
									<p class="fexi_header_para"><span>Date of Release<label>:</label></span> Jun 10, 2016 </p>
									<p class="fexi_header_para">
										<span>Genres<label>:</label> </span>
										<a href="{{route('genres',['id'=>'Drama'])}}">Drama</a> | 
										<a href="{{route('genres',['id'=>'Adventure'])}}">Adventure</a> | 
										<a href="{{route('genres',['id'=>'Family'])}}">Family</a>								
									</p>
									<p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
									</p>
								</div>
								<div class="clearfix"> </div>
								<div class="agileinfo_flexislider_grids" >
									<?php $a=1; ?>
									@foreach ($stg as $n)
										
									@if($n->id % 2 == 0)
									<div class="col-md-2 w3l-movie-gride-agile" style="background:#fff; width:180px; height: 230px;">
										<a href="{{route('single',['id'=>$n->id])}}" class="hvr-shutter-out-horizontal" style="height: 150px; "><img style="width:130px; height:150px; padding-left: 15px; padding-top: 5px; " src="{{url("/assets/movie_img")}}/{{$n->image}}" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="{{route('single',['id'=>$n->id])}}">{{$n->mname}}</a></h6>							
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
									<?php $a=$a+1; ?>
									@endif
									@if($a>6)
									<?php break; ?>
									@endif
									
									@endforeach
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
						<li>
							<div class="agile_tv_series_grid">
								<div class="col-md-6 agile_tv_series_grid_left" >
									<div class="w3ls_market_video_grid1">
										{{-- <img src="images/h2-1.jpg" alt=" " class="img-responsive" /> --}}
										<iframe width="570" height="312" style="border-color: white;" src="https://www.youtube.com/embed/aninoDcPWo4?si=tiNMjTQFs90zD8TR" title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
										{{-- <a class="w3_play_icon1" href="#small-dialog1">
											<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
										</a> --}}
									</div>
								</div>
								<div class="col-md-6 agile_tv_series_grid_right" style="border:1px solid #fff;">
									<p class="fexi_header">Kalki 2898 AD</p>
									<p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>A modern avatar of the Hindu god Vishnu,&nbsp; is said to have descended on Earth to&nbsp; protect the world from evil forces.</p>
									<p class="fexi_header_para"><span>‎ <label></label></span>‎</p>
                                    <p style="color: #fff"><span style="color: black"><b>Date of Release &nbsp;&nbsp;<label>:</label></b></span>&nbsp;&nbsp;&nbsp; June 27, 2024</p>
									
									<p class="fexi_header_para">
										<span>Genres<label>:</label> </span>
										<a href="{{route('genres',['id'=>'Action'])}}">Action</a> |  
										<a href="{{route('genres',['id'=>'Thriller'])}}">Thriller</a> |  
										<a href="{{route('genres',['id'=>'Science fiction'])}}">Science fiction</a> |
										<a href="{{route('genres',['id'=>'Adventure'])}}">Adventure</a> | 
										<a href="{{route('genres',['id'=>'Drama'])}}">Drama</a>  							
									</p>
									<p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
									</p>
								</div>
								<div class="clearfix"> </div>
								<div class="agileinfo_flexislider_grids">
									<?php $a=1; ?>
									@foreach ($stg as $n)
										
									@if($n->id % 2 != 0)
									<div class="col-md-2 w3l-movie-gride-agile" style="background:#fff; width:180px; height: 230px;">
										<a href="{{route('single',['id'=>$n->id])}}" class="hvr-shutter-out-horizontal"  style="height: 150px; "><img style="width:130px; height:150px; padding-left: 15px; padding-top: 5px; " src="{{url("/assets/movie_img")}}/{{$n->image}}" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="{{route('single',['id'=>$n->id])}}">{{$n->mname}}</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
									<?php $a=$a+1; ?>
									@endif
									@if($a>6)
									<?php break; ?>
									@endif
									
									@endforeach
								
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
						<li>
							<div class="agile_tv_series_grid">
								<div class="col-md-6 agile_tv_series_grid_left">
									<div class="w3ls_market_video_grid1">
										{{-- <img src="images/h3-1.jpg" alt=" " class="img-responsive" /> --}}
										<iframe width="570" height="312" style="border-color: white;" src="https://www.youtube.com/embed/k8YiqM0Y-78?si=5lTb6OC7l3kIKzHh" title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
										
										{{-- <a class="w3_play_icon2" href="#small-dialog2">  
											<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
										</a> --}}
									</div>
								</div>
								<div class="col-md-6 agile_tv_series_grid_right" style="border:1px solid #fff">
									<p class="fexi_header">Jawan</p>
									<p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>A man is driven by a personal vendetta to rectify the wrongs in society, while keeping a promise made years ago. He comes up against a monstrous outlaw with no fear, who has caused extreme suffering to many.</p>
									<p class="fexi_header_para"><span>Date of Release<label>:</label></span> September 7, 2023</p>
									<p class="fexi_header_para">
										<span>Genres<label>:</label> </span>
										<a href="{{route('genres',['id'=>'Action'])}}">Action</a> | 
										<a href="{{route('genres',['id'=>'Mystry'])}}">Mystry</a> |		
										<a href="{{route('genres',['id'=>'Suspense'])}}">Suspense</a> |	
										<a href="{{route('genres',['id'=>'Thriller'])}}">Thriller</a>	|
										<a href="{{route('genres',['id'=>'Adventure'])}}">Adventure</a>	|
										<a href="{{route('genres',['id'=>'Drama'])}}">Drama</a>							
									</p>
									<p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
									</p>
								</div>
								<div class="clearfix"> </div>
								<div class="agileinfo_flexislider_grids">
									<?php $a=1; ?>
									@foreach ($stg as $n)
										
									@if($n->id % 2 == 0)
									<div class="col-md-2 w3l-movie-gride-agile" style="background:#fff; width:180px; height: 230px;">
										<a href="{{route('single',['id'=>$n->id])}}" class="hvr-shutter-out-horizontal"  style="height: 150px; "><img style="width:130px; height:150px; padding-left: 15px; padding-top: 5px; " src="{{url("/assets/movie_img")}}/{{$n->image}}" title="album-name" class="img-responsive" alt=" " />
											<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1 agileits_w3layouts_mid_1_home">
											<div class="w3l-movie-text">
												<h6><a href="{{route('single',['id'=>$n->id])}}">{{$n->mname}}</a></h6>							
											</div>
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
														<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
									<?php $a=$a+1; ?>
									@endif
									@if($a==7)
									<?php break; ?>
									@endif
									
									@endforeach
									<div class="clearfix"> </div>

								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="{{asset('assets/css/flexslider.css')}}" type="text/css" media="screen" property="" />
				<script defer src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
	</div>
	<!-- pop-up-box -->  
		<script src="{{asset('assets/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
	<!--//pop-up-box -->
	<div id="small-dialog" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/164819130?title=0&byline=0"></iframe>
	</div>
	<div id="small-dialog1" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/148284736"></iframe>
	</div>
	<div id="small-dialog2" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
	</div>
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
<!-- //Latest-tv-series -->
<!-- footer -->
	@include('partials.footer');
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
{{-- modal script --}}
<script>
	// Get the modal
	var modal = document.getElementById("myModal");
	
	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");
	
	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];
	
	// When the user clicks the button, open the modal 
	btn.onclick = function() {
	  modal.style.display = "block";
	}
	
	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal.style.display = "none";
	}
	
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal) {
		modal.style.display = "none";
	  }
	}
	</script>
	{{-- modal script end  --}}
</body>
</html>