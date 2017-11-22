<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Account - Bootstrap Admin Template</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <link href="assets/panel/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/panel/css/bootstrap-responsive.min.css" rel="stylesheet">

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
  <link href="assets/panel/css/font-awesome.css" rel="stylesheet">

  <link href="assets/panel/css/style.css" rel="stylesheet">



  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>

<body>

  <div class="navbar navbar-fixed-top">

    <div class="navbar-inner">

      <div class="container">

        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <a class="brand" href="index.html">
          Bootstrap Admin Template
        </a>

        <div class="nav-collapse">
          <ul class="nav pull-right">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="icon-user"></i>
                  <?php echo $_SESSION['login_user'];?>
                <b class="caret"></b>
              </a>

              <ul class="dropdown-menu">
                <li><a href="?logout">Logout</a></li>
              </ul>
            </li>
          </ul>



        </div><!--/.nav-collapse -->

      </div> <!-- /container -->

    </div> <!-- /navbar-inner -->

  </div> <!-- /navbar -->


  <div class="subnavbar">

    <div class="subnavbar-inner">

      <div class="container">

        <ul class="mainnav">



        </ul>

      </div> <!-- /container -->

    </div> <!-- /subnavbar-inner -->

  </div> <!-- /subnavbar -->



  <div class="container">

    <div class="row">

      <div class="span12">

        <div class="widget ">


          <div class="widget-content">
            <form role="form">
              <input class="hidden" name="controller" value="PanelAdminSupplier"></input>
            <input class="hidden" name="action" value="editSupplier"></input>
              <div class="form-group">
                <div class="table-responsive">
                  <table class="table">
                    <?php foreach ($posts as $post) {
                      ?>
                      <input type="hidden" name="idSupplier" value="<?php echo $post->idSupplier ; ?>">
                    <tr>
                      <td>Nama Supplier </td>
                      <td>:&nbsp;&nbsp;&nbsp;<input value="<?php echo $post->namaSupplier; ?>" type="text" name="namaSupplier"></td>
                    </tr>
                    <tr>
                      <td>Alamat </td>
                      <td>:&nbsp;&nbsp;&nbsp;<input value="<?php echo $post->alamat; ?>" type="text" name="alamat"></td>
                    </tr>
                    <?php }?>
                  </table>
                </div>
              </div>
                <button type="submit" class="btn btn-success" >Simpan</button>
                <button href="?controller=PanelAdminSupplier&action=home"class="btn btn-primary" >Batal</button>
              </form>


          </div> <!-- /widget-content -->

        </div> <!-- /widget -->

      </div> <!-- /span8 -->




    </div> <!-- /row -->

  </div> <!-- /container -->





  <script src="assets/panel/js/jquery-1.7.2.min.js"></script>

  <script src="assets/panel/js/bootstrap.js"></script>
  <script src="assets/panel/js/base.js"></script>


</body>


</html>
