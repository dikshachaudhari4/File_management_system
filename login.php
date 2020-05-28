<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V13</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts1/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts1/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="fonts1/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css1/util.css">
	<link rel="stylesheet" type="text/css" href="css1/main.css">

</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="login.php" method="post">
					<span class="login100-form-title p-b-59">
						login
					</span>
                   <div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username2" placeholder="Username...">
						<span class="focus-input100"></span>
						<?php
						if(!preg_match('/^[A-Za-z0-9_@]{3,7}$/',@$_POST['username2'])):?>
						  <div class="alert alert-warning text-danger" align="left">
						  	<h6> Enter Valid Username</h6>
						  </div>
						<?php endif;?>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="text" name="pass2" placeholder="*************">
						<span class="focus-input100"></span>
						<?php
						if(!preg_match('/^[A-Za-z0-9!#$%^&*()_@]{3,13}$/',@$_POST['username2'])):?>
						  <div class="alert alert-warning text-danger" align="left">
						  	<h6> Enter Valid Password</h6>
						  </div>
						<?php endif;?>
					</div>
					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit2">
								Sign In
							</button>
						</div>

						<a href="Register.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign Up
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
                     </div>
                </form><br><br>
                 <div class="alert alert-warning text-danger" align="left">
                 <?php
                 echo"Registeration Successfull<br>";
                 @$pass=$_POST['pass2'];
                 @$username2=$_POST['username2'];
               if(isset($_POST['submit2']))
               {
                $conn=mysqli_connect("localhost","root","","file_system");
              if(mysqli_connect_error($conn))
              {
	             die("connection failed ".mysqli_connect_error());
               }
            else{
             
	        $query2="select password from register where (password='$pass'&& username='$username2') ";
	         $result=mysqli_query($conn,$query2);
	       if(mysqli_num_rows($result)>0)
	       {
          header('Location:http://localhost/mini_project/index.php');
	      }
	     else
	        {
          echo "Username And Password Missmatch...!!!";
           }
	
         }
     mysqli_close($conn);
}
?>
                 </div>
			</div>

		</div>
	</div>
	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>

</body>
</html>
