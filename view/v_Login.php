<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <title>Login</title>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="assets/login/css/style.css">
  <style>
  body {
    background-image:url('assets/login/images/back.jpg');
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


      <form method="post">
        <input type="hidden" name="controller" value="Login">
							<input type="hidden" name="action" value="authentication">
            <div class="form-group ">
              <input class="form-control" name="username" type="text"
    								value="<?=isset($_POST["username"]) ? $_POST["username"] : NULL?>" required autofocus>
          <i class="fa fa-user"></i>
            </div>

            <div class="form-group">
              <input class="form-control" name="password" type="password"
								value="<?=isset($_POST["password"]) ? $_POST["password"] : NULL?>" required>
              <i class="fa fa-lock"></i>
            </div>

            <button value="Login" type="submit" class="log-btn" name="login" >Log in</button>
          </form>
    </div>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script  src="assets/login/js/index.js"></script>
</body>
</html>
