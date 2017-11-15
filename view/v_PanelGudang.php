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
            <a href="?controller=Panel&action=panelGudang">
              <i class="icon-user"></i>
              <span>Data Barang</span>
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
              <a data-target="#tambahbarangModal" data-toggle="modal" role="button" class="btn btn-success">Tambah Barang Baru</a>
              <thead>
                <tr>
                  <th>Kode Barang</th>
                  <th>Gambar</th>
                  <th>Nama Barang</th>
                  <th>Jenis Barang</th>
                  <th>Ukuran</th>
                  <th>Deskripsi</th>
                  <th>Stok</th>
                  <th>Supplier</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php while ($databarang = mysqli_fetch_array ($table)){
                  $id = $databarang["idBarang"];
                  echo '
                  <tr>
                  <td>'.$databarang["kodeBarang"].'</td>
                  <td class="logo_img"><img src=""'.$databarang["gambar"].'"></td>
                  <td>'.$databarang["namaBarang"].'</td>
                  <td>'.$databarang["jenisBarang"].'</td>
                  <td>'.$databarang["ukuran"].'</td>
                  <td>'.$databarang["deskripsi"].'</td>
                  <td>'.$databarang["stok"].'</td>
                  <td>'.$databarang["namaSupplier"].'</td>
                  <td><a data-target="#edituserModal" data-toggle="modal" role="button" class="btn btn-primary">Ubah</a> </td>
                  <td><a data-target="#hapususerModal" data-toggle="modal" role="button" class="btn btn-danger">Hapus</a> </td>
                  </tr>';
                }?>
              </tbody>
            </table>



            <!-- Tambah data -->
            <!-- Modal -->
            <div id="tambahbarangModal" data-backdrop="static" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-body">
                    <!-- form start -->
                    <form role="form" method="post" action="?controller=PanelGudang&action=simpan">
                      <div class="form-group">
                        <div class="table-responsive">
                          <table class="table" >
                            <tr>
                              <td>Kode Barang : </td>
                              <td><input type="text" name="kodeBarang"></td>
                            </tr>
                            <tr>
                              <td>Gambar : </td>
                              <td><input type="file" name="gambar" accept="image/*"></td>
                            </tr>
                            <tr>
                              <td>Nama Barang : </td>
                              <td><input type="text" name="namaBarang"></td>
                            </tr>
                            <tr>
                              <td>Jenis Barang : </td>
                              <td><input type="text" name="jenisBarang"></td>
                            </tr>
                            <tr>
                              <td>Ukuran : </td>
                              <td><select class="form-control" id="ukuran">
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                              </select></td>
                            </tr>
                            <tr>
                              <td>Deskripsi Barang : </td>
                              <td><input type="text" name="deskripsi"></td>
                            </tr>
                            <tr>
                              <td>Stok : </td>
                              <td><input type="number" name="stok"></td>
                            </tr>
                            <tr>
                              <td>Supplier : </td>
                              <td><select class="form-control" id="idSupplier">
                              <?php while ($datasupplier = mysqli_fetch_array ($supplier)){
                                echo '

                                <option value='.$datasupplier["idSupplier"].'>'.$datasupplier["namaSupplier"].'</option>

                              ';
                            }?>
                            </select></td>
                            </tr>
                          </table>
                        </div>
                        <button name="simpan" type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                      </form>

                      <!-- form end -->
                    </div>
                </div>
            </div>
          </div>
        </div>

        <!-- modal end -->


        <!-- Edit data -->
        <!-- Modal -->
        <div id="editbarangModal" data-backdrop="static" class="modal fade" role="dialog">
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
                          <td>Kode Barang : </td>
                          <td><input type="text" name="kodeBarang"></td>
                        </tr>
                        <tr>
                          <td>Gambar : </td>
                          <td><input type="file" name="gambar" accept="image/*"></td>
                        </tr>
                        <tr>
                          <td>Nama Barang : </td>
                          <td><input type="text" name="namaBarang"></td>
                        </tr>
                        <tr>
                          <td>Jenis Barang : </td>
                          <td><input type="text" name="jenisBarang"></td>
                        </tr>
                        <tr>
                          <td>Ukuran : </td>
                          <td><select class="form-control" id="ukuran">
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td>Deskripsi Barang : </td>
                          <td><input type="text" name="deskripsiBarang"></td>
                        </tr>
                        <tr>
                          <td>Stok : </td>
                          <td><input type="number" name="jenisBarang"></td>
                        </tr>
                        <tr>
                          <td>Supplier : </td>
                          <td><select class="form-control" id="supplier">
                            <option>Supplier A</option>
                            <option>Supplier B</option>
                            <option>Supplier C</option>
                            <option>Supplier D</option>
                          </select></td>
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
    <div id="hapusbarangModal" data-backdrop="static" class="modal fade" role="dialog">
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
