<?php
Class PanelSalesLaporanController{

	public function home(){
		$posts=SalesLaporan::view();
		require_once("view/v_PanelSalesLaporan.php");
	}

	public function klikTambah(){
		$posts=TambahLaporan::klikTambah();
		require_once("view/v_SalesLaporanTambah.php");
	}

	public function klikEdit(){
		$posts=EditLaporan::klikEdit($_GET["idPenjualan"]);
		require_once("view/v_SalesLaporanEdit.php");
	}

  public function viewLaporan(){
		$posts=SalesLaporan::viewLaporan($_GET["filtertahun"],$_GET["filterbulan"]);
		require_once("view/v_PanelSalesLaporan.php");
	}

  public function tambahLaporan(){
		$posts = SalesLaporan::tambahLaporan($_POST["idBarang"],$_POST["tanggal"],$_POST["terjual"]);
		$posts2 = SalesLaporan::tambahLaporan2($_POST["idBarang"],$_POST["terjual"]);
		$posts3 = SalesLaporan::tambahLaporan3($_POST["idBarang"],$_POST["terjual"]);
		header("location:index.php?controller=PanelSalesLaporan&action=home");
	}

  public function editLaporan(){
		$posts = SalesLaporan::editLaporan($_GET["idBarang"],$_GET["idPenjualan"],$_GET["terjual"]);
		$posts2 = SalesLaporan::editLaporan2($_GET["idPenjualan"],$_GET["tanggal"],$_GET["terjual"]);
		header("location:index.php?controller=PanelSalesLaporan&action=home");
	}

}

?>
