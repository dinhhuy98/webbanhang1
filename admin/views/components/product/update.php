<?php
	$id=$_GET['id']; 
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
		if($product->update($id,$name,$category,$tag,$cost))
			$success=1;
		else 
			$success=-1;
	}
	$data = $product->selectById($id);
	$row = mysqli_fetch_assoc($data);
	

 ?>
<h4>Cập nhật sản phẩm:</h4>
 <div class="container">
	<form class="form-horizontal" method="POST" action="#">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Tên sản phẩm:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'] ?>">
      </div>
    </div>
    
    
	​<div class="form-group form-inline">
      <label class="control-label col-sm-2" for="sel1">Tag: Chọn từ danh sách</label>
      <div class="col-sm-2">
      <select class="form-control" id="sel1" name="tag">
      	<?php while($row3 = mysqli_fetch_assoc($data3)){ ?>
        <option value="<?php echo $row3['id'] ?>" <?php if($row3['id']==$row['tag']) echo "selected" ?>><?php echo $row3['name']; ?></option>
    	<?php } ?>
      </select>
  </div>
  </div>
  
  <div class="form-group form-inline">
      <label class="control-label col-sm-2" for="sel1">Loại: Chọn từ danh sách</label>
      <div class="col-sm-2">
      <select class="form-control" id="sel2" name="category">
      	<?php while($row2 = mysqli_fetch_assoc($data2)){ ?>
        <option value="<?php echo $row2['id'] ?>" <?php if($row2['id']==$row['category']) echo "selected" ?>><?php echo $row2['name']; ?></option>
    	<?php } ?>
      </select>
  </div>
  </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="cat">Giá:</label>
      <div class="col-sm-2">          
        <input type="text" class="form-control" id="cat" name="cost" value="<?php echo $row['cost'] ?>">
      </div>
    </div>
    
    <div class="form-group ">        
      <div class="col-sm-offset-2 col-sm-1 d-inline">
        <button type="submit" class="btn btn-default btn-primary " name="submit">Cập nhật</button>
      </div>
      <div class="col-sm-5 ">
      	<?php if($success==1) 
			echo "<h4 class='text-success'> Cập nhật thành công!</h4>";
			else if($success==-1)
				echo "<h4 class='text-danger'> Cập nhật thất bại!</h4>";

			?>
      </div>
    </div>
  </form>

</div>