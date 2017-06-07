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
    <div class="container text-center">

        <?php

        include "header.php";

        include "dbconnect.php";

        if (isset($_SESSION['auth'])){
            $finda=$_SESSION['user'];
            $checka = mysqli_query($link, "SELECT * FROM `user` WHERE `u_id` = '$finda' ; ");
            $rowFa = mysqli_fetch_assoc($checka);
        if(isset($rowFa)) 
            $usu_code= $rowFa['u_code'];
        }

        if(isset($_POST['subb'])) {

            $c_content=$_POST["c_content"];
            $col_record=$_POST["col_record"];
            $act_code=$_POST["act_code"];

        if($_POST["c_content"]!=""){
            $sql3="INSERT INTO comment (act_code, u_code, c_content) VALUES ('$act_code', '$usu_code','$c_content')";
            $result=mysqli_query($link, $sql3);
        }
        if(isset($_POST["col_record"])){
            $sql4="INSERT INTO collect (act_code, u_code, col_record) 
            VALUES ('$act_code', '$usu_code','$col_record')";
            $result=mysqli_query($link, $sql4);
        }
        mysqli_close($link);

        if(isset($_POST['subb'])) {
            unset($_POST['subb']);
            header('Location: allcamp.php');
        }
        }else{
            $act_code=$_GET["sact_code"];
            $act_name=$_GET['sact_name'];

            $result=mysqli_query($link,"Select * From activity Where act_code=$act_code; ");
            while($row=mysqli_fetch_assoc($result)){    
            $u_code=$row["u_code"];
            $act_ORG=$row["act_ORG"];
        }


        $result=mysqli_query($link,"Select comment.c_content,act_name From comment,activity Where comment.act_code = activity.act_code And activity.u_code = $u_code; ");
       
        echo "<div class='col-sm-12'>";
        echo "<h2 class='page-header'>對".$act_name."的評價</h2>";
        echo "<table class='table'>";
        echo "<tr><td>營隊</td>";
        echo "<td>評價</td></tr>";

        while($row=mysqli_fetch_assoc($result)){    

        echo "<tr>";
        echo "<td>".$row["act_name"]."</td>";
        echo "<td>".$row["c_content"]."</td";
        echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        if(isset($_SESSION['auth'])){

            $findc = mysqli_query($link, "SELECT * FROM `collect` WHERE u_code = $usu_code AND act_code= $act_code; ");

            while($rowc = mysqli_fetch_assoc($findc)){
                $col_code= $rowc['col_code'];
                $col_record= $rowc['col_record'];
            }

            if(!isset($col_code)){ ?>
                <div class="col-sm-6">
                    <form method="post" action="supIntro.php">
                        <h4 class="page-header">給予評價</h4>
                            <div class="input-group">
                                <span class="input-group-addon">請輸入評價</span>
                                <textarea class="form-control" name="c_content" rows="5" placeholder="限300字" required></textarea>
                            </div>
                        <input type="checkbox" name="col_record" vaLue="收藏">收藏營隊
                        <input type="hidden" name="act_code" value="<?php echo $act_code;?>">
                        <input type="submit" name="subb">
                    </form>
                </div>
            <?php }else if($col_record="收藏"){ ?>
                <div class="col-sm-6">
                    <form method="post" action="supIntro.php">
                    <h4 class="page-header">給予評價</h4>
                    <div class="input-group">
                        <span class="input-group-addon">請輸入評價</span>
                        <textarea class="form-control" name="c_content" rows="5" placeholder="限300字" required></textarea>
                    </div>
                <input type="checkbox" name="col_record" vaLue="不收藏">收藏營隊(您已收藏，按下按鈕將取消收藏!!)
                <input type="hidden" name="act_code" value="<?php echo $act_code;?>">
                <input type="hidden" name="col_code" value="<?php echo $col_code;?>">
                <input type="submit" name="subb">
                    </form>
                </div>
                <?php
                mysqli_close($link);
            }

        }else{

        mysqli_close($link);

        }
        }
        ?>


    </div>
</body>
</html>
