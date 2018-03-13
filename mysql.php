<?php

// Mysql settings

$user			= "popidesi_boss";
$password	= "Camprock1!";
$database	= "popidesi_popica";
$host			= "localhost";

mysql_connect($host,$user,$password);
mysql_select_db($database) or die( "Unable to select database");

?>