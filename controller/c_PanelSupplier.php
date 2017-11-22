<?php
Class PanelSupplierController{

	public function home(){
		$posts=Supplier::view();
		require_once("view/v_PanelSupplier.php");
	}


  public function terima(){
		$posts=Supplier::updatestok($_GET["kodeBarang"],$_GET["prediksi"]);
		$posts=Supplier::terima($_GET["kodeBarang"]);
		header("location:index.php?controller=PanelSupplier&action=home");
	}

  public function tolak(){
		$posts=Supplier::tolak($_GET["kodeBarang"]);
		header("location:index.php?controller=PanelSupplier&action=home");
	}

}

?>
