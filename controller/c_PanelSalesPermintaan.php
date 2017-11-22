<?php
Class PanelSalesPermintaanController{

	public function home(){
		$posts=SalesPermintaan::view();
		$posts2=SalesPermintaan2::view();
		require_once("view/v_PanelSalesPermintaan.php");
	}

  public function minta(){
		$posts=SalesPermintaan::minta($_GET["idBarang"]);
		header("location:index.php?controller=PanelSalesPermintaan&action=home");
	}

}

?>
