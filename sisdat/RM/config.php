<?php

$server = "localhost";
$user = "u700319036_root1";
$password = "5^tQSF4yd";
$nama_database = "u700319036_db_mja";

$db = mysqli_connect($server, $user, $password, $nama_database);


if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>