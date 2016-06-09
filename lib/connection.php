<?php
include_once('../lib/config.php');
include('../lib/adodb5/adodb.inc.php');

ADOLoadCode('mssqlnative');

$conn = ADONewConnection('mssqlnative'); # eg 'mysql' o 'postgres'
$conn->Connect($dbhost, $dbuname, $dbpass, $dbname) or die ("the database is not accessible");
$conn->EXECUTE("set names 'utf8'");
$conn->debug = false;
$conn-> SetFetchMode(ADODB_FETCH_ASSOC);
?>
