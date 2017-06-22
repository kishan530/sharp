<?php
 include("admin/config.php");
   session_start();
   $isLogin = false;
   if (isset($_SESSION['user'])) {
		$user = $_SESSION['user'];
		$isAdmin = $user['is_admin'];
		 $isLogin = true;
	}
	 $name = '';
	  $email = '';
	   $mobile = '';
	   
   $errors = array();
   $message = '';
   if($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
               $errors[] = "Name is required";
       }
	   if (empty($_POST["email"])) {
               $errors[] = "Email is required";
       }
	   if (empty($_POST["mobile"])) {
               $errors[] = "Mobile is required";
       }
	   if (empty($_POST["password"])) {
               $errors[] = "Password is required";
       }
	   if (empty($_POST["retypePassword"])) {
               $errors[] = "Retype Password is required";
       }
	  $name = mysqli_real_escape_string($con,$_POST['name']);       
	  $email = mysqli_real_escape_string($con,$_POST['email']); 
	  $mobile = mysqli_real_escape_string($con,$_POST['mobile']); 
	  $password = mysqli_real_escape_string($con,$_POST['password']); 
	   $retypePassword = mysqli_real_escape_string($con,$_POST['retypePassword']); 
	   if($password!=$retypePassword)
			$errors[] = "Password miss match";

     if(count($errors)==0){
	$today = date('Y-m-d H:i:s');
		// Attempt insert query execution
		$sql = "INSERT INTO user (name,username, email, mobile, password, is_admin, active) VALUES ('$name', '$email', '$email', '$mobile', '$password', 0, 0)";
		//echo $sql;
		if(mysqli_query($con, $sql)){
			$message = "Request sent, kindly contact us for activation";
			 $name = '';
			  $email = '';
			   $mobile = '';
		} else{
			 $errors[]= "Could not able to Register" . mysqli_error($con);
		}
	  } 
	  
	  if(count($errors)>0){
		//echo var_dump($errors);
		//exit();
	  }
   }
   ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sharptools | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="admin/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
   
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>
	
			<?php
				if(count($errors)>0) {							
								foreach($errors as $error){
								?>
									<div style = "font-size:14px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
								<?php
								}
						  }else {
						  ?>
							<h3> <?php  echo $message; ?> </h3>
							 <?php
						  }
						?>

    <form action="register.php" method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="name" name="name" required value="<?php echo $name ?>">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" required value="<?php echo $email ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
	   <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="mobile" name="mobile" required value="<?php echo $mobile ?>">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password" name="retypePassword" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
		<!--
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
		  -->
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Request</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="login.php" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="admin/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="admin/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
