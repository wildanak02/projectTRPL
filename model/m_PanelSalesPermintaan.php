<?php
class SalesPermintaan
{

  public $idBarang;
  public $idPrediksi;
  public $namaSupplier;
  public $kodeBarang;
  public $gambar;
  public $namaBarang;
  public $jenisBarang;
  public $ukuran;
  public $totalTerjual;
  public $prediksi;
  public $permintaan;
  public $status;



  function __construct($idBarang,$idPrediksi,$namaSupplier,$kodeBarang,$gambar,$namaBarang,$jenisBarang,$ukuran,$totalTerjual,$prediksi)
  {
    $this->idBarang=$idBarang;
    $this->idPrediksi=$idPrediksi;
    $this->namaSupplier=$namaSupplier;
    $this->kodeBarang=$kodeBarang;
    $this->gambar=$gambar;
    $this->namaBarang=$namaBarang;
    $this->jenisBarang=$jenisBarang;
    $this->ukuran=$ukuran;
    $this->totalTerjual=$totalTerjual;
    $this->prediksi=$prediksi;
  }



  public static function view(){
    $list = [];

    $db = DB::getInstance();

    $req = $db->query("SELECT db.*,s.*,p.*,pr.* from prediksi p join databarang db on p.idBarang=db.idBarang join supplier s
      on db.idSupplier=s.idSupplier join permintaan pr on db.kodeBarang=pr.kodeBarang where p.prediksi>0 and pr.permintaan=0");
      foreach ($req->fetchAll() as $post) {
        $list[] = new SalesPermintaan($post['idBarang'],$post['idPrediksi'],$post['namaSupplier'],$post['kodeBarang'],
        $post['gambar'],$post['namaBarang'],$post['jenisBarang'],$post['ukuran'],$post['totalTerjual'],$post['prediksi']
      );
    }


    return $list;
  }

  public static function minta($kodeBarang){
    $db = DB::getInstance();

    $req = $db->query("UPDATE permintaan SET permintaan= '".'1'."' WHERE kodeBarang='$kodeBarang'");

    return $req;
  }


  }

  ?>
