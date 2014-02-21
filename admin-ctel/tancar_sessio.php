<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location: http://www.xn--compaiadetelefono-jxb.es/admin-ctel/index.php");
?>