<!doctype html>
<html lang="en">
  <head>

    <title>Gym Riachuelo</title>
    <meta charset="utf-8">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">



    <div class="landing" id="threeSeconds">
      <img src="{{URL::asset('/Imagenes/gym riachuelo.png')}}" alt="logo" class="logo" id="logo">
    </div>

</head>

  <body id="body">
@include('base')
@yield('header')

<main>

  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Gym Riachuelo</h1>

      <p class="lead fw-normal">Todo lo que necesitas para acceder a un mundo de deporte, salud y bienestar. </p>
      <a class="btn btn-outline-secondary" href="#">Asociate hoy!</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>


  <div id="main1"></div>

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
          <div class="col-md-5 p-lg-5 mx-auto my-5">
            <br>
            <br>
            <br>
            <h1 class="display-4 fw-normal text-size-medium text-color-grey" >Elije tu plan!</h1>
            <hr>  
            <p class="lead fw-normal">No lo dudes mas. Empeza hoy mismo!</p>
            <br>
          </div>
        </div>


      <div class="division">
        <h1 class="titulo-division">
        TODAS LAS ACTIVIDADES QUE BUSCAS EN UN SOLO LUGAR
        </h1>


        <a href="#" class="button">Comienza hoy</a>
    </div>

    <div class="container__cards">

        <div class="card">
            <div class="cover">
                <img src="{{URL::asset('/Imagenes/gym.png')}}" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h1>Plan Basico</h1>
                <p>Acceso a la maquinaria del gimnasio</p>
                <hr>              
                <p>Descuentos con planes anuales</p>
                <hr>          
                <p>Lun-Sab 8:00 - 23:00hs</p>
                <hr>
                <input type="button" value="Comienza hoy!">
            </div>
        </div>

        <div class="card">
            <div class="cover">
                <img src="{{URL::asset('/Imagenes/gym.png')}}" alt="">  
                <div class="img__back"></div>             
            </div>
            <div class="description">
                <h1>Plan coaching</h1>
                <p>Acceso a la maquinaria del gym + Coach</p>
                <hr>              
                <p>Descuentos con planes anuales</p>
                <hr>          
                <p>Lun-Sab 8:00 - 23:00hs</p>
                <hr>
                <input type="button" value="Comienza hoy!">
            </div>
        </div>

        <div class="card">
            <div class="cover">
                <img src="{{URL::asset('/Imagenes/gym.png')}}" alt="">
                <div class="img__back"></div>
            </div>
            <div class="description">
                <h1>Plan Premium</h1>
                <p>Acceso a la maquinaria del gym + Actividades outdoor</p>
                <hr>              
                <p>Descuentos con planes anuales</p>
                <hr>          
                <p>Lun-Sab 8:00 - 23:00hs</p>
                <hr>
                <input type="button" value="Comienza hoy!">
            </div>
        </div>
    </main>
<footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
      <small class="d-block mb-3 text-muted">&copy; 2015–2022</small>
    </div>
<!--
    <div class="col-6 col-md">
      <h5>Features</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Cool stuff</a></li>
        <li><a class="link-secondary" href="#">Random feature</a></li>
        <li><a class="link-secondary" href="#">Team feature</a></li>
        <li><a class="link-secondary" href="#">Stuff for developers</a></li>
        <li><a class="link-secondary" href="#">Another one</a></li>
        <li><a class="link-secondary" href="#">Last time</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Resource name</a></li>
        <li><a class="link-secondary" href="#">Resource</a></li>
        <li><a class="link-secondary" href="#">Another resource</a></li>
        <li><a class="link-secondary" href="#">Final resource</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Business</a></li>
        <li><a class="link-secondary" href="#">Education</a></li>
        <li><a class="link-secondary" href="#">Government</a></li>
        <li><a class="link-secondary" href="#">Gaming</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Team</a></li>
        <li><a class="link-secondary" href="#">Locations</a></li>
        <li><a class="link-secondary" href="#">Privacy</a></li>
        <li><a class="link-secondary" href="#">Terms</a></li>
      </ul>
    </div>
  </div>
</footer>
-->

<script src="landing.js"></script>
</body>
