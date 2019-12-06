<?php
	$product = loadModel("product");
	$category = loadModel("category");
	$tag = loadModel("tag");
	$data2 = $category->selectAll();
	$data3 = $tag->selectAll();
	$success=0;
	if(isset($_POST["submit"])){
		$tag=intval($_POST['tag']);
		$category=intval($_POST['category']);
		$cost=intval($_POST['cost']);
		$name=$_POST['name'];
		if($product->insert($name,$category,$tag,$cost))
			$success=1;
		else 
			$success=-1;
	}
	

 ?>
<h4>Cập nhật sản phẩm:</h4>
 <div class="container">
	<form class="form-horizontal" method="POST" action="#">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Tên sản phẩm:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="name" name="name">
      </div>
    </div>
    
    
	​<div class="form-group form-inline">
      <label class="control-label col-sm-2" for="sel1">Tag: Chọn từ danh sách</label>
      <div class="col-sm-2">
      <select class="form-control" id="sel1" name="tag">
      	<?php while($row3 = mysqli_fetch_assoc($data3)){ ?>
        <option value="<?php echo $row3['id'] ?>"><?php echo $row3['name']; ?></option>
    	<?php } ?>
      </select>
  </div>
  </div>
  
  <div class="form-group form-inline">
      <label class="control-label col-sm-2" for="sel1">Loại: Chọn từ danh sách</label>
      <div class="col-sm-2">
      <select class="form-control" id="sel2" name="category">
      	<?php while($row2 = mysqli_fetch_assoc($data2)){ ?>
        <option value="<?php echo $row2['id'] ?>"><?php echo $row2['name']; ?></option>
    	<?php } ?>
      </select>
  </div>
  </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="cat">Giá:</label>
      <div class="col-sm-2">          
        <input type="text" class="form-control" id="cat" name="cost">
      </div>
    </div>
    
    <div class="form-group ">        
      <div class="col-sm-offset-2 col-sm-1 d-inline">
        <button type="submit" class="btn btn-default btn-primary " name="submit">Thêm mới</button>
      </div>
      <div class="col-sm-5 ">
      	<?php if($success==1) 
			echo "<h4 class='text-success'>Thêm mới thành công!</h4>";
			else if($success==-1)
				echo "<h4 class='text-danger'>Thêm mới thất bại!</h4>";

			?>
      </div>
    </div>
  </form>

</div>