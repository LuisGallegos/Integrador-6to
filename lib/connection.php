<?php
include_once('../lib/config.php');
include('../lib/adodb5/adodb.inc.php');
include ('../models/queries.php');
global $dbhost, $dbuname, $dbpass, $dbname,$SELECT_VACANTES;

$conn = ADONewConnection('mssqlnative'); # eg 'mysql' o 'postgres'
$conn->Connect($dbhost, $dbuname, $dbpass, $dbname) or die ("the database is not accessible");
$conn->EXECUTE("set names 'utf8'");
$conn->debug = false;

//$recordSet = $conn->Execute($SELECT_VACANTES);
//if (!$recordSet)
//	print $conn->ErrorMsg();
//else
//while (!$recordSet->EOF) {
//	print $recordSet->fields[0].' '.$recordSet->fields[1].'<BR>';
//	$recordSet->MoveNext();
//}
?>
