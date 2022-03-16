window.onload=function(){
    var form = document.getElementsByTagName("form")[0];		
    var name = document.getElementById("input1");
    var password = document.getElementById("input2");
    var submit =document.getElementById("submit");
    var xhr = new XMLHttpRequest();
 
   submit.onclick=function(){
            xhr.onreadystatechange=function(){
                if(xhr.readyState == 4 && xhr.status == 200){
                    var data = JSON.parse(xhr.responseText);
                    console.log(data);
                    if( data["code"] == 1){
                        location.href=data["addr"];
                    }
                    if(data["code"] == 0){
                        alert(data["msg"]);
                    }
                }
            }
            xhr.open("POST","/admin/handle/admin-login.php",true);
            xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xhr.send("name="+name.value+"&password="+password.value);
           return false;

    }
    var pw = document.getElementById("pw");
    pw.style.color="rgb("+Math.random()*255+","+Math.random()*255+","+Math.random()*255+")";
   
       
}