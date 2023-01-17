<?php
$serverName = "DESKTOP-9JVOGAI\SQLEXPRESS";


// Create connection
$connectionOptions = ["Database"=>"Alergi", "UID"=>"", "PWD"=>""];
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Check connection
if ($conn == false) {
  die("Connection failed: " .sqlsrv_errors());
}
echo "";

?>