<!DOCTYPE HTML>

<?php
//error_reporting(E_ALL ^ E_NOTICE);
session_start();
$fName = $_SESSION['C_NAME'];
$lName = $_SESSION['C_LNAME'];
$id = $_SESSION["C_ID"] ;
$email = $_SESSION["C_EMAIL"] ;
$type = $_SESSION["C_TYPE"];
if ($type==1) $type2 = "Dip-Cord Manager" ;
else if ($type==1) $type2 = "Dip-Cord Manager" ;
else if ($type==2) $type2 = "Raw-Cord Manager" ;
else if ($type==3) $type2 = "Hose-Cord Manager" ;
else if ($type==4) $type2 = "Seller Manager" ;
else if ($type==9) $type2 = "Administrator" ;
?>

<html>
	<head>
		<title>TEIJIN</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css2/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="icon" href="images/icon.png">
	</head>
	

		
		
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="home.php">Home</a></h1>
					
						<nav class="main">
							<ul>
								
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

					

						

						<!-- Actions -->
							<section>
								<ul class="actions vertical">
									<li><a href="logout.php" class="button big fit">Logout</a></li>
								</ul>
							</section>

					</section>

				<!-- Main -->
			  <div id="main">

						<!-- Post -->
							<article class="post">
								<header>
							<div class="title">
										<div align="center">
										<img src="images/tlogo.png" width="300">
								<header>
								  <h4>Optimize For Future, Optimal Solutions</h4>
								 </header>			
						
								</header>	
								
								<h3>Edit Password</h3>
									<form  onSubmit="return check(this)" method="post" action="editprofile-sql.php">
									 
									  
									  <div class="4u 12u$(xsmall)">
											<h6>Username :<font color='green'> <?php echo $id ?></font></h6>
											<h6>Email : <font color='green'><?php echo $email ?></font></h6>
											
										</div>
										
										<div class="5u 12u$(xsmall)">
											
										</div>
										
										<div class="6u 12u$(xsmall)">
										  <h6>First Name : <font color='green'><?php echo $fName ?></font></h6>
										  
										</div>
										
										<div class="6u 12u$(xsmall)">
											<h6>Last Name : <font color='green'><?php echo $lName ?></font></h6>
											
										</div>
										
										<div class="6u 12u$(xsmall)">
											<h6>Type : <font color='red'> <?php echo $type2 ?> </font></h6>
										
										</div>
										
										<div class="6u 12u$(xsmall)">
											<h6>Old password</h6>
											<input type="password" name="rOld" id="rOld" value="" placeholder="Enter Old Password" />
										</div>
										
										<div class="6u 12u$(xsmall)">
											<h6>New Password</h6>
											<input type="password" name="rNew" id="rNew" value="" placeholder="Enter New Password" />
										</div>
										
										<div class="6u 12u$(xsmall)">
											<h6>Re-New Password</h6>
											<input type="password" name="rNew2" id="eNew2" value="" placeholder="Re Enter New Password)" />
										</div>
										
										<br>
										
										 
								<footer>
									<ul class="actions">
									
									<li>
									<input type="submit" value="Submit">
									<input type="reset" value="Reset" />
									</li>
									</ul>
<!--
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon fa-heart">28</a></li>
										<li><a href="#" class="icon fa-comment">128</a></li>
									</ul>
-->								
									</form>
								</footer>
							</article>

						

						<!-- Pagination -->
							<ul class="actions pagination"> 
								<center>
								<?php
								echo"<li><a href='#' class='button big'>Scroll to top</a></li>";
								echo"<li><a href='home.php' class='button big'>Go Home</a></li>";
								?>
							</ul>

					</div>


			</div>

		<!-- Scripts -->
			<script src="assets/js2/jquery.min.js"></script>
			<script src="assets/js2/skel.min.js"></script>
			<script src="assets/js2/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js2/main.js"></script>

	</body>
</html><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
