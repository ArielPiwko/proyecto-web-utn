<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GymRiachuelo</title>

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rutina.css') }}">
  
</head>
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
  @if(isset($usuario))
@include('header',['usuario' => $usuario->username])
@else
@include('header')
@endif
@yield('header')
    
  
<style>
  .estados{
    position: relative;
    margin-left: 175px;
  }
  .pt-on{
    position: relative; 
    left: 2px;
    bottom: 39px;
    }
    *{margin: 0;padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;}
    
    .contenedor{
        width: 100%;
        display: flex;
        justify-content: center;
        height: 30vh;
    }
    .contenedor figure{
       position:relative;
        height: 250px;
        cursor: pointer;
        width: 350px;
        overflow: hidden;
        border-radius: 6px;
        box-shadow: 0px 15px 25px rgba(0,0,0,0.50);
    }
    .contenedor figure img{
        width: 100%;
        height: 100%;
        transition: all 400ms ease-out;
        will-change: transform;
    }
    .contenedor figure .capa{
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        background: #ffd500;
        transition: all 400ms ease-out;
        opacity: 0;
        visibility: hidden;
       text-align: center;
    }
    .contenedor figure:hover > .capa {
        opacity: 1;
        visibility: visible;
    }
    .contenedor figure:hover > .capa h3{
        margin-top: 70px;
        margin-bottom: 15px;
    }
    .contenedor figure:hover > img{
        transform: scale(1.3);
    }
    .contenedor figure .capa h3{
        color: rgb(5 5 5);
        font-weight: 400;
        margin-bottom: 120px;
        transition: all 400ms ease-out;
         margin-top: 30px;
    }
    .contenedor figure .capa p{
        color: rgb(5 5 5);
        font-size: 15px;
        line-height: 1.5;
        width: 100%;
        max-width: 220px;
        margin: auto;
    }
</style>
  <div class="estados">

    <span class="status online"></span>
    
    </div>

    <div class="pt-on">
    <p style="color:white;"> Estado Personal Trainer: </p>

  </div>
	<div class="contenedor">
  <a  href="{{route('lunes')}}">
            <figure>
            <img src="{{ asset('assets/img/gym.png') }}" style="object-fit: cover; width: 100%;" alt="">
                <div class="capa">
                    <h3>Lunes</h3>
                    <p>Los dias Lunes, realizaremos 3 ejercicios de pecho y 3 de triceps. De click aqui y vea los ejercicios</p>
                </div>
            </figure>
        </a>
        <i class="bi bi-arrow-left-square lefticons"></i>
        <h1>DIA LUNES</h1>
        </div>
        <div class="contenedor">
        <a  href="{{route('miercoles')}}">
            <figure>
            <img src="{{ asset('assets/img/gym.png') }}" style="object-fit: cover; width: 100%;" alt="">
                <div class="capa">
                    <h3>Miercoles</h3>
                    <p>Los dias Miercoles, realizaremos 3 ejercicios de espalda y 3 de biceps. De click aqui y vea los ejercicios</p>
                </div>
            </figure>
        </a>
        <i class="bi bi-arrow-left-square lefticons"></i>
        <h1>DIA MIERCOLES</h1>
        </div>
        <div class="contenedor">
        <a  href="{{route('viernes')}}">
            <figure>
            <img src="{{ asset('assets/img/gym.png') }}" style="object-fit: cover; width: 100%;" alt="">
                <div class="capa">
                    <h3>Viernes</h3>
                    <p>Los dias Viernes, realizaremos 3 ejercicios de piernas y 3 de hombros. De click aqui y vea los ejercicios</p>
                </div>
            </figure>
        </a>
        <i class="bi bi-arrow-left-square lefticons"></i>
        <h1>DIA VIERNES</h1>
        </div>
   



</body>
</html>