<div class="container">
	<div class="row">
		<div class="col-md-6">
					<ul class="navbar-nav">
						<li><a href="index.php">Trang chủ</a></li>
						<li><a href="index.php?option=sanpham">Sản phẩm</a></li>
						<li><a href="index.php?option=tintuc">Tin tức</a></li>
						<li><a href="index.php?option=lienhe">Liên hệ</a></li>
					</ul>
		</div>
		<div class="col-md-6 text-right">
					<ul class="navbar-nav" style="float:right">
						<li><a href="index.php?option=giohang">Giỏ hàng</a></li>
						
						<?php if(isset($_SESSION['fullname'])){
								echo '<li><span class="glyphicon glyphicon-user"></span>'.$_SESSION['fullname'].'&nbsp&nbsp</li>';
								echo '<li><a href="views/components/dangxuat">Đăng xuất</a></li>';
								}
								else{
								echo'<li><a href="views/components/dangnhap">Đăng nhập</a></li>';
								echo'<li><a href="index.php?option=dangki">Đăng kí</a></li>';
								} ?>
					</ul>
		</div>
	</div>
</div>