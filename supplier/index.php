<!DOCTYPE html>
<?php 
    session_start(); 
    
    if(!isset($_SESSION['userid']))
        header ('Location: ../login.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>廠商管理</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./lity/lity.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jcarousel/0.3.5/jquery.jcarousel.js"></script>
    <script src="./lity/lity.min.js"></script>
    <script src="./js/all.js"></script>
</head>
<body>

    <div class="wrapper">

        <header>

        </header>

        <main>
            <ul>
                <li><a href="">修改個人資料</a></li>
                <li><a href="">建立營隊</a></li>
                <li><a href="">編輯營隊（刪除）</a></li>
                <li><a href=""></a></li>
            </ul>
        </main>

        <footer>
            CCcamp 2017
        </footer>
        
    </div>
    
</body>
</html>