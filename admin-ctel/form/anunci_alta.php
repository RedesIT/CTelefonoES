<?
session_start();
if($_SESSION['nivell_acces_ctel']==1 || $_SESSION['nivell_acces_ctel']==2){
	$usuari=$_SESSION["usuariCtelefonoES"];

	if ($_POST['titulo']!="" && $_POST['enlace']!="" && $_POST['descripcion']!="" && $_POST['precio']!=""){
		
		$titulo=$_POST['titulo'];
		$proveedor=$_POST['proveedor'];
		$categoria=$_POST['categoria'];
		$enlace = addslashes($_POST['enlace']);
		$descripcion=$_POST['descripcion'];
		$precio=$_POST['precio'];	
		
		include('../../DB/connexio-db.php');
		$database="23904_telefonoes";
		mysql_select_db("$database", $link);
		
		
		
		$C="INSERT INTO anuncios (titulo,proveedor,categoria,enlace,descripcion,precio,activo) VALUES ('$titulo','$proveedor','$categoria','$enlace','$descripcion','$precio','0')"; 
		$resultado=mysql_query($C,$link);
		if (!$resultado) header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/anunci_crear.php?err=22");
		else header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/gestio_anuncis.php");
	
	} else header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/anunci_crear.php?err=23");
} else header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/index.php");
?>