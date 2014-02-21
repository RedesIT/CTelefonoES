<?php include("includes/seguridad.php"); ?>
<?php include("includes/cabecera.php"); ?>
<?php include("includes/menus.php"); ?>

<div class="margenes">

	<h1>Panell de control de la web www.compañiadetelefono.es</h1>

	<div id="estadistiques">
		<h2>ESTADISTIQUES</h2>
		Usuaris donats d'alta al butlletí: <?php include("includes/comptaLeads.php"); ?><br />
		Llistar adreces d'email: <a href="mostra_emails.php">Mostra</a><br /><br />
		Anuncis mostrant-se actualment: <?php include("includes/comptaAnuncis.php"); ?>
	</div>
	
	<div class="clear"></div><br />
</div>

<?php include("includes/pie.php"); ?>