<?php include("includes/seguridad.php"); ?>
<?php include("includes/cabecera.php"); ?>
<?php include("includes/menus.php"); ?>

<div class="margenes">
	<h1>Alta de nou usuari</h1>
	<input type="button" name="usuari_crear" value="Alta nou usuari" onClick="location.href='usuari_crear.php'" />
	<input type="button" name="gestio_usuaris" value="Gestió d'usuaris" onClick="location.href='gestio_usuaris.php'" />
	<form action="form/usuari_alta.php" method="post">
		<table cellpadding='20'>
		<tr><th><b>Usuari</b></th><td><input type="text" name="usuari" value="" /></td></tr>
		<tr><th><b>Contrasenya</b></th><td><input type="password" name="contrassenya" value="" /></td></tr>
		<tr><th><b>Nivell d'accès</b></th><td><select name="nivell_acces"><option value="1">Admin</option><option value="2">Redactor</option></select></td></tr>
		<tr><td></td><td><input type="submit" name="submit" value="Alta usuari" /></td></tr>
		<?php
			if ($_GET['err']==23) echo '<tr><td></td><td>Tots els camps son obligatoris</td></tr>';
			else if ($_GET['err']==22) echo '<tr><td></td><td>Ha ocorregut un error inesperat</td></tr>';
			else if ($_GET['err']==1) echo '<tr><td></td><td>Usuari donat d\'alta correctament</td></tr>';
		?>
		</table>	
	</form>
</div>
<?php include("includes/pie.php"); ?>