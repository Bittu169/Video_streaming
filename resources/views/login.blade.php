<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Free Tour and Travel Website Tempalte | Smarteyeapps.com</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('login_assets/images/fav.jpg')}}">
    <link rel="stylesheet" href="{{asset('login_assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('login_assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('login_assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('login_assets/plugins/slider/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('login_assets/plugins/slider/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('login_assets/css/style.css')}}" />
</head>

    <body class="form-login-body"> 
        <div class="container-fluid">
            <div class="top-menu">
              
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 logo">
                            <img src="{{asset('loin_assets/images/login.jpg')}}" alt="">
                
                        </div>
                        <div class="col-md-9 sup">
                            <ul>
                                <li><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-user-lock"></i> Login</button></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @if(Session::has('msg'))
            <div class="alert alert-danger" style="display: flex; align-items:center; justify-content:center;">
                <strong>{{Session::get('msg')}}</strong> &nbsp; Please Enter proper details.
              </div>
            
            @endif
            <div class="login-body container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="login-text">
                                    <h4>Login to Admin Panel</h4>
                                    <form action="{{route('login_check')}}" method="POST">
                                    @csrf
                                    <input type="text" placeholder="Enter Username" class="form-control" name="name" required>
                                    
                                     <input type="text" placeholder="Enter Password" class="form-control" name="pass" required>
                                     
                                     <label class="w-100" for="">Forget Password?</label>
                                     
                                     <p><input type="submit" class="btn btn-primary" value="Log In" name="login"></p>
                                    
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="login-img">
                                    <img src="{{asset('login_assets/images/login.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
        </div>
    </body>

    <script src="{{asset('login_assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('login_assets/js/popper.min.js')}}"></script>
    <script src="{{asset('login_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('login_assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js')}}"></script>
    <script src="{{asset('login_assets/plugins/slider/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('login_assets/js/script.js')}}"></script>
</html>
