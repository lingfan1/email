<?php
    $emailno=$_POST['markup'];
    $num=count($emailno);
    $conn=mysqli_connect('localhost','root','');
    mysqli_select_db($conn,'email');
    for($i=0;$i<$num;$i++){
        $sql="select * from emailmsg where emailno = $emailno[$i]";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($res);
        if($row['attachment']!==""){
            $attment=explode(';',$row['attachment']);
            $attmentcount=count($attment)-1;
            for($j=0;$j<=$attmentcount-1;$j++){
                list($mainName,$secName)=explode('.',$attment[$j]);
                list($kuozName)=explode('(',$secName);
                $openName="upload/$mainName.$kuozName";
                $fname=iconv("UTF-8","GB2312",$openName);
                unlink($fname);
            }
        }
        $sql="delete from emailmsg where emailno = $emailno[$i]";
        mysqli_query($conn,$sql);
    }
    mysqli_close($conn);
    include 'deletedemail.php';
?>