<?
session_start();
if($_SESSION['nivell_acces_ctel']==1 || $_SESSION['nivell_acces_ctel']==2){
	$usuari=$_SESSION["usuariCtelefonoES"];

	if ($_POST['categoria']!=""){
		
		$categoria=$_POST['categoria'];
		
		include('../../DB/connexio-db.php');
		$database="23904_telefonoes";
		mysql_select_db("$database", $link);
		
		
		
		$C="INSERT INTO categorias (categoria) VALUES ('$categoria')"; 
		$resultado=mysql_query($C,$link);
		if (!$resultado) header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/categoria_crear.php?err=22");
		else header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/categoria_crear.php?err=1");
	
	} else header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/categoria_crear.php?err=23");
} else header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/index.php");
?>