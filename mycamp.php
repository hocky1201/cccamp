
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我的營隊</title>
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

            header ('Location: authalert.php');

        }else {

            $u_code = $_SESSION['code'];
            $result = mysqli_query($link, "SELECT * FROM activity where u_code=$u_code;");

            while($row=mysqli_fetch_assoc($result)){
            
                $act_poster=$row["act_poster"];
                $act_code=$row["act_code"];
                $act_name=$row["act_name"];
                $act_code= $row['act_code'];
                $org=$row["act_ORG"];
                $url=$row["act_url"];
            ?>
            <div class="row bg-danger clearfix ">

				<div class="col-sm-4">
					<img src="<?php echo $row['act_poster'];?>" alt="營隊海報" width=250px height=200px>
				</div>

				<div class="col-sm-4 text-left">
					<h4><b><?php echo $row['act_name'];?></b></h4>
					<p><?php echo $row['act_desc'];?></p>
					<p>營隊類型 : <?php echo $row["act_field"] ;?></p>
					<p>招生對象 : <?php echo $row["act_stage1"];echo $row["act_stage2"];echo $row["act_stage3"];echo $row["act_stage4"];echo $row["act_stage5"];echo $row["act_stage6"];echo $row["act_stage7"];echo $row["act_stage8"];?></p>
					<p>報名時段 : <?php echo $row["act_signup_starttime"] ;?> 至 <?php echo $row["act_signup_endtime"] ;?></p>
					<p><?php echo "舉辦機關 : ".$row['act_ORG'] ;?></p>
				</div>

				<div class="col-sm-4 text-left">
					<p>活動時間 : <?php echo $row["act_starttime"] ;?> 至 <?php echo $row["act_endtime"] ;?> </p>
					<p>活動地點 : <?php echo $row["act_area"] ;?></p>
					<p>活動費用 : <?php echo $row["act_price"] ;?>元</p>
					<p>負責人 : <?php echo $row["act_PICname"];?>(<?php echo $row["act_PICphone"]; ?>)</p>
                    <p>活動網址 : <?php echo $row["act_url"] ;?></p>
					<a href='delact.php?sact_code=<?php echo $act_code;?>'><button class="btn btn-danger">刪除資料</button></a>
					<a href='updateact.php?sact_code=<?php echo $act_code;?>'><button class="btn btn-info">修改資料</button></a>
                    
				</div>
			
			</div>
			<hr>	
            <?php
            }

        mysqli_close($link);

        }
        include 'footer.php';
        ?>

    </div>
</body>
</html>