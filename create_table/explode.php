<?php
$receiver="zhanglihong@163.com;liminghua@163.com;liuyuping@163.com;";
$receiverAll=explode(';',$receiver);
for($i=0;$i<count($receiverAll)-1;$i++){
    list($emailaddr)=explode('@',$receiverAll[$i]);
    echo "$emailaddr<br/>";
}
?>