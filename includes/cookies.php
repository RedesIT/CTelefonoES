<div id="barra_cookies">
<div class="barra">
	Aviso de cookies
	<br /><br />
	Utilizamos cookies de terceros para mostrarle publicidad seg&uacute;n su perfil de navegaci&oacute;n, para el an&aacute;lisis de estad&iacute;sticas y para el seguimiento de ventas.<br /><br />
	Si contin&uacute;a navegando consideraremos que acepta su uso.<br /><br />
	<a title="Informaci&oacute;n uso de cookies" href="http://www.compa&Ntilde;iadetelefono.es/info-cookies.php">M&aacute;s informaci&oacute;n</a><br />
	<a title="Condiciones de uso de cookies por Google" href="https://www.google.com/analytics/learn/privacy.html" class="informacion">Google</a> -
	<a title="Condiciones de uso de cookies por Tradedoubler" href="http://www.tradedoubler.com/es-es/privacy-policy/" class="informacion">Tradedoubler</a><br /><br />
	<a href="javascript:void(0);" id="aceptar" onclick="PonerCookie();">CERRAR AVISO</a>
</div>
</div>

<script type="text/javascript">
function getCookie(c_name){
	var c_value = document.cookie;
	var c_start = c_value.indexOf(" " + c_name + "=");
	if (c_start == -1){
		c_start = c_value.indexOf(c_name + "=");
	}
	if (c_start == -1){
		c_value = null;
	}else{
		c_start = c_value.indexOf("=", c_start) + 1;
		var c_end = c_value.indexOf(";", c_start);
		if (c_end == -1){
			c_end = c_value.length;
		}
		c_value = unescape(c_value.substring(c_start,c_end));
	}
	return c_value;
}

function setCookie(c_name,value,exdays){
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
	document.cookie=c_name + "=" + c_value;
}

if(getCookie('aviso')!="1"){
	document.getElementById("barra_cookies").style.display="block";
}

function PonerCookie(){
	setCookie('aviso','1',1);
	document.getElementById("barra_cookies").style.display="none";
}
</script>