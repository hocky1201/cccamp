<?php

$hostname = "localhost";
$user = "root";
$password = "1234";
$dbname = "cccamp";


$link = mysqli_connect($hostname, $user, $password, $dbname);
mysqli_query($link, 'SET NAMES UTF-8');

?>