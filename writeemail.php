<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/writeemail.css">
    <!--[if IE]>
    <style>
        #content{overflow:hidden;}
    </style>
    <![endif]-->
    <script src="js/writeemail.js"></script>
</head>
<body>
    <?php
        session_start();
    ?>
    <form id="form1" name="form1" method="post" enctype="multipart/form-data" action="storeemail.php" onsubmit="return validate();">
        <div class="write">写信</div>
        <div class="butdivsh">
            <input name="send" type="submit" value="发送">
            <input name="btn1" type="button" value="存草稿">
            <input name="btn2" type="button" value="预览">
            <input name="btn3" type="button" value="查字典">
            <input name="rst" type="reset" value="取消">
        </div>
        <div class="divcont">
            <div id="wdiv">
                <table border="0" cellpadding="0" cellpadding="0">
                    <tr>
                        <td class="tdleft">发件人：</td>
                        <td class="tdright"><input name="sender" type="text" id="sender" value="<?php echo $_SESSION['emailaddr'].'@163.com'; ?>" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td class="tdleft">收件人：</td>
                        <td class="tdright"><input name="receiver" id="receiver" type="text" onfocus="focusCode('receiver')"></td>
                    </tr>
                    <tr>
                        <td class="tdleft">主题：</td>
                        <td class="tdright"><input name="subject" id="subject" type="text" onfocus="focusCode('subject')"></td>
                    </tr>
                    <tr>
                        <td class="tdleft">附件：</td>
                        <td class="tdright">
                            <p id="p1">
                                <span id="sp1"><input type="file" name="f1" class="attachmsg"></span>
                                <span class="del" onclick="dele(1)">删除</span>
                            </p>
                            <p id="p2">
                                <span id="sp2"><input type="file" name="f2" class="attachmsg"></span>
                                <span class="del" onclick="dele(2)">删除</span>
                            </p>
                            <p id="p3">
                                <span id="sp3"><input type="file" name="f3" class="attachmsg"></span>
                                <span class="del" onclick="dele(3)">删除</span>
                            </p>
                            <p id="p4">
                                <span id="sp4"><input type="file" name="f4" class="attachmsg"></span>
                                <span class="del" onclick="dele(4)">删除</span>
                            </p>
                            <p id="p5">
                                <span id="sp5"><input type="file" name="f5" class="attachmsg"></span>
                                <span class="del" onclick="dele(5)">删除</span>
                            </p>
                            <p id="p6">
                                <span id="sp6"><input type="file" name="f6" class="attachmsg"></span>
                                <span class="del" onclick="dele(6)">删除</span>
                            </p>
                            <p id="p7">
                                <span id="sp7"><input type="file" name="f7" class="attachmsg"></span>
                                <span class="del" onclick="dele(7)">删除</span>
                            </p>
                            <p id="p8">
                                <span id="sp8"><input type="file" name="f8" class="attachmsg"></span>
                                <span class="del" onclick="dele(8)">删除</span>
                            </p>
                            <p id="p9">
                                <span id="sp9"><input type="file" name="f9" class="attachmsg"></span>
                                <span class="del" onclick="dele(9)">删除</span>
                            </p>
                            <p id="p10">
                                <span id="sp10"><input type="file" name="f10" class="attachmsg"></span>
                                <span class="del" onclick="dele(10)">删除</span>
                            </p>
                            <span class="add" onclick="addAttach()">继续添加附件</span>
                            </td>
                        </tr>
                    <tr>
                        <td class="tdleft">内容：</td>
                        <td class="tdright"><textarea name="content" id="content" onfocus="showOrHideRdiv()" onblur="stopscrollTm()" cols="30" rows="10"></textarea></td>
                    </tr>
                </table>
            </div>
            <div id="zhedie"><img src="./images/zhedieright.JPG" id="zhedieimg" onclick="showOrHideRdiv();wdivWidth();"></div>
            <div id="rdiv"></div>
            <div class="clear"></div>
        </div>
        <div class="butdivx">
            <input name="send" type="submit" value="发送">
            <input name="btn1" type="button" value="存草稿">
            <input name="btn2" type="button" value="预览">
            <input name="btn3" type="button" value="查字典">
            <input name="rst" type="reset" value="取消">
        </div>
    </form>
</body>
</html>