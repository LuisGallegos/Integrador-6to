<?php
include_once('../lib/config.php');
include('../lib/adodb5/adodb.inc.php');
//include ('../models/queries.php');
global $dbhost, $dbuname, $dbpass, $dbname;

$conn = ADONewConnection('mssqlnative'); # eg 'mysql' o 'postgres'
$conn->Connect($dbhost, $dbuname, $dbpass, $dbname) or die ("the database is not accessible");
$conn->debug = false;


//$as='212561549';

//$recordSet = $conn->GetArray($SELECT_USERS_DATA,$as);
//var_dump($recordSet);
//if (!$recordSet)
//	print $conn->ErrorMsg();
//else
//while (!$recordSet->EOF) {
//	print $recordSet->fields[0].' '.$recordSet->fields[1].'<BR>';
//	$recordSet->MoveNext();
//}
?>
