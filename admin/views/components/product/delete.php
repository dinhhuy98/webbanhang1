<?php 
	$product=loadModel('product');
	$id = $_GET['id'];
	$product->delete($id);
	header('location:index.php?option=product'); 
 ?>