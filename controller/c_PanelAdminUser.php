<?php
Class PanelAdminUserController{

	public function home(){
		$posts=AdminUser::viewUser();
		require_once("view/v_PanelAdminUser.php");
	}

	public function klikTambah(){
		require_once("view/v_AdminUserTambah.php");
	}

	public function klikEdit(){
		$posts=AdminUser::ambiledit($_GET["idUser"]);
		require_once("view/v_AdminUserEdit.php");
	}

  public function tambahUser(){
				$foto = $_FILES['avatar']['name'];
				$tmp = $_FILES['avatar']['tmp_name'];

		// Re	name nama fotonya dengan menambahkan tanggal dan jam upload
				$fotobaru = $foto;
		// Set path folder tempat menyimpan fotonya
				$path = "images/".$fotobaru;
		// Proses upload
				if (move_uploaded_file($tmp, $path)) {
				$gantilevel= $_POST["level"];
					$user = AdminUser::tambahUser($_POST["username"],$_POST["password"],$fotobaru,$gantilevel);
				}

				header("location:index.php?controller=PanelAdminUser&action=home");
	}

  public function editUser(){
		// $foto = $_GET['avatar']['nama'];
		// $tmp = $_GET['avatar']['tmp_nama'];
		// $fotobaru = $foto;
		// $path = "images/".$fotobaru;
		$gantilevel= $_GET["level"];
		$posts=AdminUser::editUser($_GET["idUser"],$_GET["username"],$_GET["password"],$gantilevel);
		header("location:index.php?controller=PanelAdminUser&action=home");
	}

  public function hapusUser(){
		$posts=AdminUser::hapus($_GET["idUser"]);
		header("location:index.php?controller=PanelAdminUser&action=home");
	}
}

?>
