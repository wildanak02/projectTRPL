<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">

    <title>Login</title>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="../assets/login/css/style.css">
    <style>
        body {
            background-image:url('../assets/login/images/back.jpg');
        }
        .box {
          opacity:0.8;
          transition: opacity .5s ease-out;
          -moz-transition: opacity .5s ease-out;
          -webkit-transition: opacity .5s ease-out;
          -o-transition: opacity .5s ease-out;
        }
        .box:hover{
          transition: opacity .5s ease-out;
          -moz-transition: opacity .5s ease-out;
          -webkit-transition: opacity .5s ease-out;
          -o-transition: opacity .5s ease-out;
          opacity: 1;
        }

    </style>

</head>
<body>
<div class="box">
  <div class="login-form">
       <h1>Syafia</h1>


                <form action="{{ route('voyager.login') }}" method="POST">
                    {{ csrf_field() }}
                      <div class="form-group ">
                            <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="{{ __('voyager.generic.email') }}" class="form-control" required>
                         <i class="fa fa-user"></i>
                    </div>

                    <div class="form-group">
                            <input type="password" name="password" placeholder="{{ __('voyager.generic.password') }}" class="form-control" required>
                        <i class="fa fa-lock"></i>
                    </div>

                    <button type="submit" class="log-btn" >Log in</button>

              </form>
</div>
</div>
              <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

                  <script  src="../assets/login/js/index.js"></script>
</body>
</html>
