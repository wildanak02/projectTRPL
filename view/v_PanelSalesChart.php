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
                EGrappler.com
                <b class="caret"></b>
              </a>

              <ul class="dropdown-menu">
                <li><a href="javascript:;">Profile</a></li>
                <li><a href="javascript:;">Logout</a></li>
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

          <li>
            <a href="?controller=PanelSalesLaporan&action=home">
              <i class="icon-code"></i>
              <span>Laporan Penjualan</span>
            </a>
          </li>

          <li class="active">
            <a hhref="?controller=PanelSalesChart&action=home">
              <i class="icon-bar-chart"></i>
              <span>Chart</span>
            </a>
          </li>

          <li>
            <a href="?controller=PanelSalesPermintaan&action=home">
              <i class="icon-code"></i>
              <span>Permintaan</span>
            </a>
          </li>


        </ul>

      </div> <!-- /container -->

    </div> <!-- /subnavbar-inner -->

  </div> <!-- /subnavbar -->



      <div class="container">

        <div class="row">

          <div class="span12">

            <div class="widget ">


              <div class="widget-content">
                <div class="widget-content">
              <canvas id="bar-chart" class="chart-holder" width="538" height="250">
              </canvas>
              <!-- /bar-chart -->
          </div>

              </div> <!-- /widget-content -->

            </div> <!-- /widget -->

          </div> <!-- /span8 -->




        </div> <!-- /row -->

      </div> <!-- /container -->





      <script src="assets/panel/js/jquery-1.7.2.min.js"></script>
      <script src="assets/panel/js/excanvas.min.js"></script>
      <script src="assets/panel/js/chart.min.js" type="text/javascript"></script>
      <script src="assets/panel/js/bootstrap.js"></script>
      <script src="assets/panel/js/base.js"></script>
      <script>
      var barChartData = {
          labels: ["January", "February", "March", "April", "May", "June", "July"],
          datasets: [
      {
          fillColor: "rgba(220,220,220,0.5)",
          strokeColor: "rgba(220,220,220,1)",
          data: [65, 59, 90, 81, 56, 55, 40]
      },
      {
          fillColor: "rgba(151,187,205,0.5)",
          strokeColor: "rgba(151,187,205,1)",
          data: [28, 48, 40, 19, 96, 27, 100]
      }
    ]

      }

var myLine = new Chart(document.getElementById("bar-chart").getContext("2d")).Bar(barChartData);
      </script>


        </body>

        </html>
