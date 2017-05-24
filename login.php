<? session_start(); ?>
<?php
if(isset($_SESSION['user'])){
    header ('Location:index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員登錄 - CCcamp</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php if(!isset($_POST['userid'])){ ?>
    <div class="box-login">
                <form action="login.php" method="post">
                    <h4>會員登入</h4>
                    <lable>帳號：</lable><input type="text" name="userid" placeholder="請輸入帳號" required><br>
                    <lable>密碼：</lable><input type="password" name="userpassword" placeholder="請輸入密碼" required><br>
                    <input type="submit" value="登入">
                </form>
                <span>還不是會員嗎？立即<a href="./regist.php">註冊</a></span><br>
                <span><a href="">忘記密碼</a><a href="">忘記帳號</a></span>
    </div>
    <?php }else {

        include 'dbconnect.php';
        $user = $_POST['userid'];
        $pwd = $_POST['userpassword'];

        $login = "SELECT * FROM member WHERE member_id = '$user' AND member_pwd = '$pwd';";

        $result = mysqli_query($link,$login);
        $row = mysqli_fetch_assoc($result);

        if(isset($row)){
            $_SESSION['user'] = $row['mebmer_id']; 
            $_SESSION['auth'] = $row['member_admin'];
            if($_SESSION['auth'] == 1){
                header ('Location:./user/<index class="php"></index>');
            }elseif ($_SESSION['auth'] == 2) {
                header ('Location:superuser.php');
            }else {
                header ('Location:index.php');
            }
        }else {
            $_POST = array();
            header ('Location:index.php');
        }
    }
    ?>
</body>
</html>