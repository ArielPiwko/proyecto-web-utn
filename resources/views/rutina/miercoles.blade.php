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
@if(isset($usuario))
@include('header',['usuario' => $usuario->username, 'rol' => $usuario->rol])
@else
@include('header')
@endif
@yield('header')
    <div class="galeria">
    <h1 style="color:white; font-size:37px;";>Rutina Dia Miércoles </h1>
        <div class="linea"></div>
        <div class="contenedor-imagenes">
            <div class="imagen">
            <img src="{{ asset('assets/img/ejercicios/dorsalera.jfif') }}"  alt="">
                <div class="overlay">
                    <h2>Dorsalera<hr> 4x12. Descanso de 60 segundos.</h2>
                </div>
            </div>
            <div class="imagen">
            <img src="{{ asset('assets/img/ejercicios/remo.jfif') }}"  alt="">
                <div class="overlay">
                    <h2>Remo <hr>4x15. Descanso 60 segundos.</h2>
                </div>
            </div>
            <div class="imagen">
            <img src="{{ asset('assets/img/ejercicios/dominada1.jfif') }}"  alt="">
                <div class="overlay">
                    <h2>Dominadas <hr> 3 Al Fallo. Descanso 1:30 Min</h2>
                </div>
            </div>
            <div class="imagen">
            <img src="{{ asset('assets/img/ejercicios/bicep1.jfif') }}"  alt="">
                <div class="overlay">
                    <h2>Curl 21 <hr> 3 Series, Descanso 1:30 Min</h2>
                </div>
            </div>
            <div class="imagen">
            <img src="{{ asset('assets/img/ejercicios/bicep2.jfif') }}"  alt="">
                <div class="overlay">
                    <h2>Curl Biceps <hr> 3x12. Descanso 60 Segundos</h2>
                </div>
            </div>
            <div class="imagen">
            <img src="{{ asset('assets/img/ejercicios/bicep3.jfif') }}"  alt="">
                <div class="overlay">
                    <h2>Curl Sentado <hr> 3 al Fallo. Descanso 1:30 Min</h2>
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