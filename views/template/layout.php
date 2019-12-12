<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shop</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width" />
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<script type="text/javascript" src="public/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="public/css/layout.css">
</head>
<body>
  <div class="site-content container">
  <!--Menu top 1-->
	<section class="menutop">
    <?php loadModule('menutop');?>
	</section>
  <!--End menu top 1-->

  <!-- Menu top 2-->
	<section class="clearfix menutop2">
		<?php loadModule('search_logo');?>
	</section>
  <!--End menu top 2-->

  <!-- Main menu-->
	<section class="clearfix mainmenu">
		<?php loadModule('mainmenu');?>
	</section>
<!--End main menu-->
<div class="container">
	<div class="row">
<!--Tag menu-->
<?php loadModule('tag');?>
	<!--End Tag menu-->
<!--Content -->
	<section class="clearfix main-content" style="min-height:600px;">
		<?php loadComponents();  ?>
	</section>
<!--End Conten-->
	</div>
</div>
<!--Footer-->
	<section class="clearfix footer ">
    <?php loadModule('footer');?>
	</section>
  <!--End footer-->
  </div>
</body>
</html>
<?php ob_end_flush(); ?>