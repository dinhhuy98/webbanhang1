<?php 
class Category extends Database{
	function __construct(){
		parent::__construct();
	}

	function selectAll(){
		$sql = "SELECT * FROM category;";
		return mysqli_query($this->conn,$sql);
	}
	function findName($id){
		$sql = "SELECT * FROM category WHERE id=$id;";
		$data = mysqli_query($this->conn,$sql);
		if(mysqli_num_rows($data)){
			$row = mysqli_fetch_assoc($data);
			return $row['name'];
		}
		return null;


	}

}

 ?>