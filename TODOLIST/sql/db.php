<?php  
	$conn = mysql_connect('localhost', 'tsthcom_tdl', '123456');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("tsthcom_tdl", $conn);
?>

