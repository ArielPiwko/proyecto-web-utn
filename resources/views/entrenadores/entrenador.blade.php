<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cliente.css') }}"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="{{ asset('assets/js/ignoreUsername.js') }}"></script>
    <title>Gym Riachuelo</title>
</head>
<body>
@if(isset($usuario))
@include('header',['usuario' => $usuario->username, 'rol' => $usuario->rol])
@else
@include('header')
@endif
@yield('header')
<section class="contentTable">
@if(isset($entrenador))   
<h2 id="title">Editar Entrenador</h2>
@else
<h2 id="title">Registrar nuevo Entrenador</h2>
@endif

<form role="form" id="my_form" @if(isset($entrenador)) action="{{route('entrenadores.update', $entrenador->id)}}" @else action="{{route('entrenadores.store')}}" @endif method="POST"  autocomplete="off">
<input type="hidden" name="_method" value="{{ isset($entrenador) ? 'PUT' : 'POST' }}">
    @csrf

    <a href="{{ route('entrenadores.index') }}" class="box__button float-right" style="background:#a193ab!important; padding-top:10px; padding-bottom:10px;"> <span class="fa-duotone fa-angles-left"></span>< Volver </a>

    <div class="box" style="margin-top:20px";>
        <h1>Datos del Entrenador Personal</h1>
    </div>
    
    <div class="box">
        <label></label><input style=opacity:0%;pointer-events:none;>
    </div>

    <div class="box">
        <label>Username</label>
        <input type="text" name="username" class="inputdata"
        @if(isset($entrenador)) value="{{$entrenador->username}}" readonly style="background-color:#b1b1b1!important" @endif 
        @if(!empty($errors->get('username'))) style="background-color:#d5a0a0!important;" @endif
        @if(!is_null(old('username'))) value="{{ old('username') }}" @endif>
        
        @if(!empty($errors->get('username'))) <div style="color:red;">
                <i class="bi bi-exclamation-triangle"></i>
                 {{$errors->get('username')[0]}}</div> @endif
    </div>


    <div class="box">
        <label>Nombre</label>
        <input type="text" name="nombre"  class="inputdata"
        @if(isset($entrenador))  value="{{$entrenador->nombre}}" @endif 
        @if(!empty($errors->get('nombre'))) style="background-color:#d5a0a0!important;" @endif
        @if(!is_null(old('nombre'))) value="{{ old('nombre') }}" @endif>

        @if(!empty($errors->get('nombre'))) <div style="color:red;">
                <i class="bi bi-exclamation-triangle"></i>
                 {{$errors->get('nombre')[0]}}</div> @endif
    </div>


    <div class="box">
        <label>Apellido</label>
        <input type="text" name="apellido"  class="inputdata"
        @if(isset($entrenador))  value="{{$entrenador->apellido}}" @endif 
        @if(!empty($errors->get('apellido'))) style="background-color:#d5a0a0!important;" @endif
        @if(!is_null(old('apellido'))) value="{{ old('apellido') }}" @endif>
        
        @if(!empty($errors->get('apellido'))) <div style="color:red;">
                <i class="bi bi-exclamation-triangle"></i>
                 {{$errors->get('apellido')[0]}}</div> @endif
    </div>


    <div class="box">
        <label>Email</label>
        <input type="text" name="email"  class="inputdata"
        @if(isset($entrenador))  value="{{$entrenador->email}}" @endif 
        @if(!is_null(old('email'))) value="{{ old('email') }}" @endif>
    </div>


    <div class="box">
        <label>Fecha de Nacimiento</label>
        <input type="date" name="fecha_de_nacimiento" class="inputdata" 
        @if(isset($entrenador))  value="{{$entrenador->fecha_de_nacimiento}}" @endif 
        @if(!is_null(old('fecha_de_nacimiento'))) value="{{ old('fecha_de_nacimiento') }}" @endif>
    </div>


    <div class="box">
        <label>Telefono</label>
        <input type="number" name="telefono" class="inputdata"
         @if(isset($entrenador))  value="{{$entrenador->telefono}}" @endif 
         @if(!is_null(old('telefono'))) value="{{ old('telefono') }}" @endif>
    </div>

    <div class="box">
        <label></label><input style=opacity:0%;pointer-events:none;>
    </div><br>
    <div style="margin-top:20px";>
        <h1>Datos del Contrato</h1>
    </div><br><br>

    <div class="box">
        <label>Salario</label>
        <input type="number" name="salario" class="inputdata"
         @if(isset($entrenador))  value="{{$entrenador->salario}}" @endif 
         @if(!empty($errors->get('salario'))) style="background-color:#d5a0a0!important;" @endif
         @if(!is_null(old('salario'))) value="{{ old('salario') }}" @endif>

         @if(!empty($errors->get('salario'))) <div style="color:red;">
                <i class="bi bi-exclamation-triangle"></i>
                 {{$errors->get('salario')[0]}}</div> @endif
    </div>
    
    <div class="box">
        <label>Fecha de Ingreso</label>
        <input type="date" name="fecha_ingreso" class="inputdata"
         @if(isset($entrenador))  value="{{$entrenador->fecha_ingreso}}" @endif 
         @if(!is_null(old('fecha_ingreso'))) value="{{ old('fecha_ingreso') }}" @endif>
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