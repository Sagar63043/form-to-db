<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "formtodb";

$socket = "/data/data/com.termux/files/usr/var/run/mysqld/mysqld.sock"; // ✅ Termux socket

$conn = new mysqli($host, $user, $pass, $dbname, null, $socket);

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
?>
