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

  public static function tambahUser($username,$password,$avatar){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO user
			VALUES (NULL,'".$username."', '".$password."','".$avatar."', '".'5'."');
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

    public static function ambilSupplier($idSupplier){
        $list = [];

        $db = DB::getInstance();

        $req = $db->query("SELECT * FROM supplier where idSupplier='$idSupplier'");
        foreach ($req->fetchAll() as $post) {
            $list[] = new AdminSupplier($post['idSupplier'],$post['namaSupplier'],$post['alamat']
            );
        }


        return $list;
    }

  public static function ambiledit($idSupplier){
    $list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM supplier where idSupplier='$idSupplier'");
    foreach ($req->fetchAll() as $post) {
  			$list[] = new AdminSupplier($post['idSupplier'],$post['namaSupplier'],$post['alamat']
  				);
  		}


  		return $list;
  }
public static function edit($idSupplier,$namaSupplier,$alamat)
	{
		$stat = "";
		$ts=0;

		$db = DB::getInstance();

		$req = $db->query("UPDATE supplier SET namaSupplier='".$namaSupplier."', alamat='".$alamat."' WHERE idSupplier='$idSupplier'");
		return $req;
	}

  public static function hapus($idSupplier){
    $db = DB::getInstance();

    $req = $db->query("DELETE from supplier where idSupplier ='$idSupplier'");


      return $req;
  }
}

?>
