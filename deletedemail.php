<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/receiveemail.css"/>
    <script src="js/receiveemail.js"></script>
</head>
<body>
    <?php
        session_start();
        $uname=$_SESSION['emailaddr']."@163.com";
        $conn=mysqli_connect('localhost','root','');
        mysqli_select_db($conn,'email');
        $sql="select * from emailmsg where receiver like '$uname%' and STATUS=1";
        $res=mysqli_query($conn,$sql);
        $reccount=mysqli_num_rows($res);
        $pagesize=50;
        $pagecount=ceil($reccount/$pagesize);
        $pageno=isset($_GET['pageno']) ? $_GET['pageno']:1;
        $pagestart=($pageno - 1) * $pagesize;
        $sql2=$sql." order by datesorr desc limit $pagestart, $pagesize";
        $result=mysqli_query($conn,$sql2);
    ?>
    <form method="post" action="deletedchedi.php" onsubmit="return validate();" name="f1">
        <div class="div1"><b>已删除邮件</b>(共<?php echo $reccount; ?>封)</div>
        <div class="div2">
            <div class="div2-1">
                <input type="submit" name="delete" id="delete" value="彻底删除">
                <input type="button" name="refresh" id="refresh" value="刷新" onclick="window.open('deletedemail.php','_self');">
            </div>
            <div class="div2-2">
                <?php
                    if($pagecount==0){
                        echo "首页&nbsp;&nbsp;上页&nbsp;&nbsp;下页&nbsp;&nbsp;尾页";
                    }
                    else{
                        if($pageno==1){
                            echo "首页&nbsp;&nbsp;";}
                        else{
                            echo "<a href='deletedemail.php?pageno=1'>首页</a>&nbsp;&nbsp;";}
                        if($pageno==1){
                            echo "上页&nbsp;&nbsp;";}
                        else{
                            echo "<a href='deletedemail.php?pageno=".($pageno-1)."'>上页</a>&nbsp;&nbsp;";}
                        if($pageno==$pagecount){
                            echo "下页&nbsp;&nbsp;";}
                        else{
                            echo "<a href='deletedemail.php?pageno=".($pageno+1)."'>下页</a>&nbsp;&nbsp;";}
                        if($pageno==$pagecount){
                            echo "尾页&nbsp;&nbsp;";}
                        else{
                            echo "<a href='deletedemail.php?pageno=".($pagecount)."'>尾页</a>&nbsp;&nbsp;";}
                    }
                ?>
            </div>
        </div>
        <div class="div3">
            <table cellpadding="0" cellspacing="0">
                <?php
                    while($row=mysqli_fetch_array($result)){
                        $emailno=$row['emailno'];
                        list($sender)=explode('@',$row['sender']);
                        list($datesorr)=explode(' ',$row['datesorr']);
                        list($Y,$m,$d)=explode('-',$datesorr);
                        $riqi=$Y."年".$m."月".$d."日";
                        echo "<tr>";
                        echo "<td class='td1'><input type='checkbox' name='markup[]' value='$emailno' class='checkbox'></td>";
                        echo "<td class='td2'><a href='openemail.php?emailno=$emailno'>".$sender."</a></td>";
                        echo "<td class='td3'><a href='openemail.php?emailno=$emailno'>".$row['subject']."</a></td>";
                        if($row['attachment']!=""){
                            echo "<td class='td4'><img src='images/flag-1.JPG'></td>";
                        }
                        else{
                            echo "<td class='td4'>&nbsp;</td>";
                        }
                        echo "<td class='td5'>".$riqi."</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </form>
    <?php mysqli_close($conn); ?>
</body>
</html>