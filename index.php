<!DOCTYPE html>
<?php session_start(); ?>
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
            <div class="quick-navbar">
                <?php
                    if(isset($_SESSION['userid'])){
                        echo "<span class='hello-notify'>您好，".$_SESSION['userid']."，歡迎來到CCCamp，點此<a href='logout.php'>登出</a></span>";
                    }else{
                        echo "<span class='hello-notify'>您好，歡迎來到CCCamp，請 <a href='./login.php' data-lity >登入</a>，或是 <a href='regist.php' data-lity>註冊會員</a></span>";
                    }
                ?>


                <?php
                    if(isset($_SESSION['auth'])){
                        if($_SESSION['auth'] == 1) {
                            echo "一般會員(";//做好要刪這行
                            echo "<ul>
                                    <li><a href=''>quick-navbar1</a></li>
                                    <li>|</li>
                                    <li><a href=''>quick-navbar2</a></li>
                                    <li>|</li>
                                    <li><a href=''>quick-navbar3</a></li>
                                    <li>|</li>
                                    <li><a href=''>quick-navbar4</a></li>
                                 </ul>";
                        }elseif ($_SESSION['auth'] == 2) {
                            echo "廠商";//做好要刪這行
                            echo "<ul>
                                    <li><a href=''>quick-navbar1</a></li>
                                    <li>|</li>
                                    <li><a href=''>quick-navbar2</a></li>
                                    <li>|</li>
                                    <li><a href=''>quick-navbar3</a></li>
                                    <li>|</li>
                                    <li><a href=''>quick-navbar4</a></li>
                                 </ul>";
                        }
                    }else {
                        echo "訪客";//做好要刪這行
                        echo "<ul>
                                <li><a href=''>quick-navbar1</a></li>
                                <li>|</li>
                                <li><a href=''>quick-navbar2</a></li>
                                <li>|</li>
                                <li><a href=''>quick-navbar3</a></li>
                                <li>|</li>
                                <li><a href='./supplier/index.php'>廠商專區</a></li>
                             </ul>";
                    }
                ?>
            </div>
            <banner>
                <div class="jcarousel">
                    <ul>
                        <li><a href=""><img src="http://www.tukuwa.com/uploadfile/2013/0116/20130116010648938.jpg" alt="BannerImage"></a></li>
                        <li><a href=""><img src="http://www.tukuwa.com/uploadfile/2013/0116/20130116010648938.jpg" alt="BannerImage"></a></li>
                        <li><a href=""><img src="http://www.tukuwa.com/uploadfile/2013/0116/20130116010648938.jpg" alt="BannerImage"></a></li>
                        <li><a href=""><img src="http://www.tukuwa.com/uploadfile/2013/0116/20130116010648938.jpg" alt="BannerImage"></a></li>
                        <li><a href=""><img src="http://www.tukuwa.com/uploadfile/2013/0116/20130116010648938.jpg" alt="BannerImage"></a></li>
                        <li><a href=""><img src="http://www.tukuwa.com/uploadfile/2013/0116/20130116010648938.jpg" alt="BannerImage"></a></li>
                    </ul>
                </div>
                
                <a class="jcarousel-prev" href="#"><</a>
                <a class="jcarousel-next" href="#">></a>
            </banner>
        </header>
        <nav>
            <ul>
                <li><a href="">menu1</a></li>
                <li><a href="">menu2</a></li>
                <li><a href="">menu3</a></li>
                <li><a href="">menu4</a></li>
                <li><a href="">menu5</a></li>
                <li><a href="">menu6</a></li>
            </ul>
        </nav>
        <main>
            
        </main>

        <footer>
        </footer>
    </div>
</body>
</html>