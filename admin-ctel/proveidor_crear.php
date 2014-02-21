<?php include("includes/seguridad.php"); ?>
<?php include("includes/cabecera.php"); ?>
<?php include("includes/menus.php"); ?>

<div class="margenes">
	<h1>Crear proveïdor</h1>
	<input type="button" name="usuari_crear" value="Afegir proveïdor" onClick="location.href='proveidor_crear.php'" />
	<input type="button" name="gestio_usuaris" value="Gestió de proveïdors" onClick="location.href='gestio_proveidors.php'" />
	<form action="form/proveidor_alta.php" method="post">
		<table cellpadding='20'>
		<tr><th><b>Proveïdor</b></th><td><input type="text" name="proveidor" value="" /></td></tr>
		<tr><td></td><td><input type="submit" name="submit" value="Alta proveïdor" /></td></tr>
		<?php
			if ($_GET['err']==23) echo '<tr><td></td><td>Tots els camps son obligatoris</td></tr>';
			else if ($_GET['err']==22) echo '<tr><td></td><td>Ha ocorregut un error inesperat</td></tr>';
			else if ($_GET['err']==1) echo '<tr><td></td><td>Proveïdor donat d\'alta correctament</td></tr>';
		?>
		</table>	
	</form>

</div>
<?php include("includes/pie.php"); ?>