<?php
Class PanelHRDController{

	public function home(){
		$posts=HRD::viewKaryawan();
		require_once("view/v_ModalHRD.php");
		require_once("view/v_PanelHRD.php");
	}

  public function viewKaryawan(){

	}

  public function tambahKaryawan(){

	}

  public function editKaryawan(){

	}

  public function hapusKaryawan(){

	}
}

?>
