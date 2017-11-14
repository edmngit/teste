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
$tsql= "select top 100 productid,name from saleslt.Product";

$getResults= sqlsrv_query($conn, $tsql);
echo ("Reading data from table" . PHP_EOL);

if ($getResults == FALSE)
    echo (sqlsrv_errors());
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
 echo ($row['productid'] . "<br> " . $row['name']);

}

sqlsrv_free_stmt($getResults);

?>
