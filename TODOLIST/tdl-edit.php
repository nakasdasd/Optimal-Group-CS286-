<?php
require("sql/db.php");
$id =@$_REQUEST['ID'];

$result = mysql_query("SELECT * FROM list WHERE name  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		$rName = $test['name'];
		$rDate = $test['date'];
		$rMark = $test['detail'];
		$rPri = $test['priority'];
		$rDone = $test['done'];
		

if(isset($_POST['save']))
{	
echo "Saved!";

	$rDateS = $_POST['rDate'];
	$rMarkS = $_POST['rMark'];
	$rPri = $_POST['rPri'];
	$rDoneS = $_POST['rDone'];

	$sql ="UPDATE list SET  `date`='$rDateS', `detail`='$rMarkS', `done`='$rDoneS', `priority`='$rPri'
		WHERE `name` = '$id';";

	
	mysql_query($sql)
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: tdl.php");	
	
}
mysql_close($conn);
?>


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
			function check(myForm) {
				if (myForm.rDate.value != ""
				&&myForm.rMark.value != ""
				&&myForm.rDetail.value != ""
				&&myForm.rDone.value != ""){
				return (true)
			}
			alert("โปรดตรวจสอบข้อมูลของท่านให้ครบถ้วน!");return (false)
			}
			
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
								<!--<li><a href="#">New Order</a></li> -->
								<li><a href="tdl.php">View Data</a></li>
								<!--<li><a href="#">This Month</a></li> -->
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

						<!-- Search 
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>
						-->
						
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
								
								<h3>Edit Data</h3>
									<form  onSubmit="return check(this)" method="post">
								
									  <div class="row uniform">
									  
										<div class="12u$(xsmall)">
										  <h6>Order Name</h6>
										  <span class="button disabled"  ><?php echo "&nbsp&nbsp&nbsp&nbsp&nbsp      $rName    &nbsp&nbsp&nbsp&nbsp&nbsp" ?></span>
											
										</div>
										<div class="2u$">
										  <h6>Due Date</h6>
										  <input type="date" name="rDate" id="rDate"  min = <?php echo date("Y-m-d"); ?> value="<?php echo "$rDate" ?>"required  >
										</div>
										
										<div class="6u 12u$">
											<h6>Detail</h6>
												<textarea name="rMark" id="rMark"  placeholder="Enter your list-detail" rows="6" required ><?php echo "$rMark" ?></textarea>
										</div>	

										<div class="6u 12u$">
											<h6>Priority</h6>
											<div class="select-wrapper">
													<select name="rPri" id="rPri"  type="text">
														<option value="0">Normal</option>	
														<option value="1">Important</option>	
														<option value="2">Very Important</option>
													</select>
											</div>
										</div>
										
										<div class="6u 12u$">
											<h6>Status</h6>
											<div class="select-wrapper">
													<select name="rDone" id="rDone"  type="text" required >
														<option value=""> -- select -- </option>	
														<option value="Pending">Pending</option>	
														<option value="Done">Complete</option>
														</select>
											</div>
										</div>
										 
								<footer>
									<ul class="actions">
									
									<li>
									<input type="submit" name="save" value="Submit">
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
								</footer>
							</article>
	


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
