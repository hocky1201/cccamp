<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CCcamp - 首頁</title>
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
        
        <?php include 'header.php'; ?>

            <nav>
                <ul>
                    <li><a href="">menu1</a></li>
                    <li><a href="">menu2</a></li>
                    <li><a href="">menu3</a></li>
                    <li><a href="">menu4</a></li>
                    <li><a href="">menu5</a></li>
                </ul>
            </nav>
        </header>

        <main>
        
            <div class="news">
                <div class="announceTitle"><h6>最新公告</h6></div>
            </div>
            <div class="act-news">
                <div class="announceTitle"><h6>活動公告</h6></div>
            </div>
            <div class="clear"></div>
            <div class="popular-act">
                <div class="announceTitle"><h6>最新營隊</h6></div>
            </div>
            
        </main>

        <footer>
            <?php include 'footer.php'; ?>
            <style>
                <?php include 'css/style.css'; ?>
            </style>
        </footer>

    </div>
</body>
</html>