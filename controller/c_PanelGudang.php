<?php
Class PanelGudangController{

	public function home(){
		$posts=Gudang::viewGudang();
		require_once("view/v_PanelGudang.php");
	}

	public function klikTambah(){
		require_once("view/v_GudangTambah.php");
	}
	public function klikEdit(){
		$posts=Gudang::ambiledit($_GET["idBarang"]);
		$posts2=AdminSupplier::ambilSupplier($_GET["idSupplier"]);
		require_once("view/v_GudangEdit.php");
	}

	public function tambahGudang(){
		$foto = $_FILES['gambar']['name'];
		$tmp = $_FILES['gambar']['tmp_name'];

		// Re	name nama fotonya dengan menambahkan tanggal dan jam upload
		$fotobaru = $foto;
		// Set path folder tempat menyimpan fotonya
		$path = "images/".$fotobaru;
		// Proses upload
		if (move_uploaded_file($tmp, $path)) {
			$gantiSupplier= $_POST["idSupplier"];
			$databarang = Gudang::tambahGudang($gantiSupplier,$_POST["kodeBarang"],$fotobaru,$_POST["namaBarang"],$_POST["jenisBarang"],$_POST["ukuran"],$_POST["deskripsi"],$_POST["stok"]);		
		}

		header("location:index.php?controller=PanelGudang&action=home");
	}
	public function editGudang(){
		$posts = Gudang::editGudang($_GET["idBarang"],$_GET["kodeBarang"],$_GET["namaBarang"],$_GET["jenisBarang"],$_GET["ukuran"],$_GET["deskripsi"],$_GET["stok"]);	
		header("location:index.php?controller=PanelGudang&action=home");

	}

	public function hapusGudang(){
		$posts=Gudang::hapus($_GET["idBarang"]);
		header("location:index.php?controller=PanelGudang&action=home");
	}

}

?>
