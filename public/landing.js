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