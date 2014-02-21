<?php include("includes/seguridad.php"); ?>
<?php include("includes/cabecera.php"); ?>
<?php include("includes/menus.php"); ?>

<div class="margenes">

<?php

	echo '<h1>Gestor d\'anuncis</h1>';
	include('../DB/connexio-db.php');
	$database="23904_telefonoes";
	mysql_select_db("$database", $link);
	
	echo '<input type="button" name="anunci_crear" value="Alta nou anunci" onClick="location.href=\'anunci_crear.php\'" />';
	echo '<input type="button" name="anuncis_crear" value="Gestió anuncis" onClick="location.href=\'gestio_anuncis.php\'" />';
	
	echo "<table cellpadding='20'>";
		echo "<tr>";
		echo "<th><b>ID</b></th>";
		echo "<th><b>Titol</b></th>";
		echo "<th><b>Categoria</b></th>";
		echo "<th><b>Fabricant</b></th>";
		echo "<th><b>Enllaç</b></th>";
		echo "<th><b>Descripció</b></th>";
		echo "<th><b>Preu</b></th>";
		echo '<th><b>Editar</b></th>';
		echo '<th><b>Eliminar</b></th>';
		echo '<th><b>Estat</b></th>';
		echo "</tr>";		
	$C="SELECT id,titulo,categoria,fabricant,enlace,descripcion,precio,activo FROM anuncios ORDER BY id DESC";  
	$resultado=mysql_query($C,$link);
	if ($row = mysql_fetch_array($resultado)){
		do {
			if ($row["activo"]==0){ echo '<tr bgcolor="#ffdad7">'; }
			else { echo '<tr>'; }
			echo '<td>'.$row["id"].'</td>';
			echo '<td>'.$row["titulo"].'</td>';
			echo '<td>'.$row["categoria"].'</td>';
			echo '<td>'.$row["fabricant"].'</td>';
			echo '<td>'.$row["enlace"].'</td>';
			echo '<td>'.$row["descripcion"].'</td>';
			echo '<td>'.$row["precio"].'</td>';
			echo '<td><a href="anunci_editar.php?id='.$row["id"].'" title="EDITAR"><img src="editar.png" alt="" /></a></td>';
			echo '<td><a onclick="return confirm(\'Acció eliminar: '.$row["titulo"].'\n\nEstàs segur?\');" href="anunci_eliminar.php?id='.$row["id"].'" title="ELIMINAR"><img src="eliminar.png" alt="" /></a></td>';
			if ($row["activo"]==0) echo '<td><a href="anunci_activar.php?id='.$row["id"].'" title="Estat: Inactiu"><img src="gris.png" alt="" /></a></td>';
			else if ($row["activo"]==1) echo '<td><a href="anunci_desactivar.php?id='.$row["id"].'" title="Estat: Actiu"><img src="verde.png" alt="" /></a></td>';
			echo '</tr>';
		} while ($row = mysql_fetch_array($resultado));		
	}
	echo '</table>';
	include('../DB/connexio-tanca-db.php');
?>

</div>
<?php include("includes/pie.php"); ?>