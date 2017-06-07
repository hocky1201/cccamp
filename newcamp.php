
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>刊登營隊 - CCcamp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container text-center">

        <?php 
        include 'header.php';

        if(!isset($_SESSION['user'])) {

            echo "<script>document.location.href='loginalert.php'</script>";

        }else if ($_SESSION['auth'] == 'user') {
            
            echo "<script>document.location.href='authalert.php'</script>";

        }else {
            
            if(isset($_POST['submit'])) {

                include "dbconnect.php";

                $act_name=$_POST["act_name"];
                $act_desc=$_POST["act_desc"];
                $act_price=$_POST["act_price"];
                $act_area=$_POST["act_area"];
                $act_stage1=$_POST["act_stage1"];
                $act_stage2=$_POST["act_stage2"];
                $act_stage3=$_POST["act_stage3"];
                $act_stage4=$_POST["act_stage4"];
                $act_stage5=$_POST["act_stage5"];
                $act_stage6=$_POST["act_stage6"];
                $act_stage7=$_POST["act_stage7"];
                $act_stage8=$_POST["act_stage8"];
                $act_field=$_POST["act_field"];
                $act_poster=$_POST["act_poster"];
                $act_url=$_POST["act_url"];
                $act_signup_starttime=$_POST["act_signup_starttime"];
                $act_signup_endtime=$_POST["act_signup_endtime"];
                $act_starttime=$_POST["act_starttime"];
                $act_endtime=$_POST["act_endtime"];
                $act_PICname=$_POST["act_PICname"];
                $act_PICphone=$_POST["act_PICphone"];
                $act_ORG=$_POST["act_ORG"];


                $find=$_SESSION['user'];
                $check = mysqli_query($link, "SELECT * FROM `user` WHERE `u_id` = '$find' ; ");
                $rowF = mysqli_fetch_assoc($check);

                if(isset($rowF)) 
                    $u_code= $rowF['u_code'];

                $sql2="INSERT INTO activity (act_name, act_desc, act_price, act_area, act_stage1,act_stage2,act_stage3,act_stage4,act_stage5,act_stage6,act_stage7,act_stage8,act_field,act_poster,act_url,act_signup_starttime,act_signup_endtime,act_starttime,act_endtime,act_PICname,act_PICphone,act_ORG,u_code) 
                VALUES ('$act_name', '$act_desc','$act_price', '$act_area', '$act_stage1','$act_stage2','$act_stage3','$act_stage4','$act_stage5','$act_stage6','$act_stage7','$act_stage8','$act_field','$act_poster','$act_url','$act_signup_starttime','$act_signup_endtime','$act_starttime','$act_endtime','$act_PICname','$act_PICphone','$act_ORG','$u_code')";
                $result=mysqli_query($link, $sql2);


                mysqli_close($link);

            }else { ?>
                <div class="row clearfix">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <form method="POST" action="newcamp.php" enctype="multipart/form-data">
                            <h2 class="page-header">建立營隊</h2>

                            <div class="input-group">
                                <span class="input-group-addon">活動名稱</span>
                                <input type="text" class="form-control" name="act_name" required autofocus>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">活動敘述</span>
                                <textarea class="form-control" rows="5" name="act_desc" placeholder="限300字" required></textarea>
                            </div>


                            <div class="input-group">
                                <span class="input-group-addon">活動地點</span>
                                
                                <select class="form-control" name="act_area">
                                    <option vaLue="0" checked>-請選擇-</option>
                                    <option vaLue="1">臺北市</option><option vaLue="2">新北市</option>
                                    <option vaLue="3">桃園市</option><option vaLue="4">臺中市</option>
                                    <option vaLue="5">臺南市</option><option vaLue="6">高雄市</option>
                                    <option vaLue="7">基隆市</option><option vaLue="8">桃園縣</option>
                                    <option vaLue="9">新竹市</option><option vaLue="10">新竹縣</option>
                                    <option vaLue="11">苗栗縣</option><option vaLue="12">彰化市</option>
                                    <option vaLue="13">彰化縣</option><option vaLue="14">南投縣</option>
                                    <option vaLue="15">雲林縣</option><option vaLue="16">嘉義市</option>
                                    <option vaLue="17">嘉義縣</option><option vaLue="18">屏東市</option>
                                    <option vaLue="19">屏東縣</option><option vaLue="20">台東縣</option>
                                    <option vaLue="21">花蓮市</option><option vaLue="22">花蓮縣</option>
                                    <option vaLue="23">宜蘭縣</option><option vaLue="24">澎湖縣</option>
                                    <option vaLue="25">金門縣</option><option vaLue="26">連江縣</option>
                                    <option vaLue="27">香港</option><option vaLue="28">海外</option>
                                    <option vaLue="29">其他</option>
                                </select>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">營隊類型</span>

                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="1">法政</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="2">財經</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="3">外語</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="4">數理化學</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="5">地球與環境</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="6">資訊</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="7">生物資源</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="8">建築</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="9">設計</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="10">藝術</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="11">社會與心理</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="12">大眾傳播</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="13">文史哲</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="14">教育</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="15">管理</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="16">運動遊憩</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="17">工程</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="18">機器人</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="19">生命科學</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="20">醫藥衛生</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="21">其他</label>
                            </div>
                            
                            <div class="input-group">
                                <span class="input-group-addon">報名費用</span>
                                <input type="number" class="form-control" name="act_price" required >
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">開放學齡</span>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="act_stage1" vaLue="幼稚園">幼稚園</label>
                                    <label><input type="checkbox" name="act_stage2" vaLue="國小">國小</label>
                                    <label><input type="checkbox" name="act_stage3" vaLue="國中">國中</label>
                                    <label><input type="checkbox" name="act_stage4" vaLue="高中">高中</label>
                                    <label><input type="checkbox" name="act_stage5" vaLue="高職">高職</label>
                                    <label><input type="checkbox" name="act_stage6" vaLue="大專院校">大專院校</label><br>
                                    <label><input type="checkbox" name="act_stage7" vaLue="研究所">研究所</label>
                                    <label><input type="checkbox" name="act_stage8" vaLue="社會人士">社會人士</label>
                                </div>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">海報圖片</span>
                                <input type="text" class="form-control" name="act_url" placeholder="請提供圖片網址" required>
                            </div>



                            <div class="input-group">
                                <span class="input-group-addon">舉辦機關</span>
                                <input type="text" class="form-control" name="act_ORG" required>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">聯絡人稱呼</span>
                                <input type="text" class="form-control" name="act_PICname" required>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">聯絡人電話</span>
                                <input type="text" class="form-control" name="act_PICphone" required>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">報名時間</span>
                                <input type="date" class="form-control" name="act_signup_starttime" required>
                                
                                <span class="input-group-addon">至</span>
                                <input type="date" class="form-control" name="act_signup_endtime" required>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">活動時間</span>
                                <input type="date" class="form-control" name="act_starttime" required>
                                
                                <span class="input-group-addon">至</span>
                                <input type="date" class="form-control" name="act_endtime" required>
                            </div>
                            <hr>
                            <input type="submit" class="btn btn-success" name="submit" value="提交營隊">
                        </form>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
        <?php
            }

        }

        include 'footer.php';

        ?>
    </div>
</html>