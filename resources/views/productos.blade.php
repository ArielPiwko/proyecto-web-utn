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
$resultado2 = mysqli_query($conexionSQL, "SELECT * FROM gymriachuelo.imagen");
$unasFilas2 = mysqli_fetch_all($resultado2);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="productosstyle.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    
</head>
<body id="colorheader">
    @include('header')
    @yield('header')

    <div id="colorheader" class="bg-secondary text-center" >
          <h1 id="nuestrosproductos" class="display-4 fw-normal ">Nuestros productos</h1>
    
        </div>
<div id="cards_landscape_wrap-2">
    <div class="container">
            <div class="row">  
             <?php foreach($unasFilas as $fila):
                $id = $fila[0] ?> 
                <div class="col-xs-4 col-sm-6 col-md-3 col-lg-3">
                    <a href="{{route('test_show', $id)}}">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <?php ; 
                                    $imagen= $unasFilas2[$i][1];?>
                                    <img src= "{{URL::asset($imagen)}}" alt="" />
                                </div>
                                <div class="text-container">      
                                  <h6><?php echo $fila[1]?></h6>
                                    <p>ID:<?php echo $fila[0]?> </p>
                                    <p>Precio: $<?php echo $fila[2]?> </p>
                                    <p>Nombre:<?php echo $fila[1]?> </p>
                                    <?php $i++;?>
                                  </div>
                            </div>
                        </div>
                    </a>
                </div>     
            <?php endforeach;?>
            </div>
        </div>
    </div>
    


</body>
</html>

<?php

mysqli_close($conexionSQL);

?>
