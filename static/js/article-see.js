
window.onload=function(){
    /**
     * 左边的字体颜色
     */
    var ul =document.getElementsByClassName("left-ul")[0];
    var uTag = ul.getElementsByTagName("a");
    for(let i=0;i<uTag.length;i++){
        uTag[i].style.color="rgb("+Math.random()*255+","+Math.random()*255+","+Math.random()*255+")";
    }
    var ziti = document.getElementsByClassName("ziti");
    for(let i=0;i<ziti.length;i++){
        ziti[i].style.color="rgb("+Math.random()*255+","+Math.random()*255+","+Math.random()*255+")";
    }
}
