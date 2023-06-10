<?php
    header("Content-Type:text/html;charset=utf8");
    $conn=mysqli_connect('localhost','root','','email');
    if(!$conn){
        die("错误信息是：".mysqli_connect_errno()."<br/>错误信息是：".mysqli_connect_errno());
    }else{
        $sql="insert into usermsg value('zhangpeipei','peipeill','13876521342','2018-04-09 10:04')";
        if(mysqli_query($conn,$sql)){
            echo "usermsg,插入记录成功<br/>";
        }else{
            echo "usermsg,插入记录失败<br/>";
        }
    }
?>