// attach to window.onload
setTimeout(function(){
    document.getElementById('threeSeconds').className += ' hidden';
}, 3000);

setTimeout(function(){
    document.getElementById('threeSeconds').className += ' nodisplay';
}, 5000);

setTimeout(function() {
    document.getElementById('logo').classList.toggle('rotated');
},1000);


document.getElementById("body").onscroll = function myFunction() {  
    var scrolltotop = document.scrollingElement.scrollTop;
    var target = document.getElementById("main1");
    var xvalue = "center";
    var factor = 0.28;
    var yvalue = scrolltotop * factor;
    target.style.backgroundPosition = xvalue + " -" + yvalue + "px";
  }