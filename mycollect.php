
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我的收藏</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container text-center">
    
        <?php
        include "header.php";
        include "dbconnect.php";


        if(!isset($_SESSION['user'])) {
            echo "<script>document.location.href='loginalert.php'</script>";
        }elseif ($_SESSION['user'] == 'admin') {
            echo "<script>document.location.href='authalert.php'</script>";
        }else {
            $u_code = $_SESSION['code'];
            $result = mysqli_query($link, "select * from `activity` WHERE `act_code` IN (SELECT `act_code` FROM `collect` WHERE `u_code` = $u_code);");
            
            ?>

            <div class="row clearfix">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">已收藏的活動</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                            
                            <?php

                            while($row = mysqli_fetch_assoc($result)){
                                $act_code = $row['act_code'];
                                $act_name = $row['act_name'];
                                echo"<tr>";
                                echo "<td><a href='campIntro.php?sact_code=$act_code'>$act_name</a></td>";
                                echo "</tr>";
                            }
                            ?>
                            </table>
                        </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        <?php
        }


        mysqli_close($link);

        ?>
    
    </div>
</body>
</html>