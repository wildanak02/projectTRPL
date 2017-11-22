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
              <input class="hidden" name="controller" value="PanelHRD"></input>
            <input class="hidden" name="action" value="editKaryawan"></input>
              <div class="form-group">
                <div class="table-responsive">
                  <table class="table">
                    <?php foreach ($posts as $post) {
                      ?>
                      <input type="hidden" name="idKaryawan" value="<?php echo $post->idKaryawan; ?>">
                    <tr>
                      <td>Nama Karyawan </td>
                      <td>:&nbsp;&nbsp;&nbsp;<input value="<?php echo $post->namaKaryawan; ?>" type="text" name="namaKaryawan"></td>
                    </tr>
                    <tr>
                      <td>jenisKelamin</td>
                      <td>:&nbsp;&nbsp;&nbsp;<select class="form-control" name="jenisKelamin" id="userLevel">
                        <option value="1" <?php if($post->jenisKelamin==1){ echo 'selected';} ?>>Laki-laki</option>
                        <option value="2" <?php if($post->jenisKelamin==2){ echo 'selected';} ?>>Perempuan</option>
                      </select></td>
                    </tr>
                    <tr>
                      <td>Tanggal Lahir</td>
                      <td>:&nbsp;&nbsp;&nbsp;<input value="<?php echo $post->tanggalLahir; ?>" type="date" name="tanggalLahir"></td>
                    </tr>
                    <tr>
                      <td>Jabatan</td>
                      <td>:&nbsp;&nbsp;&nbsp;<select class="form-control" name="jabatan">
                        <option value="1" <?php if($post->jabatan==1){ echo 'selected';} ?>>Manajer</option>
                        <option value="2" <?php if($post->jabatan==2){ echo 'selected';} ?>>Divisi Penjualan</option>
                        <option value="3" <?php if($post->jabatan==3){ echo 'selected';} ?>>Divisi Gudang</option>
                        <option value="4" <?php if($post->jabatan==4){ echo 'selected';} ?>>HRD</option>
                        <option value="5" <?php if($post->jabatan==5){ echo 'selected';} ?>>Divisi IT</option>
                        <option value="6" <?php if($post->jabatan==6){ echo 'selected';} ?>>Penjaga</option>
                        <option value="7" <?php if($post->jabatan==7){ echo 'selected';} ?>>Divisi Pemasaran</option>
                        <option value="8" <?php if($post->jabatan==8){ echo 'selected';} ?>>Magang</option>
                      </select></td>
                    </tr>
                    <?php }?>
                  </table>
                </div>
              </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <button href="?controller=PanelHRD&action=home" class="btn btn-primary">Batal</button>
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
