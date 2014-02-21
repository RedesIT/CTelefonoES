<?
$database="23904_telefonoes";
mysql_select_db("$database", $link);
$C="SELECT post_date,post_content,post_title,guid FROM wp_posts WHERE post_status='publish' OR portada=1 ORDER BY post_date DESC LIMIT 10";  
$resultado=mysql_query($C,$link);
if ($row = mysql_fetch_array($resultado)){
	do {
$aMostrar=substr($row["post_content"], 0, 100);
		?>
<div class="post">
<div class="data"><?echo $row["post_date"];?></div>
<div class="titol"><a title="<?echo $row['post_title'];?>" href="<?echo $row["guid"];?>"><?echo $row["post_title"];?></a></div>
<div class="text"><?echo $aMostrar;?>... <a title="Seguir leyendo <?echo $row['post_title'];?>" href="<?echo $row["guid"];?>">[Ver oferta]</a></div>
</div>
	<?
	} while ($row = mysql_fetch_array($resultado));
} 
?>
