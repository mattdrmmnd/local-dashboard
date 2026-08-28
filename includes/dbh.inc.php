<?php
//No closing tag, this is a pure php file.

$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
$dbusername = "root";
$dbpassword = "";

// Try catch block - if error occurs catch it and then do something with the error message
//$mysqli can be used in other cases instead of $pdo
try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword); // only line actually needed to connect, but error handling below is a must have.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}
