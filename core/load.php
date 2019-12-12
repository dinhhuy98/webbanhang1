<?php 
	function loadModel($name){
		$path='models/'.$name.'.php';
		if(file_exists($path)){
			include_once($path);
			$modelClass=new $name;
			return $modelClass;
		}
		else{
			return null;
		}
	}
	function loadModule($name){
		$path='views/modules/'.$name.'.php';
		if(file_exists($path)){
			include($path);
		}
	}
	function loadComponents(){
		$path='views/components/';
		if(isset($_GET['option'])){
			$path.=$_GET['option'].'/';
			if(isset($_GET['id'])){
				if($_GET['option']=="giohang")
					$path.="addcart.php";
				else
					$path.='detail.php';
			}
			else if(isset($_GET['cat'])||isset($_GET['tag'])){
				$path.='category.php';
			}
			else
				$path.='index.php';
			}

		else{
			$path.='trangchu/index.php';
		}
		if(file_exists($path))
			include_once($path);
		else
			echo $path.'Khong ton tai';
	}
	function loadClass($name){
		$path='core/'.$name.'.php';
		if(file_exists($path)){
			include_once($path);
			$nameClass=new $name;
			return $nameClass;
		}
		else{
			return null;
		}
	}
	function loadTemplate($name){
		$path='views/template/'.$name.'.php';
		if(file_exists($path)){
			include($path);
		}
		else
			echo $path." Khong ton tai";
	}
 ?>