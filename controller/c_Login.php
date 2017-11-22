<?php
	/**
	*
	*/
	class LoginController
	{

		public function login(){
			$error='';
			require_once('view/v_Login.php');
		}

		public function error(){
			require_once('views/pages/error.php');
		}
		public function authentication(){
			$error='';
			if (!isset($_GET['username'])) {
				//return call('pages','error');
			}
			if(Login::find($_GET['username'],$_GET['password'])==0){
				$error="username atau password  tidak valid";
				require_once('view/v_Login.php');
			}else if(Login::find($_GET['username'],$_GET['password'])==1){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=PanelAdminUser&action=home");
			}elseif(Login::find($_GET['username'],$_GET['password'])==2){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=PanelHRD&action=home");
			}
			elseif(Login::find($_GET['username'],$_GET['password'])==3){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=PanelSalesLaporan&action=home");
			}
			elseif(Login::find($_GET['username'],$_GET['password'])==4){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=PanelGudang&action=home");
			}
			else {
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=PanelSupplier&action=home");
			}

		}

}
?>
