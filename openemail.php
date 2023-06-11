<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/openemail.css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("p:contains('.doc')").prepend("<img src='images/word.png' width='18'/>");
            $("p:contains('.xls')").prepend("<img src='images/excel.png' width='18'/>");
            $("p:contains('.ppt')").prepend("<img src='images/ppt.jpg' width='18'/>");
            $("p:contains('.pdf')").prepend("<img src='images/pdf.jpg' width='18'/>");
            $("p:contains('.rar')").prepend("<img src='images/rar.jpg' width='18'/>");
            $("p:contains('.html')").prepend("<img src='images/html.jpg' width='18'/>");
            $("p:contains('.jpg'),p:contains('.bmp'),p:contains('.gif'),p:contains('.png')").before("<img src='images/jpg.jpg' width='18'/>");
            $("p:contains('.html')".prepend("<img src='images/html.jpg' width='18'/>"))
        })
    </script>
</head>
<body>
    <?php
        $emailno=$_GET['emailno'];
        $conn=mysqli_connect('localhost','root','root');
        mysqli_select_db($conn,'email');
        $sql="select * from emailmsg where emailno = '$emailno'";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($res);
        echo "<div id='div1'>";
        echo "<p><b>主题：$row[subject]</b></p>";
        echo "<p>发件人：$row[sender]</p>";
        echo "<p>收件人：$row[receiver]</p>";
        echo "时&nbsp;&nbsp;间:$row[datesorr]</p>";
        if($row['attachment']!=""){
            $attment=explode(';',$row['attachment']);
            $attmentcount=count($attment)-1;
            echo "<p>附&nbsp;&nbsp;件(".$attmentcount.")个</p>";
        }
        echo "</div>";

        echo "<div id='div2'><p>".str_replace((chr(13).chr(10)),'<p>',$row['content'])."</div>";
        echo "<script>";
        echo "if(document.getElementById('div2').clientHeight<200)";
        echo "{document.getElementById('div2').style.height=200+'px'}";
        echo "</script>";

        if($row['attachment']!=""){
            echo "<div id='div3'>";
            echo "<p class='p1'>附件(".$attmentcount.")个</p>";
            for ($i=0;$i<=count($attment)-2;$i++){
                list($attname,$kuozhanm)=explode('.',$attment[$i]);
                list($kuozm)=explode('(',$kuozhanm);
                $attname=$attname.'.'.$kuozm;
                echo "<p>$attment[$i]<br/>";
                echo "<a href='upload/$attname'>下载</a>&nbsp;|&nbsp;";
                echo "<a href='upload/$attname'>打开</a></p>";
            }
            echo "</div>";
        }
        mysqli_close($conn);
    ?>
</body>
</html>