<?php
session_start();
$emailaddr=$_POST['emailaddr'];
$_SESSION['emailaddr']=$emailaddr;
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'email');
$emailaddr=mysqli_real_escape_string($conn,$emailaddr);
$psd=mysqli_real_escape_string($conn,$_POST['psd']);
$sql="select * from usermsg where emailaddr='$emailaddr' and psd='$psd'";// $psd=md5(mysqli_real_escape_string($conn,$_POST['psd']));
$result=mysqli_query($conn,$sql);
$datenum=mysqli_num_rows($result);
if($datenum==0){
    include 'denglu.html';
    echo "<script>";
    echo "document.getElementById('errormsg').style.display='block';";
    echo "</script>";
}
else{
    include 'email.php';
}
mysqli_close($conn);
?>
