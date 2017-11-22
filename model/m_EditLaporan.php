<?php
class EditLaporan
{

  public $idPenjualan;
  public $idBarang;
  public $tanggal;
  public $terjual;

	function __construct($idPenjualan,$idBarang,$tanggal,$terjual)
	{
    $this->idPenjualan=$idPenjualan;
    $this->idBarang=$idBarang;
		$this->tanggal=$tanggal;
    $this->terjual=$terjual;
	}


  public static function klikEdit($idPenjualan){
    $list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * from penjualan where idPenjualan='$idPenjualan'");
    foreach ($req->fetchAll() as $post) {
  			$list[] = new EditLaporan($post['idPenjualan'],$post['idBarang'],$post['tanggal'],$post['terjual']
  				);
  		}


  		return $list;
  }




}

?>
