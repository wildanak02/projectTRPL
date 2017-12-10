<?php
function call($controller, $action){
	require_once('controller/c_'.$controller.'.php');

	switch ($controller) {
		case 'Login':
		require_once('model/m_Login.php');
		$controller=new LoginController();
		break;

		case 'Home':
		$controller=new HomeController();
		require_once('model/m_Home.php');
		break;

		case 'PanelAdminUser':
		$controller=new PanelAdminUserController();
		require_once('model/m_PanelAdminUser.php');
		break;

		case 'PanelAdminSupplier':
		$controller=new PanelAdminSupplierController();
		require_once('model/m_PanelAdminSupplier.php');
		break;

		case 'PanelHRD':
		$controller=new PanelHRDController();
		require_once('model/m_PanelHRD.php');
		break;

		case 'PanelSalesPermintaan':
		$controller=new PanelSalesPermintaanController();
		require_once('model/m_PanelSalesPermintaan.php');
		require_once('model/m_PanelSalesPermintaan2.php');
		break;

		case 'PanelSalesLaporan':
		$controller=new PanelSalesLaporanController();
		require_once('model/m_TambahLaporan.php');
		require_once('model/m_EditLaporan.php');
		require_once('model/m_PanelSalesLaporan.php');
		break;

		case 'PanelGudang':
		$controller=new PanelGudangController();
		require_once('model/m_PanelGudang.php');
		require_once('model/m_PanelAdminSupplier.php');
		break;

		case 'PanelSupplier':
		$controller=new PanelSupplierController();
		require_once('model/m_PanelSupplier.php');
		break;

	}
	$controller->{ $action }();
}

$controllers = array('Login' => ['login','authentication'],
	'Home'=>['home'],
	'PanelAdminUser'=>['home','klikTambah','klikEdit','tambahUser','editUser','hapusUser'],
	'PanelAdminSupplier'=>['home','klikTambah','klikEdit','tambahSupplier','editSupplier','hapusSupplier'],
	'PanelHRD'=>['home','klikTambah','klikEdit','tambahKaryawan','editKaryawan','hapusKaryawan'],
	'PanelSalesLaporan'=>['home','klikTambah','klikEdit','viewLaporan','tambahLaporan','editLaporan'],
	'PanelSalesPermintaan'=>['home','minta'],
	'PanelGudang'=>['home','klikTambah','klikEdit','viewBarang','tambahBarang','editBarang','hapusBarang'],
	'PanelSupplier'=>['home','viewPermintaan','terima','tolak']
	);


if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller,$action);
	} else {
		call($controller,'error');
	}

} else {
	call($controller,'error');
}

?>
