<!DOCTYPE html>
<html lang="en">
<head>
<title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | General :: Primeflix</title>
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
<link href="{{asset('assets/css/medile.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('assets/css/single.css')}}" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="{{asset('assets/css/contactstyle.css')}}" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('assets/css/faqstyle.css')}}" type="text/css" media="all" />
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />
<!-- //font-awesome icons -->
<!-- news-css -->
<link rel="stylesheet" href="{{asset('assets/news-css/news.css')}}" type="text/css" media="all" />
<!-- //news-css -->
<!-- list-css -->
<link rel="stylesheet" href="{{asset('assets/list-css/list.css')}}" type="text/css" media="all" />
<!-- //list-css -->
<!-- js -->
<script type="text/javascript" src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
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
	@include('partials.header');
<!-- //header -->
<!-- bootstrap-pop-up -->
	
<!-- //bootstrap-pop-up -->
<!-- nav -->
    @include('partials.nav');
	
<!-- //nav -->
@include('partials.social');

<!-- /w3l-medile-movies-grids -->
	<div class="general-agileits-w3l">
		<div class="w3l-medile-movies-grids">

				<!-- /movie-browse-agile -->
				
				      <div class="movie-browse-agile">
					     <!--/browse-agile-w3ls -->
						 <div class="browse-agile-w3ls general-w3ls">
							
								<div class="tittle-head">
									<h4 class="latest-text" style="color: #fff;">Searched Movies </h4>
									<div class="container">
										<div class="agileits-single-top">
											<ol class="breadcrumb">
											  <li><a href="{{route('index')}}">Home</a></li>
											  <li class="active">Genres</li>
                                              {{-- <li class="active">{{$id}}</li> --}}
											</ol>
										</div>
									</div>
								</div>
								<div class="container">
							<div class="browse-inner">
								@foreach ($w as $j)
								
							   <div class="col-md-2 w3l-movie-gride-agile" style="background:#fff; width:180px; height: 230px;">
									<a href="{{route('single',['id'=>$j->id])}}" class="hvr-shutter-out-horizontal" style="height: 150px; "><img style="width:130px; height:150px; padding-left: 15px; padding-top: 5px; " src="{{url('/assets/movie_img')}}/{{$j->image}}" title="album-name" alt=" " />
									     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
									</a>
									  <div class="mid-1">
										<div class="w3l-movie-text">
											<h6><a href="{{route('single',['id'=>$j->id])}}">{{$j->mname}}</a></h6>							
										</div>
										<div class="mid-2" style="padding-left: 15px;">
										
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
							 	    <div class="ribben two">
										<p>NEW</p>
									</div>	
									</div>
									@if(!isset($w))
                                    <h1>No Result found</h1>
                                    @endif
									@endforeach
								  
								<!-- /latest-movies1 -->
                                </div>
                                </div>
                            </div>
	<!-- //w3l-medile-movies-grids -->
	</div>
	<!-- //comedy-w3l-agileits -->
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
</body>
</html>