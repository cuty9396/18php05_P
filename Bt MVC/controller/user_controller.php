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
			$deleteUser = $user->deleteUser($id);
			header("Location: index.php?controller=users&action=listUsers");

		}
	}
?>