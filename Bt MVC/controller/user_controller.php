r<?php 
	include 'model/user_model.php';
	class User {
		public function xulyVandeLienquanUser($action) {
			if ($action == 'listUsers') {
				$this->listUser();
			} elseif ($action == 'addUsers') {
				$this->addUser();
			} elseif ($action == 'deleteUsers') {
				$this->deleteUser();
			} elseif ($action == 'login') {
				$this->login();
			} elseif ($action == 'logout') {
				$this->logout();
			}
		}

		public function listUser(){
			$user = new UserModel();
			$listUsers	= $user->getUser();
			include 'views/users/listUser.php';
		}

		public function addUser(){
			if (isset($_POST['add_user'])) {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$imageUpload = $_FILES['image'];
				// 1. lay duoc ten anh de luu vao database
				$imageName = uniqid().'-'.$imageUpload['name'];
				// 2. Upload anh len thu muc luu tru
				$pathSave = 'public/uploads/';
				move_uploaded_file($imageUpload['tmp_name'], $pathSave.$imageName);
				$user = new UserModel();
				$addUsers = $user->addNewUser($name, $email, $imageName);
				header("Location: index.php?controller=users&action=listUsers");
			}
			include 'views/users/addUser.php';
		}

		public function deleteUser(){
			$id = $_GET['uid'];
			$user = new UserModel();
			$file = $user->getDeleteAvatar($id);
			$deleteUser = $user->deleteUser($id);
			unlink('public/uploads/'.$file['avatar']);
			header("Location: index.php?controller=users&action=listUsers");
		}

		public function login() {
			if (isset($_POST['login'])){
				$username = $_POST['username'];
				$pass = md5($_POST['pass']);
				$user = new UserModel();
				$checkLogin	= $user->checkLogin($username, $pass);
				if (!is_null($checkLogin)) {
					//var_dump($checkLogin);exit();
					$_SESSION['login'] = $checkLogin['username'];
					//$_SESSION['role'] = $checkLogin['role'];
					header("Location: index.php");
				} else {
					header("Location: views/users/login.php");
					echo "<script>alert('sai username hoac pass word');</script>";
				}
			}
		}
		public function logout() { 
			unset($_SESSION['login']);
			session_unset();
			header("Location: views/users/login.php");
		}

	}
?>