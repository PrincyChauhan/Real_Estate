<?php
session_start();
include('include/config.php'); 
extract($_REQUEST);
if(isset($save))
{
$que=mysqli_query($con,"select * from admin where email='$email' && password='$pass'");	
$row=mysqli_num_rows($que);
if($row)
{
$_SESSION['email']=$email;
header('location:dashboard.php');
}	
else
{
$err="Pls Enter Valid Email or Password";	
}	
	
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <!-- Bootstrap core CSS-->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin.css" rel="stylesheet">

  
  
</head>

<body class="bg-dark">

 
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post" enctype="multipart/form-data">
          <?php 
		  if(isset($err))
		  {
			echo '<div class="form-group">
            <h6 class="bg-danger" style="padding:10px;border-radius:5px">'.$err.'</h6></div>';	  
		  }
		  ?>
		   		  
		  <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" name="email" required type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
		  
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" name="pass" required type="password" placeholder="Password">
          </div>
			
			
		  <input class="btn btn-primary btn-block" type="submit" value="Login" name="save"/>
		  </br>
		</form>
        
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  
 
</body>
	
</html>
