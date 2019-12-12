<?php 

  $success=0;
  $user = loadModel('user');
  if(isset($_POST['submit'])){
    $hoten=$_POST['fullname'];
    $username=$_POST['username'];
    $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
    $email=$_POST['email'];
    $sdt=$_POST['sdt'];

    $user->insert($username, $password, $hoten, $email, $sdt);
    $success=1;
  }
  if(isset($_POST['login'])){
   header('location:views/components/dangnhap');
  }
 ?>
<div class="col-md-9">
<h4>Đăng kí:</h4>
 <div class="container-fluid">
	<form class="form-horizontal" method="POST" action="#">
    <div class="form-group">
      <label class="control-label col-sm-2" for="fullname">Họ tên:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control col-sm-2" id="fullname" name="fullname">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2 " for="username">Tên đăng nhập:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control col-sm-2" id="username" name="username">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control col-sm-2" id="password" name="password">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control col-sm-2" id="email" name="email">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="sdt">Số điện thoại:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control col-sm-2" id="sdt" name="sdt">
      </div>
    </div>
    
    <div class="form-group col-sm-10 form-inline ">        
        
		 
      
		
				<!--echo "";-->

      
      </div>

      <div class="form-inline col-sm-10 col-sm-offset-2 mb-5">
    <div class="form-group col-sm-3 ">
        <button type="submit" class="btn btn-default btn-primary " name="submit">Đăng kí</button>
      </div>
      <div class="form-group col-sm-5">
        <?php if($success==0){ ?>
        <h4 class='text-success'>Đăng kí thành công!==></h4>
      </div>
        <button type="submit" class="btn btn-default btn-primary " name="login">Đăng nhập</button>
      <?php }
      else if($success==-1){ ?>
      <h4 class='text-danger'>Đăng kí thất bại!</h4>
    <?php } ?>
    </div>
    
</div>
  </form>

</div>
</div>