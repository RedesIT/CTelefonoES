<div class="leads">
	Suscr�base a nuestro bolet�n y reciba mensualmente las mejores ofertas de telefon�a<br /><br />
	<form action="form/butlleti.php" method="post">
		<div class="boletin">E-mail:</div>
		<div class="boletin"><input type="text" name="email" /></div>
		<div class="boletin"><input type="checkbox" name="accepta" value="accepta" />He le�do y acepto la <a href="condiciones-uso-web.php" title="Pol�tica de privacidad">pol�tica de privacidad</a></div>
		<div class="boletin"><input type="submit" name="submit" value="Alta bolet�n" /></div>
		<?php
			if (isset($err)){
				if ($err==0) echo '<div class="boletin">Guardado correctamente</div>';
				if ($err==1) echo '<div class="boletin">Es necesario aceptar la pol�tica de privacidad</div>';
				if ($err==2) echo '<div class="boletin">Error en el email</div>';
				if ($err==23) echo '<div class="boletin">Error inesperado</div>';
			}
		?>
	</form>
</div>