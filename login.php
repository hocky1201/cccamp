<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員登錄 - CCCamp</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="box-login">
                <form action="login.php" method="post">
                    <h4>會員登入</h4>
                    <lable>帳號：</lable><input type="text" name="userid" placeholder="請輸入帳號" required><br>
                    <lable>密碼：</lable><input type="password" name="userpassword" placeholder="請輸入密碼" required><br>
                    <input type="submit" value="登入">
                </form>
                <span>還不是會員嗎？立即<a href="./regist.php">免費註冊</a></span><br>
                <span><a href="">忘記密碼</a><a href="">忘記帳號</a></span>
    </div>
        <!--
        <?php
            if(isset($_POST['userid'])){

                $uid = $_POST['userid'];
                $upwd = $_POST['userpassword'];

                $connection = mysqli_connect('localhost','root','123456','test');
                $sql = "SELECT '*' FROM user WHERE userid = '$uid'' AND userpassword = '$upwd';";
                $result = mysqli_query($connection,$sql);
                $row = mysqli_fetch_assoc($result);

                if(isset($row)){
                    $_SESSION['userid'] = $row['userid'];
                    $_SESSION['userpassword'] = $row['userpassword'];
                    $_SESSION['type'] = $row['type'];


                    if($_SESSION['type'] == 0){
                        header('Location:./user/index.php');
                    }elseif($_SESSION['type'] == 1) {
                        header('Location:./supplier/index.php');
                    }
                }
            }else{
                echo "<span>登入失敗，帳號密碼錯誤</span>";
            }
        ?>
        -->
</body>
</html>