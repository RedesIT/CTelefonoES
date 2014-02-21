<?php
	include('../DB/connexio-db.php');
	{
	$id = $_GET["id"];
	$database="23904_telefonoes";
	mysql_select_db("$database", $link);
	$C="UPDATE anuncios SET activo = 1 WHERE id = $id";
	$resultado=mysql_query($C,$link);
	mysql_close($link);
		header ("Location: gestio_anuncis.php");
	}
?>