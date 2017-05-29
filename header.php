<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/cccamp/css/style.css">
</head>
<body>
    <header>

        <div class="quicklogin">
        <?php
        if(isset($_SESSION['user'])) {
            echo "<b>".$_SESSION['user']."</b> 你好，點此<a href='/cccamp/logout.php'>登出</a>";
        }else {
            echo "歡迎來到<a href='/cccamp/index.php'>CCCamp</a>，請<a href='/cccamp/login.php'>登入</a>，或是<a href='/cccamp/regist.php'>註冊會員</a></span>";
        }
        ?>
        </div>

        <div class="searchbar">
            <form action="/cccamp/search.php" method="get">
                <input type="search" name="srch" placeholder="搜尋營隊">
                <input type="submit" value="立即搜尋">
            </form>
        </div>

        <div class="quicknav">
        <?php
        if(!isset($_SESSION['auth'])) {
            echo "<ul>
                <li><a href='/cccamp/allcamp.php'>營隊一覽</a></li><li>|</li>
                <li><a href='/cccamp/user/index.php'>會員專區</a></li><li>|</li>
                <li><a href='/cccamp/supplier/index.php'>廠商專區</a></li>
                </ul>";
        }elseif ($_SESSION['auth'] == 'user') {
            echo "<ul>
                <li><a href=''>會員資料修改</a></li><li>|</li>
                <li><a href=''>營隊收藏</a></li><li>|</li>
                <li><a href=''>我的最愛</a></li>
                </ul>";
        }elseif ($_SESSION['auth'] == 'admin') {
            echo "<ul>
                <li><a href=''>修改個人資料</a></li><li>|</li>
                <li><a href='/cccamp/supplier/newcamp.php'>刊登營隊</a></li><li>|</li>
                <li><a href=''>編輯營隊</a></li>
                </ul>";
        }
        ?>
        </div>

    </header>
    
</body>
</html>