<?php include('includes/top.php'); ?>
<div class="texto">

<div class="textoIzq">
<div class="centrar">

<h1>Compa��as de tel�fono</h1>
<p><strong>Bienvenido a la web con las ofertas m�s econ�micas</strong></p>
<p>Compara y elige cual quieres que sea tu compa��a de tel�fono.</p>
<p>Contamos en nuestra web con <?php include ('DB/comptar-anuncis.php');?> ofertas de <?php include ('DB/comptar-companyies.php');?> compa��as distintas.</p>
<a title="La compa��a de tel�fono m�s barata" href="http://www.compa�iadetelefono.es/companiadetelefono.php">
	<img src="img/companiadetelefono.jpg" title="Compa�ia de telefono mas barata" alt="Compa�ia de telefono mas barata" />
</a>
<a title="Compa�ia de telefono" href="http://www.compa�iadetelefono.es/companiadetelefono.php">
	<img title="Compa�ia de telefono" src="img/compania-de-telefono.jpg" alt="Compa�ia de telefono" />
</a>

<br /><br /><br />

<table class="tablaPaginas">
<tr><th colspan="3" align="center"><b>Encuentra las mejores ofertas de compa��as telef�nicas</b></th></tr>
<tr>
<td>Las compa��as de ADSL ofrecen conexiones b�sicas de 20MB, pero ya empiezan a verse en el mercado buenos precios con velocidades 30MB y 50MB.<br />
<a title="Ofertas ADSL" href="http://www.compa�iadetelefono.es/internettarifas.php">Ofertas de ADSL</a></td>
<td>Aqu� puedes encontrar las ofertas ADSL que anuncian las compa��as de tel�fono, incluyen servicios de televisi�n.<br />
<a title="Ofertas ADSL con TV" href="http://www.compa�iadetelefono.es/companiadetelefono.php">Ofertas ADSL + TV</a></td>
<td>Lista con las ofertas m�s destacadas de todas las compa��as. Elige el que m�s te guste.<br />
<a title="Ofertas de movil" href="http://www.compa�iadetelefono.es/ofertasdemovil.php">Ofertas de m�vil</a></td>
</tr>
</table>

<p><b>��Cada semana nuevas ofertas!!</b></p>
<p>Tenemos las operadoras fijas y m�viles m�s baratas. M�viles a coste 0. <br />
Visita el apartado de m�viles:<br />
<a title="Ofertas compa�ias de moviles" href="ofertasdemovil.php">Ofertas compa��as de m�viles</a></p>

<br />

<?php include('includes/adsense_300_250.php'); ?>

<div class="clear"></div>

<p>-Las mejores ofertas y descuentos de Internet- </p>

<div class="noticias">Noticias destacadas de nuestro blog</div>

<?php include('DB/connexio.php'); ?>
<?php include('DB/mostra10post.php'); ?>
<?php include('DB/connexio_tanca.php'); ?>

<br />

<a href="https://www.facebook.com/pages/compa%C3%B1iadetelefonoes/223906640952789" title="Compa�ia de telefono en Facebook"><img src="img/compa�ia-telefono-facebook.jpg" alt="Compa�ia de telefono en Facebook"  title="Compa�ia de telefono en Facebook" /></a> 

<a href="https://twitter.com/CTelefonoES" title="Compa�ia de telefono en Twitter"><img src="img/compa�ia-telefono-twitter.png" alt="Compa�ia de telefono en Twitter" title="Compa�ia de telefono en Twitter" /></a>
<br />
��S�guenos!!<br />
�Quieres ser el primero en enterarte de las �ltimas ofertas?<br />
<br /><br />

<div class="clear"></div>
</div>
</div>

<div class="columnaDer">
<h2>la compa��a de tel�fono m�s barata</h2>
<h2>compa��as de telefon�a</h2>
<h2>ofertas m�viles</h2>
<?php include('includes/menu-dreta.php'); ?>
</div>
</div>

<?php include('includes/pie.php'); ?>