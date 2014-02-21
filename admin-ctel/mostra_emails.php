<?php include("includes/seguridad.php"); ?>
<?php include("includes/cabecera.php"); ?>
<?php include("includes/menus.php"); ?>

<div class="margenes">
	<h1>Llistat d'emails suscrits al butlletí</h1>
	
	<div style="width:70%;margin:auto;">		
		<?php
			$destinataris="";
			include('../DB/connexio-db.php');
			$database="23904_telefonoes";
			mysql_select_db("$database", $link);
			$C="SELECT email FROM boletin";  
			$resultado=mysql_query($C,$link);
			$i=0;
			if ($row = mysql_fetch_array($resultado)){
				do {
					if ($i==0) { $destinataris=$destinataris.$row["email"]; }
					else $destinataris=$destinataris.'; '.$row["email"];
					$i++;
				} while ($row = mysql_fetch_array($resultado));	
				echo $destinataris;
				echo "<br /><br /><b>".$i." eMails llistats</b>";
				echo '<br /><a href="mailto:'.$destinataris.'"><img src="email.jpg" />';
				
			}
		?>
	</div>
	<div class="clear"></div><br />
</div>

<?php include("includes/pie.php"); ?>