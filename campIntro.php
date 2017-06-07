<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">

        <?php 
        include "header.php";

        include "dbconnect.php";

        if (isset($_SESSION['auth'])){
            $finda=$_SESSION['user'];
            $checka = mysqli_query($link, "SELECT * FROM `user` WHERE `u_id` = '$finda' ; ");
            $rowFa = mysqli_fetch_assoc($checka);
                if(isset($rowFa)) 
                    $u_code= $rowFa['u_code'];
                    
        }


        $act_code=$_GET["sact_code"];


        $result = mysqli_query($link,"Select * From `activity` Where `act_code` = $act_code; ");

        while($row = mysqli_fetch_assoc($result)){ ?>

            
			<div class="row bg-info">

				<div class="col-sm-3">
					<img src="<?php echo $row['act_poster'];?>" alt="營隊海報" width=250px height=200px>
				</div>

				<div class="col-sm-6 text-left">
					<h4>營隊名稱 : <b><?php echo $row['act_name'];?></b></h4>
					<p>營隊敘述 : <?php echo $row['act_desc'];?></p>
					<p>營隊類型 : <?php echo $row["act_field"] ;?></p>
					<p>招生對象 : <?php echo $row["act_stage1"];echo $row["act_stage2"];echo $row["act_stage3"];echo $row["act_stage4"];echo $row["act_stage5"];echo $row["act_stage6"];echo $row["act_stage7"];echo $row["act_stage8"];?></p>
					<p>報名時段 : <?php echo $row["act_signup_starttime"] ;?> 至 <?php echo $row["act_signup_endtime"] ;?></p>
					<p>舉辦機關 : <?php echo $row['act_ORG']; ?></p>
                    <p>活動時間 : <?php echo $row["act_starttime"] ;?> 至 <?php echo $row["act_endtime"] ;?> </p>
					<p>活動地點 : <?php echo $row["act_area"] ;?></p>
					<p>活動費用 : <?php echo $row["act_price"] ;?>元</p>
					<p>負責人 : <?php echo $row["act_PICname"];?>(<?php echo $row["act_PICphone"]; ?>)</p>
					<a href='<?php echo $row["act_url"] ;?>'><button class="btn btn-primary">活動網頁</button></a>

				</div>

				<div class="col-sm-3 text-right">
				</div>
			
			</div>
			<hr>	

        <?php
        }

        mysqli_close($link);

        ?>
    </div>
</body>
</html>
