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

console.log("height: " + $(".box").height() + " width: " + $(".box").width());



// --------------------------- Hero Slider
$(document).ready(function(){
    $('.slider').bxSlider({
        mode: 'vertical',
        speed: 300,
        startSlide: 0,

        preloadImages: false,
        adaptiveHeight: false,
        adaptiveHeightSpeed: 200,
        preloadImages: 'visible',
        touchEnabled: true,
        infiniteLoop: true,
        auto: true,
        pause: 4000,
        autoHover: true,
        keyboardEnabled: true,

        controls: false,
    });
  });
// --------------------------- Hero Slider






//----------------------- Text Slider
var carousel = document.querySelector('.carousel');
var cells = carousel.querySelectorAll('.carousel__cell');
var cellCount; // cellCount set from cells-range input value
var selectedIndex = 0;
var cellWidth = carousel.offsetWidth;
var cellHeight = carousel.offsetHeight;
var isHorizontal = false;
var rotateFn = isHorizontal ? 'rotateY' : 'rotateX';
var radius, theta;

function rotateCarousel() {
    var angle = theta * selectedIndex * -1;
    carousel.style.transform = 'translateZ(' + -radius + 'px) ' +
        rotateFn + '(' + angle + 'deg)';
}

var prevButton = document.querySelector('.previous-button');
prevButton.addEventListener('mouseover', function () {
    myStopFunction();
});
var prevButton = document.querySelector('.previous-button');
prevButton.addEventListener('click', function () {
    selectedIndex--;
    rotateCarousel();
});
var prevButton = document.querySelector('.previous-button');
prevButton.addEventListener('mouseout', function () {
    myStartFunction();
});

var nextButton = document.querySelector('.next-button');
nextButton.addEventListener('mouseover', function () {
    myStopFunction();
});
nextButton.addEventListener('click', function () {
    selectedIndex++;
    rotateCarousel();
});
nextButton.addEventListener('mouseout', function () {
    myStartFunction();
});
nextButton.addEventListener('click', function () {
    selectedIndex++;
    rotateCarousel();
});

var cellsRange = document.querySelector('.cells-range');
cellsRange.addEventListener('change', changeCarousel);
cellsRange.addEventListener('input', changeCarousel);


function changeCarousel() {
    cellCount = cellsRange.value;
    theta = 360 / cellCount;
    var cellSize = isHorizontal ? cellWidth : cellHeight;
    radius = Math.round((cellSize / 2) / Math.tan(Math.PI / cellCount));
    for (var i = 0; i < cells.length; i++) {
        var cell = cells[i];
        if (i < cellCount) {
            // visible cell
            cell.style.opacity = "1";
            // cell.style.background = "#fff"
            var cellAngle = theta * i;
            cell.style.transform = rotateFn + '(' + cellAngle + 'deg) translateZ(' + radius + 'px)';
        } else {
            // hidden cell
            cell.style.opacity = "0";
            // cell.style.background = "#ffffff"
            cell.style.transform = 'none';
        }
    }

    rotateCarousel();
}

var orientationRadios = document.querySelectorAll('input[name="orientation"]');
(function () {
    for (var i = 0; i < orientationRadios.length; i++) {
        var radio = orientationRadios[i];
        radio.addEventListener('change', onOrientationChange);
    }
})();

function onOrientationChange() {
    var checkedRadio = document.querySelector('input[name="orientation"]:checked');
    isHorizontal = checkedRadio.value == 'horizontal';
    rotateFn = isHorizontal ? 'rotateY' : 'rotateX';
    changeCarousel();
}

// set initials
onOrientationChange();

// setInterval(()=>{
//     selectedIndex++;
//     rotateCarousel();
//
//     var ch = 0;
// setInterval(()=>{
//
//     if (ch == 0) {
//         isHorizontal = false;
//         function onOrientationChange() {
//             var checkedRadio = document.querySelector('input[name="orientation"]:checked');
//             isHorizontal = checkedRadio.value == 'vertical';
//             rotateFn = isHorizontal ? 'rotateY' : 'rotateX';
//             changeCarousel();
//         }
//         onOrientationChange();
//         ch = 1;
//     }
//     else {
//         isHorizontal = true;
//         function onOrientationChange() {
//             var checkedRadio = document.querySelector('input[name="orientation"]:checked');
//             isHorizontal = checkedRadio.value == 'horizontal';
//             rotateFn = isHorizontal ? 'rotateY' : 'rotateX';
//             changeCarousel();
//         }
//         onOrientationChange();
//         ch = 0;
//     }
//
// }, 6000)

// }, 3000)


// function startAutoStart() {
//     var autoStart = setInterval(autoNext, 3000);
// }
//
// function autoNext() {
//         selectedIndex++;
//         rotateCarousel();
// }
//
// function stopAutoStart() {
//     clearInterval(autoStart);
// }

var myVar;

function myStartFunction() {
    myVar = setInterval(function () {
        myTimer()
    }, 3000);
}

myStartFunction();

function myTimer() {
    selectedIndex++;
    rotateCarousel();
}

function myStopFunction() {
    clearInterval(myVar);
}
//----------------------- Text Slider






// ----------------------------- Disable Keys Events etc
// document.onkeydown = function(e) {
//     if(event.keyCode == 123) {
//     return false;
//     }
//     if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
//     return false;
//     }
//     if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
//     return false;
//     }
//     if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
//     return false;
//     }
//     }
// ----------------------------- Disable Keys Events etc


