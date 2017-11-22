<?php
class SalesPermintaan2
{

  public $idBarang;
  public $namaSupplier;
  public $kodeBarang;
  public $gambar;
  public $namaBarang;
  public $jenisBarang;
  public $ukuran;
  public $permintaan;
  public $status;



  function __construct($idBarang,$namaSupplier,$kodeBarang,$gambar,$namaBarang,$jenisBarang,$ukuran,$permintaan,$status)
  {
    $this->idBarang=$idBarang;
    $this->namaSupplier=$namaSupplier;
    $this->kodeBarang=$kodeBarang;
    $this->gambar=$gambar;
    $this->namaBarang=$namaBarang;
    $this->jenisBarang=$jenisBarang;
    $this->ukuran=$ukuran;
    $this->permintaan=$permintaan;
    $this->status=$status;
  }


  public static function view(){
    $list = [];

    $db = DB::getInstance();

    $req = $db->query("SELECT db.*,s.*,p.* from databarang db join supplier s
      on db.idSupplier =s.idSupplier join permintaan p on db.kodeBarang=p.kodeBarang where permintaan=1");
      foreach ($req->fetchAll() as $post) {
        $list[] = new SalesPermintaan2($post['idBarang'],$post['namaSupplier'],$post['kodeBarang'],
        $post['gambar'],$post['namaBarang'],$post['jenisBarang'],$post['ukuran'],
        $post['permintaan'],$post['status']
      );
    }


    return $list;
  }

  }

  ?>
