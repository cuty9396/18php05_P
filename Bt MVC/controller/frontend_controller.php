<?php 
	include 'user_controller.php';
	class FrontEndController {
		public function xulyYeucau() {
			$controller = isset($_GET['controller'])?$_GET['controller']:'home';
			$action = isset($_GET['action'])?$_GET['action']:'home';
			if ($controller == 'home') {

			} elseif ($controller == 'users') {
				$users = new User();
				$users->xulyVandeLienquanUser($action);
			}
		}
	}
?>