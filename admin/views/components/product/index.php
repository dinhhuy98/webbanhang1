<?php 
	$product = loadModel("product");
	$category = loadModel("category");
	$tag = loadModel("tag");
	$data = $product->selectAll();
 ?>



<div class="container">

<div class='row'>
	<div class="col-md-6">
		<h4> <b>Danh sách sản phẩm</b></h4>

	</div>
	<div class="col-md-6 ">
		<div class="row">
			<div class="col-md-7 text-right">
		
		<form  action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    </div>
    <div class="col-md-5 text-right">
    	<a class="btn btn-success" href="index.php?option=product&action=insert">Thêm sản phẩm</a>
    </div>
		
		</div>
	</div>
</div>


<table class="table table-hover table-responsive table-bordered">

    <thead>
      <tr >
      	<th class="text-center">#</th>
        <th >ID</th>
        <th >Tên sản phẩm</th>
        <th class="text-center">Category</th>
        <th class="text-center">Tag</th>
        <th >Giá</th>
        <th class="text-center">Xóa</th>
        <th class="text-center">Sửa</th>
      </tr>

    </thead>
    <tbody>
    	<?php while($row = mysqli_fetch_assoc($data)){
    			$id=$row['id'];
    	 ?>
      	<tr>
        	<td class="text-center"><input type="checkbox" name="" value=""></td>
        	<td><?php echo $row['id']; ?></td>
        	<td><?php echo $row['name']; ?></td>
        	<td class="text-center"><?php echo $category->findName($row['category']); ?></td>
        	<td class="text-center"><?php echo $tag->findName($row['tag']); ?></td>
        	<td><?php echo number_format($row['cost'],0," ","."); ?></td>
        	<td class="text-center"><a class="btn btn-danger " onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="index.php?option=product&action=delete&id=<?php echo $id; ?>">Xóa</a></td>
        	<td class="text-center"><a class="btn btn-warning " href="index.php?option=product&action=update&id=<?php echo $id; ?>">Sửa</a></td>
        	
      	</tr>
      <?php } ?>
    </tbody>
  </table>
</div>
