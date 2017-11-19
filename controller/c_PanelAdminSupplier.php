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
		$user= AdminSupplier::tambahSupplier($_POST["namaSupplier"],$_POST["alamat"]);
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
