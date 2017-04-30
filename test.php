<html>
<head>
<title></title>
<meta charset="utf-8">
</head>
<body>
<style type="text/css">
#container{
    border:1px #666 dashed;
    width:1000px;
    margin:0 auto;
}
#headbox{
    width:1000px;
    height:200px;
    border:1px #666 dashed;
    margin:0 auto;
    margin-top:5px;
    margin-bottom:5px;
}
#sidebar{
    width:190px;
    height:260px;
    border:1px #666 dashed;
    margin-left:5px;
    margin-top:5px;
    margin-bottom:5px;
    float:left;


}
#sidebody{
    width:790px;
    height:600px;
    border:1px #666 dashed;
    margin-left:5px;
    margin-top:5px;
    margin-bottom:5px;
    float:left;
}
#clear{
    clear:both;
}
#footer{
    width:1000px;
    height:60px;
    border:1px #666 dashed;
    margin-top:5px;
    margin-left:5px;
    margin-bottom:5px;
}
</style>
<div id="container">
    <div id="headbox"></div>
    <div id="sidebar">
<font> <h2><B>登入</B><h2></font>
    <input type="button" value="我"  onclick="location.href='supplierlogin.php'" style="width:90px;height:40px;background-color:#C2C2FF;">
<input type="button" value="一般會員專區"  onclick="location.href='userlogin.php'" style="width:90px;height:40px;background-color:#FFFF96;"><br></div>
    <div id="sidebody"></div>
    <div id="clear"></div>
    <div id="footer"></div>
</div>
</body>
</html>