<?php 
class Product extends Database{
	function __construct(){
		parent::__construct();
	}

	function selectTop($number){
		$sql="SELECT * FROM `item` ORDER BY id LIMIT $number;";

		 return mysqli_query($this->conn,$sql);

	}
	function selectAll($start,$limit){
		$sql="SELECT * FROM `item` LIMIT $start,$limit ;";

		 return mysqli_query($this->conn,$sql);
	}
	function countItem(){
		$sql="SELECT * FROM `item`";
		return mysqli_num_rows(mysqli_query($this->conn,$sql));
	}
	function itemDetail($id){
		$sql="SELECT * FROM item WHERE id=$id;";
		return mysqli_query($this->conn,$sql);
	}

}
 ?>
