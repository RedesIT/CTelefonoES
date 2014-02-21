<div id="barra_cookies">
<div class="barra">
	<a href="https://www.google.com/analytics/learn/privacy.html" class="informacion">Informaci&oacute; Google</a>
	<a href="http://www.tradedoubler.com/es-es/privacy-policy/" class="informacion">Informaci&oacute; Tradedoubler</a><br />
	Fem servir cookies de tercers per mostrar-li publicitat segons el seu perfil de navegació, per l'anàlisi d'estadístiques i per al seguiment de vendes. Si continua navegant considerarem que acepta el seu ús.<br />
	<a href="javascript:void(0);" id="aceptar" onclick="PonerCookie();">ACCEPTAR</a>
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