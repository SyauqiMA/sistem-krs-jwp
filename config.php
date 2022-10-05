<?php

$server = 'localhost';
$username = 'root';
$database = 'krs_syauqi';
$password = '';

$db = mysqli_connect($server, $username, $password, $database);

if( !$db ) {
	die("Gagal terhubung dengan database" . mysqli_connect_error());
}
?>