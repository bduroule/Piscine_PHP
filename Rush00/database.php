<?php
$host = '10.3.3.1';
$user = 'root';
$pass = 'root';
$dbname = 'website';
$conn = mysqli_connect($host, $user, $pass,$dbname);
if(!$conn)
	die('Could not connect: '.mysqli_connect_error());
?>
