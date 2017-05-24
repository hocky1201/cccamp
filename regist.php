<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>註冊會員  - CCcamp</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php if(isset($_SESSION['user']))
        header ('Location: index.php');
    ?>
    <div class="box-regist">
        <?php
        if(!isset($_POST['userid'])){ ?>
        <h4>註冊會員</h4>
        <form action="regist.php" method="post">
            <lable>帳號：</lable><input type="text" name="id" placeholder="請輸入帳號" required><br>
            <lable>密碼：</lable><input type="password" name="pwd" placeholder="請輸入密碼" required><br>
            <lable>姓名：</lable><input type="text" name="name" placeholder="請輸入姓名" required><br>
            <input type="submit" value="確定註冊"><br>
        </form>

        <?php
        }else{
            $id = $_POST['id'];
            $pwd = $_POST['pwd'];
            $name = $_POST['name'];

            include 'dbconnect.php';

            $regist = "INSERT INTO member SET member_id = $id, member_pwd = $pwd, member_name = $name;";
            mysqli_query($link,$regist);
            
            echo "已完成註冊，請回到<a href='index.php'>首頁</a>進行登入!";
            
        }

        ?>
    </div>
</body>
</html>