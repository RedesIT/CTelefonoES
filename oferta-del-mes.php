<?php include('includes/top_oferta-del-mes.php'); ?>

<div class="texto">


<div class="textoIzq" style="text-align:center;">

<h1>La oferta del mes</h1>

<div class="clear"></div>


<?php 
include('includes/adsense_300_250.php'); 
echo '<br /><br /><p>Estoy deseando acabar la permanencia con mi actual compañía<br />
¿Y tu, te animas?</p>';

include('DB/connexio.php');
include('DB/mostra_oferta-del-mes.php');
include('DB/connexio_tanca.php');

?>

</div>

<div class="columnaDer">

<h2>ofertas moviles</h2>
<h2>la compañia de telefono mas barata</h2>
<h2>oferta adsl</h2>
<?php include('includes/menu-dreta.php'); ?>
</div>
</div>

<?php include('includes/redes_sociales.php'); ?>
<?php include('includes/pie.php'); ?>