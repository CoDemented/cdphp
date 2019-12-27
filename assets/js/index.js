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








    
// ---------------- Slider
jQuery(document).ready(function ($) {

// setInterval(function () {
//     moveRight();
// }, 6000);

  var slideCount = $('#slider ul li').length;
  var slideWidth = $('#slider ul li').width();
  var slideHeight = $('#slider ul li').height();
  var sliderUlWidth = slideCount * slideWidth;
  
  $('#slider').css({ width: slideWidth, height: slideHeight });
  
  $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
  
  $('#slider ul li:last-child').prependTo('#slider ul');

  function moveLeft() {
      $('#slider ul').animate({
          left: + slideWidth
      }, 200, function () {
          $('#slider ul li:last-child').prependTo('#slider ul');
          $('#slider ul').css('left', '');
      });
  };

  function moveRight() {
      $('#slider ul').animate({
          left: - slideWidth
      }, 200, function () {
          $('#slider ul li:first-child').appendTo('#slider ul');
          $('#slider ul').css('left', '');
      });
  };

  $('a.control_prev').click(function () {
      moveLeft();
  });

  $('a.control_next').click(function () {
      moveRight();
  });

});    
// ---------------- Slider




    