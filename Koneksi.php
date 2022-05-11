<?php 
//Buat Variabel terlebih dahulu
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "data_pgw";

//Kemudian buat koneksi ke MySQLi
	$conn = mysqli_connect($server, $username, $password, $dbname);

//Check Connection
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
		}

?>				