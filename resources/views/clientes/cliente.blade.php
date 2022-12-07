<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cliente.css') }}"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Gym Riachuelo</title>
</head>
<body>
@include('header')
@yield('header')
<section class="contentTable">
<h2 id="title">Editar Cliente</h2>

<!--@if(isset($errors) && $errors->any())
    <div>   
        <ul style="list-style-type: none;">
            @foreach($errors->all() as $error)
                <li style="color:red;">
                <i class="bi bi-exclamation-triangle"></i>
                 {{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif-->

<form role="form" @if(isset($cliente)) action="{{route('clientes.update', $cliente->id)}}" @else action="{{route('clientes.store')}}" @endif method="POST"  autocomplete="off">
<input type="hidden" name="_method" value="{{ isset($cliente) ? 'PUT' : 'POST' }}">
    @csrf

    <a href="{{ route('clientes.index') }}" class="box__button float-right" style="background:#a193ab!important; padding-top:10px; padding-bottom:10px;"> <span class="fa-duotone fa-angles-left"></span>< Volver </a>

    <div class="box" style="margin-top:20px";>
        <h1>Datos del Usuario</h1>
    </div>
    
    <div class="box">
        <label></label><input style=opacity:0%;pointer-events:none;>
    </div>

    <div class="box">
        <label>Username</label>
        <input type="text" name="username" class="inputdata"
        @if(isset($cliente)) value="{{$cliente->username}}" @endif 
        @if(!empty($errors->get('username'))) style="background-color:#d5a0a0!important;" @endif
        @if(!is_null(old('username'))) value="{{ old('username') }}" @endif>
        
        @if(!empty($errors->get('username'))) <div style="color:red;">
                <i class="bi bi-exclamation-triangle"></i>
                 {{$errors->get('username')[0]}}</div> @endif
    </div>


    <div class="box">
        <label>Nombre</label>
        <input type="text" name="nombre"  class="inputdata"
        @if(isset($cliente))  value="{{$cliente->nombre}}" @endif 
        @if(!empty($errors->get('nombre'))) style="background-color:#d5a0a0!important;" @endif
        @if(!is_null(old('nombre'))) value="{{ old('nombre') }}" @endif>

        @if(!empty($errors->get('nombre'))) <div style="color:red;">
                <i class="bi bi-exclamation-triangle"></i>
                 {{$errors->get('nombre')[0]}}</div> @endif
    </div>


    <div class="box">
        <label>Apellido</label>
        <input type="text" name="apellido"  class="inputdata"
        @if(isset($cliente))  value="{{$cliente->apellido}}" @endif 
        @if(!empty($errors->get('apellido'))) style="background-color:#d5a0a0!important;" @endif
        @if(!is_null(old('apellido'))) value="{{ old('apellido') }}" @endif>
        
        @if(!empty($errors->get('apellido'))) <div style="color:red;">
                <i class="bi bi-exclamation-triangle"></i>
                 {{$errors->get('apellido')[0]}}</div> @endif
    </div>


    <div class="box">
        <label>Email</label>
        <input type="text" name="email"  class="inputdata"
        @if(isset($cliente))  value="{{$cliente->email}}" @endif 
        @if(!is_null(old('email'))) value="{{ old('email') }}" @endif>
    </div>


    <div class="box">
        <label>Fecha de Nacimiento</label>
        <input type="date" name="fecha_de_nacimiento" class="inputdata" 
        @if(isset($cliente))  value="{{$cliente->fecha_de_nacimiento}}" @endif 
        @if(!is_null(old('fecha_de_nacimiento'))) value="{{ old('fecha_de_nacimiento') }}" @endif>
    </div>


    <div class="box">
        <label>Telefono</label>
        <input type="number" name="telefono" class="inputdata"
         @if(isset($cliente))  value="{{$cliente->telefono}}" @endif 
         @if(!is_null(old('telefono'))) value="{{ old('telefono') }}" @endif>
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
        <input type="date" name="fecha_de_ingreso" class="inputdata"
         @if(isset($cliente))  value="{{$cliente->fecha_de_ingreso}}" @endif 
         @if(!is_null(old('fecha_de_ingreso'))) value="{{ old('fecha_de_ingreso') }}" @endif>
    </div>


    <div class="box">
    <label>Tipo de Suscripcion</label>
    <select name="rango_de_suscripcion"  class="inputdata" @if(isset($cliente))  value="{{$cliente->rango_de_suscripcion}}" @endif>
        <option value="classic" @if(isset($cliente)) <?php if($cliente->rango_de_suscripcion=="classic") echo 'selected="selected"'; ?> @endif>Classic</option>
        <option value="pro" @if(isset($cliente)) <?php if($cliente->rango_de_suscripcion=="pro") echo 'selected="selected"'; ?> @endif>Pro </option>
        <option value="premium" @if(isset($cliente)) <?php if($cliente->rango_de_suscripcion=="premium") echo 'selected="selected"'; ?> @endif>Premium </option>
    </select>
    </div>


    <div class="box">
    <label>Periodo de Suscripcion</label>
    <select name="periodo" class="inputdata" @if(isset($cliente))  value="{{$cliente->periodo}}" @endif>
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
</section>
</body>
</html>