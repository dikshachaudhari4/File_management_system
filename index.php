<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File system</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>

</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
				<ul id="navigation">
					<li class="selected">
						<a href="index.php">Home</a>
					</li>
					<li class="menu">
						<a href="login.php">Logout</a>
						<ul class="secondary">
							<li>
								<a href="login.php">Logout</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div><br><br>
		<div id="body" class="home">
			<form action="index.php" method="get">
			<div class="header" align="center">
				<!-- <img src="images/bg-home.jpg" alt="">
				<div> -->
					<!-- <a href="product.html">Freeze Delight</a>
				</div> -->
				<h2>Welcome To File Management System</h2>
			</div><br><br>
			<div class="container" >
			<div class="body">
				<div class="row" >
					<div class="col-md-6" align="center">
						<br>
						<h2>Click Here To Create Folder</h2>
				  <img src="images/icon3.png" alt="submit" width="150" height="150" style="float:left"><br><br>
				 <div class="alert alert-info text-successs" align="left">
				 	<input class="btn btn-primary" type="submit" name="btn1" value="Create Folder"><br>
				 	<?php
                    if(isset($_GET['btn1'])):?>
                     Enter Folder Name :
                    <input type="text" name="name1"><div><br>
                    <input type="submit" name="create"></div></form>
                     <?php 
                     endif;
                   @$name=$_GET['name1'];
                    if(@isset($_GET['create']))
                   {
                      if(@mkdir($name)) 
	                      echo "<br><strong>$name folder created successfully</strong>";
	                  else
	                      echo "<br><strong>$name folder already exists</strong>";	
                   }
                  ?>
				</div>
					</div>
					<div class="col-md-6"><br>
						<h2>Click Here To remove Folder</h2>
						<img src="images/icon2.png" alt="submit" width="150" height="150"style="float:left">
						<br><br>
						<div class="alert alert-info text-successs" align="left">
						<input class="btn btn-primary" type="submit" name="btn2" value="Delete Folder"><br>
						<?php
                    if(isset($_GET['btn2'])):?>
                     Enter Folder Name :
                    <input type="text" name="name2"><div><br>
                    <input type="submit" name="delete"></div></form>
                     <?php 
                     endif;
                   @$name=$_GET['name2'];
                    if(@isset($_GET['delete']))
                   {
                      if(@rmdir($name)) 
	                      echo "<br><strong>name folder Deleted successfully</strong>$";	
	                  else
	                      echo "<br><strong>$name Folder Doesnt Exists</strong>";
                   }
                  ?>
                    </form>
				   </div>
					</div>
				</div>
				<div class="row justify-content-center ">
					<div class="col-6 " >
						<br>
						<h2 >Click Here To Upload File</h2>
						<img src="images/icon4.png" alt="" style="float:left;"width="150" height="150"><br>
						<div class="alert alert-info text-successs" align="left"><br>
						<form action="index.php" method="post" enctype="multipart/form-data">
							<input type="file" name="image">
							<input type="submit" name="">
						</form><br>
						<?php
						if(isset($_FILES['image']))
						{
							$file_name=$_FILES['image']['name'];
							$file_size=$_FILES['image']['size'];
							$file_tmp=$_FILES['image']['tmp_name'];
							$file_type=$_FILES['image']['type'];
							@$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
							$extension=array("jpeg","jpg","png");
							$errors=array();
							if(in_array($file_ext,$extension)===false)
							{
								$errors[]="Extension Not Allowed";
							}
							if($file_size>2097152)
							{
								$errors[]="file size must be exactly 2MB";
							}
							if(empty($errors)==true)
								{
									move_uploaded_file($file_tmp,"File_upload/".$file_name);
									echo "File upload Successful";
								}
								else{
								print_r($errors);
							   }
							}
						?>
					</div>
				</div>
			</div>
			<br><br>
		</div> 
			<div class="footer">
				<div>
					<ul>
						<li>
							<a href="product.html" class="product"></a>
							<h1>PRODUCTS</h1>
						</li>
						<li>
							<a href="about.html" class="about"></a>
							<h1>OUR STORY</h1>
						</li>
						<li>
							<a href="product.html" class="flavor"></a>
							<h1>FLAVORS</h1>
						</li>
						<li>
							<a href="contact.html" class="contact"></a>
							<h1>OUR LOCATION</h1>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">facebook</a>
					<a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">twitter</a>
					<a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
					<a href="http://pinterest.com/fwtemplates/" class="pinterest">pinterest</a>
				</div>
				<p>&copy; 2023 Freeeze. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>