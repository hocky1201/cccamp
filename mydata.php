
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>編輯我的資料 - CCcamp</title>
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
        }else {
            
            $u_code = $_SESSION['code'];
            $result = mysqli_query($link, "SELECT * FROM user where u_code = $u_code;");

            $row = mysqli_fetch_assoc($result);
            $u_id = $row["u_id"];	
            $u_name = $row["u_name"];
            $u_email = $row["u_email"];
            $u_phone = $row["u_phone"];
            $u_pwd = $row["u_pwd"];
            
            if(isset($_POST['submit'])) {
                $u_name = $_POST['u_name'];
                $u_pwd = $_POST['u_pwd'];
                $u_email = $_POST['u_email'];
                $u_phone = $_POST['u_phone'];

                $update = mysqli_query($link, "UPDATE `user` SET `u_name` = '$u_name', `u_pwd` = '$u_pwd', `u_email` = '$u_email', `u_phone` = '$u_phone' WHERE `u_code` = '$u_code' ;");
                if(isset($update)) {
                    header ('Refresh:0');
                    echo '<script>alert("修改成功");</script>';
                    
                }else {
                    header ('Refresh:0');
                    echo '<script>alert("ERROR");</script>';
                }
            }else { ?>
                <div class="row clearfix">
                
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <form method='POST' action='mydata.php'>
                            <h2 class="page-header">修改個人資料</h2>

                            <lable>您的帳號為：<?php echo $u_id;?></lable>

                            <div class="input-group">
                                <span class="input-group-addon">密碼</span>
                                <input type="password" class="form-control" name="u_pwd" value="<?php echo $u_pwd; ?>" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">姓名</span>
                                <input type="text" class="form-control" name="u_name" value="<?php echo $u_name; ?>" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">電話</span>
                                <input type="number" class="form-control" name="u_phone" value="<?php echo $u_phone; ?>" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">信箱</span>
                                <input type="mail" class="form-control" name="u_email" value="<?php echo $u_email; ?>" required>
                            </div>
                            <hr>
                            <input type="submit" class="btn btn-success" name="submit" value="確認修改">

                        </form>
                    </div>
                    <div class="col-sm-4"></div>
                
                </div>
            <?php }

            mysqli_close($link);
        }
        
            include 'footer.php';
        ?>


    </div>

</body>
</html>