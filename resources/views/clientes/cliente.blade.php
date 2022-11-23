<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Riachuelo</title>
</head>
<body>

<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    
    <div>
        <label>Username</label>
        <input type="text" name="username" @if(isset($cliente)) value="{{$cliente->username}}" @endif>
    </div>

    <br>

    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" @if(isset($cliente))  value="{{$cliente->nombre}}" @endif>
    </div>

    <br>

    <div>
        <label>Apellido</label>
        <input type="text" name="apellido" @if(isset($cliente))  value="{{$cliente->apellido}}" @endif>
    </div>

    <br>

    <div>
        <label>Email</label>
        <input type="text" name="email" @if(isset($cliente))  value="{{$cliente->email}}" @endif>
    </div>

    <br>

    <div>
        <label>Fecha de Nacimiento</label>
        <input type="text" name="fecha_de_nacimiento" @if(isset($cliente))  value="{{$cliente->fecha_de_nacimiento}}" @endif>
    </div>

    <br>

    <div>
        <label>Telefono</label>
        <input type="text" name="telefono" @if(isset($cliente))  value="{{$cliente->telefono}}" @endif>
    </div>

    <br>

    <div>
        <label>Fecha de Ingreso</label>
        <input type="text" name="fecha_de_ingreso" @if(isset($cliente))  value="{{$cliente->fecha_de_ingreso}}" @endif>
    </div>

    <br>

    <div>
        <label>Tipo de Suscripcion</label>
        <input type="text" name="rango_de_suscripcion" @if(isset($cliente))  value="{{$cliente->rango_de_suscripcion}}" @endif>
    </div>

    <br>

    <div>
        <label>Periodo de Suscripcion</label>
        <input type="text" name="periodo" @if(isset($cliente))  value="{{$cliente->periodo}}" @endif>
    </div>

    <br>

    <div>
        <button type="submit">Guardar cambios</button>
    </div>

</form>

</body>
</html>