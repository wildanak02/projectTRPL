<?php
Class PanelAdminSupplierController{

	public function home(){
		$posts=AdminSupplier::viewSupplier();
		require_once("view/v_PanelAdminSupplier.php");
	}


	public function klikTambah(){
		require_once("view/v_AdminSupplierTambah.php");
	}

	public function klikEdit(){
		$posts=AdminSupplier::ambiledit($_GET["idSupplier"]);
		require_once("view/v_AdminSupplierEdit.php");
	}

	public function tambahSupplier(){
		$foto = $_FILES['avatar']['name'];
		$tmp = $_FILES['avatar']['tmp_name'];

// Re	name nama fotonya dengan menambahkan tanggal dan jam upload
		$fotobaru = $foto;
// Set path folder tempat menyimpan fotonya
		$path = "images/".$fotobaru;
// Proses upload
		if (move_uploaded_file($tmp, $path)) {
		$user2= AdminSupplier::tambahUser($_POST["username"],$_POST["password"],$fotobaru);
		$user= AdminSupplier::tambahSupplier($_POST["namaSupplier"],$_POST["alamat"]);
	}
		header("location:index.php?controller=PanelAdminSupplier&action=home");
	}

	public function editSupplier(){

		$posts=AdminSupplier::edit($_GET["idSupplier"],$_GET["namaSupplier"],$_GET["alamat"]);
			header("location:index.php?controller=PanelAdminSupplier&action=home");
		}

	public function hapusSupplier(){
		$posts=AdminSupplier::hapus($_GET["idSupplier"]);
		header("location:index.php?controller=PanelAdminSupplier&action=home");
	}
}

?>
