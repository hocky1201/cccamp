<?php

$hostname = "localhost";
$user = "root";
$password = "cccamp";
$dbname = "cccamp";

$link = mysqli_connect($hostname, $user, $password, $dbname);
mysqli_query($link, "SET NAMES 'utf8'");
mysqli_query($link, "SET character Set 'utf8'");

?>