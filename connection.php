<?php
$hostname_localhost ="localhost";
$database_localhost ="mygullak_favcy";
$username_localhost ="root";
$password_localhost ="Lazpho1@x";


$localhost = mysql_connect($hostname_localhost,$username_localhost,$password_localhost)
or
trigger_error(mysql_error(),E_USER_ERROR);

mysql_select_db($database_localhost, $localhost);

?>
