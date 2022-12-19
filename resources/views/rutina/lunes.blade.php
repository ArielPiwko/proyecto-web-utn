<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dia Lunes</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rutinas.css') }}">
</head>

<body>
@include('header')
    @yield('header')
    <div class="galeria">
        <h1 style="color:white; font-size:37px;";>Rutina Dia Lunes </h1>
        <div class="linea"></div>
        <div class="contenedor-imagenes">
            <div class="imagen">
                <img src="{{ asset('assets/img/ejercicios/plano.jfif') }}"  alt="">
                <div class="overlay">
                    <h2>Pecho plano<hr> 4x12. Descanso de 60 segundos.</h2>
                </div>
            </div>
            <div class="imagen">
            <img src="{{ asset('assets/img/ejercicios/plano maquina.jfif') }}"  alt="">
                <div class="overlay">
                    <h2>Maquina plano <hr>4x15. Descanso 60 segundos.</h2>
                </div>
            </div>
            <div class="imagen">
            <img src="{{ asset('assets/img/ejercicios/peck deck.jfif') }}"  alt="">
                <div class="overlay">
                    <h2>Peck Deck <hr> 3x8. Descanso 40 Segundos</h2>
                </div>
            </div>
            <div class="imagen">
            <img src="{{ asset('assets/img/ejercicios/tricep.jfif') }}"  alt="">
                <div class="overlay">
                    <h2>Polea Ticep <hr>2 al fallo. Descanso 1:30 Min</h2>
                </div>
            </div>
            <div class="imagen">
            <img src="{{ asset('assets/img/ejercicios/tricep2.jfif') }}"  alt="">
                <div class="overlay">
                    <h2>Press Frances <hr> 4x12. Descanso 60 Segundos</h2>
                </div>
            </div>
            <div class="imagen">
            <img src="{{ asset('assets/img/ejercicios/tricep3.jfif') }}"  alt="">
                <div class="overlay">
                    <h2>Fondos paralelas <hr> 3 al Fallo. Descanso 1:30 Min</h2>
                </div>
            </div>
            </div>
        </div>
    </div>
<br><br>
    <a href="{{ route('rutinas.index') }}" class="box__button float-right" style="background:#a193ab!important; padding-top:10px; padding-bottom:10px;"> <span class="fa-duotone fa-angles-left"></span>< Volver </a>
    <br><br>
</body>

</html>