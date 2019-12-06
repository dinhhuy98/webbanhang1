<?php 
	class Category extends Database
	{
		function __construct(){
			parent::__construct();
		}
		function catergoryMainMenu($parentid){
			$sql="SELECT * FROM category WHERE parent_id=$parentid";
			return $this->queryAll($sql);
		}
		function selectItem($category){
			$sql = "SELECT * FROM category,item WHERE category.id=item.category AND category.link='$category';";
			return mysqli_query($this->conn,$sql);
		}

		function countItem($category){
		$sql = "SELECT * FROM category,item WHERE "."category".".id=item.category AND category.link='$category';";

		return mysqli_num_rows(mysqli_query($this->conn,$sql));
	}
	}
 ?>