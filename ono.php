<?php include('includes/top_ono.php'); ?>

<div class="texto">

<div class="textoIzq">

<h1>Las mejores ofertas de ONO</h1>

<p>Lista con las ofertas mas destacadas. Elige la que m�s te guste:<br />
Atenci�n, el precio no incluye cuota de linea, +- 20� en el caso de ONO IVA inclu�do.
</p>

<div class="clear"></div>

<?php include('DB/connexio.php'); ?>
<?php include('DB/mostra_ono.php'); ?>
<?php include('DB/connexio_tanca.php'); ?>

<?php include('includes/adsense_300_250.php'); ?>

</div>

<div class="columnaDer">
<h2>Ofertas m�viles</h2>
<h2>Tarifas m�viles</h2>
<?php include('includes/menu-dreta.php'); ?>
</div>

</div>

<?php include('includes/redes_sociales.php'); ?>
<?php include('includes/pie.php'); ?>