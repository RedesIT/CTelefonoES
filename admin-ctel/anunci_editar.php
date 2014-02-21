<?php 
include("includes/seguridad.php"); 
include("includes/cabecera.php"); 
include("includes/menus.php"); 
?>
<div class="margenes">

<?php
	echo '<div class="clear"></div>';
	include('../DB/connexio-db.php');
	$database="23904_telefonoes";	
	mysql_select_db("$database", $link);
	
	if (isset($_POST['submitActualitza'])){
		$C="UPDATE anuncios SET titulo='".$_POST["titulo"]."',categoria='".$_POST["categoria"]."',fabricant='".$_POST["fabricant"]."',descripcion='".$_POST["descripcion"]."',precio='".$_POST["precio"]."' WHERE id='".$_POST['id']."'";
		$resultado=mysql_query($C,$link);
		if (!$resultado){ echo "Error guardant dades"; }
		else { echo "Anunci modificat correctament"; }
	}
	
	
	$C="SELECT id,titulo,proveedor,categoria,fabricant,enlace,descripcion,precio FROM anuncios WHERE id='".$_GET['id']."'";  
	$resultado=mysql_query($C,$link);
	
	$C="SELECT company FROM proveedores ORDER BY company ASC";  
	$resultadoPro=mysql_query($C,$link);

	$C="SELECT categoria FROM categorias ORDER BY categoria ASC";  
	$resultadoCat=mysql_query($C,$link);
	
	$C="SELECT marca FROM fabricant ORDER BY marca ASC";
	$resultadoFab=mysql_query($C,$link);
	
	echo '<h1>Gestor d\'anuncis</h1>';			
	echo '<input type="button" name="anunci_crear" value="Alta nou anunci" onClick="location.href=\'anunci_crear.php\'" />';
	echo '<input type="button" name="anuncis_crear" value="Gestió anuncis" onClick="location.href=\'gestio_anuncis.php\'" />';
	echo '<table cellpadding="20">';
	if ($row = mysql_fetch_array($resultado)){
		echo '<form action="anunci_editar.php" method="post">';
		echo '<tr><th>Titulo:</th><td><input type="text" name="titulo" size="50" value="'.$row["titulo"].'" /></td></tr>';
		
		if ($rowPro = mysql_fetch_array($resultadoPro)){
			echo '<tr><th><b>Companyia</b></th><td><select name="proveedor">';
			do{
				if ($rowPro['id']==$row['id']) { echo '<option value="'.$rowPro['company'].'" selected>'.$rowPro['company'].'</option>'; }
				else { echo '<option value="'.$rowPro['company'].'">'.$rowPro['company'].'</option>'; }
			}while($rowPro = mysql_fetch_array($resultadoPro));
			echo '</select></td></tr>';
		}
		
		if ($rowCat = mysql_fetch_array($resultadoCat)){
			echo '<tr><th><b>Categoria</b></th><td><select name="categoria">';
			do{
				if ($rowCat['id']==$row['id']) { echo '<option value="'.$rowCat['categoria'].'" selected>'.$rowCat['categoria'].'</option>'; }
				else { echo '<option value="'.$rowCat['categoria'].'">'.$rowCat['categoria'].'</option>'; }
			}while($rowCat = mysql_fetch_array($resultadoCat));
			echo '</select></td></tr>';
		} 
		
		if ($rowFab = mysql_fetch_array($resultadoFab)){
			echo '<tr><th><b>Fabricant</b></th><td><select name="fabricant">';
			do{
				if ($rowFab['id']==$row['id']) { echo '<option value="'.$rowFab['marca'].'" selected>'.$rowFab['marca'].'</option>'; }
				else { echo '<option value="'.$rowFab['marca'].'">'.$rowFab['marca'].'</option>'; }
			}while($rowFab = mysql_fetch_array($resultadoFab));
			echo '</select></td></tr>';
		}
		
		echo '<tr><th>Enlace:</th><td>'.$row["enlace"].'</td></tr>';
		echo '<tr><th>Descripción:</th><td><textarea rows="8" cols="80" name="descripcion">'.$row["descripcion"].'</textarea></td></tr>';
		echo '<tr><th>Precio:</th><td><input type="text" name="precio" size="50" value="'.$row["precio"].'" /></td></tr>';
		echo '<input type="hidden" name="id" value="'.$row["id"].'" />';
		echo '<tr><th></th><td><input type="submit" name="submitActualitza" size="70" value ="Actualitza" /></td></tr>';
		
		echo '</form>';
	}
	echo '</table>';
	include('../DB/connexio-tanca-db.php');
?>

</div>
<?php include("includes/pie.php"); ?>