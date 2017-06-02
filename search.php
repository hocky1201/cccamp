<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>搜尋結果 : <?php echo $_GET['srch'];?></title>
</head>
<body>
    <div class="wrapper">

        <?php include "header.php"; ?>

        <?php
        $srch = $_GET['srch'];
        include "dbconnect.php";
        
        $result = mysqli_query($link, "SELECT * FROM activity WHERE act_name LIKE '%$srch%' OR act_desc LIKE '%$srch%';");

        $row = mysqli_fetch_assoc($result);

        if(isset($row['act_name'])) {
            while($row=mysqli_fetch_assoc($result)){

            echo "<div class='actWrapper'>";
            if($row['act_poster'] == NULL){
                echo    "<div class='actPic'>";
                echo    "<img src='./img/default_poster.jpg'>";
                echo    "</div>";
            }else {
                echo    "<div class='actPic'";
                echo    '<img src="data:image/jpeg;base64,'.base64_encode( $row['act_poster'] ).'"/>';
                echo    "</div>";
            }

                echo "<div class='actInfo'>";
                    echo "營隊名稱:".$row["act_name"]."<br>";
                    echo "價格:".$row["act_price"]."<br>";
                    echo "縣市:".$row["act_area"]."<br>";
                    echo "招生對象:".$row["act_stage"]."<br>";
                    echo "營隊類型:".$row["act_field"]."<br>";
                    echo "報名時段:".$row["act_signup_starttime"];
                    echo "~".$row["act_signup_endtime"]."<br>";
                    echo "活動時間:".$row["act_starttime"];
                    echo "~".$row["act_endtime"]."<br>";
                    echo "負責人:".$row["act_PICname"];
                    echo "(".$row["act_PICphone"].")<br>";
                    echo "描述:".$row["act_desc"]."<br>";
                echo "</div>";
                echo "<div class='actLink'>";
                    echo "<a href='".$row['act_url']."'>活動連結</a>";
                echo "</div>";
                echo "<div class='clear'></div>";
            echo "</div>";
            }
            mysqli_close($link);

        }else {
            echo "<div class='actWrapper'>";
            echo "找不到有關 ".$srch." 的營隊";
            echo "</div>";
        }

        ?>


        <?php include 'footer.php'; ?>
        
    </div>
</body>
</html>