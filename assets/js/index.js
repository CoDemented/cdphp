//-------------------------Menu
var menuState = 0;
document.getElementById("btnMenu").addEventListener('click', function () {
    if (menuState == 0) {
        document.querySelector(".header-box nav").setAttribute("style", "max-width: 300px; padding-left: 15px; opacity: 1; box-shadow: 0px 0 0px 0px #e4e4e4;");
        menuState = 1;
    } else {
        document.querySelector(".header-box nav").setAttribute("style", "max-width: 0px; padding-left: 0px; opacity: 0;");
        menuState = 0;
    }
});
//-------------------------Menu


var DIVS = document.querySelectorAll("body > div:not(nav)");
var SECTIONS = document.querySelectorAll("body > section:not(nav)");


var height = $(".box").height();

console.log("height: "+$(".box").height()+" width: "+$(".box").width());



document.onkeydown = function(e) {
    if(event.keyCode == 123) {
    return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
    return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
    return false;
    }
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
    return false;
    }
    }

