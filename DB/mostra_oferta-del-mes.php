<?
$database="23904_telefonoes";
mysql_select_db("$database", $link);
$C="SELECT id,titulo,categoria,enlace,descripcion,precio FROM anuncios WHERE ofertadelmes='1'";  
$resultado=mysql_query($C,$link);
if ($row = mysql_fetch_array($resultado)){
	do {
		echo '<h3>'.$row["titulo"].'</h3>';
		echo $row["enlace"];
		echo '<p class="ofertadelmes">'.$row["descripcion"].'</p>';
	} while ($row = mysql_fetch_array($resultado));
}  
?>

 
