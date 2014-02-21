<?php include("includes/seguridad.php"); ?>
<?php include("includes/cabecera.php"); ?>
<?php include("includes/menus.php"); ?>

<div class="margenes">
	<h1>Crear fabricant</h1>
	<input type="button" name="fabricant_crear" value="Afegir fabricant" onClick="location.href='fabricant_crear.php'" />
	<input type="button" name="gestio_fabricants" value="Gestió de fabricants" onClick="location.href='gestio_fabricants.php'" />
	<form action="form/fabricant_alta.php" method="post">
		<table cellpadding='20'>
		<tr><th><b>Fabricant</b></th><td><input type="text" name="fabricant" value="" /></td></tr>
		<tr><td></td><td><input type="submit" name="submit" value="Crear" /></td></tr>
		<?php
			if ($_GET['err']==23) echo '<tr><td></td><td>Tots els camps son obligatoris</td></tr>';
			else if ($_GET['err']==22) echo '<tr><td></td><td>Ha ocorregut un error inesperat</td></tr>';
			else if ($_GET['err']==1) echo '<tr><td></td><td>Fabricant donat d\'alta correctament</td></tr>';
		?>
		</table>	
	</form>

</div>
<?php include("includes/pie.php"); ?>