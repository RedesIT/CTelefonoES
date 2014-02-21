<?php 
session_start();
$server="localhost";
$database="23904_telefonoes";
$dbuser="telefonoes";
$dbpass="tornamaker84.";

$login = $_SESSION["usuTempCtelefonoES"];
$pass = $_SESSION["passTempCtelefonoES"];
$link=mysql_connect($server,$dbuser,$dbpass);
$query = "SELECT id,usuari,contrassenya,nivell_acces,actiu FROM admin WHERE actiu='1' && usuari='".$login."' && contrassenya='".$pass."'";
$result=mysql_db_query($database,$query,$link);

if(mysql_num_rows($result)){ /*Si es troba usuari i contrasenya correcta creem sessions i accedim a admin.php*/
	$array=mysql_fetch_array($result);
	$_SESSION["usuariCtelefonoES"]=$array["usuari"];
	$_SESSION["nivell_acces_ctel"]=$array["nivell_acces"];
	header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/admin.php");
} else { /* Si no s'autentica correctament mostrem error 23 - Michael Jordan!! */
	header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/index.php?err=23");
}
?>