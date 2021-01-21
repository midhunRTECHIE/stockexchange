<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>National Stock Exchange</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <link href="{{asset('asset/css/style.css')}}" rel="stylesheet" type="text/css"/> -->
    <link href="{{secure_asset('css/login.css')}}" rel="stylesheet" type="text/css" />
    
</head>

<body>
@if(session()->has('message'))
    <div class="alert alert-success">
    <center> <h4> <strong style="color: royalblue">{{ session()->get('message') }}</strong></h4> </center>
    </div>
@endif

    <div class="col-sm-12 login-bar">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 frm-block">
            <div class="container frm-block-text">
            <center><h3>Please Add an Account</h3></center>
            <form method="post" action="/userSignin" >   
                {{csrf_field()}}
                    <input type="text" name="username" class="form-control login-txt" placeholder="username" required>
                    <input type="password" name="password" class="form-control login-txt" placeholder="password" required>
                    <input type="submit" name="submit" class="form-control login-txt btn-primary" value="Login">
                </form>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</body>

</html>