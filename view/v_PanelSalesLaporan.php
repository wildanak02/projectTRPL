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

          <li class="active">
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

          <li>
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
              <a href="?controller=PanelSalesLaporan&action=klikTambah" role="button" class="btn btn-success">Tambah Laporan</a>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <form class="form-control" method="POST">
                <select class="form-control" name="filterbulan">
                  <option value="01">Januari</option>
                  <option value="02">Februari</option>
                  <option value="03">Maret</option>
                  <option value="04">April</option>
                  <option value="05">Mei</option>
                  <option value="06">Juni</option>
                  <option value="07">Juli</option>
                  <option value="08">Agustus</option>
                  <option value="09">September</option>
                  <option value="010">Oktober</option>
                  <option value="011" selected="selected">November</option>
                  <option value="012">Desember</option>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;
                  <select class="form-control" name="filtertahun">
                    <option value="2018">2018</option>
                    <option value="2017" selected="selected">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                  </select>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="btn btn" type="submit" name="submit">
                  </form>
              <thead>
                <tr>
                  <th>Kode Barang</th>
                  <th>Gambar</th>
                  <th>Nama Barang</th>
                  <th>Jenis Barang</th>
                  <th>Ukuran</th>
                  <th>Terjual</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($posts as $post) {?>
                <tr>
                  <td><?php echo $post->kodeBarang; ?></td>
                  <td class="logo_img"><img src="assets/images/event1.png"></td>
                  <td><?php echo $post->namaBarang; ?></td>
                  <td><?php echo $post->jenisBarang; ?></td>
                  <td><?php echo $post->ukuran; ?></td>
                  <td><?php echo $post->terjual; ?></td>
                  <td><a href="?controller=PanelSalesLaporan&action=klikEdit&idPenjualan=<?php echo $post->idPenjualan?>" role="button" class="btn btn-primary">Ubah</a> </td>
                </tr>
                <?php }?>
              </tbody>
            </table>


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
