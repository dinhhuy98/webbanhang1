<?php 
	session_start();
	include_once("../config.php");
	include_once('core/Database.php');
	include_once('core/load.php');
	if(isset($_POST["login"])){
		$username=$_POST["username"];
		echo $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
		
	}
 ?>

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
<!-- Modal HTML -->
<div >
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<!--<img src="/examples/images/avatar.png" alt="Avatar">-->
				</div>				
				<h4 class="modal-title">Member Login</h4>	
			</div>
			<div class="modal-body">
				<form action="#" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn" name="login">Login</button>
					</div>
					<p><?php echo "&nbsp"; ?></p>
				</form>
			</div>
			<div class="modal-footer">
				<a class="pull-left" href="../index.php">Trở về trang chủ</a>
				<a class="pull-right" href="#">Forgot Password?</a>

			</div>
		</div>
	</div>
</div>
</body>
</html>