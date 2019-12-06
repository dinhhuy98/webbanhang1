<?php 
	$product = loadModel("product");
	$pagination=loadClass("pagination");
  $numberItem=6;
	$numberPage= ceil($product->countItem()/$numberItem);
  $start=0;
  if(isset($_GET["trang"]) && $_GET["trang"]>=0 && $_GET["trang"]<=$numberPage)
    $start=$pagination->firstIndex($_GET["trang"],$numberItem);
  else
    $_GET['trang']=1;
  $data = $product->selectAll($start,$numberItem);
 ?>
 <h3>Tất cả sản phẩm</h3>
	<div class="col-md-9" ">
          <?php 
            while($row=mysqli_fetch_assoc($data)){
              echo "<div class='col-md-4'>
            <div class='card border-black' style='width: 25rem;height:430px;'>
                <img class='card-img-top img-responsive' src='public/images/products/1.jpg' alt='Card image cap'>
                <div class='card-body' style='height:50px'>
                  <h5 class='card-title text-primary'><strong>";
                  echo $row["name"]."</strong></h5>";
                  echo "<p class='card-text text-danger'>".number_format($row["cost"],0," ",".") ."đ</p>";
                  echo "</div><div class='row text-center' style='margin-top:20px;'>
                  <a href='?option=sanpham&id=".$row['id']."' class='btn btn-primary'>Xem chi tiết</a>
                  <a href='#' class='btn btn-primary'>Thêm giỏ hàng</a></div>
                </div>
            
          </div>";
            }
           ?>

</div>
<div class="row text-center ">
              <ul class="pagination ">
                <?php
                  if($start==0)
                     echo '<li class="page-item"><a class="page-link btn disabled" href="#">Previous</a></li>';
                  else
                    echo '<li class="page-item"><a class="page-link" href="?option=sanpham&trang='.($_GET['trang']-1).'">Previous</a></li>';
                   for($i=1;$i<=$numberPage;$i++){
                    if($_GET['trang']==$i)
                      echo '<li class="page-item active "><a class="page-link text-success"  href="?option=sanpham&trang='.$i.'">'.$i.'</a></li>';
                    else 
                      echo '<li class="page-item"><a class="page-link" href="?option=sanpham&trang='.$i.'">'.$i.'</a></li>';
                }

                if($_GET['trang']>=$numberPage)
                     echo '<li class="page-item"><a class="page-link btn disabled" href="#">Next</a></li>';
                  else
                    echo '<li class="page-item"><a class="page-link" href="?option=sanpham&trang='.($_GET['trang']+1).'">Next</a></li>';
           
                ?>
              </ul>
            </div>
