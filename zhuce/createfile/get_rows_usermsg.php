<?php
header("Content-Type:text/html;charset=utf8");
$conn=mysqli_connect('localhost','root','','email');
if(!$conn){
    die("错误信息是：".mysqli_connect_errno()."<br/>错误信息是：".mysqli_connect_errno());
}
else{
    $sql="select * from usermsg";
    // if($res=mysqli_query($conn,$sql)){
    //     echo "usermsg,查询成功<br/>";
    //     $rows=mysqli_num_rows($res);
    //     echo "usermsg中记录数为$rows<br/>";
    // }
    // else{
    //     echo "usermsg,查询失败<br/>";
    // }
    $res=mysqli_query($conn,$sql);
    $rows=mysqli_num_rows($res);
    echo "usermsg中的记录数为$rows<br/>";
}
?>