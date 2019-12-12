<?php 
class User extends Database{
	function __construct(){
		parent::__construct();
	}

	function selectAll(){
		$sql = "SELECT * FROM users;";
		return mysqli_query($this->conn,$sql);
	}
	function delete($id){
		$sql="DELETE FROM users WHERE id=$id;";
		mysqli_query($this->conn,$sql);
	}
	function insert($username, $password, $fullname, $email, $sdt){
		$sql = "INSERT INTO users(username,password,hoten,email,role,sdt) VALUES ('$username','$password','$fullname','$email',2,'$sdt')";
		
		return mysqli_query($this->conn,$sql);
	}
	function selectById($id){
		$sql="SELECT * FROM item WHERE id=$id;";
		return mysqli_query($this->conn,$sql);
	}
	function update($id, $name, $category, $tag, $cost){
		$sql = "UPDATE item SET name='$name', category=$category, tag=$tag, cost=$cost WHERE id=$id;";
		return mysqli_query($this->conn,$sql);
	}
	function selectByUsername($username){
		$sql = "SELECT * FROM users WHERE username='$username'";
		return mysqli_query($this->conn,$sql);
	}
}
