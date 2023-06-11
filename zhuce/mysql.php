<?php
    header("Content-Type:text/html;charset=utf8");
    // $conn=mysqli_connect('localhost','root','','email');
    $conn=mysqli_connect('localhost','root','root');
    if(!$conn){
        // die("数据库连接失败，错误编号是：".mysqli_connect_errno()."<br/>错误信息是：".mysqli_connect_errno());
        die("错误编号是：".mysqli_connect_errno()."<br/>错误信息是：".mysqli_connect_errno());
    }else{
        // echo "数据库连接成功，主机信息是：".mysqli_get_host_info($conn);
        // echo "<br/>MYSQL服务器版本是：".mysqli_get_server_info($conn);
        if(mysqli_select_db($conn,'email')){
            echo "打开数据库email成功<br/>";
        }else{
            echo "打开数据库email失败<br/>";
        }
    }
?>