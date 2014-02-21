<?php include("includes/seguridad.php"); ?>
<?php include("includes/cabecera.php"); ?>
<?php include("includes/menus.php"); ?>

<div class="margenes">
<?php	
	if (isset ($_POST['submit'])){

		if ($_POST['titulo']!="" && $_POST['enlace']!="" && $_POST['descripcion']!="" && $_POST['precio']!=""){
			include('../DB/connexio-db.php');
			$database="23904_telefonoes";
			mysql_select_db("$database", $link);
			
			$titulo=$_POST['titulo'];
			$proveedor=$_POST['proveedor'];
			$categoria=$_POST['categoria'];
			$fabricant=$_POST['fabricant'];
			$enlace=htmlEntities($_POST['enlace']);
			$descripcion=$_POST['descripcion'];
			$precio=$_POST['precio'];
			
			$C=sprintf("INSERT INTO anuncios (titulo,proveedor,categoria,fabricant,enlace,descripcion,precio,activo) VALUES ('$titulo','$proveedor','$categoria','$fabricant','$enlace','$descripcion','$precio','0');");

			$resultado=mysql_query($C,$link);
			if (!$resultado){ echo "Ha ocorregut un error donant d'alta l'anunci. Consulta: $C"; }
			else{
				echo '<h1>Gestor d\'anuncis</h1>';			
				echo '<input type="button" name="anunci_crear" value="Alta nou anunci" onClick="location.href=\'anunci_crear.php\'" />';
				echo '<input type="button" name="anuncis_crear" value="Gestió anuncis" onClick="location.href=\'gestio_anuncis.php\'" />';
				echo "<table cellpadding='20'>";
				echo "<tr><td colspan='2'>Anunci donat d'alta correctament</td></tr>";
				echo "<tr><th>Titol:</th><td>$titulo</td></tr>";
				echo "<tr><th>Proveïdor:</th><td>$proveedor</td></tr>";
				echo "<tr><th>Categoria:</th><td>$categoria</td></tr>";
				echo "<tr><th>Fabricant:</th><td>$fabricant</td></tr>";
				echo "<tr><th>Enllaç/anunci:</th><td>$enlace</td></tr>";
				echo "<tr><th>Descripció:</th><td>$descripcion</td></tr>";
				echo "<tr><th>Preu:</th><td>$precio</td></tr>";
				echo "</table>";
			}
		} else header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/anunci_crear.php?err=23");
 
	}else{
		echo '<h1>Crear nou anunci</h1>';
		echo '<input type="button" name="anunci_crear" value="Alta nou anunci" onClick="location.href=\'anunci_crear.php\'" />';
		echo '<input type="button" name="anuncis_crear" value="Gestió anuncis" onClick="location.href=\'gestio_anuncis.php\'" />';
		
		include('../DB/connexio-db.php');
		$database="23904_telefonoes";
		mysql_select_db("$database", $link);
		
		$C="SELECT company FROM proveedores ORDER BY company ASC";  
		$resultadoPro=mysql_query($C,$link);

		$C="SELECT categoria FROM categorias ORDER BY categoria ASC";  
		$resultadoCat=mysql_query($C,$link);
		
		$C="SELECT marca FROM fabricant ORDER BY marca ASC";
		$resultadoFab=mysql_query($C,$link);
		
		echo '<form method="post" action="anunci_crear.php"><table cellpadding="20">';
			echo '<tr><th><b>Titol</b></th><td><input type="text" name="titulo" size="50" value="Titol anunci" /></td></tr>';
			if ($row = mysql_fetch_array($resultadoPro)){
				echo '<tr><th><b>Companyia</b></th><td><select name="proveedor">';
				do{
					echo '<option value="'.$row['company'].'">'.$row['company'].'</option>';
				}while($row = mysql_fetch_array($resultadoPro));
				echo '</select></td></tr>';
			}
			if ($row = mysql_fetch_array($resultadoCat)){
				echo '<tr><th><b>Categoria</b></th><td><select name="categoria">';
				do{
					echo '<option value="'.$row['categoria'].'">'.$row['categoria'].'</option>';
				}while($row = mysql_fetch_array($resultadoCat));
				echo '</select></td></tr>';
			}
			if ($row = mysql_fetch_array($resultadoFab)){
				echo '<tr><th><b>Fabricant</b></th><td><select name="fabricant">';
				do{
					echo '<option value="'.$row['marca'].'">'.$row['marca'].'</option>';
				}while($row = mysql_fetch_array($resultadoFab));
				echo '</select></td></tr>';
			}
			echo '<tr><th><b>Enllaç</b></th><td><textarea rows="4" cols="80" name="enlace">Copiar enllaç</textarea></td></tr>';
			echo '<tr><th><b>Descripció</b></th><td><textarea rows="4" cols="80" name="descripcion">Explicar descripció oferta</textarea></td></tr>';
			echo '<tr><th><b>Preu</b></th><td><input type="text" name="precio" value="0" /></td></tr>';
			echo '<tr><th></th><td><input type="submit" name="submit" value="Guardar anunci" /></td></tr>';
			if ($_GET['err']==22) echo '<tr><th></th><td>Ha ocorregut un error inesperat</td></tr>';
			else if ($_GET['err']==23)echo '<tr><th></th><td>Falten camps per omplir</td></tr>';
		echo '</table></form>';
		
		include('../DB/connexio-tanca-db.php');
	}
?>

</div>
<?php include("includes/pie.php"); ?>