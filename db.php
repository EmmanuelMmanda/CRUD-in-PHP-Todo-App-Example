<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "crud";
$conn = mysqli_connect($host, $username, $pass, $db);
if (!$conn) {
    echo "Failed to connect to database";
}
?>
