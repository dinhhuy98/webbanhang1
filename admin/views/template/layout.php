<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../public/css/layout-admin.css">
	<script type="text/javascript" src="../public/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="swapper">
		<div class="container-fluid">
			<div class="row header">
				<h2> Trang quản trị</h2>
			</div>
			<div class="row mainmenu">
				<?php  loadModule("mainmenu");?>
			</div>
			<div class="row content">
				<?php loadComponents() ?>
			</div>
			<div class="footer text-center " style="margin-top: 500px;">
				Dinh Huy @2019
			</div>
		</div>
	</div>

	

</body>
</html>