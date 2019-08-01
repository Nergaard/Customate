start = 0;

var button = document.getElementById('right-scrolly');
console.log(button);
button.onclick = function () {
    var container = document.getElementsByClassName('scrollbox')[0];
    sideScroll(container,'right',25,300,10);
};

var back = document.getElementById('left-scrolly');
back.onclick = function () {
    var container = document.getElementsByClassName('scrollbox')[0];
    sideScroll(container,'left',25,300,10);
};


function sideScroll(element,direction,speed,distance,step){
    scrollAmount = 0;
    var slideTimer = setInterval(function(){
        if(direction == 'left'){
            element.scrollLeft -= step;
            start -= 1;
        } else {
            element.scrollLeft += step;
            start += 1;
        }
        scrollAmount += step;
        if(scrollAmount >= distance){
            window.clearInterval(slideTimer);
        }
        console.log(element.scrollLeft);
        if(element.scrollLeft!=0){
            document.getElementById("left-scrolly").style.visibility = "visible";
        } else{
            document.getElementById("left-scrolly").style.visibility = "hidden";
        }
        if(start!=280){
            document.getElementById("right-scrolly").style.visibility = "visible";
        } else{
            document.getElementById("right-scrolly").style.visibility = "hidden";
        }
    }, speed);
}

document.getElementsByClassName("scrollbox")[0].onscroll = function(){
    element = document.getElementsByClassName("scrollbox")[0];
    console.log(element.scrollLeft);
    if(element.scrollLeft!=0){
        document.getElementById("left-scrolly").style.visibility = "visible";
    } else{
        document.getElementById("left-scrolly").style.visibility = "hidden";
    }
    if(element.scrollLeft < 2200){
        document.getElementById("right-scrolly").style.visibility = "visible";
    } else{
        document.getElementById("right-scrolly").style.visibility = "hidden";
    }
};
