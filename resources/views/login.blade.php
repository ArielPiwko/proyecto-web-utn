<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="{{ asset('assets/css/registro.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>GymRiachuelo</title>
</head>

<body>
    @include('header')
    @yield('header')
<div class="registroP">
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>GymRiachuelo</h2>
                <p>Si ya tienes una cuenta por favor inicia sesion desde aca</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
    <div class="container-form sign-in">
        <form method="POST" action="" class="formulario">
            @csrf

            <h2 class="create-account">Iniciar Sesion</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div>
           
    <script src="{{ asset('assets/js/registro.js') }}"></script>

</div>
</body>

</html>