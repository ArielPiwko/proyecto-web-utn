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
        <h1>Rutina Dia Viernes </h1>
        <div class="linea"></div>
        <div class="contenedor-imagenes">
            <div class="imagen">
                <img src="../lunes/img/pierna1.jfif" alt="">
                <div class="overlay">
                    <h2>Extension<hr> 4x12. Descanso de 60 segundos.</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="../lunes/img/pierna2.jfif" alt="">
                <div class="overlay">
                    <h2>Gemelos <hr>4x15. Descanso 60 segundos.</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="../lunes/img/pierna3.png" alt="">
                <div class="overlay">
                    <h2>Sentadilla <hr> 5x8. Descanso 60 Segundos</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="../lunes/img/hombros.jfif" alt="">
                <div class="overlay">
                    <h2>Vuelos Laterales <hr> 3 al fallo. Descanso 1:30 Min</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="../lunes/img/hombros2.jfif" alt="">
                <div class="overlay">
                    <h2>Vuelos frontales <hr> 3x12. Descanso 60 Segundos</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="../lunes/img/hombros3.jfif" alt="">
                <div class="overlay">
                    <h2>Press Militar <hr> 2x15. Descanso 1:30 Min</h2>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>

</html>