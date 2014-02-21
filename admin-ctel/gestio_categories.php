<?php include("includes/seguridadAdmin.php"); ?>
<?php include("includes/cabecera.php"); ?>
<?php include("includes/menus.php"); ?>

<div class="margenes">

<?php
	echo '<h1>Gestor de categories</h1>';
	
	include('../DB/connexio-db.php');
	$database="23904_telefonoes";
	mysql_select_db("$database", $link); 
	echo '<input type="button" name="categoria_crear" value="Crear categoria" onClick="location.href=\'categoria_crear.php\'" />';
	echo '<input type="button" name="gestio_categories" value="Gestió de categories" onClick="location.href=\'gestio_categories.php\'" />';
	echo "<table cellpadding='20'>";
		echo "<tr>";
			echo "<th><b>id</b></th>";
			echo "<th><b>Categoria</b></th>";
			echo "<th><b>Eliminar</b></th>";				
		echo "</tr>";
	$C="SELECT id,categoria FROM categorias ORDER BY id";  
	$resultado=mysql_query($C,$link);
	if ($row = mysql_fetch_array($resultado)){
		do {
			echo '<tr>';
				echo '<td>'.$row["id"].'</td>';
				echo '<td>'.$row["categoria"].'</td>';
				echo '<td><a onclick="return confirm(\'Acció eliminar: '.$row["categoria"].'\n\nEstàs segur?\');" href="categoria_eliminar.php?id='.$row["id"].'" title="ELIMINAR"><img src="eliminar.png" alt="" /></a></td>';				
			echo '</tr>';
		} while ($row = mysql_fetch_array($resultado));		
	}
	echo '</table>';
	include('../DB/connexio-tanca-db.php');
?>

</div>
<?php include("includes/pie.php"); ?>