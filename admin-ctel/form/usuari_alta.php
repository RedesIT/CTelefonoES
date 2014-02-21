<?
session_start();
if($_SESSION['nivell_acces_ctel']==1){
	$usuari=$_SESSION["usuariCtelefonoES"];

	if ($_POST['usuari']!="" && $_POST['contrassenya']!=""){
		$usuari=$_POST['usuari'];
		$contrassenya=md5(trim($_POST['contrassenya']));
		$nivell_acces=$_POST['nivell_acces'];
		
		include('../../DB/connexio-db.php');
		$database="23904_telefonoes";
		mysql_select_db("$database", $link);
		
		$C="INSERT INTO admin (usuari,contrassenya,nivell_acces) VALUES ('$usuari','$contrassenya','$nivell_acces')"; 
		$resultado=mysql_query($C,$link);
		if (!$resultado) header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/usuari_crear.php?err=22");
		else header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/gestio_usuaris.php");
	
	} else header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/usuari_crear.php?err=23");
} else header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/index.php");
?>