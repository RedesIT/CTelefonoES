<?
session_start();
if($_SESSION['nivell_acces_ctel']==1){
	include('../DB/connexio-db.php');
	
	$id=$_GET['id'];
	$database="23904_telefonoes";
	mysql_select_db("$database", $link);
	$elimina = mysql_query("DELETE FROM proveedores WHERE id = $id ", $link);
	if (!$elimina) {
		die("No s'ha pogut eliminar el proveïdor de la base de dades: " . mysql_error());
	}	
	include('../DB/connexio-tanca-db.php');
	header ("Location: gestio_proveidors.php");
	
} else header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/index.php");
?>