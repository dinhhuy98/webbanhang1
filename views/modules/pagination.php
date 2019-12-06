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