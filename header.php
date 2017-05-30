<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar nav-default">

            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">CCcamp</a>
            </div>

            <div class="nav navbar-nav navbar-left">
                <?php
                    if(isset($_SESSION['user'])) {
                        echo "<p class='navbar-text'>Signed in as <b>".$_SESSION['user']."</b></p>";
                        echo "<button type='button' class='btn btn-default navbar-btn'>登出</button>";

                    }else {
                        echo "<button type='button' class='btn btn-default navbar-btn'>登入</button>";
                        echo "<button type='button' class='btn btn-default navbar-btn'>註冊會員</button>";
                    }
                ?>
            </div> 

            <form class="navbar-form navbar-left" action="search.php" method="get">
                <div class="form-group">
                    <input type="text" class="form-control" name="srch" placeholder="找找自己感興趣的營隊?">
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>搜尋</button>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <?php
                if(!isset($_SESSION['auth'])) {
                    echo 
                        "<li><a href='allcamp.php'>營隊一覽</a></li>
                        <li><a href='user.php'>會員專區</a></li>
                        <li><a href='supplier.php'>廠商專區</a></li>";
                }elseif ($_SESSION['auth'] == 'user') {
                    echo 
                        "<li><a href=''>會員資料修改</a></li>
                        <li><a href=''>營隊收藏</a></li>
                        <li><a href=''>我的最愛</a></li>";
                }elseif ($_SESSION['auth'] == 'admin') {
                    echo 
                        "<li><a href=''>修改個人資料</a></li>
                        <li><a href='newcamp.php'>刊登營隊</a></li>
                        <li><a href=''>編輯營隊</a></li>";
                }
                ?>
            </ul>

        </nav>
    </div>
</body>
</html>