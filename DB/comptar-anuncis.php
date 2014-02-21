<?
include('DB/connexio-db.php');
$database="23904_telefonoes";
mysql_select_db("$database", $link);
$C="SELECT COUNT(*) FROM anuncios WHERE activo='1'";  
$resultat=mysql_query($C,$link);
if ($row = mysql_fetch_array($resultat)){
	do {
		echo $row[0];
	} while ($row = mysql_fetch_array($resultat));
}
?>
