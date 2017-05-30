<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>營隊一覽 - CCcamp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container text-center">

        <?php include "header.php"; ?>

        <?php

        include "dbconnect.php";

        $result=mysqli_query($link,"SELECT * FROM activity");

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
        ?>

        <?php include 'footer.php'; ?>

    </div>
</body>
</html>
