<?php 
class Product extends Database{
	function __construct(){
		parent::__construct();
	}

	function selectAll(){
		$sql = "SELECT * FROM item;";
		return mysqli_query($this->conn,$sql);
	}
	function delete($id){
		$sql="DELETE FROM item WHERE id=$id;";
		mysqli_query($this->conn,$sql);
	}
	function insert($name, $category, $tag, $cost){
		$sql = "INSERT INTO item(name,category,tag,cost) VALUES ('$name',$category,$tag,$cost)";
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
}

 ?>