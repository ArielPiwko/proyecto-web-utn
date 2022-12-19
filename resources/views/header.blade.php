@section('header')



<style>
      input:checked ~ .cont-menu{
    display: block;
}
input:checked{
    background-image:url("{{ asset('assets/img/flecha.png') }}");
    transition: 0.8s;
}
      .inputHeader{
    appearance: none;
    background-image:url("{{ asset('assets/img/rayas.png') }}");
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

      @supports ((position: -webkit-sticky) or (position: sticky)) {
      .sticky-tops {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020;
      }
    }

    
    .toplinks{
        margin: 125px;
        color:#ffd500;
        text-decoration: underline;
        font-size: 16px;
    }

    .toplinks:hover{
        color:#ffffff;
    }

          
    .menubuttons{
        color:#ffffff;
        width:100%;
        height:100%;
        margin-left: 3px;
    }

    #menu ul, #menu li {
        margin: 0; padding: 0;
    }
    

    .menubuttons:hover{
        background-color: #463f45;
        transition: 0.2s;
    }

    
    header{
        z-index:100!important;
    }

    body {
    margin: 32px;
    position: static;
    overflow: visible;
    margin: 0;
    min-height: 100%;
    }

    .onlyAdmins{
      background-color: #ab8f00;
    }

    </style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

<header class="sticky-tops">
  <nav>
  <section class="cont-menu2">
              <a href="{{route('index')}}" class="toplinks" style="color:white;">
              <i class="bi bi-house"></i>Home</a>
              <a href="{{route('registro')}}" class="toplinks">Registrate</a>
              <a href="{{route('productos')}}" class="toplinks">Tienda</a>
              <a href="{{route('login')}}" class="toplinks">Inicia Sesion</a>
  </section>

      <input type="checkbox" class="inputHeader">
      <section class="cont-menu">
          <li>
              <a href="perfil.php" class="menubuttons">
                <i class="bi bi-person"></i> Mi Perfil</a>
              <a href="rutina.php" class="menubuttons">
                <i class="bi bi-newspaper"></i> Mi Rutina</a>
              <a href="compras.php" class="menubuttons">
                <i class="bi bi-bag-dash"></i> Mis Compras</a>
              <a href="{{ route('clientes.index') }}" class="menubuttons onlyAdmins">
                <i class="bi bi-card-list"></i> Ver Clientes</a>
                <a href="{{ route('profesores.index') }}" class="menubuttons onlyAdmins">
                <i class="bi bi-card-list"></i> Ver Profesores</a>
          </li>
      </section>
  </nav>
  </header>
</head>


@endsection