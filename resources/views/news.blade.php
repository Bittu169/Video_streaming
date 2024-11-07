
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | News :: w3layouts</title>
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
<link rel="stylesheet" href="{{asset('assets/css/faqstyle.css')}}" type="text/css" media="all" />
<link href="{{asset('assets/css/single.css')}}" rel='stylesheet' type='text/css' />
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
	@include('partials.header')
<!-- //header -->
<!-- bootstrap-pop-up -->
	
<!-- //bootstrap-pop-up -->
<!-- nav -->
	@include('partials.nav')
<!-- //nav -->
@include('partials.social')
<!-- faq-banner -->
	<div class="faq">
			<div class="container">
				<div class="agileits-news-top">
					<ol class="breadcrumb">
					  <li><a href="{{route('index')}}">Home</a></li>
					  <li class="active">News</li>
					</ol>
				</div>
				<div class="agileinfo-news-top-grids" style="background: #fff; border:1px solid black;">
					<div class="col-md-8 wthree-top-news-left" style="border: 1px solid black;padding: 8px; ">
						<div class="wthree-news-left">
							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="myTab" class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#home1" id="home1-tab" role="tab" data-toggle="tab" aria-controls="home1" aria-expanded="true">Latest News</a></li>
									<li role="presentation"><a href="#w3bsd" role="tab" id="w3bsd-tab" data-toggle="tab" aria-controls="w3bsd">Movie News</a></li>
								</ul>
								<div id="myTabContent" class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home1" aria-labelledby="home1-tab">
                                        {{-- @foreach (range(1,9) as $s) --}}
                                            
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/1.jpg')}}" alt="hula" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">GOAT</a></h5>
													<p style="padding:10px; ">Gandhi, a former leader of a special anti-terrorist squad, who reunites with his squad to deal with consequences from their past.</p>
													<ul style=" display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/1-1.jpg')}}" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Rayan</a></h5>
													<p style="padding:10px;"> five-year-old Rayan Aourram fell into a dry well in the village of Ighran in Chefchaouen Province, Morocco.</p>
													<ul style="display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/2.jpg')}}" alt="hula" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Maharaja</a></h5>
													<p style="padding:10px; ">This tragic twist strongly condemns violence and highlights how revenge can create a never-ending cycle of pain.</p>
													<ul style=" display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/2-2.jpg')}}" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">12th Fail</a></h5>
													<p style="padding:10px;">It is based on the 2019 eponymous non-fiction book by Anurag Pathak about Manoj Kumar Sharma, who overcame extreme poverty to become an Indian Police Service officer.</p>
													<ul style="display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/3.jpg')}}" alt="hula" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Kalki 2898 AD</a></h5>
													<p style="padding:10px; ">it's purely a work of fiction and a re-imagination by director Nag Ashwin, of a world devoid of nature and full of darkness.</p>
													<ul style=" display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/3-3.jpg')}}" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Fighter</a></h5>
													<p style="padding:10px;">Based on the story of Micky Ward, a fledgling boxer who tries to escape the shadow of his more famous but troubled older boxing brother and get his own shot at greatness.</p>
													<ul style="display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/4.jpg')}}" alt="hula" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Pushpa 2</a></h5>
													<p style="padding:10px; ">It became the highest-grossing Indian film of 2024, and ranks among the highest-grossing Telugu films of all time.</p>
													<ul style=" display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/4-4.jpg')}}" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Kill</a></h5>
													<p style="padding:10px;">According to Bhat, in fact, “Kill” was inspired by a real-life train robbery he experienced in 1995.</p>
													<ul style="display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/5.png')}}" alt="hula" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Jawan</a></h5>
													<p style="padding:10px; ">A prison warden recruits inmates to commit outrageous crimes that shed light on corruption and injustice - and that lead him to an unexpected reunion.</p>
													<ul style=" display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/5-5.jpg')}}" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Stree 2</a></h5>
													<p style="padding:10px;"> women are mysteriously abducted by a terrifying headless entity.</p>
													<ul style="display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/6.jpg')}}" alt="hula" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">The Family Star</a></h5>
													<p style="padding:10px; ">A group of space explorers from Earth return from an expedition to a remote star system, where they discovered the remnants of an advanced civilization destroyed when its star went supernova.</p>
													<ul style=" display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/6-6.jpg')}}" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Vikram Vedha</a></h5>
													<p style="padding:10px;">As the unit prepares to kill Vikram, Vedha reappears and saves him.</p>
													<ul style="display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
                                        {{-- @endforeach --}}
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/7.jpg')}}" alt="hula" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">3 Idiots</a></h5>
													<p style="padding:10px; ">“3 idiots" was not a biopic that was based on me; it was just 'inspired'. </p>
													<ul style=" display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/7-7.jpg')}}" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Shiddat</a></h5>
													<p style="padding:10px;">The book is based on true events that happened in the author's life.</p>
													<ul style="display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										{{-- <div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m3.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m4.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m5.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m6.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m7.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m8.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m9.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m10.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m11.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m12.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m13.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m14.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m15.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m16.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div> --}}
									</div>
									<div role="tabpanel" class="tab-pane fade" id="w3bsd" aria-labelledby="w3bsd-tab">
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/4.jpg')}}" alt="hula" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Pushpa 2</a></h5>
													<p style="padding:10px; ">It became the highest-grossing Indian film of 2024, and ranks among the highest-grossing Telugu films of all time.</p>
													<ul style=" display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/4-4.jpg')}}" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Kill</a></h5>
													<p style="padding:10px;">According to Bhat, in fact, “Kill” was inspired by a real-life train robbery he experienced in 1995.</p>
													<ul style="display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/5.png')}}" alt="hula" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Jawan</a></h5>
													<p style="padding:10px; ">A prison warden recruits inmates to commit outrageous crimes that shed light on corruption and injustice - and that lead him to an unexpected reunion.</p>
													<ul style=" display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/5-5.jpg')}}" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Stree 2</a></h5>
													<p style="padding:10px;"> women are mysteriously abducted by a terrifying headless entity.</p>
													<ul style="display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/3.jpg')}}" alt="hula" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Kalki 2898 AD</a></h5>
													<p style="padding:10px; ">it's purely a work of fiction and a re-imagination by director Nag Ashwin, of a world devoid of nature and full of darkness.</p>
													<ul style=" display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/3-3.jpg')}}" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Fighter</a></h5>
													<p style="padding:10px;">Based on the story of Micky Ward, a fledgling boxer who tries to escape the shadow of his more famous but troubled older boxing brother and get his own shot at greatness.</p>
													<ul style="display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/6.jpg')}}" alt="hula" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">The Family Star</a></h5>
													<p style="padding:10px; ">A group of space explorers from Earth return from an expedition to a remote star system, where they discovered the remnants of an advanced civilization destroyed when its star went supernova.</p>
													<ul style=" display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/6-6.jpg')}}" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Vikram Vedha</a></h5>
													<p style="padding:10px;">As the unit prepares to kill Vikram, Vedha reappears and saves him.</p>
													<ul style="display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/2.jpg')}}" alt="hula" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Maharaja</a></h5>
													<p style="padding:10px; ">This tragic twist strongly condemns violence and highlights how revenge can create a never-ending cycle of pain.</p>
													<ul style=" display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/2-2.jpg')}}" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">12th Fail</a></h5>
													<p style="padding:10px;">It is based on the 2019 eponymous non-fiction book by Anurag Pathak about Manoj Kumar Sharma, who overcame extreme poverty to become an Indian Police Service officer.</p>
													<ul style="display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/7.jpg')}}" alt="hula" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">3 Idiots</a></h5>
													<p style="padding:10px; ">“3 idiots" was not a biopic that was based on me; it was just 'inspired'. </p>
													<ul style=" display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/7-7.jpg')}}" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Shiddat</a></h5>
													<p style="padding:10px;">The book is based on true events that happened in the author's life.</p>
													<ul style="display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/1.jpg')}}" alt="hula" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">GOAT</a></h5>
													<p style="padding:10px; ">Gandhi, a former leader of a special anti-terrorist squad, who reunites with his squad to deal with consequences from their past.</p>
													<ul style=" display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="{{route('index')}}"><img style="width: 100px; padding-top: 18px;" src="{{asset('assets/images/1-1.jpg')}}" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="{{route('index')}}">Rayan</a></h5>
													<p style="padding:10px;"> five-year-old Rayan Aourram fell into a dry well in the village of Ighran in Chefchaouen Province, Morocco.</p>
													<ul style="display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										
										
										
                                        {{-- @endforeach --}}
										
                                       {{-- @foreach (range(1,10) as $a)
										
									
										<div class="wthree-news-top-left">	
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m17.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p style="padding:10px;">Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul style="display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m18.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5 style="padding:10px;"><a style="color: black; font-weight:bold; font-size: 18px;" href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p style="padding:10px;">Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul style="display:flex; padding:10px;">
														<li style="list-style: none;"><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li style="list-style: none; padding-left: 8px;"><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										@endforeach --}}
										
										{{-- <div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m19.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m20.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m21.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m22.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m1.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m2.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m3.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m4.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m5.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m6.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="wthree-news-top-left">
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m7.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="news-single.html"><img src="images/m8.jpg" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="news-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
													<p>Sed tristique mattis fermentum. Etiam semper aliquet massa, id tempus massa mattis eget.</p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div> --}}
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 wthree-news-right" style="padding: 8px;">
						<!-- news-right-top -->
						<div class="news-right-top" style="border: 1px solid black;padding: 8px;">
							<div class="wthree-news-right-heading">
								<h3 style="background: orange; color:#fff; padding: 10px; font-weight:bold; padding-left:18px">Updated News</h3>
							</div>
							<div class="wthree-news-right-top">
								<div class="news-grids-bottom">
									<!-- date -->
									<div id="design" class="date">
										<div id="cycler">   
											<div class="date-text">
												<a href="{{route('index')}}" style="color: black; font-weight:bold;">August 15,2016</a>
												<p style="padding: 10px; margin:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											</div>
											<div class="date-text">
												<a href="{{route('index')}}" style="color: black; font-weight:bold;">July 08,2016 <span class="blinking"><img src="{{asset('assets/images/new.gif')}}" alt="" /></span></a>
												<p style="padding: 10px; margin:5px;">Nullam non turpis sit amet metus tristique egestas et et orci.</p>
											</div>
											<div class="date-text">
												<a href="{{route('index')}}" style="color: black; font-weight:bold;">February 15,2016</a>
												<p style="padding: 10px; margin:5px;">Duis venenatis ac ipsum vel ultricies in placerat quam</p>
											</div>
											<div class="date-text">
												<a href="{{route('index')}}" style="color: black; font-weight:bold;">January 15,2016 <span class="blinking"><img src="{{asset('assets/images/new.gif')}}" alt="" /></span></a>
												<p style="padding: 10px; margin:5px;">Pellentesque ullamcorper fringilla ipsum, ornare dapibus velit volutpat sit amet.</p>
											</div>
											<div class="date-text">
												<a href="{{route('index')}}" style="color: black; font-weight:bold;">September 24,2016</a>
												<p style="padding: 10px; margin:5px;">In lobortis ipsum mi, ac imperdiet elit pellentesque at.</p>
											</div>
											<div class="date-text">
												<a href="{{route('index')}}" style="color: black; font-weight:bold;">August 15,2016</a>
												<p style="padding: 10px; margin:5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											</div>
											<div class="date-text">
												<a href="{{route('index')}}" style="color: black; font-weight:bold;">July 08,2016 <span class="blinking"><img src="{{asset('assets/images/new.gif')}}" alt="" /></span></a>
												<p style="padding: 10px; margin:5px;">Nullam non turpis sit amet metus tristique egestas et et orci.</p>
											</div>
											<div class="date-text">
												<a href="{{route('index')}}" style="color: black; font-weight:bold;">February 15,2016</a>
												<p style="padding: 10px; margin:5px;">Duis venenatis ac ipsum vel ultricies in placerat quam</p>
											</div>
											<div class="date-text">
												<a href="{{route('index')}}" style="color: black; font-weight:bold;">January 15,2016 <span class="blinking"><img src="{{asset('assets/images/new.gif')}}" alt="" /></span></a>
												<p style="padding: 10px; margin:5px;">Pellentesque ullamcorper fringilla ipsum, ornare dapibus velit volutpat sit amet.</p>
											</div>
											<div class="date-text">
												<a href="{{route('index')}}" style="color: black; font-weight:bold;">September 24,2016</a>
												<p style="padding: 10px; margin:5px;">In lobortis ipsum mi, ac imperdiet elit pellentesque at.</p>
											</div>
										</div>
										<script>
										function blinker() {
											$('.blinking').fadeOut(500);
											$('.blinking').fadeIn(500);
										}
										setInterval(blinker, 1000);
										</script>
										<script>
											function cycle($item, $cycler){
												setTimeout(cycle, 2000, $item.next(), $cycler);
												
												$item.slideUp(1000,function(){
													$item.appendTo($cycler).show();        
												});
												}
											cycle($('#cycler div:first'),  $('#cycler'));
										</script>
									</div>
									<!-- //date -->
								</div>
							</div>
						</div>
						<!-- //news-right-top -->
						<!-- news-right-bottom -->
						<div class="news-right-bottom" style="border: 1px solid black;padding: 8px;">
							<div class="wthree-news-right-heading">
								<h3 style="background: orange; color:#fff; padding: 10px; font-weight:bold; padding-left:18px">Top News</h3>
							</div>
							<div class="news-right-bottom-bg">
								<div class="news-grids-bottom">
									<div class="top-news-grid">
										<div class="top-news-grid-heading" style="padding: 10px;">
											<a style="color: black; font-weight:bold;" href="{{route('news')}}">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean rutrum ac nulla</a>
										</div>
										<div class="w3ls-news-t-grid top-t-grid" style="padding: 10px;">
											<ul style="list-style:none; display:flex; gap:10px;">
												<li><a style="color: black;" href="#"><i class="fa fa-clock-o"></i> 1h</a></li>
												<li><a style="color: black;" href="#"><i class="fa fa-user"></i> Vivamus nibh</a></li>
											</ul>
										</div>
									</div>
									<div class="top-news-grid">
										<div class="top-news-grid-heading" style="padding: 10px;">
											<a style="color: black; font-weight:bold;" href="{{route('news')}}">Duis orci enim, rutrum vel sodales ut, tincidunt nec turpis.</a>
										</div>
										<div class="w3ls-news-t-grid top-t-grid" style="padding: 10px;">
											<ul style="list-style:none; display:flex; gap:10px;">
												<li><a style="color: black;" href="#"><i class="fa fa-clock-o"></i> 3h</a></li>
												<li><a style="color: black;" href="#"><i class="fa fa-user"></i> Cras pretium</a></li>
											</ul>
										</div>
									</div>
									<div class="top-news-grid">
										<div class="top-news-grid-heading" style="padding: 10px;">
											<a style="color: black; font-weight:bold;" href="{{route('news')}}">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean rutrum ac nulla</a>
										</div>
										<div class="w3ls-news-t-grid top-t-grid" style="padding: 10px;">
											<ul style="list-style:none; display:flex; gap:10px;">
												<li><a style="color: black;" href="#"><i class="fa fa-clock-o"></i> 1h</a></li>
												<li><a style="color: black;" href="#"><i class="fa fa-user"></i> Vivamus nibh</a></li>
											</ul>
										</div>
									</div>
									<div class="top-news-grid">
										<div class="top-news-grid-heading" style="padding: 10px;">
											<a style="color: black; font-weight:bold;" href="{{route('news')}}">Duis orci enim, rutrum vel sodales ut, tincidunt nec turpis.</a>
										</div>
										<div class="w3ls-news-t-grid top-t-grid" style="padding: 10px;"> 
											<ul style="list-style:none; display:flex; gap:10px;">
												<li><a style="color: black;" href="#"><i class="fa fa-clock-o"></i> 3h</a></li>
												<li><a style="color: black;" href="#"><i class="fa fa-user"></i> Cras pretium</a></li>
											</ul>
										</div>
									</div>
									<div class="top-news-grid">
										<div class="top-news-grid-heading" style="padding: 10px;">
											<a style="color: black; font-weight:bold;" href="{{route('news')}}">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean rutrum ac nulla</a>
										</div>
										<div class="w3ls-news-t-grid top-t-grid" style="padding: 10px;">
											<ul style="list-style:none; display:flex; gap:10px;">
												<li><a style="color: black;" href="#"><i class="fa fa-clock-o"></i> 1h</a></li>
												<li><a style="color: black;" href="#"><i class="fa fa-user"></i> Vivamus nibh</a></li>
											</ul>
										</div>
									</div>
									<div class="top-news-grid">
										<div class="top-news-grid-heading" style="padding: 10px;">
											<a style="color: black; font-weight:bold;" href="{{route('news')}}">Duis orci enim, rutrum vel sodales ut, tincidunt nec turpis.</a>
										</div>
										<div class="w3ls-news-t-grid top-t-grid" style="padding: 10px;">
											<ul style="list-style:none; display:flex; gap:10px;">
												<li><a style="color: black;" href="#"><i class="fa fa-clock-o"></i> 3h</a></li>
												<li><a style="color: black;" href="#"><i class="fa fa-user"></i> Cras pretium</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- //news-right-bottom -->
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
<!-- //faq-banner -->
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