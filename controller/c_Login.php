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
			if (!isset($_POST['username'])) {
				//return call('pages','error');
			}
			if(Login::find($_POST['username'],$_POST['password'])==0){
				$error="username atau password  tidak valid";
				require_once('view/v_Login.php');
			}else if(Login::find($_POST['username'],$_POST['password'])==1){
				$_SESSION['login_user']=$_POST['username'];
				header("location:index.php?controller=PanelAdminUser&action=home");
			}elseif(Login::find($_POST['username'],$_POST['password'])==2){
				$_SESSION['login_user']=$_POST['username'];
				header("location:index.php?controller=PanelHRD&action=home");
			}
			elseif(Login::find($_POST['username'],$_POST['password'])==3){
				$_SESSION['login_user']=$_POST['username'];
				header("location:index.php?controller=Panel&action=panelSalesLaporan");
			}
			elseif(Login::find($_POST['username'],$_POST['password'])==4){
				$_SESSION['login_user']=$_POST['username'];
				header("location:index.php?controller=Panel&action=panelGudang");
			}
			else {
				$_SESSION['login_user']=$_POST['username'];
				header("location:index.php?controller=Panel&action=panelSupplier");
			}

		}

}
?>
