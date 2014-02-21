<?
session_start();
if($_SESSION['nivell_acces_ctel']==1 || $_SESSION['nivell_acces_ctel']==2){
	$usuari=$_SESSION["usuariCtelefonoES"];

	if ($_POST['fabricant']!=""){
		
		$fabricant=$_POST['fabricant'];
		
		include('../../DB/connexio-db.php');
		$database="23904_telefonoes";
		mysql_select_db("$database", $link);
		
		$C="INSERT INTO fabricant (marca) VALUES ('$fabricant')"; 
		$resultado=mysql_query($C,$link);
		if (!$resultado) header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/fabricant_crear.php?err=22");
		else header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/fabricant_crear.php?err=1");
	
	} else header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/fabricant_crear.php?err=23");
} else header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/index.php");
?>