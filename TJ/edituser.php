<!DOCTYPE HTML>
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
	<SCRIPT LANGUAGE="JavaScript">
			
			function checkDelete(){
			return confirm('คุณต้องการจะลบหรือไม่ ข้อมูลจะสูญหายและไม่อาจกู้คืนได้?');
		}
		</script>

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

						

						<!-- Links -->
							<section>
								<ul class="links">
									<li>
										<a href="rawcord.php">
											<h3>Raw Cord</h3>
											<p>view more</p>
										</a>
									</li>
									<li>
										<a href="dipcord.php">
											<h3>Dip Cord</h3>
											<p>view more</p>
										</a>
									</li>
									<li>
										<a href="hosecord.php">
											<h3>Hose Cord</h3>
											<p>View more</p>
										</a>
									</li>
									<li>
										<a href="sale.php">
											<h3>Sale</h3>
											<p>View more</p>
										</a>
									</li>
								</ul>
							</section>

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
									  </div>
									</div>
							</header>
							
							 <h2>View and Manage Users</h2> <h1>(All User In Web)</h1>
								<br>
								<table class="alt">
											<thead>
												<tr>
													<th>Username</th>
													<th>Password</th>
													<th>First name</th>
													<th>Last name</th>
													<th>E_mail</th>
													<th>Type</th>

												</tr>
											</thead>
											<tbody>
											
											<?php
												include("sql/db.php");
												session_start();
												
												$result=mysql_query("SELECT * FROM employee WHERE 1");
													while($test = mysql_fetch_array($result))
													{
													$id = $test['Username'];	
													echo "<tr align='center'>";	
													echo"<td><font color='blue'>". $test['Username']. "</font></td>";	
													echo"<td><font color='green'>". $test['Password']. "</font></td>";
													echo"<td><font color='black'>". $test['Fname']. "</font></td>";
													echo"<td>". $test['Lname']. "</td>";	
													echo"<td>" .$test['E_mail']."</td>";
													echo"<td>" .$test['Type']."</td>";
													
													$type = $_SESSION["C_TYPE"];
													if($type == 9 ){
													echo"<td><font color='red'> <a href ='del-user.php?ID=$id&TYPE=employee' onclick='return checkDelete()' <center>Delete</center></font></a>";
													}						
													echo "</tr>";
													}
													
												
												mysql_close($conn);
												?>
												
											</tbody>
										
	  </table>
									<form method="post" action="#">
									
	 
							</article>

						<!-- Post -->
							<div align="center">
								<ul class="actions pagination">
								<center>
								<?php
								echo"<li><a href='#' class='button big'>Scroll to top</a></li>";
								echo"<li><a href='home.php' class='button big'>Go Home</a></li>";
								?>
								
				
								</ul>
								</div>
						<!-- Pagination -->
							

		  </div>

	  <!-- Sidebar -->
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
