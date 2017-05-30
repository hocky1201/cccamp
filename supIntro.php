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



echo'<h4>評價</h4><br/>';

$result=mysqli_query($link,"SELECT * FROM comment WHERE act_code = $act_code ; ");

echo "<table border=1>";


while($row=mysqli_fetch_assoc($result)){
        echo"<tr>";
        
echo "<td>";
echo "內容:".$row["c_content"]."<br>";
echo "</td>";

        }
echo"<table>";



echo '<form method="post" action="supIntro.php" >';
echo'<h4>給評價</h4><br/>';
echo'請輸入評價:<textarea name="c_content" rows="6" cols="50" placeholder="限300字"></textarea><br/><br/>';
echo'<input type="radio" name="col_record" vaLue="收藏">收藏<br/><br/>';
echo'<input type="submit">';
echo '</form>';

$c_content=$_POST["c_content"];
$col_record=$_POST["col_record"];


$sql3="INSERT INTO comment (act_code, u_code, c_content) 
VALUES ('$act_code', '$u_code','$c_content')";

$sql4="INSERT INTO collect (act_code, u_code, col_record) 
VALUES ('$act_code', '$u_code','$col_record')";



$result=mysqli_query($link, $sql3);
$result=mysqli_query($link, $sql4);

mysqli_close($link);


?>
</body>
</html>
