<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dia Lunes</title>
    <link rel="stylesheet" href="rutinas.css">
</head>

<body>
@include('header')
    @yield('header')
    <div class="galeria">
        <h1>Rutina Dia Miercoles </h1>
        <div class="linea"></div>
        <div class="contenedor-imagenes">
            <div class="imagen">
                <img src="../lunes/img/dorsalera.jfif" alt="">
                <div class="overlay">
                    <h2>Dorsalera<hr> 4x12. Descanso de 60 segundos.</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="../lunes/img/remo.jfif" alt="">
                <div class="overlay">
                    <h2>Remo <hr>4x15. Descanso 60 segundos.</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="../lunes/img/dominada1.jfif" alt="">
                <div class="overlay">
                    <h2>Dominadas <hr> 3 Al Fallo. Descanso 1:30 Min</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="../lunes/img/bicep1.jfif" alt="">
                <div class="overlay">
                    <h2>Curl 21 <hr> 3 Series, Descanso 1:30 Min</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="../lunes/img/bicep2.jfif" alt="">
                <div class="overlay">
                    <h2>Curl Biceps <hr> 3x12. Descanso 60 Segundos</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="../lunes/img/bicep3.jfif" alt="">
                <div class="overlay">
                    <h2>Curl Sentado <hr> 3 al Fallo. Descanso 1:30 Min</h2>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>

</html>