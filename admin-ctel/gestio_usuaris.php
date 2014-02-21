<?php include("includes/seguridadAdmin.php"); ?>
<?php include("includes/cabecera.php"); ?>
<?php include("includes/menus.php"); ?>

<div class="margenes">

<?php
	echo '<h1>Gestor d\'usuaris</h1>';
	
	include('../DB/connexio-db.php');
	$database="23904_telefonoes";
	mysql_select_db("$database", $link); 
	
	echo '<input type="button" name="usuari_crear" value="Alta nou usuari" onClick="location.href=\'usuari_crear.php\'" />';
	echo '<input type="button" name="gestio_usuaris" value="Gestió d\'usuaris" onClick="location.href=\'gestio_usuaris.php\'" />';
	
	echo "<table cellpadding='20'>";
		echo "<tr>";
			echo "<th><b>id</b></th>";
			echo "<th><b>Usuari</b></th>";
			echo "<th><b>Nivell d'accès</b></th>";
			echo "<th><b>Editar</b></th>";
			echo "<th><b>Eliminar</b></th>";
			echo '<th><b>Estat</b></th>';
		echo "</tr>";		
	$C="SELECT id,usuari,nivell_acces,actiu FROM admin ORDER BY id";  
	$resultado=mysql_query($C,$link);
	if ($row = mysql_fetch_array($resultado)){
		do {
			if ($row["actiu"]==0){ echo '<tr bgcolor="#ffdad7">'; }
				echo '<td>'.$row["id"].'</td>';
				echo '<td>'.$row["usuari"].'</td>';
				if ($row["nivell_acces"]==1) echo '<td>Admin</td>';
				else echo '<td>Redactor</td>';
				echo '<td><a href="usuari_editar.php?id='.$row["id"].'" title="EDITAR"><img src="editar.png" alt="" /></a></td>';
				echo '<td><a onclick="return confirm(\'Acció eliminar: '.$row["usuari"].'\n\nEstàs segur?\');" href="usuari_eliminar.php?id='.$row["id"].'" title="ELIMINAR"><img src="eliminar.png" alt="" /></a></td>';
				if ($row["actiu"]==0) echo '<td><a href="usuari_activar.php?id='.$row["id"].'" title="Estat: DESACTIVAT"><img src="gris.png" alt="" /></a></td>';
				else if ($row["actiu"]==1) echo '<td><a href="usuari_desactivar.php?id='.$row["id"].'" title="Estat: ACTIVAT"><img src="verde.png" alt="" /></a></td>';
			echo '</tr>';
		} while ($row = mysql_fetch_array($resultado));		
	}
	echo '</table>';
	include('../DB/connexio-tanca-db.php');
?>

</div>
<?php include("includes/pie.php"); ?>