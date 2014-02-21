<?php 
	echo '<div id="menu">';
		if($nivell==1) include("includes/menu1.php");
		elseif($nivell==2) include("includes/menu2.php");
	echo '</div>';
?>