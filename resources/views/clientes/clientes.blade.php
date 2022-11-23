<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="clientes.css"/>
    <title>Listado de Clientes</title>
</head>
<body>
    <h2 id="title">Listado de Clientes</h2>
    
    <a href="{{ route('clientes.create') }}" class="box__button" id="botonCrear">Registrar Cliente</a>
    <br>

    <table>
        <br>
        <thead>
            <tr>
                <th>Nombre de usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Nacimiento</th>
                <th>E-mail</th>
                <th>Telefono</th>
                <th>Fecha de Ingreso</th>
                <th>Detalle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente) 
                <tr>
                    <td>{{$cliente->username}}</td>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->apellido}}</td>
                    <td>{{$cliente->fecha_de_nacimiento}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->fecha_de_ingreso}}</td>
                    <td> 
                        <a href="{{ route('clientes.show', $cliente->id) }}" class="box__button" style="background:#a193ab!important;"> Ver más </a>
                    </td>   
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>