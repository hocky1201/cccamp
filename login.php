<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員登入 - CCcamp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="container text-center">
        
        <?php include "header.php"; ?>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <?php

                if(isset($_POST['submit'])) {
                    $id = $_POST['userid']; 
                    $pwd = $_POST['userpwd'];

                    include "dbconnect.php";
                    $login = mysqli_query($link, "SELECT * FROM `user` WHERE `u_id` = '$id' AND `u_pwd` = '$pwd'; ");
                    $row = mysqli_fetch_assoc($login);

                    if(isset($row)) {
                        $_SESSION['user'] = $row['u_id'];
                        $_SESSION['code'] = $row['u_code'];
                        $_SESSION['auth'] = $row['u_auth'];

                        echo "成功登入為".$_SESSION['user'];
                        echo "<script>document.location.href='index.php'</script>";
                        
                    }else {
                        $_POST = array();
                        echo "帳號或密碼錯誤，<a href='login.php'>再試一次</a>";
                    }

                }else {?>

                    <form class="form-signin" action="login.php" method="post">
                        <h2 class="form-signin-heading">會員登入</h2>
                        <input type="text" class="form-control" name="userid" placeholder="帳號" required autofocus>
                        <input type="password" class="form-control" name="userpwd" placeholder="密碼" required>
                        <hr>
                        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">登入</button>
                    </form>
                    </div>
                        <div class="col-md-4"></div>
                    </div>
                <?php
                }
                include 'footer.php'; 
                ?>
    </div>

</body>
</html>