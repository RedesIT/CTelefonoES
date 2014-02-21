<?php session_start();
if($_SESSION['nivell_acces_ctel']==1){
	$nivell=$_SESSION['nivell_acces_ctel'];
	$usuari=$_SESSION["usuariCtelefonoES"];
} else header("Location: index.php");
?>
