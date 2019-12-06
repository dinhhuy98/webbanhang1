
<?php
	$product = loadModel('product'); 
	$id=$_GET['id'];
	$data = $product->itemDetail($id);
	$row = mysqli_fetch_assoc($data);
 ?>
 <div class="col-md-9">
 	<h3><?php  echo $row["name"]?></h3>
 	<div class="col-md-4">
 		<div class='card border-black' style='width: 25rem;height:430px;'>
                <img class='card-img-top img-responsive' src='public/images/products/1.jpg' alt='Card image cap'>
                <div class='card-body text-center' style='height:50px'>
                  <h3><p class='card-text text-danger'><?php echo number_format($row["cost"],0," ",".").' đ'; ?></p></h3>
                </div>
                <div class='row text-center' style='margin-top:20px;'>
                  <a href='#' class='btn btn-primary'>Thêm giỏ hàng</a>
                </div>
        </div>
            
    </div>
 	<div class="col-md-4">
 		<h4>Thông tin chi tiết:</h4>
 	</div>
 </div>