<?php include('includes/top_boletin.php'); ?>

<div class="texto">

<div class="textoIzq">

<h1>Dar de baja la suscripci�n al bolet�n mensual</h1>

<p>Si desea dejar de recibir nuestro bolet�n mensual con las mejores ofertas de telefon�a fija y m�vil escriba a continuaci�n su direcci�n de email:</p>

<form action="form/baja-boletin.php" method="post">
	<input type="text" name="email" />
</form>

<?php 
	if (isset($_GET['borrar']){
		if ($_GET['borrar']==1) {
			echo "Direcci�n de email dada de baja correctamente.<br />";
			echo "Esperamos no haber molestado y que pronto nos visite de nuevo.";
		}
		if ($_GET['borrar']==2) {
			echo "No se ha encontrado su direcci�n de email. Por favor revise que se trate realmente de esta.<br />";
			echo "Si lo prefiere puede escribirnos a info@compa�iadetelefono.es poniendo en el asunto BAJA bolet�n.";
		}
	}
?>

</div>

<div class="columnaDer">
<h2>Ofertas m�viles</h2>
<h2>Tarifas m�viles</h2>
<?php include('includes/menu-dreta.php'); ?>
</div>

</div>

<?php include('includes/redes_sociales.php'); ?>
<?php include('includes/pie.php'); ?>