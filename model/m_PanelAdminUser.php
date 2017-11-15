<?php
class AdminUser
{

  public $idUser;
	public $username;
	public $password;
  public $avatar;
	public $level;




	function __construct($idUser,$username,$password,$avatar,$level)
	{
    $this->idUser=$idUser;
		$this->username=$username;
		$this->password=$password;
    $this->avatar=$avatar;
		$this->level=$level;


	}

	public static function tambahUser($username,$password,$avatar,$level){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO user
			VALUES (NULL,'".$username."', '".$password."','".$avatar."', '".$level."');
			");

		return $req;
	}

  public static function viewUser(){
    $list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM user");
    foreach ($req->fetchAll() as $post) {
  			$list[] = new AdminUser($post['idUser'],$post['username'],$post['password'],$post['avatar'],$post['level']
  				);
  		}


  		return $list;
  }

  public static function ambiledit($idUser){
    $list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM user where idUser='$idUser'");
    foreach ($req->fetchAll() as $post) {
  			$list[] = new AdminUser($post['idUser'],$post['username'],$post['password'],$post['avatar'],$post['level']
  				);
  		}


  		return $list;
  }

  public static function hapus($idUser){
    $db = DB::getInstance();

    $req = $db->query("DELETE from user where idUser ='$idUser'");


      return $req;
  }

}

?>
