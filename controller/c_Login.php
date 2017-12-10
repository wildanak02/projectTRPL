<?php
	/**
	*
	*/
	class LoginController
	{

		public function login(){
			require_once('view/v_Login.php');
		}

		public function authentication(){
			if(Login::find($_GET['username'],$_GET['password'])==0){
				echo "<script type='text/javascript'>alert('Username atau Password Salah');</script>";
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
			elseif(Login::find($_GET['username'],$_GET['password'])==5){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=PanelSupplier&action=home");
			}
		}

}
?>
