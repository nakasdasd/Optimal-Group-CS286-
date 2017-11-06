<?php
print_r($_REQUEST);
session_start();
$servername ="localhost";
$username = "tsthcom_tdl";
$password = "123456";
$dbname = "tsthcom_tdl";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed:" .$conn->connect_error);	
}
$rPass1 = $_REQUEST['rNew'];
$rPass2 = $_REQUEST['rNew2'];
$rPass3 = $_REQUEST['rOld'];
$rPass4 = $_SESSION["C_PASS"];
$id = $_SESSION["C_ID"];



if(($rPass1 == $rPass2) && ($rPass3 == $rPass4)){
$sql ="UPDATE `employee` SET `Password`= '$rPass1'  WHERE `Username` = '$id'";


if($conn->query($sql)===TRUE){
	echo "New Records sql Created Successfully";
	$_SESSION["C_PASS"] = $rPass1;
}else{
	echo "Error".$sql. "<br>" .$conn->error;
}
$conn->close();		
header("Location: home.php");
}
else{
	echo $rPass1;
	echo "<br>";
	echo $rPass2;
	echo "<br>";
	echo $rPass3;
	echo "<br>";
	echo $rPass4;
	//header("Location: editprofile.php");
	
}
?>