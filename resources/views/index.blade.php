<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Gym Riachuelo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<link rel="stylesheet" type="text/css" href="style.css"/>
<meta name="theme-color" content="#712cf9">


    <style>
      
      input:checked ~ .cont-menu{
    display: block;
}
input:checked{
    background-image:url('Imagenes/flecha.png');
    transition: 0.8s;
}
      input{
    appearance: none;
    background-image: url('Imagenes/rayas.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    width: 25px;
    height: 25px;
    cursor: pointer;
    transition: 0.8s;
}
          *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    nav{
        width: 100%;
        height: 70px;
        background-color: black;
        display: flex;
        justify-content: right;
        align-items: center;
        padding: 0px 50px 0px 50px;
    }
    .cont-menu2{
        width:100%;
        align-items: center;
        gap: 30px;
        font-weight: bold;
        font-family: sans-serif;
      }

    .cont-menu{
        display: none;
        position: absolute;
        right: 0;
        top: 70px;
        padding-top: 35px;
        justify-content: flex-start;
        align-items: center;
        transition: all 1s;
        gap: 20px;
        background-color: black;
        width: 140px;
        height: 56vh;
        overflow: hidden;
        color: black;
        padding-left:5px;
        border-bottom-left-radius:28px;
        border-bottom-right-radius:28px;
    }

    .cont-menu li{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 20px;
    }

    .cont-menu li a{
        text-decoration: none;
        color: white;
        font-weight: bold;
        font-family: sans-serif;
    }
      .d-md-inline-block {
    display: inline-block!important;
    color: white;
}
      .flex-md-row {
    flex-direction: row!important;
    background: black;
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

    </style>


    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
  </head>


  <body id="body">
    <div class="landing" id="threeSeconds">
      <img src="{{URL::asset('/Imagenes/gym riachuelo.png')}}" alt="logo" class="logo" id="logo">
    </div>

<header class="sticky-top">

  <nav>
  <section class="cont-menu2">
              <a href="registro.blade.php" class="toplinks">Registrate</a>
              <a href="" class="toplinks">Tienda</a>
              <a href="" class="toplinks">Inicia Sesion</a>
  </section>

      <input type="checkbox">
      <section class="cont-menu">
          <li>
              <a href="perfil.php" class="menubuttons">
              <i class="bi bi-person"></i> Mi Perfil</a>
              <a href="rutina.php" class="menubuttons">
              <i class="bi bi-newspaper"></i> Mi Rutina</a>
              <a href="compras.php" class="menubuttons">
              <i class="bi bi-bag-dash"></i> Mis Compras</a>
          </li>
      </section>
  </nav>
  </header>

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
                <a href="#" class="button">Comienza hoy</a>

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
                <a href="#" class="button">Comienza hoy</a>
                

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
                <a href="#" class="button">Comienza hoy</a>

            </div>
        </div>
    </div>
    </div>
    </main>
<br>
<style>
  .card{
    width: 300px;
    margin: 10px;
    transition: all 300ms;
    --bs-card-bg:transparent!important;
}
</style>
    <style>
      .division1{
        margin-right: 0px;
        margin-left: 0px;
        font-family: 'Titling Gothic FB Comp Bold', sans-serif;
        color: #1f1f1f;
        font-size: 20px;
        line-height: 30px;
        font-weight: 300;
        text-align: center;
        letter-spacing: 2px;
        text-decoration: none;
      }
      .button1 {
        position: relative;
        bottom: -600px;
        right: 1000px;
        background-color:#000000;
        border-radius:28px;
        border:1px solid #ffd500;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-family:Arial;
        font-size:17px;
        font-weight:bold;
        font-style:italic;
        padding:16px 31px;
        text-decoration:none;
        text-shadow:0px 1px 0px #ffd500;
        text-align: center;
    }
    .button1:hover {
        background-color:#ffd500;
    }
    .button1:active {
        position:relative;
        top:1px;
    }
    .right{
        text-align: center;
        position: relative;
        bottom: -150px;
        font-family:Arial,sans-serif;
        font-size:17px;
        font-weight:bold;

    }
    .imagen-flex{
        display: flex;
        position: relative;
        right: 30px;
      }
    </style>

     
<br>
    <div class="division1">
          <h2 class="cont1">Contamos con un equipo de profesionales, <span>expertos en entrenamiento y nutricion!</span></h2>
        <hr>
              <div class="imagen-flex"   style="z-index:-2;">
                  <img src="{{URL::asset('/Imagenes/bolt.png')}}" width="620" height="620" alt="">
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

    <style>
        .division2{
            display: flex;
            position: relative;
            align-content: center;
            margin-left:200px;
        }
        .cont1{
          width: 90%;
          font-family: 'Titling Gothic FB Comp Bold', sans-serif;
          color: #141619;
          font-size: 30px;
          font-weight: 300;
          font-weight:bold;
        }
.main-heading-websc.text-color-white {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 40%;
    margin-right: 0px;
    margin-bottom: 20px;
    margin-left: 10px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
    font-family: 'Titling Gothic FB Comp Bold', sans-serif;
    color: #141619;
    font-size: 60px;
    line-height: 65px;
    font-weight: 700;
    letter-spacing: 0em;
    text-transform: uppercase;
}

.main-heading-websc {
    margin-top: 0px;
    margin-bottom: 40px;
    color: #000;
    font-size: 50px;
    line-height: 60px;
    font-weight: 700;
    text-align: left;
    letter-spacing: -0.03em;
    text-decoration: none;
}
h1 {
    margin: 0px auto;
    color: #282828;
    font-size: 24px;
    line-height: 36px;
    font-weight: 500;
    text-align: center;
}
h1 {
    font-size: 38px;
    line-height: 44px;
    margin-top: 20px;
}
h1, h2, h3, h4, h5, h6 {
    font-weight: bold;
    margin-bottom: 10px;
}
h1 {
    font-size: 2em;
    margin: 0.67em 0;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
h1 {
    display: block;
    font-size: 2em;
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
.hero-desktop-websc {
    display: none;
    height: 90vh;
    max-height: 780px;
    padding-right: 60px;
    padding-left: 60px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}
.body-14 {
    background-color: #202128;
    font-family: Raleway, sans-serif;
}
body {
    position: static;
    overflow: visible;
    font-family: Roboto, sans-serif;
    color: #282828;
    font-size: 17px;
    line-height: 30px;
}
body {
    margin: 0;
    min-height: 100%;
    font-family: Arial,sans-serif;
    font-size: 14px;
    line-height: 20px;
    color: #333;
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
.div-block-229{
  position: relative;
  bottom: -35px;
  margin-left: 100px;
}
.text-size-big.text-color-white {
    width: 40%;
    color: #141619;
    position: relative;
    margin-bottom: 40px;
    text-align: right;
}
.text-size-big{
     margin-bottom: 40px;
    text-align: right;
}

</style>
                <div class="division2">
                    <img src="{{URL::asset('/Imagenes/atle21.png')}}" width="620" height="620" alt="">
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
  <footer class="container py-5 footer">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
      <small class="d-block mb-3 text-muted">&copy; 2015–2022</small>
    </div>
</footer>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="landing.js"></script>

</body>
