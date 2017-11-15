<?php
Class PanelAdminUserController{

	public function home(){
		$posts=AdminUser::viewUser();
		require_once("view/v_ModalAdmin.php");
		require_once("view/v_PanelAdminUser.php");
	}

  public function tambahUser(){
		// 		var_dump($_POST);
		// 		exit;
		// 		$foto = $_FILES['avatar']['name'];
		// 		$tmp = $_FILES['avatar']['tmp_name'];
		// 		/*$cabang=$_POST['cabang'];*/	
    //
		// // Re	name nama fotonya dengan menambahkan tanggal dan jam upload
		// 		$fotobaru = date('dmYHis').$foto;
		// // Set path folder tempat menyimpan fotonya
		// 		$path = "images/".$fotobaru;
		// // Proses upload
		// 		if (move_uploaded_file($tmp, $path)) {
			$gantilevel= $_POST["level"];
					$user = AdminUser::tambahUser($_POST["username"],$_POST["password"],null,$gantilevel);
				// }

				header("location:index.php?controller=PanelAdminUser&action=home");
	}

  public function editUser(){
		$posts=AdminUser::ambiledit($_GET["idUser"]);
	}

  public function hapusUser(){
		$posts=AdminUser::hapus($_GET["idUser"]);
		header("location:index.php?controller=PanelAdminUser&action=home");
	}
}

?>
