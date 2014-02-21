<?
if (isset($_POST['accepta'])){
	if (isset($_POST['email']) && $_POST['email']!=""){
		$email=$_POST['email'];	
		include('../DB/connexio-db.php');
		$database="23904_telefonoes";
		mysql_select_db("$database", $link);
		$fecha=date('Y-m-d');
		$C="INSERT INTO boletin (email,data) VALUES ('$email','$fecha')"; 
		$resultado=mysql_query($C,$link);
		if (!$resultado){
			header("Location: ../index.php?err=23");
		} else {
			header("Location: ../index.php?err=0");
		}
	} else {
		header("Location: ../index.php?err=2");
	} 
} else {
	header("Location: ../index.php?err=1");
} 
?>