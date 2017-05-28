<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include "header.php"; ?>
<?php
 include "dbconnect.php";

 $result=mysqli_query($link,"SELECT * FROM activity");

echo "<table border=1>";


while($row=mysqli_fetch_assoc($result)){
        echo"<tr>";
        echo "<td>"; echo "海報位置"; echo "</td>";
echo "<td>";
echo "營隊名稱:".$row["act_name"]."<br>";
echo "價格:".$row["act_price"]."<br>";
echo "縣市:".$row["act_area"]."<br>";
echo "招生對象:".$row["act_stage"]."<br>";
echo "營隊類型:".$row["act_field"]."<br>";
echo "報名時段:".$row["act_signup_starttime"];
echo "~".$row["act_signup_endtime"]."<br>";
echo "活動時間:".$row["act_starttime"];
echo "~".$row["act_endtime"]."<br>";
echo "負責人:".$row["act_contact_person"];
echo "(".$row["act_contact_phone"].")<br>";
echo "描述:".$row["act_desc"]."<br>";
echo "</td>";



}
echo"<table>";



mysqli_close($link);


?>
</body>
</html>
