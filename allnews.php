<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>所有公告</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container text-center">

        <?php 
        include 'header.php'; 
        include "dbconnect.php";
        ?>
        <div class="row clearfix">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">公告列表</h3>
                    </div>
                    <div class="panel-body">                
                        <table class="table">
                            <?php
                            
                            $result=mysqli_query($link,"SELECT * FROM news ORDER BY n_time DESC");

                            
                                echo "<tr><td>公告內容</td>";    
                                echo "<td>公告時間</td></tr>";
                            while($row=mysqli_fetch_assoc($result)){
                                
                                echo"<tr>";
                                echo "<td>".$row["n_content"]."</td>";
                                echo "<td>".$row["n_time"]."</td>";
                                echo "</tr>";
                            }
                            
                            ?>
                        </table>
                    </div>
                
                    <div class="col-sm-1"></div>
                </div>
            </div>

    </div>
    <?php
    include 'footer.php';
    ?>
</body>
</html>