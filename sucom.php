
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

        if ($_SESSION['auth'] == 'su'){
            $find=$_SESSION['user'];
            $check = mysqli_query($link, "SELECT * FROM `user` WHERE `u_id` = '$find' ; ");
            $rowF = mysqli_fetch_assoc($check);
                if(isset($rowF)) 
                    $u_code= $rowF['u_code'];
                    
        }





        echo"<h4>所有評價</h4>";
        $result=mysqli_query($link,"SELECT * FROM comment ;");

        echo "<table border=1>";


        while($row=mysqli_fetch_assoc($result)){
        echo"<tr>";
        echo "<td>";
        $c_code=$row["c_code"];
        echo $row["c_content"]."<br>";
        echo "</td>";
        echo "<td>";
        echo "<a href='sudelcom.php?sc_code=$c_code'>刪除資料</a>";
        echo "</td>";


        }
        echo"<table>";





        mysqli_close($link);

       ?>
    
    
    </div>
</body>
</html>