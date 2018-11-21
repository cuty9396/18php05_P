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
	}
?>	