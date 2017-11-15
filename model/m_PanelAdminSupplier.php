<?php
class AdminSupplier
{

  public $idSupplier;
	public $namaSupplier;
	public $alamat;


	function __construct($idSupplier,$namaSupplier,$alamat)
	{
    $this->idSupplier=$idSupplier;
		$this->namaSupplier=$namaSupplier;
		$this->alamat=$alamat;

	}

	public static function tambahSupplier($namaSupplier,$alamat){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO supplier
			VALUES (NULL,'".'5'."','".$namaSupplier."', '".$alamat."');
			");

		return $req;
	}

  public static function viewSupplier(){
    $list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM supplier");
    foreach ($req->fetchAll() as $post) {
  			$list[] = new AdminSupplier($post['idSupplier'],$post['namaSupplier'],$post['alamat']
  				);
  		}


  		return $list;
  }

  public static function ambiledit($idSupplier){
    $list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM user where idUser='$idUser'");
    foreach ($req->fetchAll() as $post) {
  			$list[] = new AdminUser($post['idUser'],$post['username'],$post['password'],$post['avatar'],$post['level']
  				);
  		}


  		return $list;
  }

}

?>
