<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active h4"><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Dashboard</a></li>
     
     	<li class='dropdown h4'>
     		<a class='dropdown-toggle' data-toggle='dropdown' href='index.php?option=sanpham'>Sản phẩm<span class='caret'></span></a>
     		<ul class='dropdown-menu'>
     			<li ><a href='index.php?option=product'>Danh sách sản phẩm</a></li>
     			<li><a href='index.php?option=product&action=category'>Loại sản phẩm</a></li>
     			<li><a href='index.php?option=product&action=tag'>Tag</a></li>
     		</ul>
 		</li>

 		<li class='dropdown h4'><a class='dropdown-toggle' data-toggle='dropdown' href='index.php?option=sanpham&cat="d"'>Đơn hàng<span class='caret'></span></a>
     		<ul class='dropdown-menu'>
     			<li><a href='index.php?option=sanpham&cat=""'>Danh sách đơn hàng</a></li>
     			<li><a href='index.php?option=sanpham&cat=""'></a></li>
     		</ul>
 		</li>

 		<li class='dropdown h4'><a class='dropdown-toggle' data-toggle='dropdown' href='index.php?option=sanpham&cat="d"'>Bài viết<span class='caret'></span></a>
     		<ul class='dropdown-menu'>
     			<li><a href='index.php?option=sanpham&cat=""'>Danh sách bài viết</a></li>
     			<li><a href='index.php?option=sanpham&cat=""'>Chủ đề</a></li>
     			<li><a href='index.php?option=sanpham&cat=""'></a></li>
     		</ul>
 		</li>

 		<li class='dropdown h4'><a class='dropdown-toggle' data-toggle='dropdown' href='index.php?option=sanpham&cat="d"'>Thành viên<span class='caret'></span></a>
     		<ul class='dropdown-menu'>
     			<li><a href='index.php?option=sanpham&cat=""'>Danh sách thành viên</a></li>
     			<li><a href='index.php?option=sanpham&cat=""'></a></li>
     			<li><a href='index.php?option=sanpham&cat=""'></a></li>
     		</ul>
 		</li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><h4 style="display: block;padding-top:16px;padding-bottom: 14px; color:white; "><span class="glyphicon glyphicon-user"></span><?php echo " ".$_SESSION['fullname'] ?></h4></li>
      <li><a class="h4" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a></li>
    </ul>

  </div>
</nav>
