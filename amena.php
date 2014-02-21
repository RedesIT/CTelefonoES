<?php include('includes/top_amena.php'); ?>

<div class="texto">

<div class="textoIzq">

<h1>Las mejores ofertas de Amena</h1>

<p>Lista con las ofertas mas destacadas. Elige la que más te guste:</p>

<div class="clear"></div>

<?php include('DB/connexio.php'); ?>
<?php include('DB/mostra_amena.php'); ?>
<?php include('DB/connexio_tanca.php'); ?>

<?php include('includes/adsense_300_250.php'); ?>

</div>

<div class="columnaDer">
<h2>Ofertas móviles</h2>
<h2>Tarifas móviles</h2>
<?php include('includes/menu-dreta.php'); ?>
</div>

</div>

<?php include('includes/redes_sociales.php'); ?>
<?php include('includes/pie.php'); ?>