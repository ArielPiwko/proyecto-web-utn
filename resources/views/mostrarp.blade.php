@extends("base")
@section("MostrarProducto")

<?php
$request = "hola";
$hostname = "127.0.0.1:3306";
$userDB = "root";
$passwordDB = "";
$schemaDB = "gimnasio";
$i = 0;
$k =0;
$conexionSQL = mysqli_connect($hostname, $userDB, $passwordDB, $schemaDB);
$resultado = mysqli_query($conexionSQL, "SELECT * FROM gimnasio.productos");
$filas = mysqli_query($conexionSQL, "SELECT count(idProductos) FROM productos;");
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
  

<style>body { background-color: #f8f9fa;}

.button {
  display: inline-block ;
  background: #4285f4;
  color: #fff;
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
    background-color: rgb(226, 226, 226);
    height: 570px;
    width: 300px;
    float: right;
    text-align: center;
    margin-top: 15px;
    margin-right: 15px;
    border-radius: 15px;
    border: 3px solid black;
}

#caja{
    height: 700px;
    width: 1000px;
    background: #ffffff;
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
}
</style>
</head>

<body background-color:#33475b;>
<div id="caja">
  <img class ="img" src= "<?php echo $productos->Imagen ?>"  alt="" />
  <div class="datos">
    <b><h1><?php echo "$productos->Nombre" ?></h1></b>
    <h3><?php echo "Precio: $".$productos->Precio ?></h3>
    <h3><?php echo "ID: ".$productos->idProductos ?></h3>
    <p><?php echo  "Descripcion: ".$productos->Descripcion?></p>
    <div class="button">Comprar</div><a style="font-size: 8pt; text-decoration: none" target="_blank" href="http://localhost/pagina/public/inicio"></a>
    <h5 style="color:#119400">Llega gratis <b>mañana</b></h5>

  </div>
</div>

</body>
</html>

<?php

mysqli_close($conexionSQL);

?>

@endsection