<?php


$servername = "localhost";

$username = "root"; 

$password = ""; 

$dbname = "scolarite";  

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: config.php " . $conn->connect_error);

}

?> 