<!--pagina de login-->
<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="pantalla de login">
    <title>Iniciar Sesión</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<link rel="stylesheet" type="text/css" href="login.css"/>
<meta name="theme-color" content="#712cf9">

</head>


<body style="background:#8c8aa7">
<div class="route" id="welcome"></div>
<div id="app">
  <div class="app-view">  
    <header class="app-header" style=color:#ffc72e;>
      <h1 style=color:white;>Gym Riachuelo</h1>
      Bienvenido,<br/>
      <span class="app-subheading">
        inicia sesión <br/>
        para continuar.
      </span>
    </header>

        <input type="email" required pattern=".*\.\w{2,}" placeholder="Nombre de usuario" style=color:white;/>
        <input type="password" required placeholder="Contraseña" style=color:white;/>
       <!-- <a href="javascript:delay('/proyecto-web-utn/public/')" class="app-button">Iniciar Sesión</a>-->
       <a href="#welcome" class="app-button" id="botonInicio">Iniciar Sesión</a>

      <div class="app-register">
      ¿No tienes una cuenta? <a>Registrate</a>
    </div>

    <svg id="svg-lines" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 284.2 152.7" xml:space="preserve">
      <path class="st0" d="M37.7,107.3h222.6c12,0,21.8,9.7,21.8,21.7s-9.7,21.8-21.8,21.8c0,0-203.6,0-222.6,0S2.2,138.6,2.2,103.3   c0-52,113.5-101.5,141-101.5c13.5,0,21.8,9.7,21.8,21.8s-9.7,21.7-21.8,21.7s-21.8-9.7-21.8-21.7s9.7-21.8,21.8-21.8"/>
      <path class="st1" d="M260.2,76.3L250,87.8l-9-9c-6.2-6.2,2-24.7,17.2-24.7c15.2,0,23.9,17.7,23.9,29.7s-11.7,23.5-23.9,23.5h-10.2"></path>
      <g class="svg-loader" xmlns="http://www.w3.org/2000/svg">
        <path class="svg-loader-segment -cal" d="M164.7,23.5c0-12-9.7-21.8-21.8-21.8"/>
        <path class="svg-loader-segment -heart" d="M143,45.2c12,0,21.8-9.7,21.8-21.7"/>
        <path class="svg-loader-segment -steps" d="M121.2,23.5c0,12,9.7,21.7,21.8,21.7"/>
        <path class="svg-loader-segment -temp" d="M143,1.7c-12,0-21.8,9.7-21.8,21.8"/>
      </g>
    </svg>
  </div>
</div>

</body>

<script src="login.js"></script>

</html>