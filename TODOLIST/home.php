<?php
//error_reporting(E_ALL ^ E_NOTICE);
session_start();
$date = date("d M Y");
$time = date("H:i:s");
$fName = $_SESSION['C_NAME'];
$lName = $_SESSION['C_LNAME'];
$id = $_SESSION["C_ID"] ;
$email = $_SESSION["C_EMAIL"] ;
$type = $_SESSION["C_TYPE"];

if ($type==1) $type2 = "User Manager" ;
else if ($type==9) $type2 = "Administrator" ;

?>

<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>To Do List</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css2/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="icon" href="images/icon2.png">
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="home.php">Home</a></h1>
						<nav class="links">
<!---->
							<ul>
								<li><a href="ndone.php">Pending</a></li>
								<li><a href="done.php">Done</a></li>
								<li><a href="#">&nbsp;</a></li>
							</ul>

						</nav>
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
							<section>
								<ul class="links">
								
									<li>
										<a href="editprofile.php">
								
											<h4>Profile</h4>
											<center><img src="images/profiles.png" width="150"></center>
											<p> Firstname : <?php echo $fName ?></p>
											<p> Lastname : <?php echo $lName ?></p>
											<p> Email : <?php echo $email ?></p>
											<p> Type : <?php echo $type2 ?></p>
											<br>
										
											<p>ท่านสามารถกดเพื่อแก้ไขพาสเวิร์สได้ที่นี่</p>
										</li></a>
										
									
									
								</ul>
								
								<div  align="center" class="actions small" >
											<ul class="actions vertical">
												<li><a href="editprofile.php" class="button small">Edit profile</a></li>
											</ul>
										</div>
										
							</section>
								
						<!-- Actions -->
							<section>
								<ul class="actions vertical">
								
									<li><a href="logout.php" class="button big fit">Log out</a></li>
								</ul>
							</section>

					</section>
					
					

				<!-- Main -->
			  <div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">ยินดีต้อนรับท่านเข้าสู่หน้าจอหลัก</a></h2>
										
										<p>ท่านสามารถสตราจสอบ List ข้อมูลทั้งหมดด้านซ้าย<br> และดูหรือแก้ไขListได้จากเมนูด้านบน</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01"> <?php echo ''.$date.'';?></time>
										<a href="#" class="author"><span class="name"><?php echo ' '.$fName.' '.$lName.''; ?> </span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<a href="#" class="image featured"><img src="images/tj2.jpg" alt="" /></a>
								
								<footer>

								</footer>
							</article>


					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<img src="images/tlogo.png" width="300">
								<header>
								  <h4>Optimize For Future, Optimal Solutions</h4>
								  </header>
							</section>
							
							<!-- Links -->
							<section>
								<ul class="actions"><center>
									<?php
													$type = $_SESSION["C_TYPE"];
													if($type  ==9){
														echo "<li><a href='edituser.php' class='button big'>Manage User</a></li>";
													echo "</section>";
													echo "<section>";
													}
									?>
										</center>
									</ul>
								<ul class="links">
									<li>
										<a href="tdl.php">
											<h3>All List</h3>
											<p>view more</p>
										</a>
									</li>
									<li>
										<a href="ndone.php">
											<h3>List of Pending</h3>
											<p>view more</p>
										</a>
									</li>
									<li>
										<a href="done.php">
											<h3>List of done</h3>
											<p>view more</p>
										</a>
									</li>
								</ul>
																
							</section>


						<!-- About -->
							<section class="blurb">
								<h2>About</h2>
								<p>The To Do List is a 2013 American romantic comedy film released on July 26, 2013.[4] Written and directed by Maggie Carey in her feature film directorial debut, the film stars Aubrey Plaza, Johnny Simmons, Bill Hader, Scott Porter, Alia Shawkat, Sarah Steele and Rachel Bilson. The film is about a recent high school graduate (Plaza), who feels she needs to have more sexual experiences before she starts college.</p>
								<img src="images/tlogo3.png" width="300">
								<ul class="actions">
									<li><a href="https://en.wikipedia.org/wiki/The_To_Do_List" class="button">Learn More</a></li>
								</ul>
							</section>

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js2/jquery.min.js"></script>
			<script src="assets/js2/skel.min.js"></script>
			<script src="assets/js2/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js2/main.js"></script>

	</body>
</html>