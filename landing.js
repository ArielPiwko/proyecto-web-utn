// attach to window.onload
setTimeout(function(){

    document.getElementById('threeSeconds').className += ' hidden';
    const el = document.getElementById('site-header');
    el.classList.remove("site-header");

}, 3000);


setTimeout(function() {
    document.getElementById('logo').classList.toggle('rotated');
},1000);