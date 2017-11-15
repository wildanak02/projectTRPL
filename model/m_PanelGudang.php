<?php
include "koneksi.php";

$query="select * from databarang g join supplier s on g.idSupplier=s.idSupplier" ;  //menampikan SEMUA data dari tabel siswa
$table=mysqli_query ($koneksi,$query);

  if(isset($_POST['simpan']))
{
  $kodeBarang = $_POST['kodeBarang'];
  $gambar = $_POST['gambar'];
  $namaBarang = $_POST['namaBarang'];
  $jenisBarang = $_POST['jenisBarang'];
  $ukuran = $_POST['ukuran'];
  $deskripsi = $_POST['deskripsi'];
  $stok = $_POST['stok'];
  $idSupplier = $_POST['idSupplier'];
  $query="INSERT INTO dataBarang SET kodeBarang='$kodeBarang',gambar='$gambar',namaBarang='$namaBarang',jenisBarang='$jenisBarang',ukuran='$ukuran',deskripsi='$deskripsi',stok='$stok',idSupplier='$idSupplier'";
  mysqli_query($koneksi, $query);
}

  $query="select * from supplier" ;  //menampikan SEMUA data dari tabel siswa
  $supplier=mysqli_query ($koneksi,$query);
?>
