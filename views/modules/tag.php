<div class="col-md-3">
	<ul class="list-group">
<?php	
	$tag=loadModel("tag");
	$html="";
	$data=$tag->selectAll();
	while($row=mysqli_fetch_assoc($data)){
		echo "<li class='list-group-item' style='font-size:20px;'>";
		echo "<a href='index.php?option=sanpham&tag=".$row['link']."'>".$row["name"]."</a>";
		echo "</li>";
	}

?>
	</ul>
</div>