var button = document.getElementById('right-scrolly');
console.log(button);
button.onmousedown = function () {
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
        } else {
            element.scrollLeft += step;
        }
        scrollAmount += step;
        if(scrollAmount >= distance){
            window.clearInterval(slideTimer);
        }
    }, speed);
}
