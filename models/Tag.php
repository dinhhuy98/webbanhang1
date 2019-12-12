<?php
	class Tag extends Database{

		function __construct(){
			parent::__construct();
		}

		public function selectAll(){
			$sql="SELECT * FROM tag;";
			return mysqli_query($this->conn,$sql);
		}
		public function selectItem($tag){
			$sql = "SELECT * FROM tag,item WHERE tag.id=item.tag AND tag.link='$tag';";
			return mysqli_query($this->conn,$sql);
		}

		function countItem($tag){
			$sql = "SELECT * FROM tag,item WHERE tag.id=item.tag AND tag.link='$tag';";
			return mysqli_num_rows(mysqli_query($this->conn,$sql));
	}
	}
?>