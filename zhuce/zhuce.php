<?php
  session_start();
  $emailaddr=$_POST['emailaddr'];
  $psd=$_POST['psd1'];
  $phoneno=$_POST['phoneno'];
  $useryzm=$_POST['useryzm'];
  $yzmchar=$_SESSION['string'];
  $zhucedate=date('Y-m-d H:i');
  if(strtoupper($useryzm)==$yzmchar){
    $conn=mysqli_connect('localhost','root','root');
    mysqli_select_db($conn,'email');
    $sql="insert into usermsg values('$emailaddr','$psd','$phoneno','$zhucedate')";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    echo "尊敬的用户您好，您注册的信息如下：<br/>";
    echo "邮件地址是：$emailaddr <br/>";
    echo "密码是：$psd <br/>";
    echo "手机号码是：$phoneno <br/>";
    echo "注册成功！";
  }else{
    include 'zhuce.html';
    echo "<script>";
    echo "document.getElementById('emailaddr').value='$emailaddr';";
    echo "document.getElementById('psd1').value='$psd';";
    echo "document.getElementById('psd2').value='$psd';";
    echo "document.getElementById('phoneno').value='$phoneno';";
    echo "document.getElementById('useryzm').placeholder='验证码输入错误，请重新输入';";
    echo "document.getElementById('useryzm').className='inp';";
    echo "</script>";
  }
?>