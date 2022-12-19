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
        <h1>Rutina Dia Lunes </h1>
        <div class="linea"></div>
        <div class="contenedor-imagenes">
            <div class="imagen">
                <img src="../img/plano.jfif" alt="">
                <div class="overlay">
                    <h2>Pecho plano<hr> 4x12. Descanso de 60 segundos.</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="../lunes/img/plano maquina.jfif" alt="">
                <div class="overlay">
                    <h2>Maquina plano <hr>4x15. Descanso 60 segundos.</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="../lunes/img/peck deck.jfif" alt="">
                <div class="overlay">
                    <h2>Peck Deck <hr> 3x8. Descanso 40 Segundos</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="../lunes/img/tricep.jfif" alt="">
                <div class="overlay">
                    <h2>Polea Ticep <hr>2 al fallo. Descanso 1:30 Min</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="../lunes/img/tricep2.jfif" alt="">
                <div class="overlay">
                    <h2>Press Frances <hr> 4x12. Descanso 60 Segundos</h2>
                </div>
            </div>
            <div class="imagen">
                <img src="../lunes/img/tricep3.jfif" alt="">
                <div class="overlay">
                    <h2>Fondos paralelas <hr> 3 al Fallo. Descanso 1:30 Min</h2>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>

</html>