<?php
    header("Content-Type:text/html;charset=utf8");
    $conn=mysqli_connect('localhost','root','');
    if(!$conn){
        die("错误编号是：".mysqli_connect_errno()."<br/>错误信息是：".mysqli_connect_errno());
    }else{
        mysqli_select_db($conn,'email');
        $sql="CREATE TABLE usermsg(emailsddr VARCHAR(18) NOT NULL PRIMARY KEY,";
        $sql=$sql."psd VARCHAR(16) NOT NULL, phoneno VARCHAR(11),";
        $sql=$sql."zhucedate DATETIME NOT NULL)";
        if(mysqli_query($conn,$sql)){
            echo "数据表usermsg创建成功<br/>";
        }else{
            echo "数据表usermsg创建失败<br/>";
        }
    }
?>