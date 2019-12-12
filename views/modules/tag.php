<div class="col-md-3">
	<ul class="list-group">
<?php

	$tag=loadModel("tag");
	$html="";
	$data=$tag->selectAll();
	while($row2=mysqli_fetch_assoc($data)){
		echo "<li class='list-group-item' style='font-size:20px;'>";
		echo "<a href='index.php?option=sanpham&tag=".$row2['link']."'>".$row2["name"]."</a>";
		echo "</li>";
	}
	
?>
</ul>
</div>