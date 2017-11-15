<!-- Tambah Data -->
<!-- Modal -->
<div id="tambahuserModal" data-backdrop="static" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <!-- form start -->
        <form  role="form" method="POST" enctype="multipart/form-data">
          <input class="hidden" name="controller" value="PanelAdminUser"></input>
        <input class="hidden" name="action" value="tambahUser"></input>
          <div class="form-group">
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td>Username : </td>
                  <td><input type="text" name="username"></td>
                </tr>
                <tr>
                  <td>Password : </td>
                  <td><input type="password" name="password"></td>
                </tr>
                <tr>
                  <td>Avatar : </td>
                  <td><input type="file" name="avatar" accept="image/*"></td>
                </tr>
                <tr>
                  <td>Level : </td>
                  <td><select class="form-control" name="level" id="userLevel">
                    <option value="1">Admin</option>
                    <option value="2">HRD</option>
                    <option value="3">Sales</option>
                    <option value="4">Gudang</option>
                  </select></td>
                </tr>
              </table>
            </div>
          </form>
          <button id="submit" type="submit" class="btn btn-success" >Simpan</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
          <!-- form end -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- modal end -->

<!-- Tambah Data -->
<!-- Modal -->
<div id="tambahsupplierModal" data-backdrop="static" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <!-- form start -->
        <form role="form" method="POST" enctype="multipart/form-data">
          <input class="hidden" name="controller" value="PanelAdminSupplier"></input>
        <input class="hidden" name="action" value="tambahSupplier"></input>
          <div class="form-group">
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td>Nama Supplier : </td>
                  <td><input type="text" name="namaSupplier"></td>
                </tr>
                <tr>
                  <td>Alamat : </td>
                  <td><input type="text" name="alamat"></td>
                </tr>
              </table>
            </div>
          </form>
          <button type="submit" class="btn btn-success">Simpan</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
          <!-- form end -->


        </div>

      </div>

    </div>
  </div>
</div>
<!-- modal end -->

<!-- Edit data -->
<!-- Modal -->
<div id="edituserModal" data-backdrop="static" class="modal fade" role="dialog">
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
                <?php foreach ($posts as $post) {
                  ?>
                  <input type="hidden" name="id" value="<?php echo $post->idUser; ?>">
                <tr>
                  <td>Username : </td>
                  <td><input value="<?php echo $post->username; ?>" type="text" name="username"></td>
                </tr>
                <tr>
                  <td>Password : </td>
                  <td><input <?php echo $post->password; ?> type="password" name="password"></td>
                </tr>
                <tr>
                  <td>Avatar : </td>
                  <td><input type="file" name="avatar" accept="image/*"></td>
                </tr>
                <tr>
                  <td>Level : </td>
                  <td><select class="form-control" id="userLevel">
                    <option value="1" <?php if($post->level==1){ echo 'selected';} ?>>Admin</option>
                    <option value="2" <?php if($post->level==2){ echo 'selected';} ?>>HRD</option>
                    <option value="3" <?php if($post->level==3){ echo 'selected';} ?>>Sales</option>
                    <option value="4" <?php if($post->level==4){ echo 'selected';} ?>>Gudang</option>
                  </select></td>
                </tr>
                <?php }?>
              </table>
            </div>
          </form>
          <button type="submit" class="btn btn-success" data-dismiss="modal">Simpan</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
          <!-- form end -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- modal end -->

<!-- hapus -->
<!-- Modal -->
<div id="hapususerModal" data-backdrop="static" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <input class="hidden" name="controller" value="PanelAdminUser"></input>
  <input class="hidden" name="action" value="hapusUser"></input>
    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-body">
        <!-- form start -->
        Hapus data?
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
      </div>
      <!-- form end -->

    </div>
  </div>
</div>



<!-- Edit data -->
<!-- Modal -->
<div id="editsupplierModal" data-backdrop="static" class="modal fade" role="dialog">
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
                  <td>Nama Supplier : </td>
                  <td><input type="text" name="namaSupplier"></td>
                </tr>
                <tr>
                  <td>Alamat : </td>
                  <td><input type="text" name="alamat"></td>
                </tr>
              </table>
            </div>
          </form>
          <button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
          <!-- form end -->


        </div>

      </div>


</div>
</div>
</div>

<!-- modal end -->


<!-- hapus -->
<!-- Modal -->
<div id="hapussupplierModal" data-backdrop="static" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-body">
        <!-- form start -->
        Hapus data?
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Hapus</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
      </div>
      <!-- form end -->

    </div>
  </div>
</div>
