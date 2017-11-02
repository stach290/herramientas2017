<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_sist_facturacion = "localhost";
$database_sist_facturacion = "sist_facturacion";
$username_sist_facturacion = "root";
$password_sist_facturacion = "";
$sist_facturacion = mysql_pconnect($hostname_sist_facturacion, $username_sist_facturacion, $password_sist_facturacion) or trigger_error(mysql_error(),E_USER_ERROR); 
?>