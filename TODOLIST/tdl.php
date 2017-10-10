<!DOCTYPE HTML>
<html>
	<head>
		<title>To Do List</title>
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
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="home.php">Home</a></h1>
						<nav class="links">
							<ul>
								<?php
								session_start();
								$type = $_SESSION["C_TYPE"];
								if($type == 9 || $type == 1 ){
								echo "<li><a href='tdl-form.php'>Add List</a></li>";
								}
								?>
							</ul>
						</nav>
						<nav class="main">
						<ul>
							<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search [ Case ]" />
									</form>
								</li>
							<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
							</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search 
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>-->

						<!-- Links -->
							<section>
								<ul class="links">
									<li>
										<a href="done.php">
											<h3>List Of Done</h3>
											<p>view more</p>
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
							
							 <h2>To Do List</h2> <h1>(View Data)</h1>
							 
							 <!--
							<div align="right">
							  <h4>Select Month</h4>
							  <input type="month" id="myMonth" value="2017-05">
								<button onclick="myFunction()">Show</button>
								<p id="demo"></p>
								<script>
									function myFunction() {
										var x = document.getElementById("myMonth").value;
										document.getElementById("demo").innerHTML = x;
								</script>
							</div>
							-->

								<table class="alt">
											<thead>
												<tr>
													<th>List name</th>
													<th>Due Date</th>
													<th>Detail</th>
													<th>Status</th>

												</tr>
											</thead>
											<tbody>
											
											<?php
												include("sql/db.php");
												
												
												$re = @$_REQUEST['query'];
												if($re!=""){
													$result=mysql_query("SELECT * FROM `list` WHERE `name` = '$re'");
													while($test = mysql_fetch_array($result))
													{
													$id = $test['name'];	
													echo "<tr align='center'>";	
													echo"<td><font color='black'>". $test['name']. "</font></td>";
													echo"<td>" .$test['date']."</td>";
													echo"<td>" .$test['detail']."</td>";
													echo"<td>". $test['done']. "</td>";
													$type = $_SESSION["C_TYPE"];
													if($type == 9 || $type == 1 ){
													echo"<td><font color='green'> <a href ='tld-edit.php?ID=$id'>Edit</a></font>";
													echo"<td><font color='red'> <a href ='del.php?ID=$id&TYPE=list' onclick='return checkDelete()' <center>Delete</center></font></a>";
													}				
													echo "</tr>";
													
													}
													
													
												}
												else{
												$result=mysql_query("SELECT * FROM list");
												while($test = mysql_fetch_array($result))
													{
													$id = $test['name'];	
													echo "<tr align='center'>";	
													echo"<td><font color='black'>". $test['name']. "</font></td>";
													echo"<td>" .$test['date']."</td>";
													echo"<td>" .$test['detail']."</td>";
													echo"<td>". $test['done']. "</td>";
					
													$type = $_SESSION["C_TYPE"];
													if($type == 9 || $type == 1 ){
													echo"<td><font color='green'> <a href ='tdl-edit.php?ID=$id'>Edit</a></font>";
													echo"<td><font color='red'> <a href ='del.php?ID=$id&TYPE=list' onclick='return checkDelete()' <center>Delete</center></font></a>";
													}							
													echo "</tr>";
													}
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
								if($re!="")echo" <li><a href='dipcord.php' class='button big'>All data</a></li>";
								echo"<li><a href='#' class='button big'>Scroll to top</a></li>";
								echo"<li><a href='home.php' class='button big'>Go Home</a></li>";
								?>
								
								<!--
									<li><a href="" class="disabled button big previous">Previous Page</a></li>
									<li><a href="#" class="button big next">Next Page</a></li>
								-->
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
