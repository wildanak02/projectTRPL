<?php
Class PanelHRDController{

	public function home(){
		$posts=HRD::viewKaryawan();
		require_once("view/v_PanelHRD.php");
	}

	public function klikTambah(){
		require_once("view/v_HRDTambah.php");
	}

	public function klikEdit(){
		$posts=HRD::ambiledit($_GET["idKaryawan"]);
		require_once("view/v_HRDEdit.php");
	}

  public function tambahKaryawan(){
$user = HRD::tambahKaryawan($_POST["namaKaryawan"],$_POST["jenisKelamin"],$_POST["tanggalLahir"],$_POST["jabatan"]);
header("location:index.php?controller=PanelHRD&action=home");
	}

  public function editKaryawan(){
		$posts=HRD::editKaryawan($_GET["idKaryawan"],$_GET["namaKaryawan"],$_GET["jenisKelamin"],$_GET["tanggalLahir"],$_GET["jabatan"]);
		header("location:index.php?controller=PanelHRD&action=home");
	}

  public function hapusKaryawan(){
		$posts=HRD::hapus($_GET["idKaryawan"]);
		header("location:index.php?controller=PanelHRD&action=home");
	}
}

?>
