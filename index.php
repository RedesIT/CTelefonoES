<?php include('includes/top.php'); ?>
<div class="texto">

<div class="textoIzq">
<div class="centrar">

<h1>Compañías de teléfono</h1>
<p><strong>Bienvenido a la web con las ofertas más económicas</strong></p>
<p>Compara y elige cual quieres que sea tu compañía de teléfono.</p>
<p>Contamos en nuestra web con <?php include ('DB/comptar-anuncis.php');?> ofertas de <?php include ('DB/comptar-companyies.php');?> compañías distintas.</p>
<a title="La compañía de teléfono más barata" href="http://www.compañiadetelefono.es/companiadetelefono.php">
	<img src="img/companiadetelefono.jpg" title="Compañia de telefono mas barata" alt="Compañia de telefono mas barata" />
</a>
<a title="Compañia de telefono" href="http://www.compañiadetelefono.es/companiadetelefono.php">
	<img title="Compañia de telefono" src="img/compania-de-telefono.jpg" alt="Compañia de telefono" />
</a>

<br /><br /><br />

<table class="tablaPaginas">
<tr><th colspan="3" align="center"><b>Encuentra las mejores ofertas de compañías telefónicas</b></th></tr>
<tr>
<td>Las compañías de ADSL ofrecen conexiones básicas de 20MB, pero ya empiezan a verse en el mercado buenos precios con velocidades 30MB y 50MB.<br />
<a title="Ofertas ADSL" href="http://www.compañiadetelefono.es/internettarifas.php">Ofertas de ADSL</a></td>
<td>Aquí puedes encontrar las ofertas ADSL que anuncian las compañías de teléfono, incluyen servicios de televisión.<br />
<a title="Ofertas ADSL con TV" href="http://www.compañiadetelefono.es/companiadetelefono.php">Ofertas ADSL + TV</a></td>
<td>Lista con las ofertas más destacadas de todas las compañías. Elige el que más te guste.<br />
<a title="Ofertas de movil" href="http://www.compañiadetelefono.es/ofertasdemovil.php">Ofertas de móvil</a></td>
</tr>
</table>

<p><b>¡¡Cada semana nuevas ofertas!!</b></p>
<p>Tenemos las operadoras fijas y móviles más baratas. Móviles a coste 0. <br />
Visita el apartado de móviles:<br />
<a title="Ofertas compañias de moviles" href="ofertasdemovil.php">Ofertas compañías de móviles</a></p>

<br />

<?php include('includes/adsense_300_250.php'); ?>

<div class="clear"></div>

<p>-Las mejores ofertas y descuentos de Internet- </p>

<div class="noticias">Noticias destacadas de nuestro blog</div>

<?php include('DB/connexio.php'); ?>
<?php include('DB/mostra10post.php'); ?>
<?php include('DB/connexio_tanca.php'); ?>

<br />

<a href="https://www.facebook.com/pages/compa%C3%B1iadetelefonoes/223906640952789" title="Compañia de telefono en Facebook"><img src="img/compañia-telefono-facebook.jpg" alt="Compañia de telefono en Facebook"  title="Compañia de telefono en Facebook" /></a> 

<a href="https://twitter.com/CTelefonoES" title="Compañia de telefono en Twitter"><img src="img/compañia-telefono-twitter.png" alt="Compañia de telefono en Twitter" title="Compañia de telefono en Twitter" /></a>
<br />
¡¡Síguenos!!<br />
¿Quieres ser el primero en enterarte de las últimas ofertas?<br />
<br /><br />

<div class="clear"></div>
</div>
</div>

<div class="columnaDer">
<h2>la compañía de teléfono más barata</h2>
<h2>compañías de telefonía</h2>
<h2>ofertas móviles</h2>
<?php include('includes/menu-dreta.php'); ?>
</div>
</div>

<?php include('includes/pie.php'); ?>