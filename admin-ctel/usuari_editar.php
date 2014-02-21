<?php 
include("includes/seguridad.php"); 
include("includes/cabecera.php"); 
include("includes/menus.php"); 
if(!isset($_POST['submitGuarda'])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link href="estils.css" rel="stylesheet" />
<title>Editar usuario - Panel de control de www.compañiadetelefono.es</title>
<meta name="robots" content="nofollow, noindex" />
</head>
<body>
<div class="margenes">

<?php
	include('../DB/connexio-db.php');
	$database="23904_telefonoes";
	mysql_select_db("$database", $link); 
	$id=$_GET['id'];
	$C="SELECT usuari,contrassenya,nivell_acces FROM admin WHERE id='".$id."'";
	$resultado=mysql_query($C,$link);
	if ($row = mysql_fetch_array($resultado)){
?>
	
	<form action="<?echo $_SERVER['PHP_SELF']?>" method="post">
		<table cellpadding='20'>
			<tr><th><b>Usuari</b></th><td><input type="text" name="usuario" value="<?echo $row['usuari'];?>" /></td></tr>
			<tr><th><b>Contrasenya</b></th><td><input type="password" name="contrassenya" value="" /></td></tr>
		<? if ($row['nivell_acces']==1) { ?>
			<tr><th><b>Nivell d'accès</b></th><td><select name="nivell_acces"><option selected value="1">Admin</option><option value="2">Redactor</option></select></td></tr>			
		<?
		} else {
		?>
			<tr><th><b>Nivell d'accès</b></th><td><select name="nivell_acces"><option selected value="1">Admin</option><option selected value="2">Redactor</option></select></td></tr>	
		<?
		}
			echo '<input type="hidden" name="id" value="'.$id.'" />';
		?>	
			
			<tr><td></td><td><input type="submit" name="submitGuarda" value="Guarda canvis" /></td></tr>			
		</table>
	</form>
<?
		}else echo "Error carregant dades d'usuari";
	}else{
		$id=$_POST['id'];
		$usuario=$_POST['usuario'];
		$contrassenya=$_POST['contrassenya'];
		$nivell_acces=$_POST['nivell_acces'];
		if ($contrassenya=="") $C="UPDATE admin SET usuari='".$usuario."',nivell_acces='".$nivell_acces."' WHERE id='".$id."'";
		else $C="UPDATE admin SET usuari='".$usuario."',contrassenya='".md5($contrassenya)."',nivell_acces='".$nivell_acces."' WHERE id='".$id."'";
		$resultado=mysql_query($C,$link);
		if ($resultado!=""){
			header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/gestio_usuaris.php");
		} else echo "Error ";
	}
?>

<?php include("includes/pie.php"); ?>