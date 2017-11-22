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
		break;

		case 'PanelSalesChart':
		$controller=new PanelSalesChartController();
		require_once('model/m_PanelSalesChart.php');
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
		break;

		case 'PanelSupplier':
		$controller=new PanelSupplierController();
		require_once('model/m_PanelSupplier.php');
		break;

	}
	$controller->{ $action }();
}

$controllers = array('Login' => ['login', 'error','authentication'],
	'Home'=>['home'],
	'PanelAdminUser'=>['home','klikTambah','klikEdit','tambahUser','editUser','hapusUser'],
	'PanelAdminSupplier'=>['home','klikTambah','klikEdit','tambahSupplier','editSupplier','hapusSupplier'],
	'PanelHRD'=>['home','klikTambah','klikEdit','tambahKaryawan','editKaryawan','hapusKaryawan'],
	'PanelSalesLaporan'=>['home','klikTambah','klikEdit','viewLaporan','tambahLaporan','editLaporan'],
	'PanelSalesChart'=>['home','viewChart'],
	'PanelSalesPermintaan'=>['home','viewPrediksi','viewPermintaan','minta'],
	'PanelGudang'=>['home','klikTambah','klikEdit','viewBarang','tambahBarang','editBarang','hapusBarang'],
	'PanelSupplier'=>['home','viewPermintaan','terima','tolak'],
	'ModalAdminUser'=>['modalAdminUserTambah','modalAdminUserEdit','modalAdminUserHapus'],
	'ModalAdminSupplier'=>['modalAdminSupplierTambah','modalAdminSupplierEdit','modalAdminSupplierHapus']
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
