<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/login_css/style.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets/login_css/bootstrap.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
</head>
<body>
   
    <div class="container">
    
        
        @if(Session::has('msg'))
        <div class="alert" style="">
            <strong>{{Session::get('msg')}}</strong> &nbsp; Please Enter correct details.
          </div>
        {{-- //   alert("{{Session::get('msg')}}"); --}}
       @endif

        {{-- <img src="{{asset('assets/images/1.jpg')}}" class="container" alt="hula"> --}}
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()"><strong>Login</strong></button>
                <button type="button" class="toggle-btn" onclick="register()"><strong>Register</strong></button>


            </div>
            <div class="social-icons">
                <img src="{{asset('assets/images/fb.jpg')}}" alt="">
                <img src="{{asset('assets/images/insta.jpg')}}" alt="">
                <img src="{{asset('assets/images/twit.png')}}" alt="">
            </div>
           <form id="login" class="input-group" action="{{route('login_check')}}" method="POST">
            @csrf
            <input type="text" class="input-field" placeholder="User Id" name="email" required>
            <input type="text" class="input-field" placeholder="User Password" name="pass" required>
            <input type="checkbox" class="check-box" ><span style="bottom: 100px;">Remember Password</span>
            <input type="submit" class="submit-btn" name="login" value="Login"> 
            <br>
            <a href="{{route('auth.forgot')}}" id="forgot-password">Forgot password</a>
            

           </form>
        <form id="register" class="input-group" action="{{route('signup')}}" method="POST">
            @csrf
            <input type="text" class="input-field" placeholder="User Id" name="name" required>
            <input type="email" class="input-field" placeholder="Email Id" name="email" required>
            <input type="text" class="input-field" placeholder="User Password" name="pass" required>
            <input type="checkbox" class="check-box"><span style="bottom: 65px;">I agree to the terms and conditions</span>
            {{-- <button type="button" class="submit-btn">Register</button>    --}}
            <input type="submit" class="submit-btn" name="register" value="Register">
            
        </form>
        </div>
    </div>
    <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");
        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";

        }
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";

        }
    </script>
</body>
</html>