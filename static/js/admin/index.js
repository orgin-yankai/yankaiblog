window.onload=function(){
    /**
     * 设置body的背景图
     */
    var bodyBgs = [];
    bodyBgs[0] = "/static/images/12.jpg";
    bodyBgs[1] = "/static/images/13.jpg";
    bodyBgs[2] = "/static/images/14.jpg";
    bodyBgs[3] = "/static/images/15.jpg";
    var body = document.getElementById("body");
    var timer;
    var i=0;
    timer = setInterval(function(){
        if(i>=bodyBgs.length){
            i=0;
        }
        body.style.backgroundImage="url("+bodyBgs[i]+")";
        //console.log(i);
    
        i++;
    },3000); 
}