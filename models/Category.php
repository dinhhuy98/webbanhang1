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
	}
 ?>