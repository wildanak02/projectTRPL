<?php
class SalesLaporan
{

  public $idBarang;
  public $idPenjualan;
  public $kodeBarang;
  public $gambar;
  public $namaBarang;
  public $jenisBarang;
  public $ukuran;
  public $stok;
  public $tanggal;
  public $terjual;
  public $filtertahun;
  public $filterbulan;



  function __construct($idBarang,$idPenjualan,$kodeBarang,$gambar,$namaBarang,$jenisBarang,$ukuran,$terjual)
  {
    $this->idBarang=$idBarang;
    $this->idPenjualan=$idPenjualan;
    $this->kodeBarang=$kodeBarang;
    $this->gambar=$gambar;
    $this->namaBarang=$namaBarang;
    $this->jenisBarang=$jenisBarang;
    $this->ukuran=$ukuran;
    $this->terjual=$terjual;

  }



  public static function view(){
    $list = [];

    $db = DB::getInstance();

    $req = $db->query("SELECT db.*, p.* from databarang db join penjualan p
      on db.idBarang = p.idBarang where year(tanggal) = 2017 and month(tanggal) = 11");
      foreach ($req->fetchAll() as $post) {
        $list[] = new SalesLaporan($post['idBarang'],$post['idPenjualan'],$post['kodeBarang'],$post['gambar'],$post['namaBarang'],$post['jenisBarang'],$post['ukuran'],$post['terjual']
      );
    }


    return $list;
  }

  public static function viewLaporan($filtertahun,$filterbulan){
    $list = [];

    $db = DB::getInstance();

    $req = $db->query("SELECT db.*, p.* from databarang db join penjualan p
      on db.idBarang = p.idBarang where year(tanggal) = '$filtertahun' and month(tanggal) = '$filterbulan'");
      foreach ($req->fetchAll() as $post) {
        $list[] = new SalesLaporan($post['idBarang'],$post['idPenjualan'],$post['kodeBarang'],$post['gambar'],$post['namaBarang'],$post['jenisBarang'],$post['ukuran'],$post['terjual']
      );
    }


    return $list;
  }


  public static function tambahLaporan($idBarang,$tanggal,$terjual){
    $db = DB::getInstance();

    $req = $db->query("INSERT INTO penjualan
      VALUES (NULL,'".$idBarang."', '".$tanggal."','".$terjual."');
      ");

      return $req;
    }

    public static function tambahLaporan2($idBarang,$terjual){
      $jumlah=0;
      $db = DB::getInstance();
      $req2 = $db->query("SELECT stok from databarang where idBarang ='$idBarang' group by idBarang");
      foreach ($req2->fetchAll() as $r) {
        $jumlah = $r["stok"] - $terjual;
      }

      $req = $db->query("UPDATE databarang SET stok = '".$jumlah."' where idBarang='$idBarang'");

      return $req;
    }

    public static function editLaporan($idBarang,$idPenjualan,$terjual){
      $jumlah=0;
      $terjualsebelum=0;
      $jumlahStokSekarang =0;
      $db = DB::getInstance();
      $getstok = $db->query("SELECT stok from databarang where idBarang ='$idBarang' group by idBarang");
      foreach ($getstok->fetchAll() as $r) {
        $jumlah = $r["stok"];
      }

      $PenjualanSebelumnya = $db->query("SELECT terjual from penjualan where idPenjualan ='$idPenjualan'");
      foreach ($PenjualanSebelumnya->fetchAll() as $getTerjual) {
        $terjualsebelum = $getTerjual["stok"];
      }


      if ($terjualsebelum >= $terjual) {
        $jumlahStokSekarang = $jumlah + ($terjualsebelum - $terjual);
      }else{
        $jumlahStokSekarang = $jumlah - ($terjual - $terjualsebelum);
      }

      $req = $db->query("UPDATE databarang SET stok = '".$jumlahStokSekarang."' where idBarang='$idBarang'");

      return $req;
    }

    public static function editLaporan2($idPenjualan,$tanggal,$terjual){
      $db = DB::getInstance();
      $req = $db->query("UPDATE penjualan SET tanggal='".$tanggal."', terjual = '".$terjual."' where idPenjualan='$idPenjualan'");

      return $req;
    }
  }

  ?>
