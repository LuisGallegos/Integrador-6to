<?php
include ('../lib/Adodb5/adodb.inc.php');
require ('data.php');
global $server, $user, $pass, $database;

$conn = ADONewConnection('mssqlnative'); # eg 'mysql' o 'postgres'
$conn->debug = true;
$conn->Connect($server, $user, $pass, $database) or die("Error en la conexion");
 ?>
