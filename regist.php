<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>註冊會員  - CCcamp</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="box-regist">
        <h4>註冊會員</h4>
        <form action="regist.php" method="post">
            <lable>帳號：</lable><input type="text" name="userid" placeholder="請輸入帳號" required><br>
            <lable>密碼：</lable><input type="password" placeholder="請輸入密碼" required><br>
            <lable>信箱：</lable><input type="email"><br>
            <input type="submit" value="提交註冊"><br>
        </form>
      
    </div>
</body>
</html>
        <?php

            if(isset($_POST['userid'] && isset($_POST['password']))){

                include "dbconnection.php";
                "INSERT INTO user ('u_id','u_pwd') VALUES ('$_POST[userid]',$_POST[password])";

                echo "註冊成功，請重新登入。";
                header('Location:index.php'); 


            }else {
                header ('Location:index.php');
            }
        ?>