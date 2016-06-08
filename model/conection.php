<?php
include ('../lib/Adodb5/adodb.inc.php');
include ('Queries.php');
require ('data.php');
global $server, $user, $pass, $database,$SELECT_VACANTES;

$conn = ADONewConnection('mssqlnative'); # eg 'mysql' o 'postgres'
$conn->debug = true;
$conn->Connect($server, $user, $pass, $database) or die("Error en la conexion");
$recordSet = $conn->Execute($SELECT_VACANTES);
if (!$recordSet)
	print $conn->ErrorMsg();
else
while (!$recordSet->EOF) {
	print $recordSet->fields[0].' '.$recordSet->fields[1].'<BR>';
	$recordSet->MoveNext();
}
 ?>
