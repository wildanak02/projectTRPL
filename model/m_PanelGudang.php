<?php
class Gudang
{

	public $idBarang;
	public $kodeBarang;
	public $gambar;
	public $namaBarang;
	public $jenisBarang;
	public $ukuran;
	public $deskripsi;
	public $stok;
	public $idSupplier;

	function __construct($idBarang,$kodeBarang,$gambar,$namaBarang,$jenisBarang,$ukuran,$deskripsi,$stok,$idSupplier)
	{
		$this->idBarang=$idBarang;
		$this->kodeBarang=$kodeBarang;
		$this->gambar=$gambar;
		$this->namaBarang=$namaBarang;
		$this->jenisBarang=$jenisBarang;
		$this->ukuran=$ukuran;
		$this->deskripsi=$deskripsi;
		$this->stok=$stok;
		$this->idSupplier=$idSupplier;

	}

	public static function tambahGudang($idSupplier,$kodeBarang,$gambar,$namaBarang,$jenisBarang,$ukuran,$deskripsi,$stok){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO databarang
			VALUES (NULL,'".$idSupplier."','".$kodeBarang."', '".$gambar."','".$namaBarang."', '".$jenisBarang."', '".$ukuran."', '".$deskripsi."', '".$stok."');
			");

		return $req;
	}

	public static function viewGudang(){
		$list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM databarang");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Gudang($post['idBarang'], $post['kodeBarang'],$post['gambar'],$post['namaBarang'],$post['jenisBarang'],$post['ukuran'],$post['deskripsi'],$post['stok'],$post['idSupplier']
				);
		}


		return $list;
	}

	public static function ambiledit($idBarang){
		$list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM databarang where idBarang='$idBarang'");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Gudang($post['idBarang'],$post['kodeBarang'],$post['gambar'],$post['namaBarang'],$post['jenisBarang'],$post['ukuran'],$post['deskripsi'],$post['stok'],$post['idSupplier']
				);
		}


		return $list;
	}


	public static function editGudang($idBarang,$kodeBarang,$namaBarang,$jenisBarang,$ukuran,$deskripsi,$stok)
	{
		$stat = "";
		$ts=0;

		$db = DB::getInstance();

		$req = $db->query("UPDATE databarang SET kodeBarang='".$kodeBarang."',namaBarang='".$namaBarang."',jenisBarang='".$jenisBarang."',ukuran='".$ukuran."',deskripsi='".$deskripsi."',stok='".$stok."' WHERE idBarang='$idBarang'");
		return $req;
	}

	public static function hapus($idBarang){
		$db = DB::getInstance();

		$req = $db->query("DELETE from databarang where idBarang='$idBarang'");


		return $req;
	}

}

?>
