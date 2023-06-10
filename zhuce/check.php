<?php
$emailaddr=$_POST['emailaddr'];
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'email');
$sql="select * form usermsg where emailaddr='$emailaddr'";
$res=mysqli_query($conn,$sql);
$rownum=mysqli_num_rows($res);
if($rownum==1){
    echo "该账号已存在，请重新注册";
}
mysqli_close($conn);
?>