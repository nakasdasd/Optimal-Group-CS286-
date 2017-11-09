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
$rName = $_REQUEST['rName'];
$rDate = $_REQUEST['rDate'];
$rMark = $_REQUEST['rMark'];
$rDone = $_REQUEST['rDone'];
$Maker = $_SESSION["C_ID"];

echo ""+$rDate;


$sql ="INSERT INTO list(`name`, `date`, `detail`, `done`, `EmployeeNo`)
		VALUES('".$rName."','".$rDate."','".$rMark."','".$rDone."','".$Maker."');";

		echo " \n $sql";
if($conn->query($sql)===TRUE){
	echo "New Records sql Created Successfully";
}else{
	echo "Error".$sql. "<br>" .$conn->error;
}
$conn->close();		

header("Location: home.php");

?>