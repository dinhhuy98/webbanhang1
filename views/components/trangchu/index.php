<?php 
  $product=loadModel("product");
  $data=$product->selectTop(9);
  
  
?>
<div class="col-md-9" ">
          <?php 
            while($row=mysqli_fetch_assoc($data)){
              echo "<div class='col-md-4'>
            <div class='card border-black' style='width: 25rem;height:430px;'>
                <img class='card-img-top img-responsive' src='public/images/products/1.jpg' alt='Card image cap'>
                <div class='card-body' style='height:50px'>
                  <h5 class='card-title text-primary'><strong>";
                  echo $row["name"]."</strong></h5>";
                  echo "<p class='card-text text-danger'>".number_format($row["cost"],0," ",".")."đ</p>";
                  echo "</div><div class='row text-center' style='margin-top:20px;'>
                  <a href='#' class='btn btn-primary'>Xem chi tiết</a>
                  <a href='#' class='btn btn-primary'>Thêm giỏ hàng</a></div>
                </div>
            
          </div>";
            }
           ?>
</div>