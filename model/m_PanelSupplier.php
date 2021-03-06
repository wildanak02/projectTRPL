<?php
class Supplier
{

  public $idBarang;
  public $idPrediksi;
  public $kodeBarang;
  public $gambar;
  public $namaBarang;
  public $jenisBarang;
  public $ukuran;
  public $prediksi;



  function __construct($idBarang,$idPrediksi,$kodeBarang,$gambar,$namaBarang,$jenisBarang,$ukuran,$prediksi)
  {
    $this->idBarang=$idBarang;
    $this->idPrediksi=$idPrediksi;
    $this->kodeBarang=$kodeBarang;
    $this->gambar=$gambar;
    $this->namaBarang=$namaBarang;
    $this->jenisBarang=$jenisBarang;
    $this->ukuran=$ukuran;
    $this->prediksi=$prediksi;
  }



  public static function view(){
    $list = [];

    $db = DB::getInstance();

    $sesi=$_SESSION['login_user'];

    $req = $db->query("SELECT db.*,s.*,p.*,pr.* from supplier s join databarang db on s.idSupplier=db.idSupplier join prediksi p
      on db.idBarang=p.idBarang join permintaan pr on db.kodeBarang=pr.kodeBarang where s.namaSupplier='$sesi' and pr.permintaan=1 and pr.status=0");
      foreach ($req->fetchAll() as $post) {
        $list[] = new Supplier($post['idBarang'],$post['idPrediksi'],$post['kodeBarang'],
        $post['gambar'],$post['namaBarang'],$post['jenisBarang'],$post['ukuran'],$post['prediksi']
      );
    }


    return $list;
  }

  public static function terima($kodeBarang){
    $db = DB::getInstance();

    $req = $db->query("UPDATE permintaan SET status= '".'1'."' WHERE kodeBarang='$kodeBarang'");

    return $req;
  }

  public static function tolak($kodeBarang){
    $db = DB::getInstance();

    $req = $db->query("UPDATE permintaan SET status= '".'2'."' WHERE kodeBarang='$kodeBarang'");

    return $req;
  }

  public static function updatestok($kodeBarang,$prediksi){
    $db = DB::getInstance();
    $jumlah=0;
    $req2 = $db->query("SELECT stok from databarang where kodeBarang ='$kodeBarang'");
    foreach ($req2->fetchAll() as $r) {
      $jumlah = $r["stok"] + $prediksi;
    }

    $req = $db->query("UPDATE databarang SET stok= '".$jumlah."' WHERE kodeBarang='$kodeBarang'");

    return $req;
  }


  }

  ?>
