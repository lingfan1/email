function validate(){
    var psd1Val=document.getElementById('psd1').value;
    var psd2=document.getElementById('psd2');
    var psd2Val=psd2.value;
    if(psd2Val != psd1Val){
        alert("两次密码必须一致");
        psd2.focus();
        return false;
    }
}

function yzmupdate(){
    document.yzm.src="yzm.php?"+Math.random();
}

function createXML(){
    var xml=false;
    if(window.ActiveXObject){
        try{
            xml=new ActiveXObject("Msxm12.XMLHTTP");
        }
        catch(e){
            try{
                xml=new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(e){
                xml=false;
            }
        }
    }
    else if(window.XMLHttpRequest){
        xml=new XMLHttpRequest();
    }
    return xml;
}

function check(){
    var emailTxt=document.getElementById('emailaddr');
    var emailAddr=emailTxt.value;
    var url="check.php";
    var postStr="emailaddr="+emailAddr;
    var xml=createXML();
    xml.open("POST",url,true);
    xml.setRequestHeader("Content-Type","application/x-www-form-urlencoded;charset=utf8");
    xml.send(postStr);
    xml.onreadystatechange=function(){
        if(xml.readyState==4 && xml.status==200){
            var res=xml.reaponseText;
            if(res!=""){
                alert(res);
                emailTxt.focue();
                emailTxt.value='';
            }
        }
    }
}