<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GymRiachuelo</title>

	<link rel="stylesheet" href="rutina.css">
  
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
    

<header class="sticky-top">

  <nav>
  <section class="cont-menu2">
              <a href="" class="toplinks">Inicio</a>
              <a href="" class="toplinks">Tienda</a>
              
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
  
<style>
  .estados{
    position: relative;
    left: 175px;
  }
  .pt-on{
    position: relative; 
    left: 2px;
    bottom: 39px;
    }
</style>
  <div class="estados">

    <span class="status online"></span>
    
    </div>

    <div class="pt-on">
    <p>Estado Personal Trainer: </p>

  </div>
	<div id="main-container">

		<table>
			<thead>
				<tr>
					<th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th>
				</tr>
			</thead>

			<tr>
				<td>Press Plano</td><td>Martillo</td><td>Sentadilla</td><td>Press Arnold</td><td>Tricep Polea</td>
			</tr>
			<tr>
				<td>Press Inclinado</td><td>Curl 21</td><td>Peso Muerto</td><td>Vuelos Laterales</td><td>Press Frances</td>
			</tr>
			<tr>
				<td>Peck Deck</td><td>Bicep Poleas</td><td>Maquina Gemelos</td><td>Vuelos Frontales</td><td>Fondos libres</td>
			</tr>
			<tr>
				<td>Flexiones de Brazo</td><td>Curl biceps</td><td>Maquina Isquios</td><td>Press Militar</td><td>Flexiones Tricep</td>
			</tr>
      
		</table>
	</div>



</body>
</html>