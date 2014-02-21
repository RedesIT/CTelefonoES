<?php 
include("includes/seguridad.php"); 

if (isset($_POST['submit'])){

	include('../DB/connexio-db.php');
	$database="23904_telefonoes";
	mysql_select_db("$database", $link);

	$C="SELECT id FROM anuncios WHERE ofertadelmes='1'";  
	$resultado=mysql_query($C,$link);
	if ($row = mysql_fetch_array($resultado)){ $id_ant=$row['id']; }

	$id_nuevo=$_POST['id_nuevo'];

	if ($id_ant>0 && $id_nuevo>0){

		$C="UPDATE anuncios SET ofertadelmes='1' WHERE id='".$id_nuevo."'";
		mysql_query($C,$link);

		$C="UPDATE anuncios SET ofertadelmes='0' WHERE id='".$id_ant."'";
		mysql_query($C,$link);

		header ("Location: oferta-del-mes-editar.php");
	}
}

include("includes/cabecera.php");
include("includes/menus.php"); ?>

<div class="margenes">

<?php
	$id_ant=0;	
	echo '<h1>Oferta del mes</h1>';
	include('../DB/connexio-db.php');
	$database="23904_telefonoes";
	mysql_select_db("$database", $link);
	
	$C="SELECT id,titulo FROM anuncios WHERE ofertadelmes='0' AND activo='1' ORDER BY titulo";  
	$resultado=mysql_query($C,$link);
	if ($row = mysql_fetch_array($resultado)){	
		echo '<form action="oferta-del-mes-editar.php" name="edita-oferta" method="POST">';
		echo '<select name="id_nuevo">';
		do{
			echo '<option value="'.$row['id'].'">'.$row['titulo'].'</option>';
		}while ($row = mysql_fetch_array($resultado));
		echo '</select>';
		echo '<input type="submit" name="submit" value="Canvia" />';
		echo '</form>';
	}
	
	$C="SELECT id,titulo,enlace,descripcion,precio FROM anuncios WHERE ofertadelmes='1'";
	$resultado=mysql_query($C,$link);
	if ($row = mysql_fetch_array($resultado)){
		$_GET['id_ant']=$row['id'];
		echo "<table cellpadding='20'>";
		echo "<tr><th><b>ID</b></th><td>".$row['id']."</td></tr>";
		echo "<tr><th><b>Titol</b></th><td>".$row['titulo']."</td></tr>";
		echo "<tr><th><b>Enllaç</b></th><td>".$row['enlace']."</td></tr>";
		echo "<tr><th><b>Descripció</b></th><td>".$row['descripcion']."</td></tr>";
		echo "<tr><th><b>Preu</b></th><td>".$row['precio']."</td></tr>";
		echo '<tr><th><b>Editar</b></th><td><a href="anunci_editar.php?id='.$row["id"].'" title="EDITAR"><img src="editar.png" alt="" /></a></td>';
		echo '</table>';
	}
	
	include('../DB/connexio-tanca-db.php');
?>

</div>
<?php include("includes/pie.php"); ?>