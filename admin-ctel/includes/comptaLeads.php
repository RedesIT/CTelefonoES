<?php 
	include('../DB/connexio-db.php');
	$database="23904_telefonoes";
	mysql_select_db("$database", $link);
	$C="SELECT COUNT(*) FROM boletin";  
	$resultado=mysql_query($C,$link);
	if ($row = mysql_fetch_array($resultado)){
		do {
			echo $row[0];
		} while ($row = mysql_fetch_array($resultado));
	}	
?>