<?php
class Gudang
{

  public $idKaryawan;
	public $namaKaryawan;
	public $jenisKelamin;
  public $tanggalLahir;
	public $jabatan;




	function __construct($idKaryawan,$namaKaryawan,$jenisKelamin,$tanggalLahir,$jabatan)
	{
    $this->idKaryawan=$idKaryawan;
		$this->namaKaryawan=$namaKaryawan;
		$this->jenisKelamin=$jenisKelamin;
    $this->tanggalLahir=$tanggalLahir;
		$this->jabatan=$jabatan;


	}

	public static function tambahKaryawan($namaKaryawan,$jenisKelamin,$tanggalLahir,$jabatan){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO karyawan
			VALUES (NULL,'".$namaKaryawan."', '".$jenisKelamin."','".$tanggalLahir."', '".$jabatan."');
			");

		return $req;
	}

  public static function viewBarang(){
    $list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM databarang");
    foreach ($req->fetchAll() as $post) {
  			$list[] = new HRD($post['idKaryawan'],$post['namaKaryawan'],$post['jenisKelamin'],$post['tanggalLahir'],$post['jabatan']
  				);
  		}


  		return $list;
  }

  public static function ambiledit($idKaryawan){
    $list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM karyawan where idKaryawan='$idKaryawan'");
    foreach ($req->fetchAll() as $post) {
  			$list[] = new HRD($post['idKaryawan'],$post['namaKaryawan'],$post['jenisKelamin'],$post['tanggalLahir'],$post['jabatan']
  				);
  		}


  		return $list;
  }

  public static function editKaryawan($idKaryawan,$namaKaryawan,$jenisKelamin,$tanggalLahir,$jabatan)
	{
		$stat = "";
		$ts=0;

		$db = DB::getInstance();

		$req = $db->query("UPDATE karyawan SET namaKaryawan='".$namaKaryawan."', jenisKelamin='".$jenisKelamin."',tanggalLahir='".$tanggalLahir."',jabatan='".$jabatan."' WHERE idKaryawan='$idKaryawan'");
		return $req;
	}

  public static function hapus($idKaryawan){

    $db = DB::getInstance();

    $req = $db->query("DELETE from karyawan where idKaryawan ='$idKaryawan'");


      return $req;
  }

}

?>
