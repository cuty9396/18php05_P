<?php 
	include 'config/database.php';
	class UserModel extends DB{
		public function getUser() {
			$sql = 'SELECT * FROM users';
			return mysqli_query($this->connectDB(), $sql);
		}
		public function addNewUser($name, $email, $imageName) {
			$sql1 = "INSERT INTO users(name, email, avatar) VALUES('$name', '$email', '$imageName')";
			return mysqli_query($this->connectDB(), $sql1);
		}
		public function deleteUser($id) {
			$delId = $id;
			$sql2 = "DELETE FROM users WHERE id = $delId";
			return mysqli_query($this->connectDB(), $sql2);
		}
		public function getDeleteAvatar($id){
			$delId = $id;
			$sql3 = "SELECT avatar FROM users WHERE id = $delId";
			$result = mysqli_query($this->connectDB(), $sql3);
			return mysqli_fetch_assoc($result);
		}
		public function checkLogin($username, $pass) {
			$sql = "SELECT * FROM accounts WHERE username = '$username' AND pass = '$pass' LIMIT 1";
			$result = mysqli_query($this->connectDB(), $sql);
			$data = $result->fetch_assoc();
			return $data;
		}		
	}
?>	