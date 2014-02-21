<?
$database="23904_telefonoes";
mysql_select_db("$database", $link);
$C="SELECT id,titulo,categoria,enlace,descripcion,precio FROM anuncios WHERE categoria='Empresas' AND activo='1' ORDER BY precio ASC";  
$resultado=mysql_query($C,$link);
if ($row = mysql_fetch_array($resultado)){
	do {
	echo '<div class="colIzq">';
	echo $row["enlace"];
	echo '</div>';
	} while ($row = mysql_fetch_array($resultado));
}  
?>
