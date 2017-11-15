<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Account - Bootstrap Admin Template</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <link href="assets/panel/css/bootstrap.min.css" rel="stylesheet" type='text/css'>
  <link href="assets/panel/css/bootstrap-responsive.min.css" rel="stylesheet" type='text/css'>

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" type='text/css'>
  <link href="assets/panel/css/font-awesome.css" rel="stylesheet" type='text/css'>

  <link href="assets/panel/css/style.css" rel="stylesheet" type='text/css'>



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
            <a href="?controller=PanelHRD&action=home">
              <i class="icon-user"></i>
              <span>Karyawan</span>
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
              <a data-target="#tambahkaryawanModal" data-toggle="modal" role="button" class="btn btn-success">Tambah Data</a>
              <thead>
                <tr>
                  <th>Nama Karyawan</th>
                  <th>Jenis Kelamin</th>
                  <th>Tanggal Lahir</th>
                  <th>Jabatan</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($posts as $post) {
                  if ($post->jenisKelamin==1){
                    $post->jenisKelamin='Laki-laki';
                  }
                  elseif ($post->jenisKelamin==2){
                    $post->jenisKelamin='Perempuan';
                  }
                  ?>
                <tr>
                  <td><?php echo $post->namaKaryawan; ?></td>
                  <td><?php echo $post->jenisKelamin; ?></td>
                  <td><?php echo $post->tanggalLahir; ?></td>
                  <td><?php echo $post->jabatan; ?></td>
                  <td><a data-target="#editkaryawanModal" data-toggle="modal" role="button" class="btn btn-primary">Ubah</a> </td>
                  <td><a data-target="#hapuskaryawanModal" data-toggle="modal" role="button" class="btn btn-danger">Hapus</a> </td>
                </tr>
                <?php }?>
              </tbody>
            </table>



            <!-- Tambah data -->
            <!-- Modal -->
            <div id="tambahkaryawanModal" data-backdrop="static" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-body">
                    <!-- form start -->
                    <form role="form">
                      <div class="form-group">
                        <div class="table-responsive">
                          <table class="table">
                            <tr>
                              <td>Nama Karyawan : </td>
                              <td><input type="text" name="namaKaryawan"></td>
                            </tr>
                            <tr>
                              <td>Jenis Kelamin : </td>
                              <td><select class="form-control" id="jenisKelamin">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                              </select></td>
                            </tr>
                            <tr>
                              <td>Tanggal Lahir : </td>
                              <td><input type="date" name="tanggaLahirl"></td>
                            </tr>
                            <tr>
                              <td>Jabatan</td>
                              <td><input type="text" name="jabatan"></td>
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


        <!-- Edit data -->
        <!-- Modal -->
        <div id="editkaryawanModal" data-backdrop="static" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-body">
                <!-- form start -->
                <form role="form">
                  <div class="form-group">
                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <td>Nama Karyawan : </td>
                          <td><input type="text" name="namaKaryawan"></td>
                        </tr>
                        <tr>
                          <td>Jenis Kelamin : </td>
                          <td><select class="form-control" id="jenisKelamin">
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td>Tanggal Lahir : </td>
                          <td><input type="date" name="tanggaLahirl"></td>
                        </tr>
                        <tr>
                          <td>Jabatan</td>
                          <td><input type="text" name="jabatan"></td>
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

    <!-- hapus -->
    <!-- Modal -->
    <div id="hapuskaryawanModal" data-backdrop="static" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

          <div class="modal-body">
            <!-- form start -->
            Hapus data?
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Hapus</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          </div>
          <!-- form end -->

        </div>
      </div>
    </div>

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
