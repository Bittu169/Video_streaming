<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: rgb(233, 226, 226);
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
    <form action="{{route('auth.submitforgot')}}" method="POST">
        @csrf
        <input class="form-control" type="text" name="email" id="email" placeholder="Enter email">
        <button class="btn btn-success form-control" type="submit">Sent reset password link</button>
    </form>
</body>
</html>