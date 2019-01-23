<?php

$servername = 'localhost';
$username = '';
$password = '';
$dbname = "transaction";


$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf-8");

if ($conn->connect_error) {
	die('connection failed:".conn->connect_error');
}

?>




