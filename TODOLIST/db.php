<?php  
	$conn = mysql_connect('tsthcom_tdl', 'tsthcom_tdl', '123456');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("tdl", $conn);
?>

