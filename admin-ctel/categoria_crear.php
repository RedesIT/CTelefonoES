<?php include("includes/seguridad.php"); ?>
<?php include("includes/cabecera.php"); ?>
<?php include("includes/menus.php"); ?>

<div class="margenes">
	<h1>Crear categoria</h1>
	<input type="button" name="categoria_crear" value="Crear categoria" onClick="location.href='categoria_crear.php'" />
	<input type="button" name="gestio_categories" value="Gestió de categories" onClick="location.href='gestio_categories.php'" />
	<form action="form/categoria_alta.php" method="post">
		<table cellpadding='20'>
		<tr><th><b>Categoria</b></th><td><input type="text" name="categoria" value="" /></td></tr>
		<tr><td></td><td><input type="submit" name="submit" value="Crear" /></td></tr>
		<?php
			if ($_GET['err']==23) echo '<tr><td></td><td>Tots els camps son obligatoris</td></tr>';
			else if ($_GET['err']==22) echo '<tr><td></td><td>Ha ocorregut un error inesperat</td></tr>';
			else if ($_GET['err']==1) echo '<tr><td></td><td>Categoria creada correctament</td></tr>';
		?>
		</table>	
	</form>

</div>
<?php include("includes/pie.php"); ?>