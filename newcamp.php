
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">

        <?php include "header.php";?>
       
        <?php
        if(isset($_POST['submit'])) {
            
            $act_name = $_POST["act_name"];
            $act_desc = $_POST["act_desc"];
            $act_price = $_POST["act_price"];
            $act_area = $_POST["act_area"];
            $act_stage = implode("", $_POST["act_stage"]);
            $act_field = $_POST["act_field"];
            $act_poster = $_POST["act_poster"];
            $act_url = $_POST["act_url"];
            $act_signup_starttime = $_POST["act_signup_starttime"];
            $act_signup_endtime = $_POST["act_signup_endtime"];
            $act_starttime = $_POST["act_starttime"];
            $act_endtime = $_POST["act_endtime"];
            $act_PICname = $_POST["act_PICname"];
            $act_PICphone = $_POST["act_PICphone"];
            $act_ORG = $_POST["act_ORG"];

            include "dbconnect.php";

            $sql2 = "INSERT INTO `activity` (act_name, act_desc, act_price, act_area, act_stage, act_field, act_poster, act_url, act_signup_starttime, act_signup_endtime, act_starttime, act_endtime, act_PICname, act_PICphone, act_ORG) 
            VALUES ('$act_name', '$act_desc','$act_price', '$act_area', '$act_stage', '$act_field', '$act_poster', '$act_url', '$act_signup_starttime', '$act_signup_endtime', '$act_starttime', '$act_endtime', '$act_PICname', '$act_PICphone', '$act_ORG')";
            
            $result=mysqli_query($link, $sql2);

            if(isset($result))
                echo "營隊添加成功";
            else 
                die("失敗");
            mysqli_close($link);
        }else { ?>

        <form method="post" action="newcamp.php" enctype="multipart/form-data">

            <h2>刊登營隊</h2>

            <lable>活動名稱: </lable>
            <input type="text" name="act_name"><br/>

            <lable>活動敘述: </lable>
            <textarea name="act_desc" rows="6" cols="50" placeholder="限300字"></textarea><br/>

            <lable>報名費: </lable>
            <input type="number" name="act_price"><br/>

            <lable>營隊地點: </lable>
            <select name="act_area">
                <option vaLue="1">臺北市</option>
                <option vaLue="2">新北市</option>
                <option vaLue="3">桃園市</option>
                <option vaLue="4">臺中市</option>
                <option vaLue="5">臺南市</option>
                <option vaLue="6">高雄市</option>
                <option vaLue="7">基隆市</option>
                <option vaLue="8">桃園縣</option>
                <option vaLue="9">新竹市</option>
                <option vaLue="10">新竹縣</option>
                <option vaLue="11">苗栗縣</option>
                <option vaLue="12">彰化市</option>
                <option vaLue="13">彰化縣</option>
                <option vaLue="14">南投縣</option>
                <option vaLue="15">雲林縣</option>
                <option vaLue="16">嘉義市</option>
                <option vaLue="17">嘉義縣</option>
                <option vaLue="18">屏東市</option>
                <option vaLue="19">屏東縣</option>
                <option vaLue="20">台東縣</option>
                <option vaLue="21">花蓮市</option>
                <option vaLue="22">花蓮縣</option>
                <option vaLue="23">宜蘭縣</option>
                <option vaLue="24">澎湖縣</option>
                <option vaLue="25">金門縣</option>
                <option vaLue="26">連江縣</option>
                <option vaLue="27">香港</option>
                <option vaLue="28">海外</option>
                <option vaLue="29">其他</option>
            </select><br/>

            <lable>開放學齡: </lable>
            <input type="checkbox" name="act_stage[]" vaLue="幼稚園">幼稚園
            <input type="checkbox" name="act_stage[]" vaLue="國小">國小
            <input type="checkbox" name="act_stage[]" vaLue="國中">國中
            <input type="checkbox" name="act_stage[]" vaLue="高中">高中
            <input type="checkbox" name="act_stage[]" vaLue="高職">高職
            <input type="checkbox" name="act_stage[]" vaLue="大專院校">大專院校
            <input type="checkbox" name="act_stage[]" vaLue="研究所">研究所
            <input type="checkbox" name="act_stage[]" vaLue="社會人士">社會人士<br/>

            <lable>營隊類型: </lable>
            <select name="act_field">
                <option value="1">法政</option>
                <option value="2">財經</option>
                <option value="3">外語</option>
                <option value="4">數理化學</option>
                <option value="5">地球與環境</option>
                <option value="6">資訊</option>
                <option value="7">生物資源</option>
                <option value="8">建築</option>
                <option value="9">設計</option>
                <option value="10">藝術</option>
                <option value="11">社會與心理</option>
                <option value="12">大眾傳播</option>
                <option value="13">文史哲</option>
                <option value="14">教育</option>
                <option value="15">管理</option>
                <option value="16">運動遊憩</option>
                <option value="17">工程</option>
                <option value="18">機器人</option>
                <option value="19">生命科學</option>
                <option value="20">醫藥衛生</option>
                <option value="21">其他</option>
            </select><br/>

            <lable>上傳海報: </lable>
            <input type="file" name="act_poster"><br/>

            <lable>營隊網址: </lable>
            <input type="text" name="act_url"><br/>

            <lable>報名時間: </lable>
            <input type="date" name="act_signup_starttime">至<input type="date" name="act_signup_endtime"><br/>

            <lable>營期: </lable>
            <input type="date" name="act_starttime">至<input type="date" name="act_endtime"><br/>

            <lable>舉辦機關: </lable>
            <input type="text" name="act_ORG"><br/>

            <lable>聯絡人: </lable>
            <input type="text" name="act_PICname"><br/>

            <lable>聯絡人電話: </lable>
            <input type="text" name="act_PICphone"><br/>
            
            <input type="submit" name="submit" value="刊登營隊">
        </form>
        <?php } ?>

        <?php include 'footer.php'; ?>

    </div>

</body>
</html>