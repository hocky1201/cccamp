<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../lity/lity.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jcarousel/0.3.5/jquery.jcarousel.js"></script>
    <script src="../lity/lity.min.js"></script>
    <script src="../js/all.js"></script>
</head>
<body>
     <div class="quick-navbar">
        
                <?php
                    if(isset($_SESSION['user'])){
                        echo "<span class='hello-notify'>".$_SESSION['user']."，歡迎來到CCCamp，點此<a href='logout.php'>登出</a></span>";
                    }else{
                        echo "<span class='hello-notify'>歡迎來到CCCamp，請<a href='login.php'>登入</a>，或是<a href='regist.php'>註冊會員</a></span>";
                    }
                ?>

                <?php
                    if(isset($_SESSION['auth'])){
                        if($_SESSION['auth'] == 1) {
                            echo "<ul class='quick-link'>
                                    <li><a href=''>quick-navbar1</a></li>
                                    <li>|</li>
                                    <li><a href=''>quick-navbar2</a></li>
                                    <li>|</li>
                                    <li><a href=''>quick-navbar3</a></li>
                                    <li>|</li>
                                    <li><a href=''>quick-navbar4</a></li>
                                 </ul>";
                        }elseif ($_SESSION['auth'] == 2) {
                            echo "<ul class='quick-link'>
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
                        echo "<ul class='quick-link'>
                                <li><a href=''>營隊一覽</a></li>
                                <li>|</li>
                                <li><a href=''>報名管理</a></li>
                                <li>|</li>
                                <li><a href=''>營隊申請</a></li>
                                <li>|</li>
                                <li><a href='./supplier/'>廠商專區</a></li>
                             </ul>";
                    }
                ?>
                <div class="clear"></div>
                <form action="search.php" method="get"><input type="text" placeholder="搜尋營隊"><input type="submit" value="搜尋"></form>
            </div>

            <banner>
                    <div class="jcarousel">
                        <ul>
                            <li><a href=""><img src="http://clipart-library.com/images/pT5rG4Xpc.png" alt="BannerImage" ></a></li>
                            <li><a href=""><img src="http://clipart-library.com/images/pT5rG4Xpc.png" alt="BannerImage" ></a></li>
                            <li><a href=""><img src="http://clipart-library.com/images/pT5rG4Xpc.png" alt="BannerImage" ></a></li>
                            <li><a href=""><img src="http://clipart-library.com/images/pT5rG4Xpc.png" alt="BannerImage" ></a></li>
                        </ul>
                    </div>
                    
                    <a class="jcarousel-prev" href="#"><</a>
                    <a class="jcarousel-next" href="#">></a>
            </banner>
            <div class="clear"></div>
</body>
</html>