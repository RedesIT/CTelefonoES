<?php include('includes/top_adsl-y-movil.php'); ?>

<div class="texto">

<div class="textoIzq">

<h1>Ofertes d'ADSL i mòbil</h1>

<p>Les <a href="index.php">companyies de telèfon</a> estan treient ofertes molt agresives de cara a menjar-se el merca de mòbils. De fet la nostra oferta del mes consta de <a href="oferta-del-mes.php">quota de linea, ADSL, y mòbil</a>, a un preu irresistible.</p>

<p>Aquí tens en una mateixa plana totes les <a href="internettarifes.php">ofertes ADSL</a> més <a href="ofertesdemobil.php">ofertes de mòbil</a> en un sol pack, no deixis que et bombardeixin a trucades, tria tu mateix la <a href="index.php">companyia de telèfon</a> que mes t'interesi.</p>

<div class="clear"></div>

<?php include('../DB/connexio.php'); ?>
<?php include('../DB/mostra_fijoymovil.php'); ?>
<?php include('../DB/connexio_tanca.php'); ?>
<?php include('../includes/adsense_300_250.php'); ?>

</div>

<div class="columnaDer">
<h2>Companyia d'adsl</h2>
<h2>Ofertes d'adsl</h2>
<h2>Internet adsl</h2>
<h2>Companyies de telefon</h2>
<?php include('includes/adsense_160_600.php'); ?>
</div>

</div>

<?php include('includes/redes_sociales.php'); ?>
<?php include('includes/pie.php'); ?>