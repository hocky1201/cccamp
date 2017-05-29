<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員註冊 - CCcamp</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">

        <?php include "header.php"; ?>

        <?php
        if(isset($_POST['submit'])) {
            $userid = $_POST['userid'];
            $userpwd = $_POST['userpwd'];
            $username = $_POST['username'];
            $usertel = $_POST['usertel'];
            $usermail = $_POST['usermail'];
            $userauth = $_POST['userauth'];

            include "dbconnect.php";
            $getUserId = mysqli_query($link, "SELECT * FROM `user` WHERE `u_id` = '$userid'");
            $id = mysqli_fetch_assoc($getUserId);
            if($id){
                echo "帳號<em>". $userid ."</em>已被使用，請選擇其他帳號";
            }else{
                $query = mysqli_query($link, "INSERT INTO `user` (`u_id`, `u_pwd`, `u_name`, `u_phone`, `u_email`, `u_auth`) VALUES ('$userid', '$userpwd', '$username', '$usertel', '$usermail', '$userauth')");
                if(isset($query)){
                    echo "用戶：<b>".$userid."</b>註冊成功，請牢記您的密碼<br />";
                    echo "3秒後將跳轉至首頁，或<a href='/cccamp/login.php'>立即登入</a>";
                    header("Refresh:3; url=/cccamp/index.php");
                }else{
                    echo "There is an Error while Saving: ";
                    echo "<br />Please click on Create User from menu, and try again<br /><br />";
                }
            }
            exit;
        }else {
        ?>
        <form action="regist.php" method="post">
            <h2>會員註冊</h2>
            <lable>帳號 </lable><input type="text" name="userid" placeholder="請輸入帳號" required><br>
            <lable>姓名 </lable><input type="text" name="username" placeholder="請輸入姓名" required><br>
            <lable>密碼 </lable><input type="password" name="userpwd" placeholder="請輸入密碼" required><br>
            <lable>電話 </lable><input type="tel" name="usertel" placeholder="請輸入電話" required><br>
            <lable>信箱 </lable><input type="email" name="usermail" placeholder="請輸入信箱" required><br>
            <lable>身分 </lable><input type="radio" name="userauth" value="user">一般會員
                                <input type="radio" name="userauth" value="admin">廠商<br>
            <input type="reset" value="重填"><input type="submit" name="submit" value="立即註冊"><br>
        </form>
        <span>已經是會員了嗎？立即<a href="/cccamp/login.php">登入</a></span><br>
        <?php } ?>

        <?php include 'footer.php'; ?>
        
    </div>
</body>
</html>





        
        


        
    