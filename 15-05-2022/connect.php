<?php

$servername = "localhost";
$database = "students";
$username = "root";
$password = "";

 $connect = mysqli_connect($servername, $username, $password, $database);

if ($connect== false) {
die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

?>