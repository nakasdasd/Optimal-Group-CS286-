<?php
  include("sql/db.php");  

	$id =$_REQUEST['ID'];
	$type =$_REQUEST['TYPE'];
	
	// sending query
	$sql ="DELETE FROM `$type` WHERE `name` = '$id'";
	mysql_query($sql)
	or die(mysql_error());  	
	if ($type == 'list') header("Location: tdl.php");
	else if ($type == 'raw_cord') header("Location: rawcord.php");
	else if ($type == 'hose_cord') header("Location: hosecord.php");
	else if ($type == 'seller') header("Location: sale.php");
?>