
<?php
print_r($_REQUEST);
session_start();
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "tdl";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed:" .$conn->connect_error);	
}
$name = $_REQUEST['name'];
$pass = $_REQUEST['pass1'];
$pass2 = $_REQUEST['pass2'];
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$type = $_REQUEST['type'];



if($name==""||$pass==""||$fname==""||$lname==""||$email==""||$type==""||($pass != $pass2)){
	header("Location: index.php?error=99#register");
}

else{

$sql ="INSERT INTO `employee`(`Username`, `Password`, `Fname`, `Lname`, `E_mail`, `Type`) VALUES ('".$name."','".$pass."','".$fname."','".$lname."','".$email."','".$type."');";

if($conn->query($sql)===TRUE){
	echo "New Records sql Created Successfully";
}else{
	echo "Error".$sql. "<br>" .$conn->error;
}
$conn->close();		
header("Location: index.php");
}
?>