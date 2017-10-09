<?php
  include("sql/db.php");  

	$id =$_REQUEST['ID'];
	$type =$_REQUEST['TYPE'];
	
	// sending query
	$sql ="DELETE FROM `$type` WHERE `CaseNo` = '$id'";
	mysql_query($sql)
	or die(mysql_error());  	
	 header("Location: product.php");
?>