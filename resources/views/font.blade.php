
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/login_css/front.css')}}">
</head>
<body >
    {{-- <ul>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li> --}}
        {{-- <li style="float:right"></li> --}}
        {{-- <li><img src="" alt=""></li> --}}
      {{-- </ul> --}}
      {{-- <img style="width: 90px; border-radius:70%; border-radius: 2px solid black;" src="{{asset('assets/images/logo.jpg')}}" alt=""> --}}
     <div class="content">
      <div class="text">
      <h1>PrimeFlix</h1>
     <h2><b> Unlimited movies, TV shows and more..</b></h2>
     <p>Sign in now to enjoy many movies.</p>
    </div>
     <div class="abc"><a class="active abc" href="{{route('login')}}">Get Started &nbsp; &#11162;</a></div>
     {{-- <form action="{{route('index')}}" method="get" enctype="multipart/form-data">
        @csrf --}}
     {{-- <button class="button" style="vertical-align:middle"><span>Sign in </span></button> --}}
     <a href="{{route('login')}}" class="button" style="vertical-align:middle"><span>Sign in</span></a>
     <div class="logo">
      <img src="{{asset('assets/images/logo.jpg')}}" alt="">
     </div>
    </div>
     {{-- </form> --}}
</body>
</html>
