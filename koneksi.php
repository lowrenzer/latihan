<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $koneksi = new PDO("sqlsrv:server = tcp:lowappserver.database.windows.net,1433; Database = lowdb", "lowrenzer", "{Rezareza1234}");
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "lowrenzer", "pwd" => "{Rezareza1234}", "Database" => "lowdb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:lowappserver.database.windows.net,1433";
$koneksi = mysqli_connect($serverName, $connectionInfo);
?>
