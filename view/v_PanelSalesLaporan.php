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
              <a data-target="#tambahLaporanModal" data-toggle="modal" role="button" class="btn btn-success">Tambah Laporan</a>
              &nbsp;&nbsp;&nbsp;&nbsp;
                <select class="form-control" id="datemonthfilters">
                  <option>Januari</option>
                  <option>Februari</option>
                  <option>Maret</option>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;
                  <select class="form-control" id="dateyearfilters">
                    <option>2017</option>
                    <option>2016</option>
                    <option>2015</option>
                  </select>
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
                <tr>
                  <td>KK123</td>
                  <td class="logo_img"><img src="assets/images/event1.png"></td>
                  <td>Baju Koko Keren Coklat</td>
                  <td>Koko</td>
                  <td>L</td>
                  <td>0</td>
                  <td><a data-target="#editLaporanModal" data-toggle="modal" role="button" class="btn btn-primary">Ubah</a> </td>
                </tr>
                <tr>
                  <td>KK123</td>
                  <td class="logo_img"><img src="assets/images/event1.png"></td>
                  <td>Baju Koko Keren Coklat</td>
                  <td>Koko</td>
                  <td>L</td>
                  <td>0</td>
                  <td><a data-target="#editLaporanModal" data-toggle="modal" role="button" class="btn btn-primary">Ubah</a> </td>
                </tr>
                <tr>
                  <td>KK123</td>
                  <td class="logo_img"><img src="assets/images/event1.png"></td>
                  <td>Baju Koko Keren Coklat</td>
                  <td>Koko</td>
                  <td>L</td>
                  <td>0</td>
                  <td><a data-target="#editLaporanModal" data-toggle="modal" role="button" class="btn btn-primary">Ubah</a> </td>
                </tr>
              </tbody>
            </table>


            <!-- Tambah Data -->
            <!-- Modal -->
            <div id="tambahLaporanModal" data-backdrop="static" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-body">
                    <!-- form start -->
                    <form role="form">
                      <div class="form-group">
                        <div class="table-responsive">
                          <table class="table">
                            <tr>
                              <td>Kode Barang</td>
                              <td><select class="form-control" id="kodebarang">
                                <option>KK123</option>
                                <option>KK234</option>
                                <option>KK345</option>
                              </select></td>
                            </tr>
                            <tr>
                              <td>Tanggal</td>
                              <td><input type="date" name="tanggal"></td>
                            </tr>
                            <tr>
                              <td>Terjual</td>
                              <td><input type="number" name="laporan"></td>
                            </tr>
                          </table>
                        </div>
                      </form>
                      <button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                      <!-- form end -->


                    </div>

                  </div>

                </div>
              </div>
            </div>
            <!-- modal end -->

            <!-- Edit Data -->
            <!-- Modal -->
            <div id="editLaporanModal" data-backdrop="static" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">

                  <div class="modal-body">
                    <!-- form start -->
                    <form role="form">
                      <div class="form-group">
                        <div class="table-responsive">
                          <table class="table">
                            <tr>
                              <td>Terjual</td>
                              <td><input type="number" name="laporan"></td>
                            </tr>
                          </table>
                        </div>
                      </form>
                      <button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                      <!-- form end -->


                    </div>

                  </div>

                </div>
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
