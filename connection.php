<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "thekist.com";
$port = 3308;

$conn = new mysqli($servername, $username, $password, $database_name, $port);
if ($conn->connect_error) {
    echo "connection error";
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo"";
}


