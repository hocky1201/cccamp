<!DOCTYPE html>
<?php 
    //if(!isset($_SESSION['userid']))
      //  header ('Location: ../login.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>廠商管理</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./lity/lity.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jcarousel/0.3.5/jquery.jcarousel.js"></script>
    <script src="./lity/lity.min.js"></script>
    <script src="./js/all.js"></script>
</head>
<body>
    <div class="wrapper">

        <?php include '../header.php'; ?>


        <div class="quicknav">
            <ul>
                <li><a href="">修改個人資料</a></li><li> | </li>
                <li><a href="./newcamp.php">建立營隊</a></li><li> | </li>
                <li><a href="">編輯營隊（刪除）</a></li>
            </ul>
        </div>


        <?php include '../footer.php'; ?>

    </div>
</body>
</html>