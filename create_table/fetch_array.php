<?php
    header("Content-Type:text/html;charset=utf8");
    $conn=mysqli_connect('localhost','root','root');
    mysqli_select_db($conn,'email');
    $sql="select * from emailmsg where emailno=1";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($res);
    echo "邮件序号:".$row->emailno."<br/>";
    echo "发件人:".$row->sender."<br/>";
    echo "收件人:".$row->receiver."<br/>";
    echo "邮件主题:".$row->subject."<br/>";
    echo "附件信息:".$row->attachment."<br/>";
    echo "首发日期:".$row->datesorr."<br/>";
    mysqli_close($conn);
?>