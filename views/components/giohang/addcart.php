<?php 
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart']=array();
			
		}	
		$cart = $_SESSION['cart'];
		if(!array_key_exists($id,$cart)){
			$product = loadModel('product');
			$data=$product->itemDetail($id);
			if(mysqli_num_rows($data)){
				$row = mysqli_fetch_assoc($data);
				$cart[$id]=array('name'=>$row['name'],'cost'=>$row['cost'],'sl'=>1);
			}
		}
		$_SESSION['cart']=$cart;
		print_r($_SESSION['cart']);
	}
 ?>