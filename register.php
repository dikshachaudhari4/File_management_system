<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V13</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/util.css">
	<link rel="stylesheet" type="text/css" href="css1/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="post" >
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
				<input class="input100" type="text" name="name" placeholder="Enter Full Name" >
						<span class="focus-input100"></span>
					</div>
                 <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
			<input class="input100" type="text" name="email" placeholder="Enter Email" >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
			<input class="input100" type="text" name="username" placeholder="Enter Username" >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
			<input class="input100" type="text" name="pass" placeholder="Enter Password" >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
		<input class="input100" type="text" name="repeat-pass" placeholder="Retype Password" >
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
                              <button class="login100-form-btn" name="submit">
								Sign Up
							</button>
						</div>

						<a href="login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form><br>
				<div class="alert alert-danger text-successs" align="left">
				 <?php
	
	 if(!preg_match('/^[A-Za-z\s]+[A-Za-z]{3,20}$/',@$_POST['name'])):
	   echo "enter valid Full Name";
	    elseif(!preg_match('/^[A-Za-z0-9._-]+@[a-zA-Z0-9-]+.[a-zA-Z.]{4,12}$/',@$_POST['email'])):
	   echo "enter valid email";
	  // elseif(!preg_match('/^[A-Za-z0-9]{3,8}$/',@$_POST['username'])):
	  //  echo "enter valid username";
	  elseif(!preg_match('/^[A-Za-z0-9!@#$%^&()_]{6,20}$/',@$_POST['pass'])):
	  echo "enter valid Password";
	  elseif(!preg_match('/^[A-Za-z0-9!@#$%^&()_]{6,20}$/',@$_POST['repeat-pass'])):
	  echo "enter valid Retype Password";
	  elseif(!(@$_POST['pass']===@$_POST['repeat-pass'])):
	    	echo "Retype Password Doesnt Match";
	  else : 
                 @$name=$_POST['name'];
                 @$email=$_POST['email'];
                 @$username=$_POST['username'];
                 @$password=$_POST['pass'];
                 if(isset($_POST['submit']))
                 {
                $conn=mysqli_connect("localhost","root","","file_system");
                if(mysqli_connect_error($conn))
               {
	          die("connection failed ".mysqli_connect_error());
               }
             else{
	             echo "Connection establish successfully";
               $query="INSERT INTO register(full_name,email,username,password)VALUES('$name','$email','$username','$password')";
               echo mysqli_query($conn,$query);
	             }
               mysqli_close($conn);
               }
	  	?>
	   <script type="text/javascript">
		window.location="http://localhost/mini_project/login.php";
	   </script>
<?php
endif;
?>
</div>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>
