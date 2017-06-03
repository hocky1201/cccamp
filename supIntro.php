<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">

         <?php include "header.php"; ?>

        <?php
        include "dbconnect.php";

        if (isset($_SESSION['auth'])){
            $finda=$_SESSION['user'];
            $checka = mysqli_query($link, "SELECT * FROM `user` WHERE `u_id` = '$finda' ; ");
            $rowFa = mysqli_fetch_assoc($checka);
                if(isset($rowFa)) 
                    $u_code= $rowFa['u_code'];
                    
        }


        $act_code=$_GET["sact_code"];
        $act_name=$_GET['sact_name'];
        echo "<h4>營隊:".$act_name."<h4>";
        $result=mysqli_query($link,"SELECT * FROM comment WHERE act_code = $act_code ; ");

        echo'<h4>評價</h4><br/>';
        echo "<table border=1>";

        while($row=mysqli_fetch_assoc($result)){    
        echo"<tr>";
        echo "<td>";
        echo "內容:".$row["c_content"]."<br>";
        echo "</td>";
            }
        echo"<table>";

        $result=mysqli_query($link,"SELECT COUNT(col_code) AS ii FROM collect WHERE col_record ='收藏' GROUP BY act_code = $act_code AND u_code= $u_code; ");

        while($row=mysqli_fetch_assoc($result)){
            $ii=$row["ii"];
        
        }


        echo '<form method="post" action="supIntro.php" >';
        echo'<h4>給評價</h4><br/>';
        echo'請輸入評價:<textarea name="c_content" rows="6" cols="50" placeholder="限300字"></textarea><br/><br/>';
        if($ii%2==0){
        echo'<input type="checkbox" name="col_record" vaLue="收藏">收藏<br/><br/>';
        }else{
            echo'<input type="checkbox" name="col_record" vaLue="收藏">收藏(您已收藏，再勾選將取消收藏!!)<br/><br/>';
        }
        echo'<input type="hidden" name="act_code" value="'.$act_code.'" />';
        echo'<input type="submit" name="subb">';

        echo '</form>';

        $c_content=$_POST["c_content"];
        $col_record=$_POST["col_record"];
        $act_code=$_POST["act_code"];

        if(isset($_POST['subb'])) {

        $sql3="INSERT INTO comment (act_code, u_code, c_content) 
        VALUES ('$act_code', '$u_code','$c_content')";

        $sql4="INSERT INTO collect (act_code, u_code, col_record) 
        VALUES ('$act_code', '$u_code','$col_record')";



        $result=mysqli_query($link, $sql3);
        $result=mysqli_query($link, $sql4);




        mysqli_close($link);

        unset($_SESSION["act_code"]);
        header('Location: allcamp.php');
        }
        ?>
            
    </div>

</body>
</html>
