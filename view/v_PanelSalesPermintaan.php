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
            <a href="?controller=Panel&action=panelSalesLaporan">
              <i class="icon-code"></i>
              <span>Laporan Penjualan</span>
            </a>
          </li>

          <li>
            <a href="?controller=Panel&action=panelSalesChart">
              <i class="icon-bar-chart"></i>
              <span>Chart</span>
            </a>
          </li>

          <li class="active">
            <a href="?controller=Panel&action=panelSalesPermintaan">
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
            <table class="table table-condensed">
              <thead>
                <tr>
                  <th>Kode Barang</th>
                  <th>Gambar</th>
                  <th>Nama Barang</th>
                  <th>Jenis Barang</th>
                  <th>Ukuran</th>
                  <th>Supplier</th>
                  <th>Total Terjual</th>
                  <th>Permintaan</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>KK123</td>
                  <td class="logo_img"><img src="assets/images/event1.png"></td>
                  <td>Baju Koko Keren Coklat</td>
                  <td>Koko</td>
                  <td>L</td>
                  <td>Supplier A</td>
                  <td>0</td>
                  <td>50</td>
                  <td><a data-target="#mintaModal" data-toggle="modal" role="button" class="btn btn-primary">Minta</a> </td>
                </tr>
                <tr>
                  <td>KK123</td>
                  <td class="logo_img"><img src="assets/images/event1.png"></td>
                  <td>Baju Koko Keren Coklat</td>
                  <td>Koko</td>
                  <td>L</td>
                  <td>Supplier A</td>
                  <td>0</td>
                  <td>50</td>
                  <td><a data-target="#mintaModal" data-toggle="modal" role="button" class="btn btn-primary">Minta</a> </td>
                </tr>
                <tr>
                  <td>KK123</td>
                  <td class="logo_img"><img src="assets/images/event1.png"></td>
                  <td>Baju Koko Keren Coklat</td>
                  <td>Koko</td>
                  <td>L</td>
                  <td>Supplier A</td>
                  <td>0</td>
                  <td>50</td>
                  <td><a data-target="#mintaModal" data-toggle="modal" role="button" class="btn btn-primary">Minta</a> </td>
                </tr>
              </tbody>
            </table>


            <!-- Minta -->
            <!-- Modal -->
            <div id="mintaModal" data-backdrop="static" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">

                  <div class="modal-body">
                    <!-- form start -->
                    Mengirim permintaan?
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Iya</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                  </div>
                  <!-- form end -->

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="widget ">
          <div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Permintaan terkirim</h3>
	  				</div> <!-- /widget-header -->
          <div class="widget-content">
            <table class="table table-condensed">
              <thead>
                <tr>
                  <th>Kode Barang</th>
                  <th>Gambar</th>
                  <th>Nama Barang</th>
                  <th>Jenis Barang</th>
                  <th>Ukuran</th>
                  <th>Supplier</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>KK123</td>
                  <td class="logo_img"><img src="assets/images/event1.png"></td>
                  <td>Baju Koko Keren Coklat</td>
                  <td>Koko</td>
                  <td>L</td>
                  <td>Supplier A</td>
                  <td>Diterima</td>
                </tr>
                <tr>
                  <td>KK123</td>
                  <td class="logo_img"><img src="assets/images/event1.png"></td>
                  <td>Baju Koko Keren Coklat</td>
                  <td>Koko</td>
                  <td>L</td>
                  <td>Supplier B</td>
                  <td>Ditolak</td>
                </tr>
                <tr>
                  <td>KK123</td>
                  <td class="logo_img"><img src="assets/images/event1.png"></td>
                  <td>Baju Koko Keren Coklat</td>
                  <td>Koko</td>
                  <td>L</td>
                  <td>Supplier C</td>
                  <td></td>
                </tr>
              </tbody>
            </table>


          </div>
        </div>
        <!-- modal end -->

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
