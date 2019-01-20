<?php 
	$host = 'localhost';
	$username = 'ika_user';
	$password = '51fdgdf@Gfd';
	$db = 'ika';

	$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>