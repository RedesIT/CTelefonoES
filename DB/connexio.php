<?php					
	$hostname="localhost";
	$user="telefonoes";
	$password="tornamaker84.";
	$link = mysql_connect("$hostname", "$user", "$password");
	if (!$link) {
		die('No ha sigut possible establir la connexió: ' . mysql_error());
	}else
?>