<?php 
session_start();
if(isset($_SESSION["usuariCtelefonoES"]) && isset($_SESSION["nivell_acces_ctel"])) { header('Location: admin.php'); }
else{
	if(isset($_POST['submitLogin'])){
		if ($_POST['usuari']!="" && $_POST['contrassenya']!=""){
			$_SESSION["usuTempCtelefonoES"]=htmlentities($_POST['usuari']);
			$_SESSION["passTempCtelefonoES"]=md5(trim($_POST['contrassenya']));
			header('Location: comproba_login.php');
		}
	}
}
?>
<?php include("includes/cabecera.php"); ?>

<div class="login">
<form action="<?php echo $PHP_SELF;?>" method="post">
	<table>
		<tr><th colspan="2">Panel de administraci�n de www.compa�iadetelefono.es</th></tr>
		<tr><td>Nombre de usuario:</td><td><input type="text" id="usuari" name="usuari" value="" /></td></tr>
		<tr><td>Contrase�a:</td><td><input type="password" id="contrassenya" name="contrassenya" value="" /></td></tr>
		<tr><td></td><td><input type="submit" name="submitLogin" value="Iniciar sesi�n" /></td></tr>
		<tr><td colspan="2"><? if ($_GET['err']==23) echo '<div class="error">login failed</div>';?></td></tr>
	</table>
</form>
</div>
</body>
</html>
