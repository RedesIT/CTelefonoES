<?
session_start();
if($_SESSION['nivell_acces_ctel']==1 || $_SESSION['nivell_acces_ctel']==2){
	if($nivell==1) include("menu.php");
	elseif($nivell==2) include("menu2.php");
	
	include('../DB/connexio-db.php');
	
	$id=$_GET['id'];
	$database="23904_telefonoes";
	mysql_select_db("$database", $link);
	$elimina = mysql_query("DELETE FROM fabricant WHERE id = $id ", $link);
	if (!$elimina) {
		die("No s'ha pogut eliminar el fabricant sel·lecionat de la base de dades: " . mysql_error());
	}	
	include('../DB/connexio-tanca-db.php');
	header ("Location: gestio_fabricants.php");
	
} else header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/index.php");
?>