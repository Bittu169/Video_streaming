<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('assets/css/medile.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('assets/css/single.css') }}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('css/contactstyle.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/faqstyle.css') }}" type="text/css" media="all" />
    <!-- news-css -->
    <link rel="stylesheet" href="{{ asset('assets/news-css/news.css') }}" type="text/css" media="all" />
    <!-- //news-css -->
    <!-- list-css -->
    <link rel="stylesheet" href="{{ asset('assets/list-css/list.css') }}" type="text/css" media="all" />
    <!-- //list-css -->
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    <!-- //font-awesome icons -->
    <!-- js -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300'
        rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ asset('assets/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" media="all">
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items: 5,
                itemsDesktop: [640, 5],
                itemsDesktopSmall: [414, 4]

            });

        });
    </script>
    <script src="{{ asset('assets/js/simplePlayer.js') }}"></script>
    <script>
        $("document").ready(function() {
            $("#video").simplePlayer();
        });
    </script>
    {{-- razorpay links --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet" />
    <!-- Font Awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    {{-- <link
  rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
  crossorigin="anonymous"
/> --}}
    {{-- <link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
  crossorigin="anonymous"
/> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    {{-- <script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
  crossorigin="anonymous"
></script> -------------------------------------- --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--External CSS-->
    <link rel="stylesheet" href="{{ asset('assets/pay/r_pay.css') }}" />
    {{-- end of razorpay links --}}

</head>

<body style="background: #333">
    <!-- header -->
    @include('partials.header');
    <!-- //header -->
    <!-- bootstrap-pop-up -->

    <!-- //bootstrap-pop-up -->
    <!-- nav -->
    @include('partials.nav');
    <!-- //nav -->

    {{-- social icons --}}
    @include('partials.social');
    {{-- //social icons --}}
    <!-- single -->
    <div class="single-page-agile-main">
        <div class="container">
            <!-- /w3l-medile-movies-grids -->
            <div class="agileits-single-top">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Single</li>
                </ol>
            </div>
            <div class="single-page-agile-info">
                <!-- /movie-browse-agile -->
                <div class="show-top-grids-w3lagile">
                    <div class="col-sm-8 single-left">
                        <div class="song">
                            @foreach ($ubm as $p)
                                @if ($p->id == $id)
                                    <div class="song-info latest-text w3_latest_text"
                                        style="color: #fff;border-left:2px solid #ff8d1b; font-size:2em; text-transform: uppercase; margin-bottom: 1em;padding: 0.3em 0.5em;">
                                        <h3 class="latest-text w3_latest_text" style="color: #fff;">{{ $p->mname }}
                                        </h3>
                                    </div>
                                    {{-- <div class="video-grid-single-page-agileits">
							<div data-video="dLmKio67pVQ" id="video"> <img src="images/5.jpg" alt="hila" class="img-responsive" /> </div>
						</div> --}}
                        </div>
                        <div class="song-grid-right" style="margin-left:30px;">
                            <div class="Movie">


                                <iframe width="700" height="415" style="border-color: white;"
                                    src="{{ $p->mlink }}" title="YouTube video player" frameborder="1"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


                            </div>
                            @if ($p->mprice != 0)
                                <section class="coloured-section" id="title"
                                    style=" height: 150px; text-transform:uppercase; width: 700px; border:2px solid #fff;">
                                    <h1
                                        style="display: flex; text-align:center; justify-content:center; padding:20px; font-family:poppins; color:#fff;">
                                        <strong>Buy to watch full movie</strong>
                                    </h1>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h1 class="big-heading">
                                                </h1>
                                                <div>
                                                    <form>
                                                        <div class="rzp">
                                                            <button id="rzp-button1" class="btn btn-primary"
                                                                style="display: flex; text-align:center; justify-content:center; left:250px;width:200px; font-size:24px; padding:5px;padding-top:12px; font-family:poppins; text-transform:uppercase;">
                                                                Pay Now
                                                            </button>
                                                            {{-- <i class="fas fa-donate"></i>&nbsp;&nbsp;  --}}
                                                        </div>
                                                        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                                                        <script>
                                                            var options = {
                                                                key: "rzp_test_fdqYwikAnuXWyN", // Enter the Key ID generated from the Dashboard
                                                                amount: {{ $p->mprice . '00' }}, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                                                                currency: "INR",
                                                                name: "Bittu mondal",
                                                                description: "Buy your needed thing",
                                                                handler: function(response) {
                                                                    if (
                                                                        typeof response.razorpay_payment_id == "undefined" ||
                                                                        response.razorpay_payment_id < 1
                                                                    ) {
                                                                        swal({
                                                                            title: "Please try again later!",
                                                                            icon: "error",
                                                                            button: "Close",
                                                                        });
                                                                    } else {
                                                                        swal({
                                                                            title: "Thank You!",
                                                                            icon: "success",
                                                                            button: "Close",
                                                                        });
                                                                        // Swal.fire({
                                                                        //     position: "top-middle",
                                                                        //     icon: "success",
                                                                        //     title: "Thank You!",
                                                                        //     showConfirmButton: false,
                                                                        //     timer: 1500
                                                                        // });
                                                                    }
                                                                },
                                                                theme: {
                                                                    color: "#3399cc",
                                                                },
                                                            };
                                                            var rzp1 = new Razorpay(options);
                                                            document.getElementById("rzp-button1").onclick = function(
                                                                e
                                                            ) {
                                                                rzp1.open();
                                                                e.preventDefault();
                                                            };
                                                        </script>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            @endif
                        </div>
                        @endif
                        @endforeach
                        <div class="clearfix"> </div>

                        {{-- <div class="all-comments">
						<div class="all-comments-info">
							<a href="#">Comments</a>
							<div class="agile-info-wthree-box">
								<form>
									<input type="text" placeholder="Name" required="">			           					   
									<input type="text" placeholder="Email" required="">
									<input type="text" placeholder="Phone" required="">
									<textarea placeholder="Message" required=""></textarea>
									<input type="submit" value="SEND">
									<div class="clearfix"> </div>
								</form>
							</div>
						</div> --}}
                        <div class="media-grids"
                            style="background: #fff; width: 700px; margin-left:30px; padding:10px;">
                            <div class="media" style="padding: 10px;">
                                <h5 style="color: black; font-size: 24px;"><strong>The Greatest Of All Time Movie
                                        Review : Good, not great-est!</strong></h5>
                                <div class="media-left">
                                    {{-- <a href="#">
                                        <img src="images/user.jpg" title="One movies" alt=" " />
                                    </a> --}}
                                </div>
                                <div class="media-body" style="padding: 10px; color:black;">
                                    <p style="color:black; font-size:15px;"><strong>MGOAT Movie Synopsis:</strong> MS
                                        Gandhi (Vijay) a former Special Anti-Terrorist Squad
                                        (SATS) officer embarks on a mission that squares back to his blood, threatening
                                        his family life <br><br>
                                        <strong>GOAT Movie Review:</strong> In the 2007 film, Azhagiya Tamil Magan, a
                                        young Vijay is
                                        pitted against his look-alike. Seventeen years later, we get to see the same
                                        thing, but only now it is Thalapathy vs Ilaya Thalapathy. GOAT throws open a new
                                        version of Vijay for fans to celebrate. With GOAT, Vijay is not only a Venkat
                                        Prabhu hero, but also the Venkat Prabhu villain. <br><br>
                                        MS Gandhi (Vijay), a highly-skilled agent of the Special Anti-Terrorist Squad
                                        (SATS), is your typical ‘Family Man’, who hides his occupation from his wife
                                        (Sneha). He takes grocery list while making a move against villains. The couple,
                                        parents to a boy (Jeevan), are expecting their second child. Gandhi’s SATS team
                                        constitutes of Sunil Thiagarajan (Prashanth), Kalyan Sundaram (Prabhudeva), Ajay
                                        (Ajmal Ameer) and their boss Nazeer (Jayaram). On a work-cation trip to
                                        Thailand, an unpleasant incident changes his life and his approach to work. Cut
                                        to 17 years, Gandhi is now an immigration officer, who spends his days stamping
                                        passports, and taking care of his daughter who lives with his wife. The couple
                                        are separated. On a work trip to Russia, Gandhi accidentally meets his long-long
                                        son Jeevan, a young Vijay. And thus begins a cat-and-mouse game. <br><br>
                                        With action and emotional sequences, the first half of the film sets a stage for
                                        an interesting interval block, which supposedly packs a punch, but predictably
                                        factor boils down the catharsis. The second half has plenty of twists, but the
                                        climax scene - a fan-pleaser set during the CSK live match - is a bit of a drag.
                                        The story line follows a very familiar template, and the narrative,
                                        unfortunately, is very easy to foresee. The film’s overall length is a concern
                                        too. The action sequences too are just about average. The face-off scenes
                                        between young and old Vijay is engaging. With a conventional story, director
                                        Venkat Prabhu capitalises heavily on Vijay’s trademark charm. With de-aging
                                        technology, he gets to do it twice as well! Vijay is GOAT, no doubt, and he
                                        pulls off both the roles with ease. Playing a younger boy in the de-aging
                                        version, and adapting to the mannerisms gets full marks. His villainous side is
                                        very compelling. Vijays are the biggest asset of GOAT. With Vijaykanth as a
                                        front, Vijay also sends a ‘political message’ for his fans. Kokila Mohan as
                                        Rajiv Menon, a former SATS officer gone rogue, has done a great job as a bad
                                        boy, but between the two Vijays - Thalapathy and Ilaya Thalapathy - his
                                        character gets lost. Prashant, Prabhudeva, Sneha, Jayram, Meenakshi Chowdary add
                                        to Vijay’s charm. Yogi Babu and Premji bring the comic relief, with former
                                        scoring big in the Gandhi-Nehru bit. De-aging technology has been crafted
                                        extremely well, contrary to the comments that we saw after the release of the
                                        trailer.
                                    </p>
                                    {{-- <a href="#"> Admin </a></span> --}}
                                </div>
                            </div>
                            {{-- <div class="media">
								<h5>MARK JOHNSON</h5>
								<div class="media-left">
									<a href="#">
									<img src="images/user.jpg" title="One movies" alt=" " />
									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>STEVEN SMITH</h5>
								<div class="media-left">
									<a href="#">
									<img src="images/user.jpg" title="One movies" alt=" " />
									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div> --}}

                        </div>
                    </div>
                </div>
                <div class="col-md-4 single-right">
                    <h3>Up Next</h3>
                    <div class="single-grid-right">
                        <?php $i = 1; ?>
                        @foreach ($ubm as $x)
                            @if ($x->id > 5)
                                <div class="single-right-grids">
                                    <div class="col-md-4 single-right-grid-left">
                                        <a href="{{ route('single', ['id' => $x->id]) }}"><img
                                                src="{{ url('/assets/movie_img') }}/{{ $x->image }}"
                                                alt="" /></a>
                                    </div>
                                    <div class="col-md-8 single-right-grid-right">
                                        <a href="{{ route('single', ['id' => $x->id]) }}"
                                            class="title">{{ $x->mname }}</a>
                                        <p class="author"><a href="#" class="author">{{ $x->mtype }}</a>
                                        </p>
                                        {{-- <p class="views">2,114,200 views</p> --}}
                                        <p class="views" style="font-size: 18px; color:black;">
                                            @if ($x->mprice == 0)
                                                Free
                                            @else
                                                ₹ {{ $x->mprice }}
                                            @endif
                                        </p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <?php $i = $i + 1; ?>
                            @endif
                            @if ($i > 8)
                                <?php break; ?>
                            @endif
                        @endforeach

                    </div>
                </div>



                <div class="clearfix"> </div>
            </div>
            <!-- //movie-browse-agile -->
            <!--body wrapper start-->
            {{-- <div class="w3_agile_banner_bottom_grid">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                            <a href="{{ route('single') }}" class="hvr-shutter-out-horizontal"><img
                                    src="{{ asset('assets/images/Pathaan1.jpg') }}" title="album-name"
                                    class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="{{route('single')}}">Pathaan</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-half-o"
                                                        aria-hidden="true"></i></a></li>
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
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m11.jpg"
                                    title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">X-Men</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-half-o"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            </li>
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
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m12.jpg"
                                    title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Greater</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-half-o"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            </li>
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
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m7.jpg"
                                    title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Light B/t Oceans</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            </li>
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
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m8.jpg"
                                    title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">The BFG</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-half-o"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            </li>
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
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m9.jpg"
                                    title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Central Intelligence</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-half-o"
                                                        aria-hidden="true"></i></a></li>
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
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m10.jpg"
                                    title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Don't Think Twice</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-half-o"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            </li>
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
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m17.jpg"
                                    title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">Peter</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-half-o"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            </li>
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
                            <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m15.jpg"
                                    title="album-name" class="img-responsive" alt=" " />
                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                <div class="w3l-movie-text">
                                    <h6><a href="single.html">God’s Compass</a></h6>
                                </div>
                                <div class="mid-2 agile_mid_2_home">
                                    <p>2016</p>
                                    <div class="block-stars">
                                        <ul class="w3l-ratings">
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            </li>
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
            </div> --}}
            <!--body wrapper end-->


        </div>
        <!-- //w3l-latest-movies-grids -->
    </div>
    </div>
    <!-- //w3l-medile-movies-grids -->

    <!-- footer -->
    @include('partials.footer');
    <!-- //footer -->
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
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

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //here ends scrolling icon -->
    {{-- razorpay --}}
    <!-- Javascript -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- external js file-->
    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    {{-- //razorpay --}}
</body>

</html>
