<?php
session_start();
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "tdl";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed:" .$conn->connect_error);
}
$strSQL = "SELECT * FROM employee WHERE Username=
		'".$_REQUEST['name']."' 
		and Password= '".$_REQUEST['pass']."'";
$objQuerySQL = $conn->query($strSQL);
$objResult = $objQuerySQL->fetch_array();
if(!$objResult){
	echo "username or password incorrect";
	header("Location: index.php?error=98");
}else {
	$_SESSION["C_ID"] = $objResult['Username'];
	$_SESSION["C_PASS"] = $objResult['Password'];
	$_SESSION["C_NAME"] = $objResult['Fname'];
	$_SESSION["C_LNAME"] = $objResult['Lname'];
	$_SESSION["C_EMAIL"] = $objResult['E_mail'];
	$_SESSION["C_TYPE"] = $objResult['Type'];
	session_write_close();
	if($_SESSION["C_TYPE"]>0){
		header("location:home.php");
	}else{
		session_destroy();
		header("location:index.php");
	}
}
mysql_close();

?>