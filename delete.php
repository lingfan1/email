<?php
    $emailno=$_POST['markup'];
    $num=count($emailno);
    $conn=mysqli_connect('localhost','root','');
    mysqli_select_db($conn,'email');
    for($i=0;$i<count($emailno);$i++){
        $sql="update emailmsg set status =1 where emailno = $emailno[$i]";
        mysqli_query($conn,$sql);
    }
    mysqli_close($conn);
    include 'receiveemail.php';
    echo "<script>";
    echo "alert('已成功移除".$num."封邮件到删除文件夹中')";
    echo "</script>";
?>