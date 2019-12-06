<?php 
class Tag extends Database{
	function __construct(){
		parent::__construct();
	}

	function selectAll(){
		$sql = "SELECT * FROM tag;";
		return mysqli_query($this->conn,$sql);
	}
	function findName($id){
		$sql = "SELECT * FROM tag WHERE id=$id;";
		$data = mysqli_query($this->conn,$sql);
		if(mysqli_num_rows($data)){
			$row = mysqli_fetch_assoc($data);
			return $row['name'];
		}
		return null;


	}

}

 ?>