<body>
    <form id="form1" name="form1" method="post" action="txt-1.php">
        <p>在文本区域输入带回车字符的文本：</p>
        <p><textarea name="txt" cols="20" rows="3" id="txt"></textarea></p>
        <p><input type="submit" name="submit" value="提交"></p>
    </form>
    <?php
    if(isset($_POST['txt'])){
        $txt=$_POST['txt'];
        echo "<hr/>";
        echo "直接输出接收到的内容：<br/>".$txt;
        echo "<hr/>";
        // echo "用nl2br()函数处理后在输出接收的内容：<br/>" . nl2br($txt);
        echo "用str_replace()函数处理后在输出接收的内容：<br/>";
        echo str_replace((chr(13).chr(10)),"<p style='text-indent:2em;'>",$txt);
    }
    ?>
</body>