document.getElementById("botonInicio").addEventListener("click", timeouta);

function timeouta(){
    setTimeout(redirect,3000);
}

function redirect() {

    window.location.href = '/proyecto-web-utn/public';
}
