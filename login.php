<?php
if(isset($_SESSION['user'])){
    echo "您已登入為:<br />";
    foreach ($_SESSION as $key => $value)
        echo $key." : ".$value."<br />";
    echo "<a href='logout.php'>點此登出</a>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員登入 - CCcamp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">

        <?php include "header.php"; ?>

        <?php

        if(isset($_POST['submit'])) {
            $id = $_POST['userid']; 
            $pwd = $_POST['userpwd'];

            include "dbconnect.php";
            $login = mysqli_query($link, "SELECT * FROM `user` WHERE `u_id` = '$id' AND `u_pwd` = '$pwd'; ");
            $row = mysqli_fetch_assoc($login);

            if(isset($row)) {
                $_SESSION['user'] = $row['u_id'];
                $_SESSION['auth'] = $row['u_auth'];

                if( $_SESSION['auth'] == 'admin'){
                    header("Refresh:1; url=index.php");
                }else{
                    echo "成功登入為".$_SESSION['user'];
                    header("Refresh:1; url=index.php");
                }

            }else {
                $_POST = array();
                echo "帳號或密碼錯誤，<a href='login.php'>再試一次</a>";
            }

        }else {
        ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">會員登入</h2>
            </div>
            <div class="panel-body">
                <form action="login.php" method="post">
                    <lable>帳號 </lable><input type="text" name="userid" placeholder="請輸入帳號" required><br>
                    <lable>密碼 </lable><input type="password" name="userpwd" placeholder="請輸入密碼" required><br>
                    <input type="submit" class="btn" name="submit" value="登入"><br>
                    <span>還不是會員嗎？立即<a href="./regist.php">註冊</a></span><br>
                    <span><a href="">忘記密碼</a>?</span><br>
                </form>
            </div>
        </div>






        <?php } ?>


        <?php include 'footer.php'; ?>

    </div>

</body>
</html>