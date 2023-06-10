<?php
header("Content-Type: text/html;charset=utf8");
$sender=$_POST['sender'];
$receiver=$_POST['receiver'];
$subject=$_POST['subject'];
$content=$_POST['content'];
$datesorr=date("Y-m-d H:i");
$attachment='';
for($i=1;$i<=10;$i++){
    $fname=$_FILES['f'.$i]['name'];
    if($fname!=''){
        $tmp_fname=$_FILES['f'.$i]['tmp_name'];
        $rndNum=mt_rand(0,100000);
        $fname="($rndNum)$fname";
        $fname1=iconv("UTF-8","GB2312",$fname);
        move_uploaded_file($tmp_fname,"upload/$fname1");
        $fsize=round($_FILES['f'.$i]['size']/1024,2)."KB";
        $attachment="$attachment$fname ($fsize)".";";
    }
}
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'email');
// $sql="insert into emailmsg(sender,receiver,subject,content,datesorr,attachment,deleted) values('$sender', '$receiver', '$subject', '$content', '$datesorr', '$attachment', '0')";
// mysql_query($conn,$sql);
// echo "邮件发送成功";
$receivergroup=explode(';',$receiver);
$receiver='';
for($i=0;$i<count($receivergroup);$i++){
    list($uname)=explode('@',$receivergroup[$i]);
    $sql="select * from usermsg where emailaddr='$uname'";
    $result=mysqli_query($conn,$sql);
    $datanum=mysqli_num_rows($result);
    if($datanum==0){
        $receivertx=$sender;
        $sendertx='system';
        $subjecttx='系统退信';
        $contenttx='你所指定的接收者账号'.$uname.'不存在，信件退回';
        $datesorrtx=date("Y-m-d H:i");
        $sql="insert into emailmsg(sender,receiver,subject,content,datesorr,status) values('$sendertx','$receivertx','$subjecttx','$contenttx','$datesorrtx','0')";
        mysqli_query($conn,$sql);
        echo "你所指定的账号接收者 $uname 不存在，信件退回<br/>";
    }
    else{
        $receiver="$receiver$receivergroup[$i];";
    }
}
if($receiver !=''){
    $sql="insert into emailmsg(sender,receiver,subject,content,datesorr,attachment,status) values('$sender','$receiver','$subject','$content','$datesorr','$attachment','0')";
    mysqli_query($conn,$sql);
    echo "邮件发送成功";
}
mysqli_close($conn);
?>