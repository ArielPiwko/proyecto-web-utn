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
    <title>Gym Riachuelo</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
  <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#712cf9">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link href="product.css" rel="stylesheet">
  
  </head>


    <div class="landing" id="threeSeconds">
      <img src="{{URL::asset('/Imagenes/gym riachuelo.png')}}" alt="logo" class="logo" id="logo">
    </div>

  <body id="body">


@include('header')
@yield('header')


<main>

  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" style="background-color: rgba(199, 199, 199, 0.3)!important;">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <div class="col-md-5 p-lg-5 mx-auto my-5"></div>
      <h1 class="display-2 fw-normal">Gym Riachuelo</h1>

      <p class="lead fw-normal">Todo lo que necesitas para acceder a un mundo de deporte, salud y bienestar. </p>
      <a href="#" class="button">Comienza hoy!</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>


  <div id="main1"></div>


  <h1 class="titulo-division" style="color:#acacac;"><br>
        TODAS LAS ACTIVIDADES QUE BUSCAS EN UN SOLO LUGAR
        </h1>
        <hr>

      <div class="fixing">
        <div class="overflow-hidden text-center fixing" style="background-color: rgba(0, 0, 0, 0.7)!important;">
          <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal text-size-medium" style="color:#686868;">Elije tu plan!</h1>
            <hr>
            <p class="lead fw-normal" style="color:#686868;">No lo dudes mas. Empeza hoy mismo!</p>
            <i class="bi bi-caret-down" style="color:#686868; font-size:50px;"></i>
          </div>
        </div>
    </div>
    
    <div class="fondo2">
    <div class="container__cards">

        <div class="card">
            <div class="cover">
                <img src="{{ asset('assets/img/gym.png') }}" alt="">
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
                <a href="#" class="button">Comienza hoy</a>

            </div>
        </div>

        <div class="card">
            <div class="cover">
                <img src="{{ asset('assets/img/gym.png') }}" alt="">
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
                <a href="#" class="button">Comienza hoy</a>
                

            </div>
        </div>

        <div class="card">
            <div class="cover">
                <img src="{{ asset('assets/img/gym.png') }}" alt="">
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
                <a href="#" class="button">Comienza hoy</a>

            </div>
        </div>
    </div>
    </div>
    </main>
<br>

<br>
    <div class="division1">
          <h2 class="cont1">Contamos con un equipo de profesionales, <span>expertos en entrenamiento y nutricion!</span></h2>
        <hr>
              <div class="imagen-flex"   style="z-index:-2;">
                  <img src="{{ asset('assets/img/bolt.png') }}" width="620" height="620" alt="">
                  <p class="right">
                         Contamos con los ultimos elementos y tecnologias fitness del mercado,
                    <br> para la satisfaccion comodidad y bienestar del cliente
                    <br> Empiece hoy a buscar su mejor version!
                    <br>Todo lo que busca en 1 solo lugar.
                    <br>
                    <br>
                        Para quienes tienen objetivos específicos o necesidades
                    <br>especiales, el servicio de Entrenamiento Personalizado
                    <br>permite diseñar un plan de entrenamiento que cubra sus expectativas.
                    <br>Cualquier instructor de sala o clases puede ser tu Entrenador
                    <br>

                  </p>

              </div>
        <hr>

        
    </div>

<br>

<div class="division2">
    <img src="{{ asset('assets/img/atle21.png') }}" width="auto" height="620" alt="">
    <div>
      <h1 class="main-heading-websc text-color-white">Potenciamos tu bienestar</h1>
          <div class="div-block-229">
            <a href="#" class="button">Comienza hoy!</a>
          </div>
    </div>
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
  -->
<footer class="py-5 footer">
    <div style="margin-left:100px!important;">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
      <small class="d-block mb-3 text-muted">&copy; 2015–2022</small>
    </div>
</footer>


<script src="{{ asset('assets/js/landing.js') }}"></script>
</body>
