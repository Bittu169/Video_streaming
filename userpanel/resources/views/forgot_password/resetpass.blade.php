<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: rgb(233, 226, 226);
        }
        h1{
            margin-top: -7px; 
            font-family: poppins;
            font-weight: bold;
            font-size: 20px;
            text-align: center;
        }
        form{
            width: 25%;
            display: flex;
            margin: 15% 35%  auto;
            position: relative;
            /* border: 1px solid black; */
            padding: 20px;
            background-color: white;
            flex-direction: column;
            box-shadow: 0 0 10px;
            border-radius: 5px;
        }
        input,button{
            margin: 2px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <form action="{{route('auth.submitreset')}}" method="POST">
        @csrf
        <h1>Reset Password</h1>
        <input type="hidden" name="token" value="{{$token}}"> 
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
        <input type="password" class="form-control" name="password" id="pass" placeholder="Enter password">
        <input class="form-control" type="password" name="password_confirmation" id="confirmpass" placeholder="Confirm password">
        <button class="btn btn-success form-control" type="submit">Reset password</button>
    </form>
    
</body>
</html>