<?php include("includes/seguridadAdmin.php"); ?>
<?php include("includes/cabecera.php"); ?>
<?php include("includes/menus.php"); ?>

<div class="margenes">

<?php
	echo '<h1>Gestor de prove�dors</h1>';
	
	include('../DB/connexio-db.php');
	$database="23904_telefonoes";
	mysql_select_db("$database", $link); 
	echo '<input type="button" name="proveidor_crear" value="Afegir prove�dor" onClick="location.href=\'proveidor_crear.php\'" />';
	echo '<input type="button" name="gestio_proveidors" value="Gesti� de prove�dors" onClick="location.href=\'gestio_proveidors.php\'" />';
	echo "<table cellpadding='20'>";
		echo "<tr>";
			echo "<th><b>id</b></th>";
			echo "<th><b>Prove�dor</b></th>";
			echo "<th><b>Eliminar</b></th>";
		echo "</tr>";		
	$C="SELECT id,company FROM proveedores ORDER BY id ASC";  
	$resultado=mysql_query($C,$link);
	if ($row = mysql_fetch_array($resultado)){
		do {
			echo '<tr>';
				echo '<td>'.$row["id"].'</td>';
				echo '<td>'.$row["company"].'</td>';
				echo '<td><a onclick="return confirm(\'Acci� eliminar: '.$row["company"].'\n\nEst�s segur?\');" href="proveidor_eliminar.php?id='.$row["id"].'" title="ELIMINAR"><img src="eliminar.png" alt="" /></a></td>';
			echo '</tr>';
		} while ($row = mysql_fetch_array($resultado));
		echo '</table>';
	}	
	include('../DB/connexio-tanca-db.php');
?>

</div>
<?php include("includes/pie.php"); ?>