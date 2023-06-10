function validate(){
    var markup=document.getElementsByClassName('checkbox');
    var result=false;
    for (i=0;i<markup.length;i++){
        if(markup[i].checked){
            result=true;
            break;
        }
    }
    if(result==false){
        alert('未选择要删除的邮件，单机删除按钮无效');
        return false;
    }
}