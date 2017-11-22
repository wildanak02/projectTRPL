<?php
class TambahLaporan
{

  public $idBarang;
	public $kodeBarang;




	function __construct($idBarang,$kodeBarang)
	{
    $this->idBarang=$idBarang;
		$this->kodeBarang=$kodeBarang;

	}


  public static function klikTambah(){
    $list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * from databarang");
    foreach ($req->fetchAll() as $post) {
  			$list[] = new TambahLaporan($post['idBarang'],$post['kodeBarang']
  				);
  		}


  		return $list;
  }




}

?>
