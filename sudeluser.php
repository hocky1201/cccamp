<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>刪除會員</title>
</head>
<body>
        <?php include "header.php";
        include "dbconnect.php"; ?>

<?php

 $u_code=$_GET["su_code"];

$sqL2="DELETE FROM user  WHERE u_code='$u_code'";
$result=mysqli_query($link, $sqL2);


mysqli_close($link);
header('Location: suuser.php');
	?>
</body>
</html>