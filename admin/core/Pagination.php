<?php 
class Pagination {
	function pageCurrent(){
		if(!isset($_GET['trang']))
			$current=1;
		else{
			$current=$_GET['trang'];
		}
		return $current;
	}

	function firstIndex($current, $limit){
		return ($current-1)*$limit;
	}
}
 ?>
