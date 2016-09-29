<?php
$dbhost 	= "[host_name].database.windows.net";
$db 		= "SenaQuiz";
$user 		= "@".$dbhost;
$password 	= "";
$dsn 		= 
"Driver={SQL Server};Server=$dbhost;Port=1433;Database=$db;";

$db = odbc_connect(	$dsn,
					$user,
					$password);

?>
