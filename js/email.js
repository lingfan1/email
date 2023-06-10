function iframeWidth(){
    if(document.body){
        windowWidth=document.body.clientWidth;
    }
    else if(document.documentElement){
        windowWidth=document.documentElement.clientWidth;
    }
    document.getElementById('main').width=windowWidth-201;
}
window.onload=iframeWidth;
window.onresize=iframeWidth;

function iframeHeight(){
    var iframel=document.getElementById('main');
    if(iframel.contentWindow){
        height1=iframel.contentWindow.document.body.scrollHeight;
    }
    else if(iframel.contentDocument){
        height1=iframel.contentDocument.documentElement.scrollHeight;
    }
    iframel.height=height1;
    var leftdiv=parent.document.getElementById('leftdiv');
    if(height1<600){
        leftdiv.style.height=600+"px";
    }else{
        leftdiv.style.height=height1+"px";
    }
}