<?php
Class PanelAdminSupplierController{

	public function home(){
		$posts=AdminSupplier::viewSupplier();
		require_once("view/v_ModalAdmin.php");
		require_once("view/v_PanelAdminSupplier.php");
	}


  public function tambahSupplier(){
				$user= AdminSupplier::tambahSupplier($_POST["namaSupplier"],$_POST["alamat"]);
				header("location:index.php?controller=PanelAdminSupplier&action=home");
	}

  public function editSupplier(){

	}

  public function hapusSupplier(){

	}
}

?>
