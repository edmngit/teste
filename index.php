<?php
echo "Hello World!";

$serverName = "sbr1.database.windows.net";
$connectionOptions = array(
    "Database" => "dbazure",
    "Uid" => "adminbd",
    "PWD" => "Arvorecaldo01."
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);



?>
