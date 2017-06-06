
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改營隊</title>
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
			header ('Location: loginalert.php');
		}elseif ($_SESSION['auth'] == 'user') {
			header ('Location: loginalert.php');
		}else {
			if(isset($_POST['submit'])) {

			$act_code = $_POST["exeact_code"];
			$act_name = $_POST["exeact_name"];
			$act_desc = $_POST["exeact_desc"];
			$act_price = $_POST["exeact_price"];
			$act_area = $_POST["exeact_area"];
			$act_stage1 = $_POST["exeact_stage1"];
			$act_stage2 = $_POST["exeact_stage2"];
			$act_stage3 = $_POST["exeact_stage3"];
			$act_stage4 = $_POST["exeact_stage4"];
			$act_stage5 = $_POST["exeact_stage5"];
			$act_stage6 = $_POST["exeact_stage6"];
			$act_stage7 = $_POST["exeact_stage7"];
			$act_stage8 = $_POST["exeact_stage8"];
			$act_field = $_POST["exeact_field"];
			$act_poster = $_POST['exeact_poster'];
			$act_url = $_POST["exeact_url"];
			$act_signup_starttime = $_POST["exeact_signup_starttime"];
			$act_signup_endtime = $_POST["exeact_signup_endtime"];
			$act_starttime = $_POST["exeact_starttime"];
			$act_endtime = $_POST["exeact_endtime"];
			$act_PICname = $_POST["exeact_PICname"];
			$act_PICphone = $_POST["exeact_PICphone"];
			$act_ORG = $_POST["exeact_ORG"];


			$sql2 = "UPDATE activity SET act_name = '$act_name',act_desc = '$act_desc', act_price = '$act_price', act_area = '$act_area',act_stage1 = '$act_stage1', act_stage2 = '$act_stage2', act_stage3 = '$act_stage3', act_stage4 = '$act_stage4', act_stage5 = '$act_stage5', act_stage6 = '$act_stage6', act_stage7 = '$act_stage7', act_stage8 = '$act_stage8', act_field = '$act_field', act_poster = '$act_poster', act_url = '$act_url', act_signup_starttime = '$act_signup_starttime', act_signup_endtime = '$act_signup_endtime', act_starttime = '$act_starttime', act_endtime = '$act_endtime', act_PICname = '$act_PICname', act_PICphone = '$act_PICphone', act_ORG = '$act_ORG' WHERE act_code = '$act_code'";
			$result=mysqli_query($link, $sql2);
			$results=mysqli_query($link,"SELECT * FROM activity WHERE u_code=$u_code;");
						
			echo "<table border=1>";

			while($row = mysqli_fetch_assoc($results)) {
				echo"<tr>";
				$act_poster=$row["act_poster"];
				echo"<td><img src='$act_poster' alt='營隊海報' width=250px height=200px></td>";
				echo "<td>";
				//$act_code=$row["act_code"];
				echo "營隊名稱:".$row["act_name"]."<br>";
				// $act_name=$row["act_name"];
				// $act_code= $row['act_code'];
				$org=$row["act_ORG"];
				echo "舉辦機關:".$org."<br>";
				echo "報名費:".$row["act_price"]."<br>";
				echo "縣市:".$row["act_area"]."<br>";
				echo "招生對象:".$row["act_stage1"].$row["act_stage2"].$row["act_stage3"].$row["act_stage4"].$row["act_stage5"].$row["act_stage6"].$row["act_stage7"].$row["act_stage8"]."<br>";
				echo "營隊類型:".$row["act_field"]."<br>";
				echo "報名時段:".$row["act_signup_starttime"];
				echo "~".$row["act_signup_endtime"]."<br>";
				echo "活動時間:".$row["act_starttime"];
				echo "~".$row["act_endtime"]."<br>";
				echo "負責人:".$row["act_PICname"];
				echo "(".$row["act_PICphone"].")<br>";
				echo "描述:".$row["act_desc"]."<br>";
				$url=$row["act_url"];
				echo "詳細資訊(網址):".$url."<br>";
			}
			echo"<table>";		

			mysqli_close($link);

			}else {
			
			$act_code=$_GET["sact_code"];

			$sqL2="SELECT * FROM  activity  WHERE act_code='$act_code'";
			$result=mysqli_query($link, $sqL2);

			$row = mysqli_fetch_assoc($result);
			$act_name = $row["act_name"];
			$act_code = $row['act_code'];
			$org = $row["act_ORG"];
			$act_price = $row["act_price"];
			$act_area = $row["act_area"];
			$act_stage1 = $row["act_stage1"];
			$act_stage2 = $row["act_stage2"];
			$act_stage3 = $row["act_stage3"];
			$act_stage4 = $row["act_stage4"];
			$act_stage5 = $row["act_stage5"];
			$act_stage6 = $row["act_stage6"];
			$act_stage7 = $row["act_stage7"];
			$act_stage8 = $row["act_stage8"];
			$act_field = $row["act_field"];
			$act_poster = $row["act_poster"];
			$act_signup_starttime = $row["act_signup_starttime"];
			$act_signup_endtime = $row["act_signup_endtime"];
			$act_starttime = $row["act_starttime"];
			$act_endtime = $row["act_endtime"];
			$act_PICname = $row["act_PICname"];
			$act_PICphone = $row["act_PICphone"];
			$act_desc = $row["act_desc"];
			$url = $row["act_url"];
			?>
			                <div class="row clearfix">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <form method="POST" action="newcamp.php" enctype="multipart/form-data">
                            <h2 class="page-header">修改營隊</h2>

                            <div class="input-group">
                                <span class="input-group-addon">活動名稱</span>
                                <input type="text" class="form-control" name="act_name" value="<?php echo $act_name;?>" required autofocus>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">活動敘述</span>
                                <textarea class="form-control" rows="5" name="act_desc" placeholder="限300字" required><?php echo $act_desc;?></textarea>
                            </div>


                            <div class="input-group">
                                <span class="input-group-addon">活動地點</span>
                                
                                <select class="form-control" name="act_area">
									<option vaLue="0">-請選擇-</option>
                                    <option vaLue="1" <?php if($act_area == '臺北市') echo 'selected="selected"';?>>臺北市</option>
									<option vaLue="2" <? if($act_area == '新北市') echo 'selected="selected"';?>>新北市</option>
                                    <option vaLue="3" <? if($act_area == '桃園市') echo 'selected="selected"';?>>桃園市</option>
									<option vaLue="4" <? if($act_area == '臺中市') echo 'selected="selected"';?>>臺中市</option>
                                    <option vaLue="5" <? if($act_area == '臺南市') echo 'selected="selected"';?>>臺南市</option>
									<option vaLue="6" <? if($act_area == '高雄市') echo 'selected="selected"';?>>高雄市</option>
                                    <option vaLue="7" <? if($act_area == '基隆市') echo 'selected="selected"';?>>基隆市</option>
									<option vaLue="8" <? if($act_area == '桃園縣') echo 'selected="selected"';?>>桃園縣</option>
                                    <option vaLue="9" <? if($act_area == '新竹市') echo 'selected="selected"';?>>新竹市</option>
									<option vaLue="10" <? if($act_area == '新竹縣') echo 'selected="selected"';?>>新竹縣</option>
                                    <option vaLue="11" <?if($act_area == '苗栗縣') echo 'selected="selected"';?>>苗栗縣</option>
									<option vaLue="12" <? if($act_area == '彰化市') echo 'selected="selected"';?>>彰化市</option>
                                    <option vaLue="13" <? if($act_area == '彰化縣') echo 'selected="selected"';?>>彰化縣</option>
									<option vaLue="14" <? if($act_area == '南投縣') echo 'selected="selected"';?>>南投縣</option>
                                    <option vaLue="15" <? if($act_area == '雲林縣') echo 'selected="selected"';?>>雲林縣</option>
									<option vaLue="16" <? if($act_area == '嘉義市') echo 'selected="selected"';?>>嘉義市</option>
                                    <option vaLue="17" <? if($act_area == '嘉義縣') echo 'selected="selected"';?>>嘉義縣</option>
									<option vaLue="18" <? if($act_area == '屏東市') echo 'selected="selected"';?>>屏東市</option>
                                    <option vaLue="19" <? if($act_area == '屏東縣') echo 'selected="selected"';?>>屏東縣</option>
									<option vaLue="20" <? if($act_area == '台東縣') echo 'selected="selected"';?>>台東縣</option>
                                    <option vaLue="21" <? if($act_area == '花蓮市') echo 'selected="selected"';?>>花蓮市</option>
									<option vaLue="22" <? if($act_area == '花蓮縣') echo 'selected="selected"';?>>花蓮縣</option>
                                    <option vaLue="23" <? if($act_area == '宜蘭縣') echo 'selected="selected"';?>>宜蘭縣</option>
									<option vaLue="24" <? if($act_area == '澎湖縣') echo 'selected="selected"';?>>澎湖縣</option>
                                    <option vaLue="25" <? if($act_area == '金門縣') echo 'selected="selected"';?>>金門縣</option>
									<option vaLue="26" <? if($act_area == '連江縣') echo 'selected="selected"';?>>連江縣</option>
                                    <option vaLue="27" <? if($act_area == '香港') echo 'selected="selected"';?>>香港</option>
									<option vaLue="28" <? if($act_area == '海外') echo 'selected="selected"';?>>海外</option>
                                    <option vaLue="29" <? if($act_area == '其他') echo 'selected="selected"';?>>其他</option>
                                </select>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">營隊類型</span>

                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="1" <?php if ($act_field == '法政') echo 'checked';?>>法政</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="2" <?php if ($act_field == '財經') echo 'checked';?>>財經</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="3" <?php if ($act_field == '外語') echo 'checked';?>>外語</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="4" <?php if ($act_field == '數理化學') echo 'checked';?>>數理化學</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="5" <?php if ($act_field == '地球與環境') echo 'checked';?>>地球與環境</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="6" <?php if ($act_field == '資訊') echo 'checked';?>>資訊</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="7" <?php if ($act_field == '生物資源') echo 'checked';?>>生物資源</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="8" <?php if ($act_field == '建築') echo 'checked';?>>建築</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="9" <?php if ($act_field == '設計') echo 'checked';?>>設計</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="10" <?php if ($act_field == '藝術') echo 'checked';?>>藝術</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="11" <?php if ($act_field == '社會與心理') echo 'checked';?>>社會與心理</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="12" <?php if ($act_field == '大眾傳播') echo 'checked';?>>大眾傳播</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="13" <?php if ($act_field == '文史哲') echo 'checked';?>>文史哲</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="14" <?php if ($act_field == '教育') echo 'checked';?>>教育</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="15" <?php if ($act_field == '管理') echo 'checked';?>>管理</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="16" <?php if ($act_field == '運動遊憩') echo 'checked';?>>運動遊憩</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="17" <?php if ($act_field == '工程') echo 'checked';?>>工程</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="18" <?php if ($act_field == '機器人') echo 'checked';?>>機器人</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="19" <?php if ($act_field == '生命科學') echo 'checked';?>>生命科學</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="20" <?php if ($act_field == '醫藥衛生') echo 'checked';?>>醫藥衛生</label>
                                <label class="radio-inline"><input type="radio" name="act_field" vaLue="21" <?php if ($act_field == '其他') echo 'checked';?>>其他</label>
                            </div>
                            
                            <div class="input-group">
                                <span class="input-group-addon">報名費用</span>
                                <input type="number" class="form-control" name="act_price" value="<?php echo $act_price;?>"required >
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">開放學齡</span>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="act_stage1" vaLue="幼稚園" <?php if($act_stage1 != NULL) echo 'checked';?>>幼稚園</label>
                                    <label><input type="checkbox" name="act_stage2" vaLue="國小" <?php if($act_stage2 != NULL) echo 'checked';?>>國小</label>
                                    <label><input type="checkbox" name="act_stage3" vaLue="國中" <?php if($act_stage3 != NULL) echo 'checked';?>>國中</label>
                                    <label><input type="checkbox" name="act_stage4" vaLue="高中" <?php if($act_stage4 != NULL) echo 'checked';?>>高中</label>
                                    <label><input type="checkbox" name="act_stage5" vaLue="高職" <?php if($act_stage5 != NULL) echo 'checked';?>>高職</label>
                                    <label><input type="checkbox" name="act_stage6" vaLue="大專院校" <?php if($act_stage6 != NULL) echo 'checked';?>>大專院校</label><br>
                                    <label><input type="checkbox" name="act_stage7" vaLue="研究所" <?php if($act_stage7 != NULL) echo 'checked';?>>研究所</label>
                                    <label><input type="checkbox" name="act_stage8" vaLue="社會人士" <?php if($act_stage8 != NULL) echo 'checked';?>>社會人士</label>
                                </div>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">海報圖片</span>
                                <input type="text" class="form-control" name="act_url" placeholder="請提供圖片網址" value="<?php echo $act_poster;?>" required>
                            </div>



                            <div class="input-group">
                                <span class="input-group-addon">舉辦機關</span>
                                <input type="text" class="form-control" name="act_ORG" value="<?php echo $org;?>"required>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">聯絡人稱呼</span>
                                <input type="text" class="form-control" name="act_PICname" value="<?php echo $act_PICname;?>" required>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">聯絡人電話</span>
                                <input type="text" class="form-control" name="act_PICphone" value="<?php echo $act_PICphone;?>" required>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">報名時間</span>
                                <input type="date" class="form-control" name="act_signup_starttime" value="<?php echo $act_signup_starttime;?>" required>
                                
                                <span class="input-group-addon">至</span>
                                <input type="date" class="form-control" name="act_signup_endtime" value="<?php echo $act_signup_endtime;?>" required>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">活動時間</span>
                                <input type="date" class="form-control" name="act_starttime" value="<?php echo $act_starttime;?>" required>
                                
                                <span class="input-group-addon">至</span>
                                <input type="date" class="form-control" name="act_endtime" value="<?php echo $act_endtime;?>" required>
                            </div>
                            <hr>
                            <input type="submit" class="btn btn-success" name="submit" value="確認修改">
                        </form>
                    </div>
                    <div class="col-sm-3"></div>
                </div>


			<?php
			mysqli_close($link);

			}
		}
		?>
	</div>
</body>
</html>