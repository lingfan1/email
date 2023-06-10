<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="./css/email.css">
    <script src="./js/email.js"></script>
</head>
<body>
    <div class="wshdiv">
        <div class="wshleft">
            <img src="images/163logo.png" align="middle" style="width: 150px;"> &nbsp;&nbsp;
            <input name="emailaddr" type="text" class="emailaddr" value="<?php echo "$emailaddr@163.com"; ?>" readonly="readonly">&nbsp;&nbsp;
            <a href="#">网易</a>&nbsp;|&nbsp;
            <a href="#">帮助</a>&nbsp;|&nbsp;
            <a href="denglu.html">退出</a>
        </div>
        <div class="wshright">
            <input name="search" class="search" placeholder="支持邮件全文搜索">
            <img src="images/serach.png" align="top" style="width: 25px;">
        </div>
    </div>
    <div class="bot">
        <div id="leftdiv">
            <div class="leftdivtop">
                <img src="./images/writerecieve.jpg" width="200" height="40" border="0" usemap="#Map">
                <map name="Map" id="Map">
                    <area shape="rect" coords="8,5,98,37" href="receiveemail.php" target="main">
                    <area shape="rect" coords="99,4,190,37" href="writeemail.php" target="main">
                </map>
            </div>
            <div class="leftdivbot">
                <p><a href="receiveemail.php" target="main">收件箱</a></p>
                <p><a href="#">草稿箱</a></p>
                <p><a href="#">已发送</a></p>
                <p><a href="deletedemail.php" target="main">已删除</a></p>
            </div>
        </div>
        <div class="maindiv">
            <iframe src="writeemail.php" name="main" id="main" width="auto" height="auto" scrolling="no" frameborder="0" onload="iframeHeight()"></iframe>
        </div>
    </div>
</body>
</html>