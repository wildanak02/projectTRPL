<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

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

          <li class="active">
            <a href="?controller=PanelSalesLaporan&action=home">
              <i class="icon-code"></i>
              <span>Laporan Penjualan</span>
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
            <table class="table table-condensed">
              <a href="?controller=PanelSalesLaporan&action=klikTambah" role="button" class="btn btn-success">Tambah Laporan</a>
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
                  <td class="logo_img"><img src="images/<?php echo $post->gambar; ?>" height="40" width="40"></td>
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
