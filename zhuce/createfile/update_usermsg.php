<?php
header("Content-Type:text/html;charset=utf8");
$conn=mysqli_connect('localhost','root','');
if(!$conn){
    die("错误编号是：".mysqli_connect_errno()."<br/>错误信息是：".mysqli_connect_errno());
}
else{
    mysqli_select_db($conn,'email');
    $sql="alter table usermsg modify column psd VARCHAR(32)";
    if(mysqli_query($conn,$sql)){
        echo "数据表usermsg修改成功<br/>";
    }
    else{
        echo "数据表usermsg修改失败<br/>";
    }
}
?>