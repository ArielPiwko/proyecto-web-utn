<?php
$request = "hola";
$hostname = "127.0.0.1:3306";
$userDB = "root";
$passwordDB = "";
$schemaDB = "gymriachuelo";
$i = 0;
$k =0;
$conexionSQL = mysqli_connect($hostname, $userDB, $passwordDB, $schemaDB);
$resultado = mysqli_query($conexionSQL, "SELECT * FROM gymriachuelo.producto");
$unasFilas = mysqli_fetch_all($resultado);
?>

<html lang="en">
<head> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="productosstyle.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
     crossorigin="anonymous">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  

<style>body { background: linear-gradient(45deg, #000000, #65596e)!important;}

.button{
  display: inline-block ;
  background: #000000;
  color: #ffd500;
  width: 200px;
  height: 100px;
  text-transform: uppercase;
  padding: 40px 40px;
  border-radius: 5px;
  box-shadow: 0px 17px 10px -10px rgba(0, 0, 0, 0.4);
  cursor: pointer;
  -webkit-transition: all ease-in-out 300ms;
  transition: all ease-in-out 300ms;
  margin: 30px;
}
.button:hover {
  box-shadow: 0px 37px 20px -20px rgba(0, 0, 0, 0.2);
  -webkit-transform: translate(0px, -10px) scale(1.2);
          transform: translate(0px, -10px) scale(1.2);
}

.datos{
    background-color: rgb(26, 26, 26);
    height: 570px;
    width: 300px;
    float: right;
    text-align: center;
    margin-top: 15px;
    margin-right: 15px;
    border-radius: 15px;
    border: 3px solid rgb(255, 216, 43);
    color: #ffffff;
    background: linear-gradient(45deg, #000000, #585858)!important;
}

#caja{
    height: 700px;
    width: 1000px;
    background: rgb(20, 20, 20);
    margin: 0 auto;
    margin-top: 30px;
    border-radius: 20px;
    border: 3px solid black;
}
.img{
width: 550px;  
height: 550px;  
margin-top: 30px;
margin-left: 30px;
border-radius: 20px;
border: 5px solid rgb(117, 117, 117);
}
</style>
</head>

<body background-color:#33475b;>
@if(isset($usuario))
@include('header',['usuario' => $usuario->username, 'rol' => $usuario->rol])
@else
@include('header')
@endif
@yield('header')
<div id="caja">
<img class="img" src= "{{URL::asset($imagen->url)}}" alt="" />
  <div class="datos"> 
    <br><br>
    <b><h1><?php echo "$productos->nombre" ?></h1></b>
    <h3><?php echo "Precio: $".$productos->precio ?></h3>
    <br>
    <h3><?php echo "ID: ".$productos->idproducto ?></h3>
    <br><br>
    <h5><?php echo "Descripcion: ".$productos->descripcion ?></h3>
    <br><br><br>
    <!--<div class="btn btn-primary" id="btn_guardar">Comprar </div>-->
    <div class="button" id="btn_guardar">Comprar </div>
    <a style="font-size: 8pt; text-decoration: none" target="_blank"></a>
    <h5 style="color:#119400">Llega gratis <b>mañana</b></h5>
  </div>
</div>

<script>
$('#btn_guardar').click(function(){
  Swal.fire({
    background: '#65596e',    
    icon: 'success',
    title: "<h1 style='color:black'>Gracias por tu compra</h1>",
    html: true,
    showConfirmButton: false,
    timer: 1500
  })
  function volver(){
    location.href ="{{route('productos')}}";
}
setTimeout(volver, 1500);
}); 
</script>

</body>
</html>

<?php

mysqli_close($conexionSQL);

?>

