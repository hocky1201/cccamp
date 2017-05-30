<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php include "header.php"; ?>



<?php
 include "dbconnect.php";

if (isset($_SESSION['auth'])){
	$finda=$_SESSION['user'];
	$checka = mysqli_query($link, "SELECT * FROM `user` WHERE `u_id` = '$finda' ; ");
    $rowFa = mysqli_fetch_assoc($checka);
        if(isset($rowFa)) 
            $u_code= $rowFa['u_code'];
			
}

$act_code=$_SESSION['act_code'];



echo '<form method="post" action="supIntro.php" >';
echo'<h4>評價</h4><br/>';
echo'請輸入評價:<textarea name="c_content" rows="6" cols="50" placeholder="限300字"></textarea>';
echo'<input type="submit">';
echo '</form>';

$c_content=$_POST["c_content"];


$sql3="INSERT INTO comment (act_code, u_code, c_content) 
VALUES ('$act_code', '$u_code','$c_content')";
$result=mysqli_query($link, $sql3);


mysqli_close($link);


?>
</body>
</html>
