function validate(){
    var receiver=document.getElementById('receiver');
    var subject=document.getElementById('subject');
    if(receiver.value==''){
        receiver.Placeholder="必须填写收件人信息";
        receiver.className="inp";
        receiver.focus();
        return false;
    }
    if(subject.value==''){
        subject.Placeholder="必须填写邮件主题";
        subject.className="inp";
        subject.focus();
        return false;
    }
}
function wdivWidth(){
    var w=window.document.body.offsetWidth||window.document.documentElement.offsetWidth;
    if(document.getElementById('rdiv').style.display=='none'){
        leftdivw=w-10;
    }else{
        leftdivw=w-10-(200+2);
    }
    document.getElementById('wdiv').style.width=leftdivw+"px";
    document.getElementById('receiver').style.width=(leftdivw-62)+"px";
    document.getElementById('subject').style.width=(leftdivw-62)+"px";
    document.getElementById('content').style.width=(leftdivw-62)+"px";
}
window.onload=wdivWidth;
window.onresize=wdivWidth;
function showOrHideRdiv(){
    if(document.getElementById('rdiv').style.display=="none"){
        document.getElementById('rdiv').style.display=="block";
        document.getElementById('zhedieimg').src="images/zhedieright.JPG";
    }else{
        document.getElementById('rdiv').style.display=="none";
        document.getElementById('zhedieimg').src="images/zhedieright.JPG";
    }
}
function showOrHideScroll(){
    var cont=document.getElementById("content");
    var txt=cont.createTextRange().getClientRects()
    if(txt.length>14){
       cont.style.overflowY='scroll';
    }else{
        cont.style.overflowY='hidden';
    }
    scrollTm=window.setTimeout("showOrHideScroll()",100);
}
function stopscrollTm(){
    window.clearTimeout(scrollTm);
}
function addAttach(){
    for(i=2;i<=10;i++){
        if(document.getElementById('p'+i).style.display !='block'){
            document.getElementById('p'+i).style.display='block';
            var rdivH=document.getElementById('rdiv').clientHeight;
            rdivH=rdivH+30;
            document.getElementById('rdiv').style.height=rdivH+"px";
            document.getElementById('zhedie').style.paddingTop=(rdivH-60)/2+"px";
            parent.iframeHeight();
            parent.iframeWidth();
            break;
        }
    }
}
function dele(num){
    document.getElementById('sp'+num).innerHTML="<input type='file' name='f"+num+"' class='attachmsg'>";
    if(num!=1){
        document.getElementById('p'+num).style.display='none';
        var rdivH=document.getElementById('rdiv').clientHeight;
        rdivH=rdivH-30;
        document.getElementById('rdiv').style.height=rdivH+"px";
        document.getElementById('zhedie').style.paddingTop=(rdivH-60)/2+"px";
        parent.iframeHeight();
        parent.iframeWidth();
    }
}