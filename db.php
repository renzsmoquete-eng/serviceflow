<?php
$host     = 'localhost';
$user     = 'root';
$password = '';
$db       = 'serviceflow_db';

// Enable error reporting for MySQLi to catch connection issues safely
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli($host, $user, $password, $db);
    echo "Connected successfully using MySQLi!";
} catch (mysqli_sql_exception $e) {
    throw new mysqli_sql_exception($e->getMessage(), $e->getCode());
}
?>
