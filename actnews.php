
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>刊登公告</title>
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

        if (!isset($_SESSION['user'])) {
            echo "<script>document.location.href='loginalert.php'</script>";
        }elseif ( $_SESSION['auth'] == 'user') {
            echo "<script>document.location.href='authalert.php'</script>";
        }else {

            $u_code= $_SESSION['code'];

            if (isset($_POST['submit'])) {
                
                date_default_timezone_set("Asia/Taipei");

                $time = date('Y年n月j日H時i分');

                $n_content = $_POST["n_content"];

                $sql2 = "INSERT INTO `news` (n_content,n_time,u_code) VALUES ('$n_content','$time','$u_code')";
                $result = mysqli_query($link, $sql2);
                echo "<script>document.location.reload();'</script>";


            }else {?>

            <div class="row clearfix">
                <div class="col-sm-0"></div>
                <div class="col-sm-6">
                        <h4 class="page-header">我刊登的公告</h4>
                        <table class="table">
                            <?php
                    
                            $result = mysqli_query($link,"SELECT * FROM news where u_code=$u_code;");

                            echo "<tr><td>公告內容</td>";    
                            echo "<td>公告時間</td></tr>";
                            while($row=mysqli_fetch_assoc($result)){
                                $n_code=$row["n_code"];
                                echo"<tr>";
                                echo "<td>".$row["n_content"]."</td>";
                                echo "<td>".$row["n_time"]."</td>";
                                echo "<td><a href='delnews.php?sn_code=$n_code'>刪除資料</a></td>";
                                echo "</tr>";
                            }

                            ?>
                        </table>
                </div>
                <div class="col-sm-6">
                    <form action="actnews.php" method="POST">
                        <h4 class="page-header">刊登公告</h4>
                        <div class="input-group">
                            <span class="input-group-addon">公告事項</span>
                            <textarea class="form-control" rows="5" name="n_content" placeholder="限500字" required></textarea>
                        </div>
                        <hr>
                        <input type="submit" class="btn btn-success" name="submit" value="發送公告">
                    </form>
                </div>
            </div>
            <?php } 

        mysqli_close($link);
        include 'footer.php';

        }
          ?>

    </div>
</body>
</html>