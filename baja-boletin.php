<?php include('includes/top_boletin.php'); ?>

<div class="texto">

<div class="textoIzq">

<h1>Dar de baja la suscripción al boletín mensual</h1>

<p>Si desea dejar de recibir nuestro boletín mensual con las mejores ofertas de telefonía fija y móvil escriba a continuación su dirección de email:</p>

<form action="form/baja-boletin.php" method="post">
	<input type="text" name="email" />
</form>

<?php 
	if (isset($_GET['borrar']){
		if ($_GET['borrar']==1) {
			echo "Dirección de email dada de baja correctamente.<br />";
			echo "Esperamos no haber molestado y que pronto nos visite de nuevo.";
		}
		if ($_GET['borrar']==2) {
			echo "No se ha encontrado su dirección de email. Por favor revise que se trate realmente de esta.<br />";
			echo "Si lo prefiere puede escribirnos a info@compañiadetelefono.es poniendo en el asunto BAJA boletín.";
		}
	}
?>

</div>

<div class="columnaDer">
<h2>Ofertas móviles</h2>
<h2>Tarifas móviles</h2>
<?php include('includes/menu-dreta.php'); ?>
</div>

</div>

<?php include('includes/redes_sociales.php'); ?>
<?php include('includes/pie.php'); ?>