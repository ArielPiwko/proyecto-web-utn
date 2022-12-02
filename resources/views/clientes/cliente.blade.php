<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../cliente.css"/>
    <title>Gym Riachuelo</title>
</head>
<body>

<h2 id="title">Editar Cliente</h2>

<form action="{{ route('clientes.store') }}" method="POST" autocomplete="off">
    @csrf
    
    
    <div class="box">
        <h1>Datos del Usuario</h1>
    </div>
    
    <div class="box">
        <label></label><input style=opacity:0%;pointer-events:none;>
    </div>

    <div class="box">
        <label>Username</label>
        <input type="text" name="username" @if(isset($cliente)) value="{{$cliente->username}}" @endif>
    </div>


    <div class="box">
        <label>Nombre</label>
        <input type="text" name="nombre" @if(isset($cliente))  value="{{$cliente->nombre}}" @endif>
    </div>


    <div class="box">
        <label>Apellido</label>
        <input type="text" name="apellido" @if(isset($cliente))  value="{{$cliente->apellido}}" @endif>
    </div>


    <div class="box">
        <label>Email</label>
        <input type="text" name="email" @if(isset($cliente))  value="{{$cliente->email}}" @endif>
    </div>


    <div class="box">
        <label>Fecha de Nacimiento</label>
        <input type="date" name="fecha_de_nacimiento" @if(isset($cliente))  value="{{$cliente->fecha_de_nacimiento}}" @endif>
    </div>


    <div class="box">
        <label>Telefono</label>
        <input type="number" name="telefono" @if(isset($cliente))  value="{{$cliente->telefono}}" @endif>
    </div>


    <div class="box">
        <label></label><input style=opacity:0%;>
    </div>


    <div class="box">
        <h1>Datos de la Suscripción</h1>
    </div>
    

    <div class="box">
        <label></label><input style=opacity:0%;pointer-events:none;>
    </div>


    <div class="box">
        <label>Fecha de Ingreso</label>
        <input type="date" name="fecha_de_ingreso" @if(isset($cliente))  value="{{$cliente->fecha_de_ingreso}}" @endif>
    </div>


    <div class="box">
    <label>Tipo de Suscripcion</label>
    <select name="rango_de_suscripcion" @if(isset($cliente))  value="{{$cliente->rango_de_suscripcion}}" @endif>
        <option value="classic" @if(isset($cliente)) <?php if($cliente->rango_de_suscripcion=="classic") echo 'selected="selected"'; ?> @endif>Classic</option>
        <option value="pro" @if(isset($cliente)) <?php if($cliente->rango_de_suscripcion=="pro") echo 'selected="selected"'; ?> @endif>Pro </option>
        <option value="premium" @if(isset($cliente)) <?php if($cliente->rango_de_suscripcion=="premium") echo 'selected="selected"'; ?> @endif>Premium </option>
    </select>
    </div>


    <div class="box">
    <label>Periodo de Suscripcion</label>
    <select name="periodo" @if(isset($cliente))  value="{{$cliente->periodo}}" @endif>
        <option value="1" @if(isset($cliente)) <?php if($cliente->periodo=="1") echo 'selected="selected"'; ?> @endif>1 mes</option>
        <option value="3" @if(isset($cliente)) <?php if($cliente->periodo=="3") echo 'selected="selected"'; ?> @endif>3 meses </option>
        <option value="6" @if(isset($cliente)) <?php if($cliente->periodo=="6") echo 'selected="selected"'; ?> @endif>6 meses</option>
        <option value="12" @if(isset($cliente)) <?php if($cliente->periodo=="12") echo 'selected="selected"'; ?> @endif>12 meses</option>
    </select>
    </div>


   <div class="box">
        <label></label><input style=opacity:0%;pointer-events:none;>
    </div>


    <div class="box">
        <button type="submit" class="box__button botonCrear" >Guardar cambios</button>
    </div>

</form>
</body>
</html>